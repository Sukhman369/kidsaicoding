<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
        <a href="<?= base_url('admin/jobs') ?>" style="color: var(--text-muted); font-size: 18px;"><i class="fa-solid fa-arrow-left-long"></i></a>
        <h3 style="margin: 0;">Add New Job Opening</h3>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" style="margin-bottom: 20px; border-radius: 8px; font-size: 0.85rem;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/jobs/store') ?>" method="POST">
        <?= csrf_field() ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Title</label>
                <input type="text" name="title" value="<?= esc(old('title')) ?>" required placeholder="e.g. Lead Robotics Instructor" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Department</label>
                <input type="text" name="department" value="<?= esc(old('department', 'Education')) ?>" required placeholder="e.g. Tech, Education, Operations" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Location</label>
                <input type="text" name="location" value="<?= esc(old('location', 'Remote, India')) ?>" required placeholder="e.g. New Delhi, Hybrid, Remote" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Type</label>
                <select name="type" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
                    <option value="Full-Time" <?= old('type') === 'Full-Time' ? 'selected' : '' ?>>Full-Time</option>
                    <option value="Part-Time" <?= old('type') === 'Part-Time' ? 'selected' : '' ?>>Part-Time</option>
                    <option value="Internship" <?= old('type') === 'Internship' ? 'selected' : '' ?>>Internship</option>
                    <option value="Contract" <?= old('type') === 'Contract' ? 'selected' : '' ?>>Contract</option>
                </select>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 16px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Description</label>
            <textarea name="description" rows="6" required placeholder="Detail the duties and overall mission of the role..." style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; line-height: 1.5; font-family: inherit;"><?= esc(old('description')) ?></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Requirements & Qualifications</label>
            <textarea name="requirements" rows="6" required placeholder="Detail the required skills, degree, certifications..." style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; line-height: 1.5; font-family: inherit;"><?= esc(old('requirements')) ?></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Status</label>
            <select name="status" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
                <option value="active" <?= old('status') === 'active' ? 'selected' : '' ?>>Active (Visible on Careers Page)</option>
                <option value="inactive" <?= old('status') === 'inactive' ? 'selected' : '' ?>>Inactive (Hidden)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; justify-content: center; font-size: 15px; border-radius: 8px;">Publish Job Posting 🚀</button>
    </form>
</div>

<?= $this->endSection() ?>
