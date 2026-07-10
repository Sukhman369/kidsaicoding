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
            'title' => 'Coding & AI Courses',
            'meta_description' => 'Explore Scratch coding, Game design, modern Web Development, Python algorithms, and hands-on AI courses custom designed for kids and teens.',
            'meta_keywords' => 'coding courses for kids, learn game design, python courses, artificial intelligence lessons',
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
            'title' => $course['title'],
            'meta_description' => esc(strip_tags($course['summary'] ?? $course['description'])),
            'meta_image' => $course['image_path'] ?? null,
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
            'title' => 'About Us',
            'meta_description' => 'Meet the passionate STEM educators, AI mentors, and engineering leads behind KidsAI Coding Academy.',
            'meta_keywords' => 'about kidsai, math tutors, robotics leads, programming instructors India',
            'team' => $team
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact Us',
            'meta_description' => 'Have questions about classes or curriculum? Direct message us, email, or request a call from our education counselors.',
            'meta_keywords' => 'kidsai support, contact coding school, curriculum queries, academy helpline'
        ]);
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
            'title' => 'Blog & resources',
            'meta_description' => 'Explore the latest articles, computational tutorials, and guides discussing kids programming, robotics, and STEM classrooms.',
            'meta_keywords' => 'stemed blog, python kids instructions, machine learning guides parents',
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

        // Clean meta description (limit tags and limit description size)
        $metaDesc = trim(strip_tags($blog['excerpt'] ?? $blog['content']));
        if (strlen($metaDesc) > 160) {
            $metaDesc = substr($metaDesc, 0, 157) . '...';
        }

        return view('blog_detail', [
            'title' => $blog['title'],
            'meta_description' => $metaDesc,
            'meta_image' => $blog['image_path'] ?? null,
            'blog' => $blog
        ]);
    }

    public function submitContactEnquiry()
    {
        $enquiryModel = new \App\Models\EnquiryModel();
        
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $message = $this->request->getPost('message');

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            return redirect()->back()->with('error', 'All fields are required.')->withInput();
        }

        $enquiryModel->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully! Our advisors will contact you shortly.');
    }

    public function subscribeNewsletter()
    {
        $newsletterModel = new \App\Models\NewsletterModel();
        
        $email = $this->request->getPost('email');
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('newsletter_error', 'Please enter a valid email address.');
        }

        // Check if already subscribed
        $existing = $newsletterModel->where('email', $email)->first();
        if ($existing) {
            return redirect()->back()->with('newsletter_success', 'You are already subscribed to our newsletter!');
        }

        $newsletterModel->insert([
            'email' => $email,
            'status' => 'subscribed'
        ]);

        return redirect()->back()->with('newsletter_success', 'Thank you for subscribing to our newsletter!');
    }

    public function careers()
    {
        $jobModel = new \App\Models\JobModel();
        $jobs = $jobModel->where('status', 'active')->orderBy('created_at', 'DESC')->findAll();

        return view('careers', [
            'title' => 'Careers | KidsAI Coding Academy',
            'meta_description' => 'Join our team of passionate educators, designers, and software engineers reshaping K-12 engineering education.',
            'jobs' => $jobs
        ]);
    }

    public function jobDetail($id)
    {
        $jobModel = new \App\Models\JobModel();
        $job = $jobModel->find($id);

        if (!$job || $job['status'] !== 'active') {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Job position not found");
        }

        return view('job_detail', [
            'title' => $job['title'] . ' | Careers',
            'meta_description' => 'Apply for the ' . $job['title'] . ' role in the ' . $job['department'] . ' department.',
            'job' => $job
        ]);
    }

    public function submitJobApplication()
    {
        $jobApplicationModel = new \App\Models\JobApplicationModel();
        $jobId = $this->request->getPost('job_id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $coverLetter = $this->request->getPost('cover_letter');

        if (empty($name) || empty($email) || empty($phone) || empty($jobId)) {
            return redirect()->back()->with('error', 'Please fill in all required fields.')->withInput();
        }

        // Handle resume file upload
        $resume = $this->request->getFile('resume');
        if (!$resume || !$resume->isValid() || $resume->hasMoved()) {
            return redirect()->back()->with('error', 'Please upload a valid resume document.')->withInput();
        }

        $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (!in_array($resume->getMimeType(), $allowedTypes)) {
            return redirect()->back()->with('error', 'Only PDF or Word documents (.pdf, .doc, .docx) are allowed for resumes.')->withInput();
        }

        if ($resume->getSizeByUnit('mb') > 5) {
            return redirect()->back()->with('error', 'Resume document file size cannot exceed 5MB.')->withInput();
        }

        $newName = $resume->getRandomName();
        // Ensure directory exists
        if (!is_dir(FCPATH . 'uploads/resumes')) {
            mkdir(FCPATH . 'uploads/resumes', 0755, true);
        }
        $resume->move(FCPATH . 'uploads/resumes', $newName);
        $resumePath = 'uploads/resumes/' . $newName;

        $jobApplicationModel->insert([
            'job_id' => $jobId,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'cover_letter' => $coverLetter,
            'resume_path' => $resumePath,
            'status' => 'pending'
        ]);

        return redirect()->to(base_url('careers'))->with('success', 'Your application has been submitted successfully. Thank you for your interest in joining KidsAI!');
    }
}
