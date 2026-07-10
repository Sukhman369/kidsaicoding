<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0;">Job Openings Management</h3>
        <a href="<?= base_url('admin/jobs/create') ?>" class="btn btn-primary d-flex align-items-center gap-2" style="font-size: 13px; padding: 8px 16px; border-radius: 8px; text-decoration: none;">
            <i class="fa-solid fa-plus"></i> Add New Position
        </a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Job Title</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Department</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Location</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Type</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($jobs)): ?>
                    <tr>
                        <td colspan="6" style="padding: 24px; text-align: center; color: var(--text-muted);">No job positions added yet. Click "Add New Position" to create one.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($jobs as $job): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px; font-weight: 600;">
                                <?= esc($job['title']) ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <span style="font-size: 12px; padding: 4px 10px; border-radius: 6px; background: #eef2ff; color: #4338ca; font-weight: 600;"><?= esc($job['department']) ?></span>
                            </td>
                            <td style="padding: 16px 12px; font-size: 14px; color: var(--text-color);">
                                <i class="fa-solid fa-location-dot" style="margin-right: 4px; color: var(--text-muted);"></i> <?= esc($job['location']) ?>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; color: var(--text-muted);">
                                <?= esc($job['type']) ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <?php if($job['status'] === 'active'): ?>
                                    <span style="color: #10b981; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                        <span style="width: 8px; height: 8px; background: #10b981; border-radius: 50%;"></span> Active
                                    </span>
                                <?php else: ?>
                                    <span style="color: #64748b; font-size: 13px; font-weight: 600; display: inline-flex; align-items: center; gap: 6px;">
                                        <span style="width: 8px; height: 8px; background: #94a3b8; border-radius: 50%;"></span> Inactive
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 16px 12px; text-align: right; font-size: 16px;">
                                <a href="<?= base_url('admin/jobs/edit/' . $job['id']) ?>" style="color: #f59e0b; margin-right: 12px;" title="Edit Position">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="<?= base_url('admin/jobs/delete/' . $job['id']) ?>" style="color: #ef4444;" onclick="return confirm('Delete this job posting? Candidates will no longer be able to apply to it.')" title="Delete Position">
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
            <?= $pager->links('jobs', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
