<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger', 'course_manager', 'trainer'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $db = \Config\Database::connect();

        // ── Real-time KPI statistics ──

        // Total demo bookings
        $totalBookings = $db->table('bookings')->countAllResults();
        $pendingBookings = $db->table('bookings')->where('status', 'pending')->countAllResults();
        $confirmedBookings = $db->table('bookings')->where('status', 'confirmed')->countAllResults();

        // Registered students
        $totalStudents = $db->table('students')->countAllResults();

        // Revenue: Sum of received payments (where status is completed)
        $totalRevenue = $db->table('payments')
                           ->where('status', 'completed')
                           ->selectSum('amount')
                           ->get()
                           ->getRow()
                           ->amount ?? 0.00;

        // Latest 5 bookings for the activity feed
        $recentBookings = $db->table('bookings')
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Latest 5 students
        $recentStudents = $db->table('students')
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        $data = [
            'title'             => 'Admin Dashboard',
            'userName'          => session()->get('userName'),
            'totalBookings'     => $totalBookings,
            'pendingBookings'   => $pendingBookings,
            'confirmedBookings' => $confirmedBookings,
            'totalStudents'     => $totalStudents,
            'totalRevenue'      => $totalRevenue,
            'recentBookings'    => $recentBookings,
            'recentStudents'    => $recentStudents,
        ];

        return view('admin/dashboard', $data);
    }
}
