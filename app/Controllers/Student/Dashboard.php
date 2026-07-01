<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('student/dashboard');
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
