<?= view('components/portal_header', ['title' => 'My Courses']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'My Learning Journey']) ?>

<div class="row g-4">
    <?php if (empty($enrolledCourses)): ?>
        <div class="col-12 text-center py-5">
            <div class="h1 mb-3">🚀</div>
            <h3 class="h5 fw-bold mb-2">Kickstart Your Learning!</h3>
            <p class="text-muted small max-width-600 mx-auto mb-4" style="max-width: 400px;">
                You haven't enrolled in any courses yet. Check out our interactive coding curriculum program to enroll.
            </p>
            <a href="<?= base_url('courses') ?>" class="btn btn-primary shadow-sm">
                Explore Courses
            </a>
        </div>
    <?php else: ?>
        <?php foreach ($enrolledCourses as $course): ?>
            <div class="col-md-6">
                <div class="data-card h-100">
                    <div class="h3 mb-3"><?= esc($course['badge'] ?? '🎓') ?></div>
                    <h3 class="h5 fw-bold"><?= esc($course['title']) ?></h3>
                    <p class="text-muted small"><?= esc($course['description']) ?></p>
                    <div class="mt-4">
                        <div class="progress mb-2" style="height: 10px;">
                            <div class="progress-bar" style="width: 0%"></div>
                        </div>
                        <div class="d-flex justify-content-between x-small animate-pulse">
                            <span class="text-muted">0% Complete</span>
                            <a href="<?= base_url('course/' . $course['slug']) ?>" class="text-primary fw-bold text-decoration-none">Explore Syllabus →</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?= view('components/portal_footer') ?>
