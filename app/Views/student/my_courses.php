<?= view('components/portal_header', ['title' => 'My Courses']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'My Learning Journey']) ?>

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
                <span class="badge bg-success-subtle text-success mb-2">🎉 Completed</span>
                <a href="#" class="btn btn-outline-success btn-sm w-100 mt-2">Download Certificate</a>
            </div>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
