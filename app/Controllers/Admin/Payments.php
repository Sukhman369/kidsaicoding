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

        // Fetch payments with details
        $payments = $this->paymentModel->getPaymentsDetails();

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
            'totalRevenue'   => $totalRevenue,
            'completedCount' => $completedCount,
            'pendingCount'   => $pendingCount,
            'failedCount'    => $failedCount
        ];

        return view('admin/payments', $data);
    }
}
