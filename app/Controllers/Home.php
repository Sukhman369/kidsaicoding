<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    public function index(): string
    {
        $courseModel = new CourseModel();
        $settingModel = new SettingModel();

        // Get Settings as associative array
        $rawSettings = $settingModel->findAll();
        $settings = [];
        foreach ($rawSettings as $s) {
            $settings[$s['key']] = $s['value'];
        }

        // Get Published Courses
        $courses = $courseModel->where('status', 'published')
                               ->orderBy('order_index', 'ASC')
                               ->findAll();

        // Get Team Members
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

        $data = [
            'settings' => $settings,
            'courses'  => $courses,
            'team'     => array_slice($team, 0, 3) // Homepage only shows 3 team members
        ];

        return view('index', $data);
    }
}
