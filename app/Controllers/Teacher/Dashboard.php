<?php

namespace App\Controllers\Teacher;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('teacher/dashboard');
    }

    public function batches()
    {
        return view('teacher/batches');
    }

    public function reviews()
    {
        return view('teacher/reviews');
    }
}
