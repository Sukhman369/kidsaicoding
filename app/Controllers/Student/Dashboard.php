<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $userEmail = session()->get('userEmail');
        $userId = session()->get('userId');

        // Fetch bookings/free trials matching this student email
        $bookings = [];
        if (!empty($userEmail)) {
            $bookings = $db->table('bookings')
                           ->where('email', $userEmail)
                           ->orderBy('booking_date', 'DESC')
                           ->get()
                           ->getResultArray();
        }

        // Fetch active courses to suggest/display on dashboard
        $courses = $db->table('courses')
                      ->where('status', 'published')
                      ->orderBy('order_index', 'ASC')
                      ->limit(3)
                      ->get()
                      ->getResultArray();

        // Fetch user's enrolled (purchased) courses
        $enrolledCourses = [];
        if (!empty($userId)) {
            $enrolledCourses = $db->table('payments')
                                  ->select('courses.*, payments.created_at as purchase_date')
                                  ->join('courses', 'courses.id = payments.course_id')
                                  ->where('payments.user_id', $userId)
                                  ->where('payments.status', 'completed')
                                  ->get()
                                  ->getResultArray();
        }

        $data = [
            'bookings' => $bookings,
            'courses' => $courses,
            'enrolledCourses' => $enrolledCourses,
            'student_name' => session()->get('userName') ?? 'Learner',
        ];

        return view('student/dashboard', $data);
    }

    public function myCourses()
    {
        $db = \Config\Database::connect();
        $userId = session()->get('userId');
        $enrolledCourses = [];
        if (!empty($userId)) {
            $enrolledCourses = $db->table('payments')
                                  ->select('courses.*, payments.created_at as purchase_date, payments.amount as purchase_amount')
                                  ->join('courses', 'courses.id = payments.course_id')
                                  ->where('payments.user_id', $userId)
                                  ->where('payments.status', 'completed')
                                  ->get()
                                  ->getResultArray();
        }

        return view('student/my_courses', [
            'enrolledCourses' => $enrolledCourses
        ]);
    }

    public function assignments()
    {
        return view('student/assignments');
    }

    public function profile()
    {
        return view('student/profile');
    }
}
