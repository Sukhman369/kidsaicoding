<?php

namespace App\Controllers;

use App\Models\UserModel;

class Setup extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        
        // Check if admin already exists
        $admin = $userModel->where('email', 'admin@kidsai.com')->first();
        
        $data = [
            'name'     => 'Admin',
            'email'    => 'admin@kidsai.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
            'role'     => 'admin',
            'status'   => 'active'
        ];

        if ($admin) {
            $userModel->update($admin['id'], $data);
            echo "<h3>Admin account UPDATED successfully!</h3><p>Email: <b>admin@kidsai.com</b><br>Password: <b>admin123</b></p>";
        } else {
            $userModel->insert($data);
            echo "<h3>Admin account CREATED successfully!</h3><p>Email: <b>admin@kidsai.com</b><br>Password: <b>admin123</b></p>";
        }
        
        echo '<a href="' . base_url('login') . '">Go to Login</a>';
    }
}
