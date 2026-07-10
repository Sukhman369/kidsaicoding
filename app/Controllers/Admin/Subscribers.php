<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NewsletterModel;

class Subscribers extends BaseController
{
    protected $newsletterModel;

    public function __construct()
    {
        $this->newsletterModel = new NewsletterModel();
    }

    public function index()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $subscribers = $this->newsletterModel->orderBy('created_at', 'DESC')->paginate(10, 'subscribers');

        $data = [
            'title'       => 'Newsletter Subscribers',
            'subscribers' => $subscribers,
            'pager'       => $this->newsletterModel->pager
        ];

        return view('admin/subscribers', $data);
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $subscriber = $this->newsletterModel->find($id);
        if (!$subscriber) {
            return redirect()->to('/admin/subscribers')->with('error', 'Subscriber not found.');
        }

        $this->newsletterModel->delete($id);
        return redirect()->to('/admin/subscribers')->with('success', 'Subscriber removed successfully.');
    }
}
