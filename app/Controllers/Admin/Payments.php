<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PaymentModel;

class Payments extends BaseController
{
    protected $paymentModel;

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
    }

    public function index()
    {
        // Enforce admin validation checks
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        // Fetch paginated payments with details
        $payments = $this->paymentModel
                         ->select('payments.*, users.name as student_name, users.email as student_email, courses.title as course_title, courses.image_path as course_image')
                         ->join('users', 'users.id = payments.user_id')
                         ->join('courses', 'courses.id = payments.course_id')
                         ->orderBy('payments.created_at', 'DESC')
                         ->paginate(10, 'payments');

        // Calculate helper statistics
        $db = \Config\Database::connect();
        $totalRevenue = $db->table('payments')
                           ->where('status', 'completed')
                           ->selectSum('amount')
                           ->get()
                           ->getRow()
                           ->amount ?? 0.00;

        $completedCount = $db->table('payments')->where('status', 'completed')->countAllResults();
        $pendingCount   = $db->table('payments')->where('status', 'pending')->countAllResults();
        $failedCount    = $db->table('payments')->where('status', 'failed')->countAllResults();

        $data = [
            'title'          => 'Payment Transactions',
            'payments'       => $payments,
            'pager'          => $this->paymentModel->pager,
            'totalRevenue'   => $totalRevenue,
            'completedCount' => $completedCount,
            'pendingCount'   => $pendingCount,
            'failedCount'    => $failedCount
        ];

        return view('admin/payments', $data);
    }
}
