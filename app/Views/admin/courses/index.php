<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<?php
// Group courses dynamically by Category Tracks
$groupedCourses = [];
$defaultCategories = ['Programming', 'Game Design', 'AI & Robotics', 'Web Dev', 'Other'];

// Initialize default buckets to maintain structured display order
foreach ($defaultCategories as $cat) {
    $groupedCourses[$cat] = [];
}

foreach ($courses as $course) {
    $cat = !empty($course['course_type']) ? $course['course_type'] : 'Other';
    if (!isset($groupedCourses[$cat])) {
        $groupedCourses[$cat] = [];
    }
    $groupedCourses[$cat][] = $course;
}
?>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <div>
        <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--text-main); margin: 0;">Course Catalog Management</h2>
        <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px; margin-bottom: 0;">Create and categorize courses for the public website catalog.</p>
    </div>
    <a href="<?= base_url('admin/courses/create') ?>" class="btn btn-primary" style="padding: 12px 24px; font-weight: 700; border-radius: 8px; box-shadow: 0 4px 12px rgba(249, 115, 22, 0.2);">
        <i class="fa-solid fa-plus-circle" style="margin-right: 6px;"></i> Create New Course
    </a>
</div>

<?php if(session()->getFlashdata('success')): ?>
    <div style="padding: 16px; background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; border-radius: 12px; margin-bottom: 24px; font-weight: 500;">
        <i class="fa-solid fa-circle-check" style="margin-right: 8px;"></i> <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<div style="display: flex; flex-direction: column; gap: 30px;">
    <?php foreach($groupedCourses as $category => $list): ?>
        <?php if (!empty($list) || in_array($category, $defaultCategories)): ?>
            <!-- Category Group Card -->
            <div class="card" style="padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.015); border: 1px solid var(--border);">
                
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 2px solid #f8fafc; padding-bottom: 12px;">
                    <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.15rem; font-weight: 800; color: var(--primary); margin: 0; display: flex; align-items: center; gap: 8px;">
                        <span style="display:inline-block; width: 6px; height: 18px; background: var(--primary); border-radius: 4px;"></span>
                        <?= esc($category) ?> Track <span style="font-size: 0.8rem; background: #f1f5f9; color: var(--text-muted); padding: 2px 8px; border-radius: 99px; margin-left: 6px; font-weight: 600;"><?= count($list) ?> course(s)</span>
                    </h3>
                </div>

                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; vertical-align: middle;">
                        <thead>
                            <tr style="border-bottom: 1px solid var(--border);">
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Course Banner</th>
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Title & Badge</th>
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Duration / Cost</th>
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Target Age / Difficulty</th>
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase;">Status</th>
                                <th style="padding: 12px 16px; color: var(--text-muted); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; text-align: right;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($list as $course): ?>
                                <tr style="border-bottom: 1px solid #f8fafc; transition: background 0.2s;" onmouseover="this.style.background='#fafdfc'" onmouseout="this.style.background='none'">
                                    <!-- Banner Image -->
                                    <td style="padding: 12px 16px;">
                                        <?php if (!empty($course['image_path'])): ?>
                                            <img src="<?= base_url($course['image_path']) ?>" alt="Banner" style="width: 64px; height: 44px; object-fit: cover; border-radius: 6px; border: 1px solid var(--border);">
                                        <?php else: ?>
                                            <div style="width: 64px; height: 44px; background: #e2e8f0; border-radius: 6px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #a0aec0; font-weight: bold;">No Img</div>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <!-- Title and Badge -->
                                    <td style="padding: 12px 16px;">
                                        <div style="font-weight: 700; color: var(--text-main); font-size: 0.95rem;"><?= esc($course['title']) ?></div>
                                        <div style="display: flex; gap: 6px; align-items: center; margin-top: 4px;">
                                            <span style="font-size: 0.7rem; color: #64748b; font-weight: 600;">Order: <?= esc($course['order_index']) ?></span>
                                            <?php if (!empty($course['badge'])): ?>
                                                <span style="background: #fff8e6; color: #d97706; padding: 1px 7px; border-radius: 4px; font-size: 10px; font-weight: 700; border: 1px solid #fde68a; text-transform: uppercase; letter-spacing: 0.05em;"><?= esc($course['badge']) ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <!-- Duration / Pricing -->
                                    <td style="padding: 12px 16px;">
                                        <div style="font-weight: 600; font-size: 0.85rem; color: var(--text-main);"><?= esc($course['duration'] ?? '12 Sessions') ?></div>
                                        <div style="font-size: 0.8rem; color: var(--text-muted); margin-top: 2px;">
                                            <span style="color: #10b981; font-weight: 700;">₹<?= number_format($course['price'] ?? 0) ?></span>
                                            <?php if (!empty($course['compare_price'])): ?>
                                                <span style="text-decoration: line-through; font-size: 0.72rem; margin-left: 4px;">₹<?= number_format($course['compare_price']) ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <!-- Target Age / Grade / Difficulty -->
                                    <td style="padding: 12px 16px;">
                                        <div style="font-size: 0.85rem; color: var(--text-main); font-weight: 600;">Ages <?= esc($course['age_range']) ?></div>
                                        <div style="font-size: 0.76rem; color: var(--text-muted); margin-top: 2px; display: flex; align-items: center; gap: 4px;">
                                            <?= esc($course['grade_range']) ?> | 
                                            <span style="font-weight: 700; color: <?= $course['difficulty'] == 'Beginner' ? '#16a34a' : ($course['difficulty'] == 'Intermediate' ? '#ca8a04' : '#9333ea') ?>"><?= esc($course['difficulty'] ?? 'Beginner') ?></span>
                                        </div>
                                    </td>

                                    <!-- Status -->
                                    <td style="padding: 12px 16px;">
                                        <span style="display: inline-flex; align-items: center; gap: 6px; font-size: 12px; font-weight: 700; color: <?= $course['status'] == 'published' ? '#10b981' : '#f59e0b' ?>;">
                                            <span style="width: 8px; height: 8px; border-radius: 50%; background: currentColor;"></span>
                                            <?= ucfirst($course['status']) ?>
                                        </span>
                                    </td>

                                    <!-- Action Buttons -->
                                    <td style="padding: 12px 16px; text-align: right;">
                                        <div style="display: flex; gap: 12px; justify-content: flex-end; align-items: center;">
                                            <a href="<?= base_url('course/'.$course['slug']) ?>" target="_blank" title="Preview on Website" style="color: #64748b; font-size: 0.95rem; transition: color 0.15s;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='#64748b'"><i class="fa-solid fa-eye"></i></a>
                                            <a href="<?= base_url('admin/courses/edit/'.$course['id']) ?>" title="Edit details" style="color: #4f46e5; font-size: 0.95rem; transition: color 0.15s;" onmouseover="this.style.color='#312e81'" onmouseout="this.style.color='#4f46e5'"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="<?= base_url('admin/courses/delete/'.$course['id']) ?>" title="Delete" style="color: #ef4444; font-size: 0.95rem; transition: color 0.15s;" onmouseover="this.style.color='#991b1b'" onmouseout="this.style.color='#ef4444'" onclick="return confirm('WARNING: Are you sure you want to permanently delete this course and all associated highlights?')"><i class="fa-solid fa-trash-can"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php if (empty($list)): ?>
                    <div style="padding: 24px; text-align: center; color: var(--text-muted); font-size: 0.9rem; background: #fafafa; border-radius: 8px; margin-top: 10px;">
                        No courses registered under <?= esc($category) ?> track yet.
                    </div>
                <?php endif; ?>

            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>
