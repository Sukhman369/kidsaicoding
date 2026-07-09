<?= view('components/portal_header', ['title' => 'Profile Settings']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'Manage your student profile details']) ?>

<?php
$fullName = session()->get('userName') ?? 'Student Coder';
$parts = explode(' ', $fullName);
$firstName = $parts[0] ?? 'Student';
$lastName = $parts[1] ?? 'Coder';
$avatarLetter = strtoupper(substr($firstName, 0, 1));
$userEmail = session()->get('userEmail') ?? 'student@kidsai.com';
?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="data-card text-center py-5">
            <div style="width:100px; height:100px; background:var(--primary); border-radius:50%; margin:0 auto 20px; display:flex; align-items:center; justify-content:center; color:#fff; font-size:3rem; font-weight:700;">
                <?= esc($avatarLetter) ?>
            </div>
            <h3 class="h5 fw-bold mb-1"><?= esc($fullName) ?></h3>
            <p class="text-muted small mb-3">Associated Account: Student</p>
            <span class="badge bg-primary-subtle text-primary border rounded-pill px-3 py-1">Level 2 Coder</span>
        </div>
    </div>
    <div class="col-md-8">
        <div class="data-card">
            <h2 class="h5 mb-4 border-bottom pb-2">Student Information</h2>
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted">First Name</label>
                    <input type="text" class="form-control" value="<?= esc($firstName) ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted">Last Name</label>
                    <input type="text" class="form-control" value="<?= esc($lastName) ?>" readonly>
                </div>
                <div class="col-md-12">
                    <label class="form-label small fw-bold text-muted">Email Address</label>
                    <input type="email" class="form-control" value="<?= esc($userEmail) ?>" readonly>
                </div>
            </div>
            <p class="text-muted x-small">
                * Note: Profile modifications are restricted during the trial period. To update your name or switch grades, please contact your learning instructor.
            </p>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
