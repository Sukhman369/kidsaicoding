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
        $data = [
            'title' => 'User Management',
            'users' => $this->userModel->orderBy('created_at', 'DESC')->findAll()
        ];
        return view('admin/users', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $data['status'] = 'active';

        $this->userModel->insert($data);
        return redirect()->to('/admin/users')->with('success', 'User created successfully.');
    }

    public function delete($id)
    {
        if ($id == session()->get('userId')) {
            return redirect()->to('/admin/users')->with('error', 'You cannot delete yourself.');
        }
        $this->userModel->delete($id);
        return redirect()->to('/admin/users')->with('success', 'User deleted successfully.');
    }
}
