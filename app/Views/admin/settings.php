<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Admin | KidsAI</title>
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
            <span>KidsAI Admin</span>
        </div>
        <ul class="sidebar-nav">
            <li><a href="<?= base_url('admin/dashboard') ?>">🏠 <span>Dashboard</span></a></li>
            <li><a href="<?= base_url('admin/courses') ?>">📚 <span>Courses</span></a></li>
            <li><a href="<?= base_url('admin/users') ?>">👥 <span>Users</span></a></li>
            <li><a href="<?= base_url('admin/settings') ?>" class="active">⚙️ <span>Settings</span></a></li>
        </ul>
    </aside>

    <main class="main-content">
        <div class="topbar-card mb-4">
            <h1 class="h4 mb-0">System Settings</h1>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="data-card">
                    <h2 class="h5 mb-4 border-bottom pb-2">General Configuration</h2>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Platform Name</label>
                        <input type="text" class="form-control" value="KidsAI Coding Academy">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Support Email</label>
                        <input type="email" class="form-control" value="support@kidsaicoding.com">
                    </div>
                    <button class="btn btn-primary mt-2">Save Changes</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="data-card">
                    <h2 class="h5 mb-4 border-bottom pb-2">Maintenance Mode</h2>
                    <p class="text-muted small">Switching this on will prevent all users except admins from accessing the platform.</p>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="modeSwitch">
                        <label class="form-check-label" for="modeSwitch">Disable Platform Access</label>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
