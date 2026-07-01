<?= view('components/portal_header', ['title' => 'Teacher Dashboard']) ?>
<?= view('components/teacher_sidebar') ?>
<?= view('components/portal_topbar', [
    'welcome_msg' => 'Teacher Portal 📚',
    'page_title' => 'Welcome, Priya Sharma'
]) ?>

<!-- Stats -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📦</div>
            <div class="stat-value h2 fw-bold text-primary">3</div>
            <div class="stat-label small">Active Batches</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">👥</div>
            <div class="stat-value h2 fw-bold text-primary">18</div>
            <div class="stat-label small">Total Students</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📝</div>
            <div class="stat-value h2 fw-bold text-primary">7</div>
            <div class="stat-label small">Pending Reviews</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">⭐</div>
            <div class="stat-value h2 fw-bold text-primary">4.9</div>
            <div class="stat-label small">Rating</div>
        </div>
    </div>
</div>

<!-- Today's Classes -->
<div class="data-card mb-4">
    <h2 class="h5 mb-4 pb-3 border-bottom">🎥 Today's Classes</h2>
    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 mb-3 border">
        <div>
            <div class="fw-bold">Python Batch A — Loops & Lists</div>
            <div class="text-muted small">Batch of 6 · Session 14</div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-primary-subtle text-primary">10:00 AM</span>
            <button class="btn btn-primary btn-sm px-3">Start Class</button>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded-4 border">
        <div>
            <div class="fw-bold">Python Batch B — Functions</div>
            <div class="text-muted small">Batch of 5 · Session 12</div>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="badge bg-secondary-subtle text-secondary text-white">4:00 PM</span>
            <button class="btn btn-secondary btn-sm px-3 text-white">View Details</button>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Student Performance -->
    <div class="col-lg-8">
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">👥 Student Performance</h2>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="text-muted small text-uppercase">
                        <tr>
                            <th>Student</th>
                            <th>Attendance</th>
                            <th>Assignment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-bold">Arjun K.</td>
                            <td><span class="badge bg-success-subtle text-success">93%</span></td>
                            <td><span class="badge bg-info-subtle text-info">Pending</span></td>
                            <td><a href="#" class="text-primary fw-bold text-decoration-none small">View</a></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Sneha M.</td>
                            <td><span class="badge bg-success-subtle text-success">100%</span></td>
                            <td><span class="badge bg-success-subtle text-success">Submitted</span></td>
                            <td><a href="#" class="text-primary fw-bold text-decoration-none small">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Reviews -->
    <div class="col-lg-4">
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">📝 Pending Reviews</h2>
            <div class="bg-light p-3 rounded-4 mb-3 border">
                <div class="fw-bold small">Module 3 Functions — Arjun K.</div>
                <div class="text-muted x-small mb-2">Submitted Jun 25</div>
                <button class="btn btn-primary btn-sm w-100">Review & Grade</button>
            </div>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
