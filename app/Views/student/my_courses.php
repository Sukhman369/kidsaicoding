<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses | Student | KidsAI</title>
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
            <li><a href="<?= base_url('student/my-courses') ?>" class="active">📚 <span>My Courses</span></a></li>
            <li><a href="<?= base_url('student/assignments') ?>">📝 <span>Assignments</span></a></li>
            <li><a href="<?= base_url('student/profile') ?>">👤 <span>Profile</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="topbar-card mb-4">
            <h1 class="h4 mb-0">My Learning Journey</h1>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="data-card h-100">
                    <div class="h3 mb-3">🐍</div>
                    <h3 class="h5 fw-bold">Python for Beginners</h3>
                    <p class="text-muted small">Master the fundamentals of Python through game development.</p>
                    <div class="mt-4">
                        <div class="progress mb-2" style="height: 10px;">
                            <div class="progress-bar" style="width: 60%"></div>
                        </div>
                        <div class="d-flex justify-content-between x-small">
                            <span class="text-muted">60% Complete</span>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Resume Lesson →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="data-card h-100">
                    <div class="h3 mb-3">🌐</div>
                    <h3 class="h5 fw-bold">HTML & CSS Basics</h3>
                    <p class="text-muted small">Build your first responsive website from scratch.</p>
                    <div class="mt-4 text-center">
                        <span class="badge badge-soft-success mb-2">🎉 Completed</span>
                        <a href="#" class="btn btn-outline-success btn-sm w-100 mt-2">Download Certificate</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
