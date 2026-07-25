<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ConsultationModel;
use App\Models\TrainingRegistrationModel;

class Consultations extends BaseController
{
    protected ConsultationModel $consultationModel;
    protected TrainingRegistrationModel $trainingModel;

    public function __construct()
    {
        $this->consultationModel = new ConsultationModel();
        $this->trainingModel     = new TrainingRegistrationModel();
    }

    public function index()
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $consultations = $this->consultationModel->orderBy('created_at', 'DESC')->paginate(10, 'consultations');
        $trainings     = $this->trainingModel->orderBy('created_at', 'DESC')->paginate(10, 'trainings');

        $data = [
            'title'         => 'Monetization Requests (Consultations & Training)',
            'consultations' => $consultations,
            'trainings'     => $trainings,
            'consultationPager' => $this->consultationModel->pager,
            'trainingPager'     => $this->trainingModel->pager,
        ];

        return view('admin/consultations/index', $data);
    }

    public function updateStatus($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $status = $this->request->getPost('status');
        if ($this->consultationModel->find($id)) {
            $this->consultationModel->update($id, ['status' => $status]);
            return redirect()->back()->with('success', 'Consultation request status updated successfully.');
        }

        return redirect()->back()->with('error', 'Request record not found.');
    }

    public function updateTrainingStatus($id)
    {
        $role = session()->get('userRole');
        if (!session()->get('isLoggedIn') || !in_array($role, ['admin', 'super_admin'])) {
            return redirect()->to('/admin/login');
        }

        $status = $this->request->getPost('status');
        if ($this->trainingModel->find($id)) {
            $this->trainingModel->update($id, ['status' => $status]);
            return redirect()->back()->with('success', 'Training registration status updated successfully.');
        }

        return redirect()->back()->with('error', 'Training record not found.');
    }
}
