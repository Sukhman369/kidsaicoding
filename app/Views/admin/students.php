<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3 style="margin: 0;">🎓 Registered Students <span style="font-size: 14px; color: var(--text-muted); font-weight: 500;">(<?= count($students) ?> total)</span></h3>
    </div>
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; font-weight: 700;">#</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; font-weight: 700;">Student</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; font-weight: 700;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; font-weight: 700;">Joined</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $currentPage = (int) ($pager->getCurrentPage('students') ?? 1);
                $perPage = 10;
                $i = ($currentPage - 1) * $perPage + 1;
                foreach($students as $student): 
                ?>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 14px 12px; color: var(--text-muted); font-weight: 600;"><?= $i++ ?></td>
                    <td style="padding: 14px 12px;">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: linear-gradient(135deg, #4f46e5, #6366f1); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 12px; flex-shrink: 0;">
                                <?= strtoupper(substr($student['name'], 0, 2)) ?>
                            </div>
                            <div>
                                <div style="font-weight: 600;"><?= esc($student['name']) ?></div>
                                <div style="font-size: 12px; color: var(--text-muted);"><?= esc($student['email']) ?></div>
                            </div>
                        </div>
                    </td>
                    <td style="padding: 14px 12px;">
                        <span style="color: #10b981; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px;">
                            <span style="width: 8px; height: 8px; background: #10b981; border-radius: 50%;"></span>
                            <?= esc(ucfirst($student['status'] ?? 'active')) ?>
                        </span>
                    </td>
                    <td style="padding: 14px 12px; font-size: 13px; color: var(--text-muted); font-weight: 500;">
                        <?= date('M d, Y', strtotime($student['created_at'])) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($students)): ?>
                    <tr><td colspan="4" style="padding: 40px; text-align: center; color: var(--text-muted);">No students registered yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <?php if (isset($pager)): ?>
        <div style="margin-top: 16px;">
            <?= $pager->links('students', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
