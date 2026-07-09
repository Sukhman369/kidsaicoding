<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- KPI Stats Row -->
<div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 24px; margin-bottom: 40px;">
    
    <!-- Demo Bookings -->
    <div class="card" style="border-left: 4px solid #f59e0b; position: relative; overflow: hidden;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <div>
                <div style="color: var(--text-muted); font-size: 13px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Demo Bookings</div>
                <div style="font-size: 36px; font-weight: 800; line-height: 1;"><?= $totalBookings ?></div>
                <div style="display: flex; gap: 10px; margin-top: 10px;">
                    <span style="font-size: 11px; font-weight: 700; background: #fff7ed; color: #9a3412; padding: 3px 8px; border-radius: 6px;">⏳ <?= $pendingBookings ?> Pending</span>
                    <span style="font-size: 11px; font-weight: 700; background: #ecfdf5; color: #065f46; padding: 3px 8px; border-radius: 6px;">✅ <?= $confirmedBookings ?> Confirmed</span>
                </div>
            </div>
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #fffbeb; display: flex; align-items: center; justify-content: center; font-size: 22px;">📅</div>
        </div>
    </div>
    
    <!-- Registered Students -->
    <div class="card" style="border-left: 4px solid #4f46e5; position: relative; overflow: hidden;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <div>
                <div style="color: var(--text-muted); font-size: 13px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Registered Students</div>
                <div style="font-size: 36px; font-weight: 800; line-height: 1;"><?= $totalStudents ?></div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 11px; font-weight: 700; background: #eef2ff; color: #4338ca; padding: 3px 8px; border-radius: 6px;">👤 Active Accounts</span>
                </div>
            </div>
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #eef2ff; display: flex; align-items: center; justify-content: center; font-size: 22px;">🎓</div>
        </div>
    </div>
    
    <!-- Revenue -->
    <div class="card" style="border-left: 4px solid #10b981; position: relative; overflow: hidden;">
        <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <div>
                <div style="color: var(--text-muted); font-size: 13px; font-weight: 600; text-transform: uppercase; margin-bottom: 8px;">Est. Revenue</div>
                <div style="font-size: 36px; font-weight: 800; line-height: 1;">₹<?= number_format($totalRevenue) ?></div>
                <div style="margin-top: 10px;">
                    <span style="font-size: 11px; font-weight: 700; background: #ecfdf5; color: #065f46; padding: 3px 8px; border-radius: 6px;">💰 From Attended Sessions</span>
                </div>
            </div>
            <div style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; display: flex; align-items: center; justify-content: center; font-size: 22px;">💵</div>
        </div>
    </div>

</div>

<!-- Main Content: Recent Bookings + Recent Students + Quick Actions -->
<div style="display: grid; grid-template-columns: 1fr 380px; gap: 24px; align-items: start;">

    <!-- Recent Bookings Table -->
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="margin: 0;">📅 Recent Demo Bookings</h3>
            <a href="<?= base_url('admin/bookings') ?>" style="font-size: 13px; font-weight: 700; color: var(--primary); text-decoration: none;">View All →</a>
        </div>
        <?php if (empty($recentBookings)): ?>
            <div style="text-align: center; padding: 40px 0; color: var(--text-muted);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">📭</div>
                <p>No demo bookings received yet.</p>
            </div>
        <?php else: ?>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                            <th style="padding: 10px 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; font-weight: 700;">Parent</th>
                            <th style="padding: 10px 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; font-weight: 700;">Grade</th>
                            <th style="padding: 10px 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; font-weight: 700;">Schedule</th>
                            <th style="padding: 10px 12px; color: var(--text-muted); font-size: 12px; text-transform: uppercase; font-weight: 700;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recentBookings as $booking): ?>
                        <tr style="border-bottom: 1px solid var(--border);">
                            <td style="padding: 14px 12px;">
                                <div style="font-weight: 600;"><?= esc($booking['parent_name']) ?></div>
                                <div style="font-size: 12px; color: var(--text-muted);"><?= esc($booking['email']) ?></div>
                            </td>
                            <td style="padding: 14px 12px;">
                                <span style="background: #f1f5f9; padding: 3px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;"><?= esc($booking['student_grade']) ?></span>
                            </td>
                            <td style="padding: 14px 12px;">
                                <div style="font-weight: 600; font-size: 13px;"><?= date('M d, Y', strtotime($booking['booking_date'])) ?></div>
                                <div style="font-size: 12px; color: var(--primary); font-weight: 600;"><?= esc($booking['booking_time']) ?></div>
                            </td>
                            <td style="padding: 14px 12px;">
                                <?php if ($booking['status'] === 'pending'): ?>
                                    <span style="background: #fff7ed; color: #9a3412; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">Pending</span>
                                <?php elseif ($booking['status'] === 'confirmed'): ?>
                                    <span style="background: #ecfdf5; color: #065f46; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">Confirmed</span>
                                <?php elseif ($booking['status'] === 'attended'): ?>
                                    <span style="background: #e0f2fe; color: #075985; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600;">Attended</span>
                                <?php else: ?>
                                    <span style="background: #f1f5f9; color: #475569; padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; text-transform: capitalize;"><?= esc($booking['status']) ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>

    <!-- Right Column: Recent Students + Quick Actions -->
    <div style="display: flex; flex-direction: column; gap: 24px;">

        <!-- Quick Actions -->
        <div class="card">
            <h3 style="margin-bottom: 20px;">⚡ Quick Actions</h3>
            <div style="display: flex; flex-direction: column; gap: 10px;">
                <a href="<?= base_url('admin/bookings') ?>" style="display: flex; align-items: center; gap: 10px; padding: 12px; background: #f8fafc; border-radius: 10px; text-decoration: none; border: 1px solid var(--border); transition: all 0.2s;" onmouseover="this.style.background='#fef3c7'; this.style.borderColor='#fde68a'" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='var(--border)'">
                    <span style="font-size: 18px;">📅</span>
                    <span style="color: var(--text-main); font-weight: 600; font-size: 14px;">Review Bookings</span>
                </a>
                <a href="<?= base_url('admin/courses/create') ?>" style="display: flex; align-items: center; gap: 10px; padding: 12px; background: #f8fafc; border-radius: 10px; text-decoration: none; border: 1px solid var(--border); transition: all 0.2s;" onmouseover="this.style.background='#ecfdf5'; this.style.borderColor='#a7f3d0'" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='var(--border)'">
                    <span style="font-size: 18px;">📚</span>
                    <span style="color: var(--text-main); font-weight: 600; font-size: 14px;">Add New Course</span>
                </a>
                <a href="<?= base_url('admin/settings') ?>" style="display: flex; align-items: center; gap: 10px; padding: 12px; background: #f8fafc; border-radius: 10px; text-decoration: none; border: 1px solid var(--border); transition: all 0.2s;" onmouseover="this.style.background='#eef2ff'; this.style.borderColor='#c7d2fe'" onmouseout="this.style.background='#f8fafc'; this.style.borderColor='var(--border)'">
                    <span style="font-size: 18px;">⚙️</span>
                    <span style="color: var(--text-main); font-weight: 600; font-size: 14px;">Site Settings</span>
                </a>
            </div>
        </div>

        <!-- Recent Students -->
        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                <h3 style="margin: 0;">🎓 New Students</h3>
                <a href="<?= base_url('admin/students') ?>" style="font-size: 13px; font-weight: 700; color: var(--primary); text-decoration: none;">All →</a>
            </div>
            <?php if (empty($recentStudents)): ?>
                <p style="text-align: center; color: var(--text-muted); padding: 20px 0;">No student registrations yet.</p>
            <?php else: ?>
                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <?php foreach ($recentStudents as $student): ?>
                        <div style="display: flex; align-items: center; gap: 12px; padding: 10px; background: #f8fafc; border-radius: 10px; border: 1px solid #f1f5f9;">
                            <div style="width: 36px; height: 36px; border-radius: 10px; background: linear-gradient(135deg, #4f46e5, #6366f1); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 12px; flex-shrink: 0;">
                                <?= strtoupper(substr($student['name'], 0, 2)) ?>
                            </div>
                            <div style="overflow: hidden; flex: 1;">
                                <div style="font-weight: 600; font-size: 13px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= esc($student['name']) ?></div>
                                <div style="font-size: 11px; color: var(--text-muted); white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?= esc($student['email']) ?></div>
                            </div>
                            <div style="font-size: 11px; color: var(--text-muted); flex-shrink: 0; font-weight: 600;">
                                <?= date('M d', strtotime($student['created_at'])) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
