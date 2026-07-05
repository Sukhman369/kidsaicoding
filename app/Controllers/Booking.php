<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Booking extends BaseController
{
    public function index()
    {
        return view('booking/step1', ['title' => 'Book Your Free Demo']);
    }

    public function processStep1()
    {
        $session = session();
        $session->set([
            'temp_grade' => $this->request->getPost('grade'),
            'temp_date'  => $this->request->getPost('date'),
            'temp_time'  => $this->request->getPost('time'),
        ]);

        return redirect()->to('/book-free-class/confirm-booking');
    }


    public function step2()
    {
        if (!session()->has('temp_grade')) {
            return redirect()->to('/book-free-class');
        }
        return view('booking/step2', ['title' => 'Complete Your Booking']);
    }

    public function submit()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('bookings');

        $data = [
            'student_grade' => session()->get('temp_grade'),
            'booking_date'  => session()->get('temp_date'),
            'booking_time'  => session()->get('temp_time'),
            'parent_name'   => $this->request->getPost('parent_name'),
            'email'         => $this->request->getPost('email'),
            'phone'         => $this->request->getPost('phone'),
            'school_name'   => $this->request->getPost('school_name'),
            'city'          => $this->request->getPost('city'),
            'status'        => 'pending'
        ];

        $builder->insert($data);

        // Clear session
        session()->remove(['temp_grade', 'temp_date', 'temp_time']);

        return redirect()->to('/book-free-class/success');
    }

    public function success()
    {
        return view('booking/success', ['title' => 'Booking Successful']);
    }
}
