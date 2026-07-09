<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <div>
        <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--text-main); margin: 0;">Blog Management</h2>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Publish updates, news, and guides for the students/parents audience.</p>
    </div>
    <a href="<?= base_url('admin/blogs/create') ?>" class="btn btn-primary" style="padding: 12px 24px; font-weight: 700; border-radius: 8px;">
        <i class="fa-solid fa-plus-circle" style="margin-right: 6px;"></i> Create Post
    </a>
</div>

<?php if(session()->getFlashdata('success')): ?>
    <div style="padding: 16px; background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; border-radius: 12px; margin-bottom: 24px; font-weight: 500;">
        <i class="fa-solid fa-circle-check" style="margin-right: 8px;"></i> <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>
<?php if(session()->getFlashdata('error')): ?>
    <div style="padding: 16px; background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; border-radius: 12px; margin-bottom: 24px; font-weight: 500;">
        <i class="fa-solid fa-circle-exclamation" style="margin-right: 8px;"></i> <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<div class="card" style="padding: 24px; border-radius: 16px; background: #fff; border: 1px solid var(--border);">
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; vertical-align: middle;">
            <thead>
                <tr style="border-bottom: 1px solid var(--border);">
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; width: 100px;">Cover</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Article Details</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; width: 120px;">Author</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; width: 120px;">Status</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; text-align: right; width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($blogs as $blog): ?>
                    <tr style="border-bottom: 1px solid #f8fafc; transition: background 0.2s;" onmouseover="this.style.background='#fafdfc'" onmouseout="this.style.background='none'">
                        <!-- Image -->
                        <td style="padding: 16px;">
                            <?php if (!empty($blog['image_path'])): ?>
                                <img src="<?= base_url($blog['image_path']) ?>" alt="<?= esc($blog['title']) ?>" style="width: 70px; height: 50px; object-fit: cover; border-radius: 6px; border: 1px solid var(--border);">
                            <?php else: ?>
                                <div style="width: 70px; height: 50px; background: #e2e8f0; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; color: #a0aec0;">📝</div>
                            <?php endif; ?>
                        </td>

                        <!-- Details -->
                        <td style="padding: 16px;">
                            <div style="font-weight: 700; color: var(--text-main); font-size: 0.95rem;"><?= esc($blog['title']) ?></div>
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin-top: 4px; line-height: 1.4; max-width: 450px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= esc($blog['excerpt'] ?? '') ?></p>
                        </td>

                        <!-- Author -->
                        <td style="padding: 16px; font-size: 0.85rem; font-weight: 600; color: var(--text-main);">
                            <?= esc($blog['author']) ?>
                        </td>

                        <!-- Status -->
                        <td style="padding: 16px;">
                            <span style="font-size: 12px; font-weight: 700; padding: 4px 10px; border-radius: 6px; 
                                <?= $blog['status'] === 'published' ? 'background: #ecfdf5; color: #065f46;' : 'background: #f1f5f9; color: #475569;' ?>">
                                <?= ucfirst(esc($blog['status'])) ?>
                            </span>
                        </td>

                        <!-- Actions -->
                        <td style="padding: 16px; text-align: right;">
                            <a href="<?= base_url('admin/blogs/edit/'.$blog['id']) ?>" class="btn btn-outline" style="padding: 6px 12px; font-size: 0.8rem; background: #f8fafc; border: 1px solid var(--border); border-radius: 6px; color: var(--text-main); margin-right: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="<?= base_url('admin/blogs/delete/'.$blog['id']) ?>" onclick="return confirm('Are you sure you want to delete this blog post?')" class="btn" style="padding: 6px 12px; font-size: 0.8rem; background: #fee2e2; color: #dc2626; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
                <?php if (empty($blogs)): ?>
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 60px; color: var(--text-muted);">
                            <i class="fa-solid fa-newspaper" style="font-size: 2.5rem; color: var(--border); display: block; margin-bottom: 12px;"></i>
                            No blog posts written yet. Click "Create Post" to write your first article!
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <?php if (isset($pager)): ?>
        <div style="margin-top: 16px;">
            <?= $pager->links('blogs', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
