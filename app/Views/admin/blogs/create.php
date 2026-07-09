<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 900px; padding: 28px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); background: #fff; border: 1px solid var(--border); margin: 0 auto;">
    
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; border-bottom: 1px solid var(--border); padding-bottom: 16px;">
        <h3 style="color: var(--text-main); font-weight: 700; margin: 0;">
            <i class="fa-solid fa-square-plus" style="color: var(--primary); margin-right: 8px;"></i> Write New Blog Post
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

    <form action="<?= base_url('admin/blogs/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Blog Title</label>
            <input type="text" name="title" required placeholder="e.g. 5 Reasons Why Kids Should Learn Python in 2026" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; font-size: 0.95rem;">
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Cover Image</label>
                <input type="file" name="image" accept="image/*" style="width: 100%; padding: 10px; border: 1px dashed var(--border); border-radius: 8px; background: #fafafa; outline: none;">
                <p style="font-size: 0.72rem; color: var(--text-muted); margin-top: 4px;">Recommended: 1200x630px landscape layout. Max size: 2MB.</p>
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Publish Status</label>
                <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; background: #fff; font-size: 0.9rem;">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Brief Excerpt / Summary</label>
            <textarea name="excerpt" rows="2" placeholder="Brief one-sentence description to display on search results & listing cards..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-size: 0.9rem;"></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 28px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Article Body Content</label>
            <textarea name="content" rows="12" required placeholder="Write your full article body here..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-size: 0.95rem; line-height: 1.6;"></textarea>
        </div>

        <div style="display: flex; gap: 12px; border-top: 1px solid var(--border); padding-top: 20px;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-weight: 700; border-radius: 8px; font-size: 0.9rem;">
                <i class="fa-solid fa-save" style="margin-right: 6px;"></i> Publish Post
            </button>
            <a href="<?= base_url('admin/blogs') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main); padding: 12px 30px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; font-size: 0.9rem;">Cancel</a>
        </div>
    </form>
</div>
