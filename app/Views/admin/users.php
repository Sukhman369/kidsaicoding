<?= view('components/portal_header', ['title' => 'User Management']) ?>
<?= view('components/admin_sidebar') ?>
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
                        <td><span class="badge bg-success-subtle text-success">Active</span></td>
                        <td><a href="#" class="text-secondary fw-bold text-decoration-none small">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?= view('components/portal_footer') ?>
