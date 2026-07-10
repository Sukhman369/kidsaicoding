<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JobModel;

class Jobs extends BaseController
{
    protected $jobModel;

    public function __construct()
    {
        $this->jobModel = new JobModel();
    }

    public function index()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $jobs = $this->jobModel->orderBy('created_at', 'DESC')->paginate(10, 'jobs');

        $data = [
            'title' => 'Careers & Jobs',
            'jobs'  => $jobs,
            'pager' => $this->jobModel->pager
        ];

        return view('admin/jobs/index', $data);
    }

    public function create()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        return view('admin/jobs/create', ['title' => 'Add Job Post']);
    }

    public function store()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $data = $this->request->getPost();
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify form values.')->withInput();
        }

        $this->jobModel->insert($data);
        return redirect()->to('/admin/jobs')->with('success', 'Job posting published successfully.');
    }

    public function edit($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $job = $this->jobModel->find($id);
        if (!$job) {
            return redirect()->to('/admin/jobs')->with('error', 'Job posting not found.');
        }

        $data = [
            'title' => 'Edit Job Post',
            'job'   => $job
        ];

        return view('admin/jobs/edit', $data);
    }

    public function update($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $job = $this->jobModel->find($id);
        if (!$job) {
            return redirect()->to('/admin/jobs')->with('error', 'Job posting not found.');
        }

        $data = $this->request->getPost();
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify form values.')->withInput();
        }

        $this->jobModel->update($id, $data);
        return redirect()->to('/admin/jobs')->with('success', 'Job posting updated successfully.');
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $job = $this->jobModel->find($id);
        if (!$job) {
            return redirect()->to('/admin/jobs')->with('error', 'Job posting not found.');
        }

        $this->jobModel->delete($id);
        return redirect()->to('/admin/jobs')->with('success', 'Job posting deleted successfully.');
    }
}
