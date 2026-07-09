<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Students extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        $db = \Config\Database::connect();

        $students = $db->table('users')
            ->where('role', 'student')
            ->orderBy('created_at', 'DESC')
            ->get()
            ->getResultArray();

        $data = [
            'title'    => 'Student Management',
            'students' => $students,
        ];

        return view('admin/students', $data);
    }
}
