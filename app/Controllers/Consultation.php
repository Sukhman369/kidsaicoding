<?php

namespace App\Controllers;

use App\Models\ConsultationModel;

class Consultation extends BaseController
{
    public function index()
    {
        return view('website/consultation', [
            'title'            => 'Enterprise & Custom Setup Consultation',
            'meta_description' => 'Get expert consultation for deploying Kids AI Coding at your academy, school, or business. Custom white-labeling, hosting setup, and custom feature engineering.',
            'meta_keywords'    => 'open source edtech setup, white label coding academy, custom lms deployment, kids coding consultation'
        ]);
    }

    public function submit()
    {
        $consultationModel = new ConsultationModel();

        $name         = $this->request->getPost('name');
        $email        = $this->request->getPost('email');
        $phone        = $this->request->getPost('phone');
        $organization = $this->request->getPost('organization');
        $serviceType  = $this->request->getPost('service_type');
        $budget       = $this->request->getPost('budget');
        $message      = $this->request->getPost('message');

        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            return redirect()->back()->with('error', 'Please fill in all required fields (Name, Email, Phone, and Details).')->withInput();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Please enter a valid email address.')->withInput();
        }

        $consultationModel->insert([
            'name'         => $name,
            'email'        => $email,
            'phone'        => $phone,
            'organization' => $organization,
            'service_type' => $serviceType ?? 'custom_deployment',
            'budget'       => $budget,
            'message'      => $message,
            'status'       => 'new'
        ]);

        return redirect()->back()->with('success', 'Thank you for requesting consultation! Our technical solution architects will reach out to you within 24 hours.');
    }
}
