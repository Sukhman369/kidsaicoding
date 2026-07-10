<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 12px;">
        <a href="<?= base_url('admin/jobs') ?>" style="color: var(--text-muted); font-size: 18px;"><i class="fa-solid fa-arrow-left-long"></i></a>
        <h3 style="margin: 0;">Edit Job Opening</h3>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" style="margin-bottom: 20px; border-radius: 8px; font-size: 0.85rem;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/jobs/update/' . $job['id']) ?>" method="POST">
        <?= csrf_field() ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Title</label>
                <input type="text" name="title" value="<?= esc(old('title', $job['title'])) ?>" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Department</label>
                <input type="text" name="department" value="<?= esc(old('department', $job['department'])) ?>" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Location</label>
                <input type="text" name="location" value="<?= esc(old('location', $job['location'])) ?>" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Type</label>
                <select name="type" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
                    <option value="Full-Time" <?= old('type', $job['type']) === 'Full-Time' ? 'selected' : '' ?>>Full-Time</option>
                    <option value="Part-Time" <?= old('type', $job['type']) === 'Part-Time' ? 'selected' : '' ?>>Part-Time</option>
                    <option value="Internship" <?= old('type', $job['type']) === 'Internship' ? 'selected' : '' ?>>Internship</option>
                    <option value="Contract" <?= old('type', $job['type']) === 'Contract' ? 'selected' : '' ?>>Contract</option>
                </select>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 16px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Job Description</label>
            <textarea name="description" rows="6" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; line-height: 1.5; font-family: inherit;"><?= esc(old('description', $job['description'])) ?></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Requirements & Qualifications</label>
            <textarea name="requirements" rows="6" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; line-height: 1.5; font-family: inherit;"><?= esc(old('requirements', $job['requirements'])) ?></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Status</label>
            <select name="status" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
                <option value="active" <?= old('status', $job['status']) === 'active' ? 'selected' : '' ?>>Active (Visible on Careers Page)</option>
                <option value="inactive" <?= old('status', $job['status']) === 'inactive' ? 'selected' : '' ?>>Inactive (Hidden)</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; justify-content: center; font-size: 15px; border-radius: 8px;">Update Job Posting 🚀</button>
    </form>
</div>

<?= $this->endSection() ?>
