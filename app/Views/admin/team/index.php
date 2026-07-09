<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <div>
        <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--text-main); margin: 0;">Team Members Directory</h2>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Manage your instructor profiles and team members appearing on the About Us page.</p>
    </div>
    <a href="<?= base_url('admin/team/create') ?>" class="btn btn-primary" style="padding: 12px 24px; font-weight: 700; border-radius: 8px; box-shadow: 0 4px 12px rgba(249, 115, 22, 0.2);">
        <i class="fa-solid fa-plus-circle" style="margin-right: 6px;"></i> Add Team Member
    </a>
</div>

<div class="card" style="padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.015); border: 1px solid var(--border);">
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left; vertical-align: middle;">
            <thead>
                <tr style="border-bottom: 1px solid var(--border);">
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; width: 80px;">Photo</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Name</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Role / Bio</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; width: 100px;">Sort Order</th>
                    <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; text-align: right; width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($team as $member): ?>
                    <tr style="border-bottom: 1px solid #f8fafc; transition: background 0.2s;" onmouseover="this.style.background='#fafdfc'" onmouseout="this.style.background='none'">
                        <!-- Image -->
                        <td style="padding: 16px;">
                            <?php if (!empty($member['image_path'])): ?>
                                <img src="<?= base_url($member['image_path']) ?>" alt="<?= esc($member['name']) ?>" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; border: 2px solid var(--border);">
                            <?php else: ?>
                                <div style="width: 50px; height: 50px; background: #e2e8f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: #a0aec0;">👨‍🏫</div>
                            <?php endif; ?>
                        </td>

                        <!-- Name -->
                        <td style="padding: 16px;">
                            <div style="font-weight: 700; color: var(--text-main); font-size: 0.95rem;"><?= esc($member['name']) ?></div>
                        </td>

                        <!-- Role / Bio -->
                        <td style="padding: 16px;">
                            <div style="font-weight: 600; font-size: 0.85rem; color: var(--primary);"><?= esc($member['role']) ?></div>
                            <p style="font-size: 0.8rem; color: var(--text-muted); margin-top: 4px; line-height: 1.4; max-width: 450px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= esc($member['bio']) ?></p>
                        </td>

                        <!-- Sort Order -->
                        <td style="padding: 16px;">
                            <span style="font-size: 0.85rem; color: var(--text-main); font-weight: 600; background: #f1f5f9; padding: 4px 10px; border-radius: 6px;"><?= esc($member['order_index']) ?></span>
                        </td>

                        <!-- Actions -->
                        <td style="padding: 16px; text-align: right;">
                            <a href="<?= base_url('admin/team/edit/'.$member['id']) ?>" class="btn btn-outline" style="padding: 6px 12px; font-size: 0.8rem; background: #f8fafc; border: 1px solid var(--border); border-radius: 6px; color: var(--text-main); margin-right: 6px;">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="<?= base_url('admin/team/delete/'.$member['id']) ?>" onclick="return confirm('Are you sure you want to delete this team member?')" class="btn" style="padding: 6px 12px; font-size: 0.8rem; background: #fee2e2; color: #dc2626; border-radius: 6px;">
                                <i class="fa-solid fa-trash-can"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
                <?php if (empty($team)): ?>
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 40px; color: var(--text-muted);">
                            <i class="fa-solid fa-users" style="font-size: 2rem; color: var(--border); display: block; margin-bottom: 12px;"></i>
                            No team members configured. Click "Add Team Member" to populate your team directory!
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
