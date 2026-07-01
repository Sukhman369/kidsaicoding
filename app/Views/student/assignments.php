<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments | Student | KidsAI</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/portal.css') ?>">
</head>
<body>
<div class="portal-layout">
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div style="width:32px;height:32px;background:var(--primary);border-radius:6px;margin-bottom:8px;"></div>
            <span>KidsAI Student</span>
        </div>
        <ul class="sidebar-nav">
            <li><a href="<?= base_url('student/dashboard') ?>">🏠 <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('student/my-courses') ?>">📚 <span>My Courses</span></a></li>
            <li><a href="<?= base_url('student/assignments') ?>" class="active">📝 <span>Assignments</span></a></li>
            <li><a href="<?= base_url('student/profile') ?>">👤 <span>Profile</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="topbar-card mb-4">
            <h1 class="h4 mb-0">Assignments</h1>
        </div>

        <div class="data-card">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-muted small text-uppercase">
                        <tr>
                            <th>Assignment Title</th>
                            <th>Course</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="fw-bold">Level 3: Loops Challenge</div></td>
                            <td>Python for Beginners</td>
                            <td>Today, 11:59 PM</td>
                            <td><span class="badge badge-soft-warning">In Progress</span></td>
                            <td><button class="btn btn-primary btn-sm px-3">Open</button></td>
                        </tr>
                        <tr>
                            <td><div class="fw-bold">My First Webpage</div></td>
                            <td>HTML & CSS</td>
                            <td>Passed</td>
                            <td><span class="badge badge-soft-success">Graded: A+</span></td>
                            <td><a href="#" class="text-muted small text-decoration-none">View Feedback</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</body>
</html>
