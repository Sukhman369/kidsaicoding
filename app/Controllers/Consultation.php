<?php

namespace App\Controllers;

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

        // Direct Transmission to Platform Founder/Owner Central Email
        $recipientEmail = env('PLATFORM_CENTRAL_EMAIL', '888sukhmn@gmail.com');

        $emailBody  = "New Enterprise Consultation Request:\n\n";
        $emailBody .= "Name: {$name}\n";
        $emailBody .= "Email: {$email}\n";
        $emailBody .= "Phone: {$phone}\n";
        $emailBody .= "Organization: {$organization}\n";
        $emailBody .= "Service Requested: {$serviceType}\n";
        $emailBody .= "Budget Range: {$budget}\n\n";
        $emailBody .= "Details:\n{$message}\n";

        try {
            $emailService = \Config\Services::email();
            $emailService->setTo($recipientEmail);
            $emailService->setFrom('no-reply@kidsaicoding.com', 'Kids AI Coding Platform');
            $emailService->setSubject("🚀 Enterprise Consultation Request from {$name}");
            $emailService->setMessage($emailBody);
            @$emailService->send();
        } catch (\Throwable $e) {
            // Silently handle if local mail server is not configured
        }

        return redirect()->back()->with('success', 'Thank you for requesting enterprise consultation! Our technical solution architects will reach out to you at ' . esc($email) . ' within 24 hours.');
    }
}
