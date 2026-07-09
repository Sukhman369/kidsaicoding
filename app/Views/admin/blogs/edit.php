<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 900px; padding: 28px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); background: #fff; border: 1px solid var(--border); margin: 0 auto;">
    
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; border-bottom: 1px solid var(--border); padding-bottom: 16px;">
        <h3 style="color: var(--text-main); font-weight: 700; margin: 0;">
            <i class="fa-solid fa-pen-to-square" style="color: var(--primary); margin-right: 8px;"></i> Edit Blog Post
        </h3>
        <a href="<?= base_url('admin/blogs') ?>" style="text-decoration: none; color: var(--text-muted); font-weight: 500; font-size: 0.9rem;">
            <i class="fa-solid fa-arrow-left"></i> Back to Blogs
        </a>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 24px; padding: 12px; border-radius: 8px; font-weight: 500; font-size: 0.9rem;">
            <i class="fa-solid fa-circle-exclamation"></i> <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/blogs/update/'.$blog['id']) ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Blog Title</label>
            <input type="text" name="title" value="<?= esc($blog['title']) ?>" required placeholder="e.g. 5 Reasons Why Kids Should Learn Python in 2026" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 0.95rem;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Cover Image</label>
                <?php if(!empty($blog['image_path'])): ?>
                    <div style="margin-bottom: 12px; border-radius: 8px; overflow: hidden; border: 1px solid var(--border); background: #f8fafc; max-width: 160px;">
                        <img src="<?= base_url($blog['image_path']) ?>" alt="Current Banner" style="width: 100%; max-height: 90px; object-fit: cover;">
                        <span style="display: block; text-align: center; font-size: 0.65rem; font-weight: 600; color: var(--text-muted); padding: 4px;">Active image</span>
                    </div>
                <?php endif; ?>
                <input type="file" name="image" accept="image/*" style="width: 100%; padding: 10px; border: 1px dashed var(--border); border-radius: 8px; background: #fafafa; outline: none;">
                <p style="font-size: 0.72rem; color: var(--text-muted); margin-top: 4px;">Recommended: 1200x630px landscape layout. Max size: 2MB. Leave blank to keep active image.</p>
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Publish Status</label>
                <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; background: #fff; font-size: 0.9rem;">
                    <option value="draft" <?= $blog['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                    <option value="published" <?= $blog['status'] == 'published' ? 'selected' : '' ?>>Published</option>
                </select>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Brief Excerpt / Summary</label>
            <textarea name="excerpt" rows="2" placeholder="Brief one-sentence description..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-size: 0.9rem;"><?= esc($blog['excerpt'] ?? '') ?></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 28px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Article Body Content</label>
            <textarea name="content" rows="12" required placeholder="Write your full article body here..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-size: 0.95rem; line-height: 1.6;"><?= esc($blog['content']) ?></textarea>
        </div>

        <div style="display: flex; gap: 12px; border-top: 1px solid var(--border); padding-top: 20px;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-weight: 700; border-radius: 8px; font-size: 0.9rem;">
                <i class="fa-solid fa-save" style="margin-right: 6px;"></i> Update Post
            </button>
            <a href="<?= base_url('admin/blogs') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main); padding: 12px 30px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; font-size: 0.9rem;">Cancel</a>
        </div>
    </form>
</div>
