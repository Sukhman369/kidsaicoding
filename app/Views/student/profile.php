<?= view('components/portal_header', ['title' => 'Profile Settings']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'Manage your account information']) ?>

<div class="row g-4">
    <div class="col-md-4">
        <div class="data-card text-center py-5">
            <div style="width:100px; height:100px; background:var(--primary); border-radius:50%; margin:0 auto 20px; display:flex; align-items:center; justify-content:center; color:#fff; font-size:3rem; font-weight:700;">A</div>
            <h3 class="h5 fw-bold mb-1">Arjun Kumar</h3>
            <p class="text-muted small mb-3">Student ID: KID-2026-101</p>
            <button class="btn btn-outline-primary btn-sm">Change Photo</button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="data-card">
            <h2 class="h5 mb-4 border-bottom pb-2">Student Information</h2>
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted">First Name</label>
                    <input type="text" class="form-control" value="Arjun">
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold text-muted">Last Name</label>
                    <input type="text" class="form-control" value="Kumar">
                </div>
                <div class="col-md-12">
                    <label class="form-label small fw-bold text-muted">Associated Parent</label>
                    <input type="text" class="form-control" value="Rajesh Kumar" disabled>
                </div>
            </div>
            <button class="btn btn-primary px-4">Update Profile</button>
        </div>
    </div>
</div>

<?= view('components/portal_footer') ?>
