<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EnquiryModel;

class Enquiries extends BaseController
{
    protected $enquiryModel;

    public function __construct()
    {
        $this->enquiryModel = new EnquiryModel();
    }

    public function index()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $enquiries = $this->enquiryModel->orderBy('created_at', 'DESC')->paginate(10, 'enquiries');

        $data = [
            'title'     => 'Manage Enquiries',
            'enquiries' => $enquiries,
            'pager'     => $this->enquiryModel->pager
        ];

        return view('admin/enquiries', $data);
    }

    public function resolve($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $enquiry = $this->enquiryModel->find($id);
        if (!$enquiry) {
            return redirect()->to('/admin/enquiries')->with('error', 'Enquiry entry not found.');
        }

        $this->enquiryModel->update($id, ['status' => 'resolved']);
        return redirect()->to('/admin/enquiries')->with('success', 'Enquiry marked as resolved.');
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $enquiry = $this->enquiryModel->find($id);
        if (!$enquiry) {
            return redirect()->to('/admin/enquiries')->with('error', 'Enquiry entry not found.');
        }

        $this->enquiryModel->delete($id);
        return redirect()->to('/admin/enquiries')->with('success', 'Enquiry deleted successfully.');
    }
}
