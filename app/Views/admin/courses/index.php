<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h3>Course List</h3>
        <a href="<?= base_url('admin/courses/create') ?>" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Add Course
        </a>
    </div>

    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border);">
                    <th style="padding: 12px; color: var(--text-muted); font-weight: 600;">Title</th>
                    <th style="padding: 12px; color: var(--text-muted); font-weight: 600;">Badge</th>
                    <th style="padding: 12px; color: var(--text-muted); font-weight: 600;">Age/Grade</th>
                    <th style="padding: 12px; color: var(--text-muted); font-weight: 600;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-weight: 600; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($courses as $course): ?>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 16px 12px; font-weight: 600;"><?= $course['title'] ?></td>
                    <td style="padding: 16px 12px;"><span style="background: #eef2ff; color: #4338ca; padding: 4px 8px; border-radius: 6px; font-size: 12px; font-weight: 600;"><?= $course['badge'] ?></span></td>
                    <td style="padding: 16px 12px;"><?= $course['age_range'] ?> / <?= $course['grade_range'] ?></td>
                    <td style="padding: 16px 12px;">
                        <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 600; color: <?= $course['status'] == 'published' ? '#10b981' : '#f59e0b' ?>;">
                            <span style="width: 8px; height: 8px; border-radius: 50%; background: currentColor;"></span>
                            <?= ucfirst($course['status']) ?>
                        </span>
                    </td>
                    <td style="padding: 16px 12px; text-align: right;">
                        <a href="<?= base_url('admin/courses/edit/'.$course['id']) ?>" style="color: #6366f1; margin-right: 12px;"><i class="fa-solid fa-pen"></i></a>
                        <a href="<?= base_url('admin/courses/delete/'.$course['id']) ?>" style="color: #ef4444;" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($courses)): ?>
                <tr>
                    <td colspan="5" style="padding: 40px; text-align: center; color: var(--text-muted);">No courses found. Add your first course!</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>
