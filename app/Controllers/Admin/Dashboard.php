<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Admin Dashboard',
            'userName' => session()->get('userName')
        ];

        return view('admin/dashboard', $data);
    }
}
