<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\JobApplicationModel;

class Applicants extends BaseController
{
    protected $jobApplicationModel;

    public function __construct()
    {
        $this->jobApplicationModel = new JobApplicationModel();
    }

    public function index()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $applicants = $this->jobApplicationModel
                           ->select('job_applications.*, jobs.title as job_title, jobs.department as job_dept')
                           ->join('jobs', 'jobs.id = job_applications.job_id', 'left')
                           ->orderBy('job_applications.created_at', 'DESC')
                           ->paginate(10, 'applicants');

        $data = [
            'title'      => 'Job Applications',
            'applicants' => $applicants,
            'pager'      => $this->jobApplicationModel->pager
        ];

        return view('admin/applicants', $data);
    }

    public function updateStatus($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $applicant = $this->jobApplicationModel->find($id);
        if (!$applicant) {
            return redirect()->to('/admin/applicants')->with('error', 'Applicant not found.');
        }

        $status = $this->request->getPost('status');
        $validStatuses = ['pending', 'reviewed', 'shortlisted', 'rejected'];

        if (!in_array($status, $validStatuses)) {
            return redirect()->to('/admin/applicants')->with('error', 'Invalid status selected.');
        }

        $this->jobApplicationModel->update($id, ['status' => $status]);
        return redirect()->to('/admin/applicants')->with('success', 'Application status updated to ' . ucfirst($status) . '.');
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $applicant = $this->jobApplicationModel->find($id);
        if (!$applicant) {
            return redirect()->to('/admin/applicants')->with('error', 'Applicant not found.');
        }

        // Delete associated resume file safely
        if (!empty($applicant['resume_path']) && file_exists(FCPATH . $applicant['resume_path'])) {
            @unlink(FCPATH . $applicant['resume_path']);
        }

        $this->jobApplicationModel->delete($id);
        return redirect()->to('/admin/applicants')->with('success', 'Application record and resume deleted.');
    }
}
