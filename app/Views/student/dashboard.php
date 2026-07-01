<?= view('components/portal_header', ['title' => 'Student Dashboard']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', [
    'welcome_msg' => 'Welcome back, Arjun! 👋',
    'page_title' => 'Here is what\'s happening with your learning today.'
]) ?>

<!-- Stats -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📚</div>
            <div class="stat-value h2 fw-bold text-primary">2</div>
            <div class="stat-label small">Enrolled Courses</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">✅</div>
            <div class="stat-value h2 fw-bold text-primary">14</div>
            <div class="stat-label small">Classes Attended</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📝</div>
            <div class="stat-value h2 fw-bold text-primary">3</div>
            <div class="stat-label small">Pending Tasks</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">🏆</div>
            <div class="stat-value h2 fw-bold text-primary">1</div>
            <div class="stat-label small">Certificates</div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Left Side -->
    <div class="col-lg-8">
        <!-- Course Progress -->
        <div class="data-card mb-4">
            <h2 class="h5 mb-4 pb-3 border-bottom">📚 Course Progress</h2>
            <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                <div class="bg-primary-light text-primary h3 p-3 rounded-3 mb-0">🐍</div>
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="fw-bold">Python for Beginners</span>
                        <span class="text-primary fw-bold">60%</span>
                    </div>
                    <div class="progress mb-2" style="height: 8px;">
                        <div class="progress-bar" style="width: 60%"></div>
                    </div>
                    <small class="text-muted">Session 14 of 24 complete</small>
                </div>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="bg-success-light text-success h3 p-3 rounded-3 mb-0">🌐</div>
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between mb-1">
                        <span class="fw-bold">HTML & CSS Basics</span>
                        <span class="text-success fw-bold">100%</span>
                    </div>
                    <div class="progress mb-2" style="height: 8px;">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                    </div>
                    <small class="text-muted">Completed!</small>
                </div>
            </div>
        </div>

        <!-- Homework -->
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">📝 Today's Homework</h2>
            <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                <div class="h4 mb-0">📄</div>
                <div class="flex-grow-1">
                    <div class="fw-bold">Module 3: Functions Assignment</div>
                    <div class="small text-muted">Write 3 functions that return user data</div>
                </div>
                <span class="badge bg-warning-subtle text-warning">Due Today</span>
            </div>
        </div>
    </div>

    <!-- Right Side -->
    <div class="col-lg-4">
        <!-- Upcoming Classes -->
        <div class="data-card mb-4">
            <h2 class="h5 mb-4 pb-3 border-bottom">🎥 Upcoming Classes</h2>
            <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                <div class="bg-primary-light text-primary text-center p-2 rounded-3 small fw-bold" style="min-width:60px;">
                    TUE<br>10 AM
                </div>
                <div>
                    <div class="fw-bold">Python: Loops & Lists</div>
                    <div class="small text-muted">with Priya Sharma</div>
                </div>
            </div>
            <button class="btn btn-primary w-100 shadow-sm mt-2">Join Next Class</button>
        </div>

        <!-- Achievements -->
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">🏆 Achievements</h2>
            <div class="row g-2 text-center">
                <div class="col-4">
                    <div class="bg-light p-2 rounded-3 small border">
                        <div class="h4 mb-1">🥇</div>
                        First Project
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light p-2 rounded-3 small border">
                        <div class="h4 mb-1">🔥</div>
                        7-Day Streak
                    </div>
                </div>
                <div class="col-4">
                    <div class="bg-light p-2 rounded-3 small border opacity-50">
                        <div class="h4 mb-1">🎓</div>
                        Certified
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
