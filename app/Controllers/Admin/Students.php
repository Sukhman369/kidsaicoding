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

        $studentModel = new \App\Models\StudentModel();

        // Paginate students: 10 per page
        $students = $studentModel->orderBy('created_at', 'DESC')
                                 ->paginate(10, 'students');

        $data = [
            'title'    => 'Student Management',
            'students' => $students,
            'pager'    => $studentModel->pager,
        ];

        return view('admin/students', $data);
    }
}
