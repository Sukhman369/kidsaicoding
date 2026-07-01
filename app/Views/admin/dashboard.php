<?= view('components/portal_header', ['title' => 'Admin Dashboard']) ?>
<?= view('components/admin_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'Dashboard Overview', 'welcome_msg' => 'Welcome back, Admin']) ?>

<!-- ══ STAT CARDS ══ -->
<div class="row g-3 mb-4">

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Total Students</div>
                    <div class="stat-value">1,248</div>
                    <div class="stat-trend up">+12% this month</div>
                </div>
                <div class="stat-icon-box" style="background: #eff6ff;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Active Courses</div>
                    <div class="stat-value">18</div>
                    <div class="stat-trend up">+3 new this month</div>
                </div>
                <div class="stat-icon-box" style="background: #fff7ed;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Teachers</div>
                    <div class="stat-value">34</div>
                    <div class="stat-trend neutral">2 pending approval</div>
                </div>
                <div class="stat-icon-box" style="background: #f0fdf4;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Revenue (Month)</div>
                    <div class="stat-value">₹3.2L</div>
                    <div class="stat-trend up">+8% vs last month</div>
                </div>
                <div class="stat-icon-box" style="background: #fdf2f8;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">New Enrolments</div>
                    <div class="stat-value">86</div>
                    <div class="stat-trend up">This week</div>
                </div>
                <div class="stat-icon-box" style="background: #ecfdf5;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

  <!--  <div class="col-6 col-xl-3">
         <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Avg. Satisfaction</div>
                    <div class="stat-value">4.8 <span style="font-size:1rem;color:#f59e0b;">★</span></div>
                    <div class="stat-trend up">From 340 reviews</div>
                </div>
                <div class="stat-icon-box" style="background: #fffbeb;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
            </div>
        </div>
    </div> -->

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Blog Posts</div>
                    <div class="stat-value">47</div>
                    <div class="stat-trend neutral">5 drafts pending</div>
                </div>
                <div class="stat-icon-box" style="background: #f0f9ff;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="col-6 col-xl-3">
        <div class="stat-card">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <div class="stat-label">Support Tickets</div>
                    <div class="stat-value">12</div>
                    <div class="stat-trend down">3 urgent open</div>
                </div>
                <div class="stat-icon-box" style="background: #fef2f2;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

</div><!-- /stat cards -->

<!-- ══ MAIN DATA ROW ══ -->
<div class="row g-3 mb-4">

    <!-- Recent Enrollments Table -->
    <div class="col-lg-8">
        <div class="data-card">
            <h2>
                Recent Enrollments
                <a href="<?= base_url('admin/users') ?>" class="dash-view-all">View All</a>
            </h2>
            <div class="table-responsive">
                <table class="dash-table">
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Course</th>
                            <th>Age Group</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dash-avatar" style="background:#eff6ff;color:#2563eb;">A</div>
                                    <span>Aryan Sharma</span>
                                </div>
                            </td>
                            <td>Python Beginners</td>
                            <td><span class="dash-badge age">10–14</span></td>
                            <td>1 Jul 2026</td>
                            <td><span class="dash-badge success">Active</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dash-avatar" style="background:#fdf2f8;color:#9333ea;">P</div>
                                    <span>Priya Mehta</span>
                                </div>
                            </td>
                            <td>Full Stack Web Dev</td>
                            <td><span class="dash-badge age">12–18</span></td>
                            <td>30 Jun 2026</td>
                            <td><span class="dash-badge success">Active</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dash-avatar" style="background:#fff7ed;color:#ea580c;">R</div>
                                    <span>Rohan Gupta</span>
                                </div>
                            </td>
                            <td>Game Design with Scratch</td>
                            <td><span class="dash-badge age">8–13</span></td>
                            <td>29 Jun 2026</td>
                            <td><span class="dash-badge pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dash-avatar" style="background:#f0fdf4;color:#16a34a;">S</div>
                                    <span>Simran Kaur</span>
                                </div>
                            </td>
                            <td>AI &amp; Machine Learning</td>
                            <td><span class="dash-badge age">13–18</span></td>
                            <td>28 Jun 2026</td>
                            <td><span class="dash-badge success">Active</span></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dash-avatar" style="background:#ecfdf5;color:#059669;">D</div>
                                    <span>Dev Patel</span>
                                </div>
                            </td>
                            <td>Robotics &amp; Arduino</td>
                            <td><span class="dash-badge age">9–14</span></td>
                            <td>27 Jun 2026</td>
                            <td><span class="dash-badge inactive">Inactive</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-lg-4">
        <div class="data-card">
            <h2>Quick Actions</h2>
            <div class="d-grid gap-2">
                <a href="<?= base_url('admin/courses') ?>" class="dash-quick-btn">
                    <div class="dash-quick-icon" style="background:#fff7ed;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                    </div>
                    <span>Add New Course</span>
                    <svg class="dash-quick-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= base_url('admin/users') ?>" class="dash-quick-btn">
                    <div class="dash-quick-icon" style="background:#eff6ff;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/>
                            <line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/>
                        </svg>
                    </div>
                    <span>Enrol a Student</span>
                    <svg class="dash-quick-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= base_url('admin/blogs') ?>" class="dash-quick-btn">
                    <div class="dash-quick-icon" style="background:#f0f9ff;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#0ea5e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                        </svg>
                    </div>
                    <span>Publish Blog Post</span>
                    <svg class="dash-quick-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
                <a href="<?= base_url('admin/settings') ?>" class="dash-quick-btn">
                    <div class="dash-quick-icon" style="background:#fdf2f8;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                    </div>
                    <span>Site Settings</span>
                    <svg class="dash-quick-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </a>
            </div>
        </div>
    </div>

</div><!-- /main data row -->

<!-- ══ COURSE PERFORMANCE ══ -->
<div class="row g-3 mb-2">
    <div class="col-12">
        <div class="data-card">
            <h2>Course Performance</h2>
            <div class="row g-3">

                <div class="col-md-6 col-xl-3">
                    <div class="course-perf-item">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="course-perf-name">Python Beginners</span>
                            <span class="course-perf-pct">78%</span>
                        </div>
                        <div class="course-perf-bar"><div class="course-perf-fill" style="width:78%;background:linear-gradient(90deg,#f97316,#fb923c);"></div></div>
                        <div class="course-perf-meta">312 enrolled · 4.9★</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="course-perf-item">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="course-perf-name">Full Stack Web Dev</span>
                            <span class="course-perf-pct">55%</span>
                        </div>
                        <div class="course-perf-bar"><div class="course-perf-fill" style="width:55%;background:linear-gradient(90deg,#0ea5e9,#38bdf8);"></div></div>
                        <div class="course-perf-meta">218 enrolled · 4.8★</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="course-perf-item">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="course-perf-name">AI &amp; ML</span>
                            <span class="course-perf-pct">91%</span>
                        </div>
                        <div class="course-perf-bar"><div class="course-perf-fill" style="width:91%;background:linear-gradient(90deg,#22c55e,#86efac);"></div></div>
                        <div class="course-perf-meta">189 enrolled · 5.0★</div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="course-perf-item">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="course-perf-name">Robotics &amp; Arduino</span>
                            <span class="course-perf-pct">85%</span>
                        </div>
                        <div class="course-perf-bar"><div class="course-perf-fill" style="width:85%;background:linear-gradient(90deg,#f59e0b,#fbbf24);"></div></div>
                        <div class="course-perf-meta">157 enrolled · 4.9★</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- ══ DASHBOARD INLINE STYLES ══ -->
<style>
/* Stat Cards */
.stat-label {
    font-size: 0.78rem;
    font-weight: 600;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 6px;
}
.stat-value {
    font-family: 'Outfit', sans-serif;
    font-size: 1.85rem;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.1;
    margin-bottom: 6px;
}
.stat-trend {
    font-size: 0.75rem;
    font-weight: 600;
}
.stat-trend.up   { color: #16a34a; }
.stat-trend.down { color: #dc2626; }
.stat-trend.neutral { color: #64748b; }

.stat-icon-box {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

/* Table */
.dash-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.875rem;
}
.dash-table th {
    padding: 10px 12px;
    text-align: left;
    font-size: 0.72rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #94a3b8;
    border-bottom: 1px solid #f1f5f9;
}
.dash-table td {
    padding: 12px 12px;
    vertical-align: middle;
    border-bottom: 1px solid #f8fafc;
    color: #334155;
    font-weight: 500;
}
.dash-table tr:last-child td { border-bottom: none; }
.dash-table tbody tr:hover td { background: #f8fafc; }

.dash-avatar {
    width: 32px;
    height: 32px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.85rem;
    flex-shrink: 0;
}

.dash-badge {
    display: inline-block;
    padding: 3px 9px;
    border-radius: 999px;
    font-size: 0.72rem;
    font-weight: 700;
}
.dash-badge.success { background: #dcfce7; color: #166534; }
.dash-badge.pending { background: #fef9c3; color: #854d0e; }
.dash-badge.inactive{ background: #f1f5f9; color: #64748b; }
.dash-badge.age     { background: #eff6ff; color: #1d4ed8; }

.dash-view-all {
    font-size: 0.78rem;
    font-weight: 600;
    color: #f97316;
    text-decoration: none;
}
.dash-view-all:hover { color: #ea580c; text-decoration: underline; }

/* Quick Action Buttons */
.dash-quick-btn {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 13px 14px;
    background: #f8fafc;
    border: 1px solid #f1f5f9;
    border-radius: 12px;
    text-decoration: none;
    color: #334155;
    font-weight: 600;
    font-size: 0.875rem;
    transition: background 0.18s, border-color 0.18s, transform 0.18s;
}
.dash-quick-btn:hover {
    background: #fff7ed;
    border-color: #fed7aa;
    color: #ea580c;
    transform: translateX(3px);
}
.dash-quick-btn span { flex: 1; }
.dash-quick-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.dash-quick-arrow { color: #cbd5e1; flex-shrink: 0; }
.dash-quick-btn:hover .dash-quick-arrow { color: #ea580c; }

/* Course Performance */
.course-perf-item { padding: 4px 0; }
.course-perf-name { font-size: 0.85rem; font-weight: 600; color: #1e293b; }
.course-perf-pct  { font-size: 0.82rem; font-weight: 700; color: #64748b; }
.course-perf-bar  {
    height: 7px;
    background: #f1f5f9;
    border-radius: 999px;
    overflow: hidden;
    margin-bottom: 6px;
}
.course-perf-fill {
    height: 100%;
    border-radius: 999px;
    transition: width 1.2s ease;
}
.course-perf-meta { font-size: 0.74rem; color: #94a3b8; font-weight: 500; }
</style>

<script>
/* Animate progress bars on page load */
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.course-perf-fill').forEach(el => {
        const w = el.style.width;
        el.style.width = '0%';
        setTimeout(() => { el.style.width = w; }, 300);
    });
});
</script>

<?= view('components/portal_footer') ?>
