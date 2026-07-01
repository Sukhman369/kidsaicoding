<?= view('components/portal_header', ['title' => 'Settings']) ?>
<?= view('components/admin_sidebar') ?>
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
<?= view('components/portal_footer') ?>
