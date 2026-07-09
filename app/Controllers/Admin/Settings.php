<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SettingModel;

class Settings extends BaseController
{
    public function index()
    {
        $settingModel = new SettingModel();
        $rawSettings = $settingModel->findAll();
        $settings = [];
        foreach ($rawSettings as $s) {
            $settings[$s['key']] = $s['value'];
        }

        $data = [
            'title' => 'Site Settings',
            'settings' => $settings
        ];
        return view('admin/settings', $data);
    }


    public function update()
    {
        $settingModel = new SettingModel();
        $settings = $this->request->getPost('settings') ?? [];

        // Handle all file uploads programmatically
        $fileKeys = [
            'brand_logo' => ['prefix' => 'logo_', 'rules' => 'is_image[brand_logo]|mime_in[brand_logo,image/webp]'],
            'hero_image' => ['prefix' => 'hero_', 'rules' => 'is_image[hero_image]|mime_in[hero_image,image/webp]'],
            'mentor_section_image' => ['prefix' => 'mentor_', 'rules' => 'is_image[mentor_section_image]|mime_in[mentor_section_image,image/webp]'],
            'why_code_r1_image' => ['prefix' => 'why1_', 'rules' => 'is_image[why_code_r1_image]|mime_in[why_code_r1_image,image/webp]'],
            'why_code_r2_image' => ['prefix' => 'why2_', 'rules' => 'is_image[why_code_r2_image]|mime_in[why_code_r2_image,image/webp]'],
            'why_code_r3_image' => ['prefix' => 'why3_', 'rules' => 'is_image[why_code_r3_image]|mime_in[why_code_r3_image,image/webp]'],
        ];

        foreach ($fileKeys as $key => $config) {
            $file = $this->request->getFile($key);
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $validationRules = [
                    $key => [
                        'label' => ucwords(str_replace('_', ' ', $key)),
                        'rules' => $config['rules']
                    ]
                ];
                if ($this->validate($validationRules)) {
                    $newName = $config['prefix'] . $file->getRandomName();
                    $file->move(FCPATH . 'uploads', $newName);
                    $settingModel->updateSetting($key, 'uploads/' . $newName);
                } else {
                    $errorText = 'Invalid image format uploaded for ' . ucwords(str_replace('_', ' ', $key)) . '. Only WebP format (.webp) is allowed.';
                    return redirect()->back()->withInput()->with('error', $errorText);
                }
            }
        }

        // Save other textual settings
        foreach ($settings as $key => $value) {
            $settingModel->updateSetting($key, $value);
        }

        return redirect()->to('/admin/settings')->with('success', 'Settings updated successfully.');
    }
}
