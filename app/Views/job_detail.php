<?= view('components/header', ['title' => $job['title']]) ?>

<style>
    .job-header-bg {
        background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
        color: white;
        padding: 60px 0;
    }
    .apply-container {
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        background: #fff;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .job-section-title {
        font-size: 1.25rem;
        font-weight: 700;
        border-bottom: 2px solid #f97316;
        padding-bottom: 8px;
        display: inline-block;
        margin-bottom: 20px;
        color: #1e293b;
    }
    .job-metadata-item {
        background: rgba(255,255,255,0.08);
        border-radius: 8px;
        padding: 10px 16px;
        font-size: 0.9rem;
    }
</style>

<div class="job-header-bg">
    <div class="container">
        <a href="<?= base_url('careers') ?>" class="text-white-50 text-decoration-none small d-inline-block mb-3">
            <i class="fa-solid fa-arrow-left me-2"></i> Back to Careers
        </a>
        <h1 class="fw-bold mb-3"><?= esc($job['title']) ?></h1>
        
        <div class="d-flex flex-wrap gap-3">
            <div class="job-metadata-item">
                <i class="fa-solid fa-bookmark me-2 text-warning"></i>Department: <strong><?= esc($job['department']) ?></strong>
            </div>
            <div class="job-metadata-item">
                <i class="fa-solid fa-location-dot me-2 text-warning"></i>Location: <strong><?= esc($job['location']) ?></strong>
            </div>
            <div class="job-metadata-item">
                <i class="fa-solid fa-clock me-2 text-warning"></i>Type: <strong><?= esc($job['type']) ?></strong>
            </div>
        </div>
    </div>
</div>

<main class="container my-5 py-3">
    <div class="row g-5">
        <div class="col-lg-7">
            <div class="mb-5">
                <span class="job-section-title">Job Description</span>
                <div class="text-secondary" style="line-height: 1.7; font-size: 0.95rem;">
                    <?= nl2br(esc($job['description'])) ?>
                </div>
            </div>

            <div>
                <span class="job-section-title">Requirements & Skills</span>
                <div class="text-secondary" style="line-height: 1.7; font-size: 0.95rem;">
                    <?= nl2br(esc($job['requirements'])) ?>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="apply-container p-4 p-md-5">
                <h3 class="fw-bold text-dark mb-4">Apply for This Position</h3>

                <?php if(session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger" style="border-radius: 8px; font-size: 0.85rem;">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('careers/submit') ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="job_id" value="<?= esc($job['id']) ?>">

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="John Doe" value="<?= old('name') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="john@example.com" value="<?= old('email') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="+91 00000 00000" value="<?= old('phone') ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Upload Resume (PDF, DOC, DOCX)</label>
                        <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        <div class="form-text x-small text-muted">Max file size: 5MB. PDF, DOC or DOCX formats only.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label small fw-bold">Cover Letter / Introduction (Optional)</label>
                        <textarea name="cover_letter" class="form-control" rows="4" placeholder="Briefly present why you are a fit for this role..."><?= old('cover_letter') ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 shadow">Submit Application 🚀</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?= view('components/footer') ?>
