<aside class="sidebar">
    <div class="sidebar-header mb-4">
        <h5 class="fw-bold mb-0">Teacher Portal</h5>
    </div>
    <nav class="sidebar-nav">
        <ul class="list-unstyled d-grid gap-2">
            <li><a href="<?= base_url('teacher/dashboard') ?>" class="nav-link <?= current_url() == base_url('teacher/dashboard') ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="<?= base_url('teacher/my-batches') ?>" class="nav-link <?= current_url() == base_url('teacher/my-batches') ? 'active' : '' ?>">My Batches</a></li>
            <li><a href="<?= base_url('teacher/reviews') ?>" class="nav-link <?= current_url() == base_url('teacher/reviews') ? 'active' : '' ?>">Student Reviews</a></li>
            <li class="mt-4"><a href="<?= base_url('logout') ?>" class="nav-link text-danger">Logout</a></li>
        </ul>
    </nav>
</aside>
