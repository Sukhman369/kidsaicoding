<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BlogModel;

class Blogs extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
        helper(['url', 'text']);
    }

    public function index()
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $blogs = $this->blogModel->orderBy('created_at', 'DESC')->paginate(10, 'blogs');

        $data = [
            'title' => 'Blog Management',
            'blogs' => $blogs,
            'pager' => $this->blogModel->pager,
        ];
        return view('admin/blogs/index', $data);
    }

    public function create()
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $data = [
            'title' => 'Create Blog Post'
        ];
        return view('admin/blogs/create', $data);
    }

    public function store()
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $data = $this->request->getPost();
        
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify form data.')->withInput();
        }

        // Generate Slug
        $data['slug'] = url_title($data['title'], '-', true);
        
        // Ensure slug is unique
        $existing = $this->blogModel->where('slug', $data['slug'])->first();
        if ($existing) {
            $data['slug'] .= '-' . time();
        }

        // Auto-generate excerpt if empty
        if (empty($data['excerpt'])) {
            $data['excerpt'] = word_limiter(strip_tags($data['content']), 25);
        }

        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getSizeByUnit('mb') > 2) {
                return redirect()->back()->with('error', 'Image size cannot exceed 2MB.')->withInput();
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            $data['image_path'] = 'uploads/' . $newName;
        }

        // Author from session
        $data['author'] = session()->get('userName') ?? 'Admin';

        $this->blogModel->insert($data);
        return redirect()->to('/admin/blogs')->with('success', 'Blog post published successfully.');
    }

    public function edit($id)
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $blog = $this->blogModel->find($id);
        if (!$blog) {
            return redirect()->to('/admin/blogs')->with('error', 'Blog post not found.');
        }

        $data = [
            'title' => 'Edit Blog Post',
            'blog'  => $blog
        ];
        return view('admin/blogs/edit', $data);
    }

    public function update($id)
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $blog = $this->blogModel->find($id);
        if (!$blog) {
            return redirect()->to('/admin/blogs')->with('error', 'Blog post not found.');
        }

        $data = $this->request->getPost();
        
        if (empty($data) || !isset($data['title'])) {
            return redirect()->back()->with('error', 'Form submission failed. Please verify form data.')->withInput();
        }

        // Regenerate unique slug if title changed
        if ($data['title'] !== $blog['title']) {
            $data['slug'] = url_title($data['title'], '-', true);
            $existing = $this->blogModel->where('slug', $data['slug'])->where('id !=', $id)->first();
            if ($existing) {
                $data['slug'] .= '-' . time();
            }
        }

        // Auto-generate excerpt if empty
        if (empty($data['excerpt'])) {
            $data['excerpt'] = word_limiter(strip_tags($data['content']), 25);
        }

        // Handle Image Upload
        $img = $this->request->getFile('image');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            if ($img->getSizeByUnit('mb') > 2) {
                return redirect()->back()->with('error', 'Image size cannot exceed 2MB.')->withInput();
            }
            
            $newName = $img->getRandomName();
            $img->move(FCPATH . 'uploads', $newName);
            
            // Delete old file if exists
            if (!empty($blog['image_path']) && file_exists(FCPATH . $blog['image_path'])) {
                @unlink(FCPATH . $blog['image_path']);
            }
            
            $data['image_path'] = 'uploads/' . $newName;
        }

        $this->blogModel->update($id, $data);
        return redirect()->to('/admin/blogs')->with('success', 'Blog post updated successfully.');
    }

    public function delete($id)
    {
        $role = session()->get('userRole');
        $allowedRoles = ['admin', 'super_admin', 'blogger'];
        if (!session()->get('isLoggedIn') || !in_array($role, $allowedRoles)) {
            return redirect()->to('/admin/login');
        }

        $blog = $this->blogModel->find($id);
        if (!$blog) {
            return redirect()->to('/admin/blogs')->with('error', 'Blog post not found.');
        }

        // Delete associated image file
        if (!empty($blog['image_path']) && file_exists(FCPATH . $blog['image_path'])) {
            @unlink(FCPATH . $blog['image_path']);
        }

        $this->blogModel->delete($id);
        return redirect()->to('/admin/blogs')->with('success', 'Blog post deleted successfully.');
    }
}
