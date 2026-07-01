<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> | Portal | KidsAI</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/portal.css') ?>">
</head>
<body>

<div class="portal-layout">

    <!-- Sidebar Section -->
    <aside class="sidebar">
        <?= $this->renderSection('sidebar') ?>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        
        <!-- Topbar -->
        <div class="topbar-card d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-2">
                <div style="width: 28px; height: 28px; background: var(--primary); border-radius: 6px;"></div>
                <span class="fw-bold h5 mb-0" style="font-family: 'Outfit', sans-serif; color: var(--primary);">KidsAI Coding</span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span style="font-size:1.3rem;cursor:pointer;color:var(--text-muted);">🔔</span>
                <div style="width:40px;height:40px;border-radius:10px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;">USER</div>
            </div>
        </div>

        <!-- Section Content -->
        <?= $this->renderSection('content') ?>

    </main>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?= $this->renderSection('scripts') ?>

</body>
</html>
