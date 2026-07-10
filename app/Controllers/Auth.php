<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $allowedRoles = ['admin', 'super_admin', 'blogger', 'course_manager', 'trainer'];
        if (session()->get('isLoggedIn') && in_array(session()->get('userRole'), $allowedRoles)) {
            return redirect()->to('/admin/dashboard');
        }
        return view('auth/login');
    }

    // Admin Login POST
    public function postLogin()
    {
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (empty($username) || empty($password)) {
            return redirect()->back()->with('error', 'Please submit both name and password.');
        }

        $user = $userModel->loginByName($username, $password);

        if ($user) {
            $allowedRoles = ['admin', 'super_admin', 'blogger', 'course_manager', 'trainer'];
            if (!in_array($user['role'], $allowedRoles)) {
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
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }

    // Student Login POST
    public function postStudentLogin()
    {
        $studentModel = new \App\Models\StudentModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'Please enter both email and password.')->withInput();
        }

        $student = $studentModel->login($email, $password);

        if ($student) {
            if ($student['status'] !== 'active') {
                return redirect()->back()->with('error', 'Your account is inactive.');
            }

            $sessionData = [
                'userId' => $student['id'],
                'userName' => $student['name'],
                'userEmail' => $student['email'],
                'userRole' => 'student',
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);

            if ($checkoutRedirect = session()->get('redirect_after_login')) {
                session()->remove('redirect_after_login');
                return redirect()->to($checkoutRedirect);
            }
            return redirect()->to('/student/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    // Student Register POST
    public function postStudentRegister()
    {
        $studentModel = new \App\Models\StudentModel();
        $firstName = $this->request->getPost('first_name');
        $lastName = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirm = $this->request->getPost('confirm_password');

        if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
            return redirect()->back()->with('error', 'All fields are required.')->withInput();
        }

        if ($password !== $confirm) {
            return redirect()->back()->with('error', 'Passwords do not match.')->withInput();
        }

        if ($studentModel->where('email', $email)->first()) {
            return redirect()->back()->with('error', 'This email address is already registered.')->withInput();
        }

        $data = [
            'name' => trim($firstName . ' ' . $lastName),
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'status' => 'active'
        ];

        if ($studentModel->insert($data)) {
            $insertedId = $studentModel->getInsertID();
            $sessionData = [
                'userId' => $insertedId,
                'userName' => $data['name'],
                'userEmail' => $data['email'],
                'userRole' => 'student',
                'isLoggedIn' => true,
            ];
            session()->set($sessionData);

            if ($checkoutRedirect = session()->get('redirect_after_login')) {
                session()->remove('redirect_after_login');
                return redirect()->to($checkoutRedirect)->with('success', 'Account created successfully! Proceeding to checkout.');
            }
            return redirect()->to('/student/dashboard')->with('success', 'Welcome to your learning portal!');
        } else {
            return redirect()->back()->with('error', 'Failed to register account. Please try again.')->withInput();
        }
    }

    public function logout()
    {
        $role = session()->get('userRole');
        $referer = $this->request->getServer('HTTP_REFERER') ?? '';

        // Clean out session variables explicitly
        session()->remove(['isLoggedIn', 'userRole', 'userId', 'userName', 'userEmail']);

        session()->destroy();

        if ($role === 'admin' || strpos($referer, '/admin') !== false) {
            return redirect()->to('/admin/login')->with('success', 'Logged out successfully.');
        }
        return redirect()->to('/login')->with('success', 'Logged out successfully.');
    }
}
