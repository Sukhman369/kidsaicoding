<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Dashboard | KidsAI Coding Academy</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/portal.css') ?>">
</head>
<body>
<div class="portal-layout">

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div style="width:32px;height:32px;background:var(--primary);border-radius:6px;margin-bottom:8px;"></div>
            <span>KidsAI Parent</span>
        </div>
        <ul class="sidebar-nav">
            <li><a href="<?= base_url('parent/dashboard') ?>" class="active">🏠 <span>Dashboard</span></a></li>
            <li><a href="#">📈 <span>Child Progress</span></a></li>
            <li><a href="#">📅 <span>Attendance</span></a></li>
            <li><a href="#">🎓 <span>Certificates</span></a></li>
            <li><a href="#">💳 <span>Payments</span></a></li>
            <li><a href="#">👤 <span>Profile</span></a></li>
        </ul>
    </aside>

    <!-- Main -->
    <main class="main-content">
        <div class="topbar-card d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="h3 fw-bold mb-1">Parent Dashboard 👋</h1>
                <p class="text-muted small mb-0">Monitoring Arjun Kumar's learning journey</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span style="font-size:1.3rem;cursor:pointer;color:var(--text-muted);">🔔</span>
                <div style="width:42px;height:42px;border-radius:50%;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;">P</div>
            </div>
        </div>

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
                        <span class="badge badge-soft-success">Present</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-2 pb-2 border-bottom">
                        <span class="small text-muted">Session 13 — Jun 22</span>
                        <span class="badge badge-soft-success">Present</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="small text-muted">Session 12 — Jun 19</span>
                        <span class="badge badge-soft-danger">Absent</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
