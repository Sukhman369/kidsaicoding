<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $userEmail = session()->get('userEmail');

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
                      ->where('status', 'active')
                      ->orderBy('order_index', 'ASC')
                      ->limit(3)
                      ->get()
                      ->getResultArray();

        $data = [
            'bookings' => $bookings,
            'courses' => $courses,
            'student_name' => session()->get('userName') ?? 'Learner',
        ];

        return view('student/dashboard', $data);
    }

    public function myCourses()
    {
        return view('student/my_courses');
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
