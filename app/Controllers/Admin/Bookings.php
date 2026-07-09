<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BookingModel;

class Bookings extends BaseController
{
    protected $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

    public function index()
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        // Paginate Bookings: 10 per page
        $bookings = $this->bookingModel->orderBy('created_at', 'DESC')->paginate(10, 'bookings');

        $data = [
            'title'    => 'Manage Bookings',
            'bookings' => $bookings,
            'pager'    => $this->bookingModel->pager,
        ];

        return view('admin/bookings', $data);
    }

    public function updateStatus($id)
    {
        if (!session()->get('isLoggedIn') || session()->get('userRole') !== 'admin') {
            return redirect()->to('/admin/login');
        }

        $status = $this->request->getPost('status');
        $this->bookingModel->update($id, ['status' => $status]);
        return redirect()->back()->with('success', 'Booking status updated.');
    }
}
