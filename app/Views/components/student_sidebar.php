<aside class="sidebar">
    <div class="sidebar-header mb-4">
        <h5 class="fw-bold mb-0">Student Portal</h5>
    </div>
    <nav class="sidebar-nav">
        <ul class="list-unstyled d-grid gap-2">
            <li><a href="<?= base_url('student/dashboard') ?>" class="nav-link <?= current_url() == base_url('student/dashboard') ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="<?= base_url('student/my-courses') ?>" class="nav-link <?= current_url() == base_url('student/my-courses') ? 'active' : '' ?>">My Courses</a></li>
            <li><a href="<?= base_url('student/assignments') ?>" class="nav-link <?= current_url() == base_url('student/assignments') ? 'active' : '' ?>">Assignments</a></li>
            <li><a href="<?= base_url('student/profile') ?>" class="nav-link <?= current_url() == base_url('student/profile') ? 'active' : '' ?>">Profile</a></li>
            <li class="mt-4"><a href="<?= base_url('logout') ?>" class="nav-link text-danger">Logout</a></li>
        </ul>
    </nav>
</aside>
