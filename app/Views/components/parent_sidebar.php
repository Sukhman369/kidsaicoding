<aside class="sidebar">
    <div class="sidebar-header mb-4">
        <h5 class="fw-bold mb-0">Parent Portal</h5>
    </div>
    <nav class="sidebar-nav">
        <ul class="list-unstyled d-grid gap-2">
            <li><a href="<?= base_url('parent/dashboard') ?>" class="nav-link <?= current_url() == base_url('parent/dashboard') ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="#" class="nav-link">My Children</a></li>
            <li><a href="#" class="nav-link">Fees & Billing</a></li>
            <li class="mt-4"><a href="<?= base_url('logout') ?>" class="nav-link text-danger">Logout</a></li>
        </ul>
    </nav>
</aside>
