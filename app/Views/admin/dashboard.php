<?= $this->extend('layouts/portal') ?>

<?= $this->section('title') ?>Admin Dashboard<?= $this->endSection() ?>
<?= $this->section('page_title') ?>Dashboard Overview<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>
    <div class="sidebar-logo">
        <div style="width:32px;height:32px;background:var(--primary);border-radius:6px;margin-bottom:8px;"></div>
        <span>KidsAI Admin</span>
    </div>
    <ul class="sidebar-nav">
        <li><a href="<?= base_url('admin/dashboard') ?>" class="active">🏠 <span>Dashboard</span></a></li>
        <li><a href="<?= base_url('admin/courses') ?>">📚 <span>Courses</span></a></li>
        <li><a href="<?= base_url('admin/blogs') ?>">✍️ <span>Blogs</span></a></li>
        <li><a href="<?= base_url('admin/users') ?>">👥 <span>Users</span></a></li>
        <li><a href="<?= base_url('admin/settings') ?>">⚙️ <span>Settings</span></a></li>
    </ul>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Stats Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="stat-card text-center">
                <div class="h2 fw-bold text-primary mb-1">1,248</div>
                <div class="small text-muted">Total Students</div>
            </div>
        </div>
        <!-- ... more stats ... -->
    </div>

    <!-- Data Row -->
    <div class="data-card">
        <h2 class="h5 mb-4 border-bottom pb-2">Recent Activity</h2>
        <p class="text-muted small">No recent activity to show yet.</p>
    </div>
<?= $this->endSection() ?>
