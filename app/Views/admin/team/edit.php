<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px; padding: 28px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); background: #fff; border: 1px solid var(--border);">
    
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; border-bottom: 1px solid var(--border); padding-bottom: 16px;">
        <h3 style="color: var(--text-main); font-weight: 700; margin: 0;">
            <i class="fa-solid fa-user-pen" style="color: var(--primary); margin-right: 8px;"></i> Edit Team Member
        </h3>
        <a href="<?= base_url('admin/team') ?>" style="text-decoration: none; color: var(--text-muted); font-weight: 500; font-size: 0.9rem;">
            <i class="fa-solid fa-arrow-left"></i> Back to Directory
        </a>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 24px; padding: 12px; border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
            <i class="fa-solid fa-circle-exclamation"></i> <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/team/update/'.$member['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Full Name</label>
                <input type="text" name="name" value="<?= esc($member['name']) ?>" required placeholder="e.g. Dr. Gaurav Sharma" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 0.9rem;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Role Title</label>
                <input type="text" name="role" value="<?= esc($member['role']) ?>" required placeholder="e.g. Lead Robotics Instructor" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 0.9rem;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Profile Picture (.webp only)</label>
                <?php if(!empty($member['image_path'])): ?>
                    <div style="margin-bottom: 12px; border-radius: 8px; overflow: hidden; border: 1px solid var(--border); background: #f8fafc; max-width: 100px;">
                        <img src="<?= base_url($member['image_path']) ?>" alt="Member Photo" style="width: 100%; max-height: 80px; object-fit: cover;">
                        <span style="display: block; text-align: center; font-size: 0.65rem; font-weight: 600; color: var(--text-muted); padding: 2px;">Active picture</span>
                    </div>
                <?php endif; ?>
                <input type="file" name="image" accept="image/webp" style="width: 100%; padding: 10px; border: 1px dashed var(--border); border-radius: 8px; background: #fafafa; outline: none;">
                <p style="font-size: 0.72rem; color: var(--text-muted); margin-top: 4px;"><b>Mandatory: WEBP format (.webp) only.</b> Recommended Resolution: 300x300px (1:1). Max Size: 2MB. Leave empty to keep active picture.</p>
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Display Sort Index</label>
                <input type="number" name="order_index" value="<?= esc($member['order_index']) ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 0.9rem;">
                <p style="font-size: 0.72rem; color: var(--text-muted); margin-top: 4px;">Lower numbers sort/render first.</p>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 28px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Professional Bio & Experience</label>
            <textarea name="bio" rows="5" required placeholder="Describe experience, teaching credentials, and technology focus..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-size: 0.9rem; line-height: 1.5;"><?= esc($member['bio']) ?></textarea>
        </div>

        <div style="display: flex; gap: 12px; border-top: 1px solid var(--border); padding-top: 20px;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-weight: 700; border-radius: 8px;">
                <i class="fa-solid fa-save" style="margin-right: 6px;"></i> Update Team Member
            </button>
            <a href="<?= base_url('admin/team') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main); padding: 12px 30px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center;">Cancel</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
