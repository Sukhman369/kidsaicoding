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
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Course creation failed. Did your uploaded banner or icon file exceed the server\'s upload size limits? Please try again with smaller .webp files.')->withInput();
        }
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

        // Handle Instructor Image Upload
        $instImg = $this->request->getFile('instructor_image');
        if ($instImg && $instImg->isValid() && !$instImg->hasMoved()) {
            if ($instImg->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp format is supported for Instructor Image.')->withInput();
            }
            
            $newName = $instImg->getRandomName();
            $instImg->move(FCPATH . 'uploads', $newName);
            $data['instructor_image'] = 'uploads/' . $newName;
        }

        $courseId = $this->courseModel->insert($data);

        // Store outcomes
        $outcomesText = $this->request->getPost('outcomes') ?? '';
        $outcomes = explode("\n", $outcomesText);
        foreach ($outcomes as $outcome) {
            $outcome = trim($outcome);
            if (!empty($outcome)) {
                $this->outcomeModel->insert([
                    'course_id' => $courseId,
                    'outcome_text' => $outcome
                ]);
            }
        }

        return redirect()->to('/admin/courses')->with('success', 'Course created successfully.');
    }


    public function edit($id)
    {
        $course = $this->courseModel->find($id);
        if (!$course) return redirect()->to('/admin/courses');

        $outcomes = $this->outcomeModel->where('course_id', $id)->findAll();
        $outcomesText = implode("\n", array_column($outcomes, 'outcome_text'));

        $data = [
            'title' => 'Edit Course',
            'course' => $course,
            'outcomes_text' => $outcomesText
        ];
        return view('admin/courses/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Course update failed. Did your uploaded banner or icon file exceed the server\'s upload size limits? Please try again with smaller .webp files.')->withInput();
        }
        
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

        // Handle Instructor Image Upload
        $instImg = $this->request->getFile('instructor_image');
        if ($instImg && $instImg->isValid() && !$instImg->hasMoved()) {
            if ($instImg->getMimeType() !== 'image/webp') {
                return redirect()->back()->with('error', 'Only .webp format is supported for Instructor Image.');
            }
            
            $newName = $instImg->getRandomName();
            $instImg->move(FCPATH . 'uploads', $newName);
            $data['instructor_image'] = 'uploads/' . $newName;
        }

        $this->courseModel->update($id, $data);

        // Update Outcomes
        $this->outcomeModel->where('course_id', $id)->delete();
        $outcomesText = $this->request->getPost('outcomes') ?? '';
        $outcomes = explode("\n", $outcomesText);
        foreach ($outcomes as $outcome) {
            $outcome = trim($outcome);
            if (!empty($outcome)) {
                $this->outcomeModel->insert([
                    'course_id' => $id,
                    'outcome_text' => $outcome
                ]);
            }
        }

        return redirect()->to('/admin/courses')->with('success', 'Course updated successfully.');
    }


    public function delete($id)
    {
        $this->courseModel->delete($id);
        return redirect()->to('/admin/courses')->with('success', 'Course deleted successfully.');
    }
}
