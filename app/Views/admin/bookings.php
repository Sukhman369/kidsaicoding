<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card">
    <h3 style="margin-bottom: 24px;">Demo Bookings</h3>
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Academic Info</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Name</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Schedule</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                    <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bookings as $booking): ?>
                <tr style="border-bottom: 1px solid var(--border);">
                    <td style="padding: 16px 12px;">
                        <div style="font-weight: 600;">Grade <?= $booking['student_grade'] ?></div>
                        <div style="font-size: 12px; color: var(--text-muted); mt-1;"><?= $booking['school_name'] ?></div>
                        <div style="font-size: 12px; color: var(--text-muted);"><?= $booking['city'] ?></div>
                    </td>
                    <td style="padding: 16px 12px;">
                        <div style="font-weight: 600;"><?= $booking['parent_name'] ?></div>
                        <div style="font-size: 12px; color: var(--text-muted);"><?= $booking['email'] ?></div>
                        <div style="font-size: 12px; color: var(--text-muted);"><?= $booking['phone'] ?></div>
                    </td>
                    <td style="padding: 16px 12px;">
                        <div style="font-weight: 600;"><?= date('D, M d', strtotime($booking['booking_date'])) ?></div>
                        <div style="font-size: 13px; color: var(--primary); font-weight: 600;">at <?= date('h:i A', strtotime($booking['booking_time'])) ?></div>
                    </td>
                    <td style="padding: 16px 12px;">
                        <span style="padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; 
                            <?php if($booking['status'] == 'pending'): ?> background: #fff7ed; color: #9a3412; <?php endif; ?>
                            <?php if($booking['status'] == 'confirmed'): ?> background: #ecfdf5; color: #065f46; <?php endif; ?>
                            text-transform: capitalize;">
                            <?= $booking['status'] ?>
                        </span>
                    </td>
                    <td style="padding: 16px 12px; text-align: right;">
                        <form action="<?= base_url('admin/bookings/update/'.$booking['id']) ?>" method="POST" style="display: inline-block;">
                            <?= csrf_field() ?>
                            <select name="status" onchange="this.form.submit()" style="padding: 4px 8px; border-radius: 6px; font-size: 12px; border: 1px solid var(--border);">
                                <option value="pending" <?= $booking['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                                <option value="confirmed" <?= $booking['status'] == 'confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                <option value="attended" <?= $booking['status'] == 'attended' ? 'selected' : '' ?>>Attended</option>
                                <option value="cancelled" <?= $booking['status'] == 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                            </select>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($bookings)): ?>
                    <tr><td colspan="5" style="padding: 40px; text-align: center; color: var(--text-muted);">No demo bookings yet.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <!-- Pagination Links -->
    <?php if (isset($pager)): ?>
        <div style="margin-top: 16px;">
            <?= $pager->links('bookings', 'admin_pager') ?>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>
