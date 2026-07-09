<aside class="sidebar student-sidebar">

    <!-- Brand / Logo -->
    <div class="sidebar-brand">
        <div class="sidebar-brand-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/>
            </svg>
        </div>
        <div class="sidebar-brand-text">
            <span class="sidebar-brand-name">KidsAI</span>
            <span class="sidebar-brand-role">Student Portal</span>
        </div>
    </div>

    <!-- Student Profile Chip -->
    <div class="sidebar-profile">
        <div class="sidebar-avatar">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
            </svg>
        </div>
        <div class="sidebar-profile-info">
            <span class="sidebar-profile-name"><?= esc(session()->get('userName') ?? 'Student User') ?></span>
            <span class="sidebar-profile-badge">Student</span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav-wrap">

        <!-- Main -->
        <div class="sidebar-section-label">Main</div>
        <ul class="sidebar-nav list-unstyled">
            <li>
                <a href="<?= base_url('student/dashboard') ?>" class="sidebar-link <?= current_url() == base_url('student/dashboard') ? 'active' : '' ?>">
                    <span class="sidebar-link-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                            <rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
                        </svg>
                    </span>
                    <span class="sidebar-link-text">Dashboard</span>
                    <?php if(current_url() == base_url('student/dashboard')): ?>
                        <span class="sidebar-active-dot"></span>
                    <?php endif; ?>
                </a>
            </li>
            <li>
                <a href="<?= base_url('student/my-courses') ?>" class="sidebar-link <?= current_url() == base_url('student/my-courses') ? 'active' : '' ?>">
                    <span class="sidebar-link-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </span>
                    <span class="sidebar-link-text">My Courses</span>
                    <?php if(current_url() == base_url('student/my-courses')): ?>
                        <span class="sidebar-active-dot"></span>
                    <?php endif; ?>
                </a>
            </li>
            <li>
                <a href="<?= base_url('student/assignments') ?>" class="sidebar-link <?= current_url() == base_url('student/assignments') ? 'active' : '' ?>">
                    <span class="sidebar-link-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>
                        </svg>
                    </span>
                    <span class="sidebar-link-text">Assignments</span>
                    <?php if(current_url() == base_url('student/assignments')): ?>
                        <span class="sidebar-active-dot"></span>
                    <?php endif; ?>
                </a>
            </li>
            <li>
                <a href="<?= base_url('student/profile') ?>" class="sidebar-link <?= current_url() == base_url('student/profile') ? 'active' : '' ?>">
                    <span class="sidebar-link-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                        </svg>
                    </span>
                    <span class="sidebar-link-text">Profile</span>
                    <?php if(current_url() == base_url('student/profile')): ?>
                        <span class="sidebar-active-dot"></span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>

    </nav>

    <!-- Logout -->
    <div class="sidebar-footer">
        <a href="<?= base_url('logout') ?>" class="sidebar-logout">
            <span class="sidebar-logout-icon">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
            </span>
            <span>Logout</span>
        </a>
    </div>

</aside>
