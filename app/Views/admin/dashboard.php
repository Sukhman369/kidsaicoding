<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-bottom: 40px;">
    <div class="card" style="border-left: 4px solid #4f46e5;">
        <div style="color: var(--text-muted); font-size: 14px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Total Courses</div>
        <div style="font-size: 32px; font-weight: 700;">4</div>
    </div>
    <div class="card" style="border-left: 4px solid #10b981;">
        <div style="color: var(--text-muted); font-size: 14px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Published</div>
        <div style="font-size: 32px; font-weight: 700;">4</div>
    </div>
    <div class="card" style="border-left: 4px solid #f59e0b;">
        <div style="color: var(--text-muted); font-size: 14px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Drafts</div>
        <div style="font-size: 32px; font-weight: 700;">0</div>
    </div>
</div>

<div class="card">
    <h3 style="margin-bottom: 20px;">Quick Actions</h3>
    <div style="display: flex; gap: 16px;">
        <a href="<?= base_url('admin/courses/create') ?>" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Add New Course
        </a>
        <a href="<?= base_url('admin/settings') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main);">
            <i class="fa-solid fa-pen-to-square"></i> Edit Homepage
        </a>
    </div>
</div>

<?= $this->endSection() ?>
