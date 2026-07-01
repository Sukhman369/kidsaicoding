<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management | Admin | KidsAI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <li><a href="<?= base_url('admin/users') ?>" class="active">👥 <span>Users</span></a></li>
            <li><a href="<?= base_url('admin/settings') ?>">⚙️ <span>Settings</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="topbar-card d-flex justify-content-between align-items-center mb-4">
            <h1 class="h4 mb-0">User Management</h1>
            <button class="btn btn-primary btn-sm">+ Add User</button>
        </div>

        <div class="data-card">
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item"><a class="nav-link active" href="#">Students</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Parents</a></li>
            </ul>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-muted small text-uppercase">
                        <tr>
                            <th>User</th>
                            <th>Role</th>
                            <th>Joined</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="fw-bold">Arjun Kumar</div>
                                <div class="text-muted small">arjun@example.com</div>
                            </td>
                            <td>Student</td>
                            <td>Jun 10, 2026</td>
                            <td><span class="badge badge-soft-success">Active</span></td>
                            <td><a href="#" class="text-secondary fw-bold text-decoration-none small">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</body>
</html>
