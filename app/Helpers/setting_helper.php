<?php

use App\Models\SettingModel;

if (!function_exists('get_setting')) {
    /**
     * Get setting value by key.
     * Caches settings in static variable after first load.
     * 
     * @param string $key
     * @param string $default
     * @return string
     */
    function get_setting(string $key, string $default = ''): string
    {
        static $settings = null;
        if ($settings === null) {
            try {
                $settingModel = new SettingModel();
                $rawSettings = $settingModel->findAll();
                $settings = [];
                if ($rawSettings) {
                    foreach ($rawSettings as $s) {
                        $settings[$s['key']] = $s['value'];
                    }
                }
            } catch (\Exception $e) {
                $settings = [];
            }
        }
        return isset($settings[$key]) ? $settings[$key] : $default;
    }
}
