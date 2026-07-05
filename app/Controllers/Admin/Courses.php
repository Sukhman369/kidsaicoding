<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use App\Models\CourseOutcomeModel;

class Courses extends BaseController
{
    protected $courseModel;
    protected $outcomeModel;

    public function __construct()
    {
        $this->courseModel = new CourseModel();
        $this->outcomeModel = new CourseOutcomeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Manage Courses',
            'courses' => $this->courseModel->orderBy('order_index', 'ASC')->findAll()
        ];
        return view('admin/courses/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Add New Course'];
        return view('admin/courses/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $data['slug'] = url_title($data['title'], '-', true);
        
        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp images are allowed.')->withInput();
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            $data['image_path'] = 'uploads/' . $newName;
        }

        $this->courseModel->insert($data);
        return redirect()->to('/admin/courses')->with('success', 'Course created successfully.');
    }


    public function edit($id)
    {
        $course = $this->courseModel->find($id);
        if (!$course) return redirect()->to('/admin/courses');

        $data = [
            'title' => 'Edit Course',
            'course' => $course
        ];
        return view('admin/courses/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        
        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp images are allowed.');
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            $data['image_path'] = 'uploads/' . $newName;
        }

        $this->courseModel->update($id, $data);
        return redirect()->to('/admin/courses')->with('success', 'Course updated successfully.');
    }


    public function delete($id)
    {
        $this->courseModel->delete($id);
        return redirect()->to('/admin/courses')->with('success', 'Course deleted successfully.');
    }
}
