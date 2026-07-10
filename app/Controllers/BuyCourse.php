<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\PaymentModel;
use App\Models\UserModel;

class BuyCourse extends BaseController
{
    public function checkout($slug)
    {
        // 1. Guard check: User must be a logged-in student
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'student') {
            session()->set('redirect_after_login', current_url());
            return redirect()->to('/login')->with('error', 'Please login or register as a student to enroll in this course.');
        }

        // 2. Fetch Course Details
        $courseModel = new CourseModel();
        $course = $courseModel->where('slug', $slug)
                              ->where('status', 'published')
                              ->first();

        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Course not found");
        }

        // 3. Prevent duplicate active purchases
        $paymentModel = new PaymentModel();
        $existing = $paymentModel->where('user_id', session()->get('userId'))
                                 ->where('course_id', $course['id'])
                                 ->where('status', 'completed')
                                 ->first();
        if ($existing) {
             return redirect()->to('/student/dashboard')->with('error', 'You are already enrolled in ' . esc($course['title']) . '!');
        }

        // Render Checkout UI
        return view('checkout', [
            'title' => 'Secure Checkout - ' . esc($course['title']),
            'course' => $course,
            'student_name' => session()->get('userName'),
            'student_email' => session()->get('userEmail')
        ]);
    }

    public function process($courseId)
    {
        // 1. Guard check
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'student') {
            return redirect()->to('/login');
        }

        $courseModel = new CourseModel();
        $course = $courseModel->find($courseId);
        if (!$course) {
            return redirect()->back()->with('error', 'Selected course not found.');
        }

        $method = $this->request->getPost('payment_method');
        if (empty($method)) {
            return redirect()->back()->with('error', 'Please select a payment method.');
        }

        // Simulation parameters
        $status = 'completed'; // auto-complete payments inside our simulation
        $cardCvv = $this->request->getPost('cvv');
        if ($method === 'card' && $cardCvv === '999') {
            $status = 'failed'; // easily simulate failed transactions
        }

        $transactionId = 'TXN-' . strtoupper(bin2hex(random_bytes(6)));

        $paymentData = [
            'user_id' => session()->get('userId'),
            'course_id' => $course['id'],
            'amount' => $course['price'],
            'status' => $status,
            'payment_method' => $method === 'upi' ? 'UPI / QR Code' : 'Credit Card',
            'transaction_id' => $transactionId
        ];

        $paymentModel = new PaymentModel();
        if ($paymentModel->insert($paymentData)) {
            if ($status === 'failed') {
                return redirect()->to('/course/success/' . $transactionId)->with('error', 'Transaction Failed! Insufficient funds or invalid CVV.');
            }
            return redirect()->to('/course/success/' . $transactionId)->with('success', 'Congratulations! Course enrolled successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong writing payment invoice details. Please contact support.');
        }
    }

    public function success($transactionId)
    {
        // 1. Guard check
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'student') {
            return redirect()->to('/login');
        }

        $paymentModel = new PaymentModel();
        $payment = $paymentModel->select('payments.*, courses.title as course_title, courses.image_path as course_image, courses.badge as course_badge, courses.duration as course_duration')
                                ->join('courses', 'courses.id = payments.course_id')
                                ->where('payments.transaction_id', $transactionId)
                                ->where('payments.user_id', session()->get('userId'))
                                ->first();

        if (!$payment) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Payment record not found");
        }

        return view('purchase_success', [
            'title' => $payment['status'] === 'completed' ? 'Purchase Successful!' : 'Transaction Failed',
            'payment' => $payment,
            'student_name' => session()->get('userName')
        ]);
    }
}
