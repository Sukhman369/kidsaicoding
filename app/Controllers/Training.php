<?php

namespace App\Controllers;

use App\Models\TrainingRegistrationModel;

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
        $trainingModel = new TrainingRegistrationModel();

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

        $trainingModel->insert([
            'full_name'        => $fullName,
            'email'           => $email,
            'phone'           => $phone,
            'role'            => $role ?? 'teacher',
            'experience_years' => $experienceYears,
            'program_type'    => $programType ?? 'certification',
            'notes'           => $notes,
            'status'          => 'pending'
        ]);

        return redirect()->back()->with('success', 'Your registration for the Kids AI Coding Educator Certification has been received! We will send you the training schedule shortly.');
    }
}
