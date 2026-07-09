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
        $teamModel = new \App\Models\TeamMemberModel();
        $team = $teamModel->orderBy('order_index', 'ASC')->orderBy('id', 'ASC')->findAll();

        if (empty($team)) {
            $teamModel->insert([
                'name' => 'Gaurav',
                'role' => 'Founder & Lead Mentor',
                'bio' => 'Passionate educator with 10+ years of experience teaching AI, Python and Robotics to young innovators.',
                'image_path' => null,
                'order_index' => 1
            ]);
            $teamModel->insert([
                'name' => 'Rupali',
                'role' => 'Head of Curriculum',
                'bio' => 'Expert in STEM education with focus on project-based learning and interactive student engagement.',
                'image_path' => null,
                'order_index' => 2
            ]);
            $teamModel->insert([
                'name' => 'Manish',
                'role' => 'Senior AI Mentor',
                'bio' => 'Tech professional with background in Machine Learning, dedicated to making complex AI concepts simple.',
                'image_path' => null,
                'order_index' => 3
            ]);
            $team = $teamModel->orderBy('order_index', 'ASC')->orderBy('id', 'ASC')->findAll();
        }

        return view('about', [
            'team' => $team
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        if (session()->get('isLoggedIn') && session()->get('userRole') === 'student') {
            return redirect()->to('/student/dashboard');
        }
        return view('login');
    }

    public function register()
    {
        if (session()->get('isLoggedIn') && session()->get('userRole') === 'student') {
            return redirect()->to('/student/dashboard');
        }
        return view('register');
    }

    public function blogs()
    {
        $blogModel = new \App\Models\BlogModel();
        $blogs = $blogModel->where('status', 'published')
                           ->orderBy('created_at', 'DESC')
                           ->findAll();

        return view('blogs', [
            'blogs' => $blogs
        ]);
    }

    public function blogDetail($slug)
    {
        $blogModel = new \App\Models\BlogModel();
        $blog = $blogModel->where('slug', $slug)
                          ->where('status', 'published')
                          ->first();
                          
        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Blog post not found");
        }

        return view('blog_detail', [
            'blog' => $blog
        ]);
    }
}
