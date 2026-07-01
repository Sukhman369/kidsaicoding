<?= view('components/portal_header', ['title' => 'Parent Dashboard']) ?>
<?= view('components/parent_sidebar') ?>
<?= view('components/portal_topbar', [
    'welcome_msg' => 'Parent Dashboard 👋',
    'page_title' => 'Monitoring Arjun Kumar\'s learning journey'
]) ?>

<!-- Stats -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📚</div>
            <div class="stat-value h2 fw-bold text-primary">2</div>
            <div class="stat-label small">Active Courses</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">✅</div>
            <div class="stat-value h2 fw-bold text-primary">92%</div>
            <div class="stat-label small">Attendance Rate</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="h3 mb-2">📝</div>
            <div class="stat-value h2 fw-bold text-primary">3</div>
            <div class="stat-label small">Assignments</div>
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
        <!-- Progress -->
        <div class="data-card mb-4">
            <h2 class="h5 mb-4 pb-3 border-bottom">📈 Course Progress</h2>
            <div class="mb-4">
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">Python for Beginners</span>
                    <span class="text-primary fw-bold small">60%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar" style="width: 60%"></div>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between mb-1">
                    <span class="fw-bold small">HTML & CSS Basics</span>
                    <span class="text-success fw-bold small">100%</span>
                </div>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
            </div>
        </div>

        <!-- Teacher Notes -->
        <div class="data-card">
            <h2 class="h5 mb-4 pb-3 border-bottom">📣 Teacher Notes</h2>
            <div class="p-3 rounded-4 mb-3" style="background:#FFF7ED; border-left: 4px solid var(--primary);">
                <div class="fw-bold small">Priya Sharma <span class="text-muted fw-normal">· Jun 24</span></div>
                <p class="small text-muted mb-0 mt-1">Arjun is showing great progress with loops. Please encourage daily practice of 20 mins.</p>
            </div>
        </div>
    </div>

    <!-- Right Side -->
    <div class="col-lg-4">
        <!-- Attendance Log -->
        <div class="data-card mb-4">
            <h2 class="h5 mb-4 pb-3 border-bottom">📋 Attendance Log</h2>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom">
                <span class="small">Session 14 — Jun 24</span>
                <span class="badge bg-success-subtle text-success">Present</span>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom">
                <span class="small text-muted">Session 13 — Jun 22</span>
                <span class="badge bg-success-subtle text-success">Present</span>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <span class="small text-muted">Session 12 — Jun 19</span>
                <span class="badge bg-danger-subtle text-danger">Absent</span>
            </div>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
