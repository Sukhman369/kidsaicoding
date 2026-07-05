<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px;">
    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 20px; padding: 12px; border-radius: 8px;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/courses/update/'.$course['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Course Image (.webp only)</label>
            <?php if($course['image_path']): ?>
                <div style="margin-bottom: 12px;">
                    <img src="<?= base_url($course['image_path']) ?>" alt="Current Image" style="width: 120px; border-radius: 8px; border: 2px solid var(--border);">
                </div>
            <?php endif; ?>
            <input type="file" name="image" accept="image/webp" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; background: #f9fafb;">
            <small style="color: var(--text-muted);">Leave empty to keep current image.</small>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Course Title</label>
                <input type="text" name="title" value="<?= $course['title'] ?>" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Badge</label>
                <input type="text" name="badge" value="<?= $course['badge'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Age Range</label>
                <input type="text" name="age_range" value="<?= $course['age_range'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Grade Range</label>
                <input type="text" name="grade_range" value="<?= $course['grade_range'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Lessons</label>
                <input type="number" name="num_lessons" value="<?= $course['num_lessons'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Activities</label>
                <input type="number" name="num_activities" value="<?= $course['num_activities'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Duration</label>
                <input type="text" name="duration" value="<?= $course['duration'] ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Description</label>
            <textarea name="description" rows="4" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;"><?= $course['description'] ?></textarea>
        </div>
        
        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600;">Status</label>
            <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
                <option value="published" <?= $course['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                <option value="draft" <?= $course['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
            </select>
        </div>

        <div style="display: flex; gap: 12px;">
            <button type="submit" class="btn btn-primary">Update Course</button>
            <a href="<?= base_url('admin/courses') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main);">Cancel</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
