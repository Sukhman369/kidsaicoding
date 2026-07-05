<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }
        return view('auth/login');
    }

    public function postLogin()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->login($email, $password);

        if ($user) {
            if ($user['role'] !== 'admin') {
                return redirect()->back()->with('error', 'Unauthorized access.');
            }

            $sessionData = [
                'userId' => $user['id'],
                'userName' => $user['name'],
                'userEmail' => $user['email'],
                'userRole' => $user['role'],
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

}
