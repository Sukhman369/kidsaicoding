<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();

        // ── Real-time KPI statistics ──

        // Total demo bookings
        $totalBookings = $db->table('bookings')->countAllResults();
        $pendingBookings = $db->table('bookings')->where('status', 'pending')->countAllResults();
        $confirmedBookings = $db->table('bookings')->where('status', 'confirmed')->countAllResults();

        // Registered students
        $totalStudents = $db->table('users')->where('role', 'student')->countAllResults();

        // Revenue: sum of price from confirmed/attended bookings that have a linked course
        // For now, count confirmed bookings * avg course price as estimated revenue
        $totalRevenue = 0;
        $avgPrice = $db->table('courses')->selectAvg('price')->get()->getRow();
        if ($avgPrice && $avgPrice->price) {
            $attendedBookings = $db->table('bookings')->where('status', 'attended')->countAllResults();
            $totalRevenue = $attendedBookings * (float) $avgPrice->price;
        }

        // Latest 5 bookings for the activity feed
        $recentBookings = $db->table('bookings')
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->get()
            ->getResultArray();

        // Latest 5 students
        $recentStudents = $db->table('users')
            ->where('role', 'student')
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
