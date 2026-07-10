<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0;">Job Applicants</h3>
        <span style="font-size: 13px; color: var(--text-muted);">Review submitted resumes and application statuses</span>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Candidate Details</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Applied Role</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; width: 30%;">Cover Letter / Intro</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Resume</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($applicants)): ?>
                    <tr>
                        <td colspan="6" style="padding: 24px; text-align: center; color: var(--text-muted);">No job applications received yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($applicants as $app): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px;">
                                <div style="font-weight: 600;"><?= esc($app['name']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-envelope" style="width: 16px;"></i> <?= esc($app['email']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="width: 16px;"></i> <?= esc($app['phone']) ?></div>
                                <div style="font-size: 11px; color: var(--text-muted); margin-top: 4px;">Applied: <?= date('d M Y', strtotime($app['created_at'])) ?></div>
                            </td>
                            <td style="padding: 16px 12px;">
                                <?php if($app['job_title']): ?>
                                    <div style="font-weight: 600; color: var(--text-color);"><?= esc($app['job_title']) ?></div>
                                    <span style="font-size: 12px; padding: 2px 8px; border-radius: 4px; background: #f1f5f9; color: #64748b; font-weight: 500;"><?= esc($app['job_dept']) ?></span>
                                <?php else: ?>
                                    <span style="color: var(--text-muted); font-style: italic;">Deleted Position</span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; color: #475569; line-height: 1.5;">
                                <?= !empty($app['cover_letter']) ? nl2br(esc($app['cover_letter'])) : '<span style="font-style: italic; color: var(--text-muted);">None provided</span>' ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <a href="<?= base_url($app['resume_path']) ?>" target="_blank" class="btn btn-outline-primary" style="padding: 6px 12px; font-size: 12px; border-radius: 6px; display: inline-flex; align-items: center; gap: 6px;">
                                    <i class="fa-solid fa-file-arrow-down"></i> Open Resume
                                </a>
                            </td>
                            <td style="padding: 16px 12px; white-space: nowrap;">
                                <form action="<?= base_url('admin/applicants/update-status/' . $app['id']) ?>" method="POST" style="display: flex; gap: 6px; align-items: center;">
                                    <?= csrf_field() ?>
                                    <select name="status" style="padding: 5px; border-radius: 6px; border: 1px solid var(--border); font-size: 13px; font-weight: 600;">
                                        <option value="pending" <?= $app['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="reviewed" <?= $app['status'] === 'reviewed' ? 'selected' : '' ?>>Reviewed</option>
                                        <option value="shortlisted" <?= $app['status'] === 'shortlisted' ? 'selected' : '' ?>>Shortlisted</option>
                                        <option value="rejected" <?= $app['status'] === 'rejected' ? 'selected' : '' ?>>Rejected</option>
                                    </select>
                                    <button type="submit" style="padding: 5px 8px; border: none; border-radius: 6px; background: #e0f2fe; color: #0369a1; font-size: 12px; font-weight: 700; cursor: pointer;">Update</button>
                                </form>
                            </td>
                            <td style="padding: 16px 12px; text-align: right;">
                                <a href="<?= base_url('admin/applicants/delete/' . $app['id']) ?>" style="color: #ef4444; font-size: 14px;" onclick="return confirm('Are you sure you want to delete this applicant and their resume file?')" title="Delete Application">
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
            <?= $pager->links('applicants', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
