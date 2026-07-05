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

        $data = [
            'settings' => $settings,
            'courses'  => $courses
        ];

        return view('index', $data);
    }
}
