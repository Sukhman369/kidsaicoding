<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px;">
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 20px; padding: 12px; border-radius: 8px;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/courses/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Course Image (.webp only)</label>
            <input type="file" name="image" accept="image/webp" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; background: #f9fafb;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Course Title</label>
                <input type="text" name="title" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Badge (e.g. AI, New)</label>
                <input type="text" name="badge" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Age Range</label>
                <input type="text" name="age_range" placeholder="e.g. 5-15" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Grade Range</label>
                <input type="text" name="grade_range" placeholder="e.g. 1-10" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Lessons</label>
                <input type="number" name="num_lessons" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Activities</label>
                <input type="number" name="num_activities" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Duration</label>
                <input type="text" name="duration" placeholder="e.g. 12-18 Months" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;"></textarea>
        </div>

        <div style="display: flex; gap: 12px;">
            <button type="submit" class="btn btn-primary">Create Course</button>
            <a href="<?= base_url('admin/courses') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main);">Cancel</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
