<main class="main-content">
    <!-- Topbar -->
    <div class="topbar-card d-flex justify-content-between align-items-center mb-4">
        <div class="d-flex align-items-center gap-2">
            <div style="width: 28px; height: 28px; background: var(--primary); border-radius: 6px;"></div>
            <span class="fw-bold h5 mb-0" style="font-family: 'Outfit', sans-serif; color: var(--primary);">KidsAI Coding</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="text-end d-none d-md-block">
                <div class="fw-bold small">User Account</div>
                <div class="text-muted x-small"><?= date('l, d F Y') ?></div>
            </div>
            <span style="font-size:1.3rem;cursor:pointer;color:var(--text-muted);">🔔</span>
            <div style="width:40px;height:40px;border-radius:10px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;">UA</div>
        </div>
    </div>
    
    <div class="page-header mb-4">
        <?php if (isset($welcome_msg)): ?>
            <h1 class="h3 fw-bold mb-1"><?= $welcome_msg ?></h1>
            <p class="text-muted small mb-0"><?= $page_title ?? '' ?></p>
        <?php else: ?>
            <h1 class="h4 fw-bold mb-0"><?= $page_title ?? 'Dashboard' ?></h1>
        <?php endif; ?>
    </div>
