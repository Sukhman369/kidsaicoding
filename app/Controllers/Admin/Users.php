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
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/dashboard')->with('error', 'Only super administrators have access to RBAC console.');
        }

        // Paginate users: 10 per page (excl. students/parents)
        $users = $this->userModel->whereIn('role', ['admin', 'super_admin', 'blogger', 'course_manager', 'trainer'])
                                 ->orderBy('created_at', 'DESC')
                                 ->paginate(10, 'users');

        $data = [
            'title' => 'User Management',
            'users' => $users,
            'pager' => $this->userModel->pager,
        ];
        return view('admin/users', $data);
    }

    public function store()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/dashboard')->with('error', 'Only super administrators have access to write/delete RBAC.');
        }

        $data = $this->request->getPost();
        $this->userModel->insert([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'role'     => $data['role'],
            'status'   => 'active'
        ]);

        return redirect()->to('/admin/users')->with('success', 'User created successfully.');
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/dashboard')->with('error', 'Only super administrators have access to write/delete RBAC.');
        }

        if ($id == session()->get('userId')) {
            return redirect()->to('/admin/users')->with('error', 'You cannot delete yourself.');
        }
        $this->userModel->delete($id);
        return redirect()->to('/admin/users')->with('success', 'User deleted successfully.');
    }
}
