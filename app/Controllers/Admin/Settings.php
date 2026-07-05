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
        $settings = $this->request->getPost('settings');

        foreach ($settings as $key => $value) {
            $settingModel->updateSetting($key, $value);
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
