<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Bookings extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $bookings = $db->table('bookings')->orderBy('created_at', 'DESC')->get()->getResultArray();

        $data = [
            'title' => 'Manage Bookings',
            'bookings' => $bookings
        ];

        return view('admin/bookings', $data);
    }

    public function updateStatus($id)
    {
        $db = \Config\Database::connect();
        $status = $this->request->getPost('status');

        $db->table('bookings')->where('id', $id)->update(['status' => $status]);
        return redirect()->back()->with('success', 'Booking status updated.');
    }
}
