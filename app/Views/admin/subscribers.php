<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 800px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0;">Newsletter Subscribers</h3>
        <span style="font-size: 13px; color: var(--text-muted);">Users subscribed to promotional campaigns</span>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Email Address</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Subscribed At</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($subscribers)): ?>
                    <tr>
                        <td colspan="4" style="padding: 24px; text-align: center; color: var(--text-muted);">No subscribers present yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($subscribers as $sub): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px; font-weight: 600; color: var(--text-color);">
                                <?= esc($sub['email']) ?>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; color: var(--text-muted);">
                                <?= date('d M Y, h:i A', strtotime($sub['created_at'])) ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <span style="padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; background: #d1fae5; color: #065f46; text-transform: uppercase;">Subscribed</span>
                            </td>
                            <td style="padding: 16px 12px; text-align: right;">
                                <a href="<?= base_url('admin/subscribers/delete/' . $sub['id']) ?>" style="color: #ef4444; font-size: 14px; padding: 6px; display: inline-block;" onclick="return confirm('Are you sure you want to unsubscribe / remove this email?')" title="Unsubscribe Subscriber">
                                    <i class="fa-solid fa-user-minus"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <?php if (isset($pager)): ?>
        <div style="margin-top: 24px;">
            <?= $pager->links('subscribers', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
