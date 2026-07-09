<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        // Paginate users: 10 per page
        $users = $this->userModel->orderBy('created_at', 'DESC')->paginate(10, 'users');

        $data = [
            'title' => 'User Management',
            'users' => $users,
            'pager' => $this->userModel->pager,
        ];
        return view('admin/users', $data);
    }

    public function store()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['status'] = 'active';

        $this->userModel->insert($data);
        return redirect()->to('/admin/users')->with('success', 'User created successfully.');
    }

    public function delete($id)
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        if ($id == session()->get('userId')) {
            return redirect()->to('/admin/users')->with('error', 'You cannot delete yourself.');
        }
        $this->userModel->delete($id);
        return redirect()->to('/admin/users')->with('success', 'User deleted successfully.');
    }
}
