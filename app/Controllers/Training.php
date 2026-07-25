<?php

namespace App\Controllers;

class Training extends BaseController
{
    public function index()
    {
        return view('website/training', [
            'title'            => 'Teacher & Academy Training Certification',
            'meta_description' => 'Become a certified Kids AI Coding instructor or empower your academy staff with cutting-edge curriculum in AI, Scratch, Python, and Robotics.',
            'meta_keywords'    => 'coding teacher training, certified ai instructor, stem educator workshop, academy teacher certification'
        ]);
    }

    public function submit()
    {
        $fullName        = $this->request->getPost('full_name');
        $email           = $this->request->getPost('email');
        $phone           = $this->request->getPost('phone');
        $role            = $this->request->getPost('role');
        $experienceYears = $this->request->getPost('experience_years');
        $programType     = $this->request->getPost('program_type');
        $notes           = $this->request->getPost('notes');

        if (empty($fullName) || empty($email) || empty($phone)) {
            return redirect()->back()->with('error', 'Please fill in all mandatory contact fields (Full Name, Email, and Phone).')->withInput();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please provide a valid email address.')->withInput();
        }

        // Direct Transmission to Platform Founder/Owner Central Email
        $recipientEmail = env('PLATFORM_CENTRAL_EMAIL', '888sukhman@gmail.com');

        $emailBody  = "New Teacher Training Registration:\n\n";
        $emailBody .= "Full Name: {$fullName}\n";
        $emailBody .= "Email: {$email}\n";
        $emailBody .= "Phone: {$phone}\n";
        $emailBody .= "Role: {$role}\n";
        $emailBody .= "Experience: {$experienceYears}\n";
        $emailBody .= "Program Preference: {$programType}\n\n";
        $emailBody .= "Notes:\n{$notes}\n";

        try {
            $emailService = \Config\Services::email();
            $emailService->setTo($recipientEmail);
            $emailService->setFrom('no-reply@kidsaicoding.com', 'Kids AI Coding Platform');
            $emailService->setSubject("🎓 Teacher Training Application from {$fullName}");
            $emailService->setMessage($emailBody);
            @$emailService->send();
        } catch (\Throwable $e) {
            // Silently handle if mail is unconfigured locally
        }

        return redirect()->back()->with('success', 'Your registration for the Kids AI Coding Educator Certification has been received! We will send you the training schedule at ' . esc($email) . ' shortly.');
    }
}
