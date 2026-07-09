<?php

namespace App\Controllers;

class Website extends BaseController
{
    public function courses()
    {
        $courseModel = new \App\Models\CourseModel();
        $courses = $courseModel->where('status', 'published')
                               ->orderBy('order_index', 'ASC')
                               ->findAll();

        return view('courses', [
            'courses' => $courses
        ]);
    }

    public function courseDetail($slug)
    {
        $courseModel = new \App\Models\CourseModel();
        $course = $courseModel->where('slug', $slug)
                              ->where('status', 'published')
                              ->first();
                              
        if (!$course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Course not found");
        }

        $outcomeModel = new \App\Models\CourseOutcomeModel();
        $outcomes = $outcomeModel->where('course_id', $course['id'])->findAll();

        return view('course_detail', [
            'course' => $course,
            'outcomes' => $outcomes
        ]);
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
