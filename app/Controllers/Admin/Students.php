<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Students extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        $userModel = new UserModel();

        // Paginate students: 10 per page
        $students = $userModel->where('role', 'student')
                             ->orderBy('created_at', 'DESC')
                             ->paginate(10, 'students');

        $data = [
            'title'    => 'Student Management',
            'students' => $students,
            'pager'    => $userModel->pager,
        ];

        return view('admin/students', $data);
    }
}
