<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Management | Admin | KidsAI</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/portal.css') ?>">
</head>
<body>
<div class="portal-layout">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div style="width:32px;height:32px;background:var(--primary);border-radius:6px;margin-bottom:8px;"></div>
            <span>KidsAI Admin</span>
        </div>

        <ul class="sidebar-nav">
            <li><a href="<?= base_url('admin/dashboard') ?>">🏠 <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('admin/courses') ?>">📚 <span>Courses</span></a></li>
            <li><a href="<?= base_url('admin/blogs') ?>" class="active">✍️ <span>Blogs</span></a></li>
            <li><a href="<?= base_url('admin/users') ?>">👥 <span>Users</span></a></li>
            <li><a href="<?= base_url('admin/settings') ?>">⚙️ <span>Settings</span></a></li>
        </ul>
    </aside>

    <!-- Main -->
    <main class="main-content">

        <!-- Top Bar -->
        <div class="topbar-card d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0">Blog Management</h1>
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-primary d-flex align-items-center gap-2">
                    <span>➕</span> New Post
                </button>
                <div style="width:40px;height:40px;border-radius:10px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;">AD</div>
            </div>
        </div>

        <!-- Filters -->
        <div class="row g-3 mb-4 mt-2">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="🔍 Search posts...">
            </div>
            <div class="col-md-2">
                <select class="form-select text-muted small">
                    <option>All Categories</option>
                    <option>Python Tips</option>
                    <option>Career Guidance</option>
                </select>
            </div>
        </div>

        <!-- Data Card -->
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">All Blog Posts <span class="text-muted small fw-normal ms-2">(12 total)</span></h2>
            
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-muted small text-uppercase">
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="fw-bold">10 Reasons Why Kids Should Learn Python</div></td>
                            <td>Python Tips</td>
                            <td>Priya Sharma</td>
                            <td><span class="badge badge-soft-success">Published</span></td>
                            <td>Jun 20, 2026</td>
                            <td>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-secondary text-decoration-none fw-bold small">Edit</a>
                                    <a href="#" class="text-danger text-decoration-none fw-bold small">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><div class="fw-bold">A Parent's Guide to Coding Education</div></td>
                            <td>Parenting</td>
                            <td>Admin</td>
                            <td><span class="badge badge-soft-info">Draft</span></td>
                            <td>—</td>
                            <td>
                                <div class="d-flex gap-3">
                                    <a href="#" class="text-secondary text-decoration-none fw-bold small">Edit</a>
                                    <a href="#" class="text-primary text-decoration-none fw-bold small">Publish</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
