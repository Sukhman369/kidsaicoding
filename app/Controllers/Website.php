<?php

namespace App\Controllers;

class Website extends BaseController
{
    public function courses()
    {
        return view('courses');
    }

    public function courseDetail($slug)
    {
        // For now, we just load the static detail view
        return view('course_detail');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
