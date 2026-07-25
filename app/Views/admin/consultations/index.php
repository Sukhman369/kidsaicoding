<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- Consultation Requests Card -->
<div class="card mb-5">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div>
            <h3 style="margin: 0; font-family: 'Outfit', sans-serif;">Enterprise Consultation Requests</h3>
            <span style="font-size: 13px; color: var(--text-muted);">Inquiries for White-Labeling, Custom Server Deployments & Custom Feature Engineering</span>
        </div>
        <span class="badge bg-primary px-3 py-2" style="border-radius: 8px;">Paid Services</span>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Client Info</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Type & Budget</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; width: 35%;">Project Message</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Submitted</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($consultations)): ?>
                    <tr>
                        <td colspan="6" style="padding: 24px; text-align: center; color: var(--text-muted);">No consultation requests submitted yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($consultations as $c): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px;">
                                <div style="font-weight: 600; color: #1e293b;"><?= esc($c['name']) ?></div>
                                <?php if (!empty($c['organization'])): ?>
                                    <div style="font-size: 12px; font-weight: 600; color: #4f46e5;">🏫 <?= esc($c['organization']) ?></div>
                                <?php endif; ?>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-envelope" style="width: 16px;"></i> <?= esc($c['email']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="width: 16px;"></i> <?= esc($c['phone']) ?></div>
                            </td>
                            <td style="padding: 16px 12px;">
                                <span class="badge bg-light text-dark border mb-1" style="font-size: 11px;"><?= esc(ucwords(str_replace('_', ' ', $c['service_type']))) ?></span>
                                <div style="font-size: 12px; color: #16a34a; font-weight: 700;"><?= esc($c['budget'] ?? 'N/A') ?></div>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; line-height: 1.5; color: #334155;">
                                <?= nl2br(esc($c['message'])) ?>
                            </td>
                            <td style="padding: 16px 12px; font-size: 12px; color: var(--text-muted);">
                                <?= date('d M Y', strtotime($c['created_at'])) ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <?php
                                    $badgeBg = '#fef3c7'; $badgeColor = '#92400e';
                                    if ($c['status'] === 'in_progress') { $badgeBg = '#dbeafe'; $badgeColor = '#1e40af'; }
                                    if ($c['status'] === 'completed') { $badgeBg = '#d1fae5'; $badgeColor = '#065f46'; }
                                    if ($c['status'] === 'closed') { $badgeBg = '#f1f5f9'; $badgeColor = '#64748b'; }
                                ?>
                                <span style="padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; background: <?= $badgeBg ?>; color: <?= $badgeColor ?>; text-transform: uppercase;">
                                    <?= esc($c['status']) ?>
                                </span>
                            </td>
                            <td style="padding: 16px 12px; text-align: right;">
                                <form action="<?= base_url('admin/consultations/update-status/' . $c['id']) ?>" method="POST" style="display: inline-block;">
                                    <?= csrf_field() ?>
                                    <select name="status" onchange="this.form.submit()" style="padding: 4px 8px; font-size: 12px; border-radius: 6px; border: 1px solid #cbd5e1;">
                                        <option value="new" <?= $c['status'] === 'new' ? 'selected' : '' ?>>New</option>
                                        <option value="in_progress" <?= $c['status'] === 'in_progress' ? 'selected' : '' ?>>In Progress</option>
                                        <option value="completed" <?= $c['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                                        <option value="closed" <?= $c['status'] === 'closed' ? 'selected' : '' ?>>Closed</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Teacher & Academy Training Registrations Card -->
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <div>
            <h3 style="margin: 0; font-family: 'Outfit', sans-serif;">Teacher Training Registrations</h3>
            <span style="font-size: 13px; color: var(--text-muted);">Instructors & Academy Staff applying for AI Educator Certification</span>
        </div>
        <span class="badge bg-info text-white px-3 py-2" style="border-radius: 8px;">Training Services</span>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Applicant Info</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Role & Exp</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Program Preference</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; width: 30%;">Notes</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($trainings)): ?>
                    <tr>
                        <td colspan="6" style="padding: 24px; text-align: center; color: var(--text-muted);">No teacher training applications registered yet.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($trainings as $t): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 16px 12px;">
                                <div style="font-weight: 600; color: #1e293b;"><?= esc($t['full_name']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-envelope" style="width: 16px;"></i> <?= esc($t['email']) ?></div>
                                <div style="font-size: 13px; color: var(--text-muted);"><i class="fa-solid fa-phone" style="width: 16px;"></i> <?= esc($t['phone']) ?></div>
                            </td>
                            <td style="padding: 16px 12px;">
                                <div style="font-size: 13px; font-weight: 600;"><?= esc(ucwords(str_replace('_', ' ', $t['role']))) ?></div>
                                <div style="font-size: 12px; color: var(--text-muted);"><?= esc($t['experience_years'] ?? '0-1 yrs') ?></div>
                            </td>
                            <td style="padding: 16px 12px;">
                                <span class="badge bg-light text-primary border" style="font-size: 11px;"><?= esc(ucwords($t['program_type'])) ?></span>
                            </td>
                            <td style="padding: 16px 12px; font-size: 13px; color: #334155;">
                                <?= !empty($t['notes']) ? nl2br(esc($t['notes'])) : '<span class="text-muted fs-7">No notes provided</span>' ?>
                            </td>
                            <td style="padding: 16px 12px;">
                                <?php
                                    $tBadgeBg = '#fef3c7'; $tBadgeColor = '#92400e';
                                    if ($t['status'] === 'contacted') { $tBadgeBg = '#dbeafe'; $tBadgeColor = '#1e40af'; }
                                    if ($t['status'] === 'approved') { $tBadgeBg = '#d1fae5'; $tBadgeColor = '#065f46'; }
                                    if ($t['status'] === 'completed') { $tBadgeBg = '#e0e7ff'; $tBadgeColor = '#3730a3'; }
                                ?>
                                <span style="padding: 4px 10px; border-radius: 6px; font-size: 11px; font-weight: 700; background: <?= $tBadgeBg ?>; color: <?= $tBadgeColor ?>; text-transform: uppercase;">
                                    <?= esc($t['status']) ?>
                                </span>
                            </td>
                            <td style="padding: 16px 12px; text-align: right;">
                                <form action="<?= base_url('admin/consultations/update-training-status/' . $t['id']) ?>" method="POST" style="display: inline-block;">
                                    <?= csrf_field() ?>
                                    <select name="status" onchange="this.form.submit()" style="padding: 4px 8px; font-size: 12px; border-radius: 6px; border: 1px solid #cbd5e1;">
                                        <option value="pending" <?= $t['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="contacted" <?= $t['status'] === 'contacted' ? 'selected' : '' ?>>Contacted</option>
                                        <option value="approved" <?= $t['status'] === 'approved' ? 'selected' : '' ?>>Approved</option>
                                        <option value="completed" <?= $t['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
