<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile | Student | KidsAI</title>
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
            <li><a href="<?= base_url('student/assignments') ?>">📝 <span>Assignments</span></a></li>
            <li><a href="<?= base_url('student/profile') ?>" class="active">👤 <span>Profile</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="topbar-card mb-4">
            <h1 class="h4 mb-0">Profile Settings</h1>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="data-card text-center py-5">
                    <div style="width:100px; height:100px; background:var(--primary); border-radius:50%; margin:0 auto 20px; display:flex; align-items:center; justify-content:center; color:#fff; font-size:3rem; font-weight:700;">A</div>
                    <h3 class="h5 fw-bold mb-1">Arjun Kumar</h3>
                    <p class="text-muted small mb-3">Student ID: KID-2026-101</p>
                    <button class="btn btn-outline-primary btn-sm">Change Photo</button>
                </div>
            </div>
            <div class="col-md-8">
                <div class="data-card">
                    <h2 class="h5 mb-4 border-bottom pb-2">Student Information</h2>
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">First Name</label>
                            <input type="text" class="form-control" value="Arjun">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Last Name</label>
                            <input type="text" class="form-control" value="Kumar">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label small fw-bold text-muted">Associated Parent</label>
                            <input type="text" class="form-control" value="Rajesh Kumar" disabled>
                        </div>
                    </div>
                    <button class="btn btn-primary px-4">Update Profile</button>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
