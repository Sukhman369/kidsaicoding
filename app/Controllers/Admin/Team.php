<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TeamMemberModel;

class Team extends BaseController
{
    protected $teamModel;

    public function __construct()
    {
        $this->teamModel = new TeamMemberModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Team Management',
            'team' => $this->teamModel->orderBy('order_index', 'ASC')->orderBy('id', 'ASC')->findAll()
        ];
        return view('admin/team/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Team Member'
        ];
        return view('admin/team/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        
        if (empty($data) || !isset($data['name'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify that uploaded image file size is within limits.')->withInput();
        }

        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp format is supported for Team Member image.')->withInput();
            }
            if ($img->getSizeByUnit('mb') > 2) {
                return redirect()->back()->with('error', 'Image size cannot exceed 2MB.')->withInput();
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            $data['image_path'] = 'uploads/' . $newName;
        }

        $this->teamModel->insert($data);
        return redirect()->to('/admin/team')->with('success', 'Team member added successfully.');
    }

    public function edit($id)
    {
        $member = $this->teamModel->find($id);
        if (!$member) {
            return redirect()->to('/admin/team')->with('error', 'Team member not found.');
        }

        $data = [
            'title' => 'Edit Team Member',
            'member' => $member
        ];
        return view('admin/team/edit', $data);
    }

    public function update($id)
    {
        $member = $this->teamModel->find($id);
        if (!$member) {
            return redirect()->to('/admin/team')->with('error', 'Team member not found.');
        }

        $data = $this->request->getPost();
        
        if (empty($data) || !isset($data['name'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify that uploaded image file size is within limits.')->withInput();
        }

        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp format is supported for Team Member image.')->withInput();
            }
            if ($img->getSizeByUnit('mb') > 2) {
                return redirect()->back()->with('error', 'Image size cannot exceed 2MB.')->withInput();
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            
            // Delete old file if exists
            if (!empty($member['image_path']) && file_exists(FCPATH . $member['image_path'])) {
                @unlink(FCPATH . $member['image_path']);
            }
            
            $data['image_path'] = 'uploads/' . $newName;
        }

        $this->teamModel->update($id, $data);
        return redirect()->to('/admin/team')->with('success', 'Team member updated successfully.');
    }

    public function delete($id)
    {
        $member = $this->teamModel->find($id);
        if (!$member) {
            return redirect()->to('/admin/team')->with('error', 'Team member not found.');
        }

        // Delete associated image file
        if (!empty($member['image_path']) && file_exists(FCPATH . $member['image_path'])) {
            @unlink(FCPATH . $member['image_path']);
        }

        $this->teamModel->delete($id);
        return redirect()->to('/admin/team')->with('success', 'Team member deleted successfully.');
    }
}
