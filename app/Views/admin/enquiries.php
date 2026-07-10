<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0;">Enquiries Management</h3>
        <span style="font-size: 13px; color: var(--text-muted);">View and manage contact form submissions</span>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Contact Info</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; width: 45%;">Message</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Submitted At</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($enquiries)): ?>
                    <tr>
                        <td colspan="5" style="padding: 24px; text-align: center; color: var(--text-muted);">No enquiries found. All quiet!</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($enquiries as $enq): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px;">
                                <div style="font-weight: 600;"><?= esc($enq['name']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-envelope" style="width: 16px;"></i> <?= esc($enq['email']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="width: 16px;"></i> <?= esc($enq['phone']) ?></div>
                            </td>
                            <td style="padding: 16px 12px; font-size: 14px; line-height: 1.5; color: #475569;">
                                <?= nl2br(esc($enq['message'])) ?>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; color: var(--text-muted);">
                                <?= date('d M Y, h:i A', strtotime($enq['created_at'])) ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <?php if($enq['status'] === 'resolved'): ?>
                                    <span style="padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; background: #d1fae5; color: #065f46; text-transform: uppercase;">Resolved</span>
                                <?php else: ?>
                                    <span style="padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; background: #fef3c7; color: #92400e; text-transform: uppercase;">Pending</span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 16px 12px; text-align: right; white-space: nowrap;">
                                <?php if($enq['status'] === 'pending'): ?>
                                    <form action="<?= base_url('admin/enquiries/resolve/' . $enq['id']) ?>" method="POST" style="display: inline-block; margin-right: 12px;">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-primary" style="padding: 6px 12px; font-size: 12px; border-radius: 6px;" title="Mark as Resolved">
                                            <i class="fa-solid fa-check"></i> Resolve
                                        </button>
                                    </form>
                                <?php endif; ?>
                                <a href="<?= base_url('admin/enquiries/delete/' . $enq['id']) ?>" style="color: #ef4444; font-size: 14px; padding: 6px; display: inline-block;" onclick="return confirm('Are you sure you want to delete this enquiry record?')" title="Delete Enquiry">
                                    <i class="fa-solid fa-trash-can"></i>
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
            <?= $pager->links('enquiries', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
