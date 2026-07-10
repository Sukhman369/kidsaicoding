<?= view('components/header', ['title' => 'Careers']) ?>

<style>
    .careers-hero {
        background: linear-gradient(135deg, #FFF7ED 0%, #F0F9FF 100%);
        padding: 80px 0;
        text-align: center;
    }
    .badge-job {
        font-size: 0.75rem;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 12px;
        text-transform: uppercase;
        display: inline-block;
    }
    .badge-tech { background-color: #e0f2fe; color: #0369a1; }
    .badge-edu { background-color: #fef3c7; color: #b45309; }
    .badge-ops { background-color: #d1fae5; color: #065f46; }
    
    .job-card {
        background: #fff;
        border: 1px solid rgba(0,0,0,0.04);
        border-radius: 16px;
        padding: 24px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
    }
    .job-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        border-color: rgba(249, 115, 22, 0.2);
    }
</style>

<section class="careers-hero">
    <div class="container">
        <span class="text-primary fw-bold text-uppercase tracking-wider small d-block mb-2">Join Our Mission</span>
        <h1 class="display-5 fw-extrabold text-dark mb-3">Shape the Future of AI & Coding Education</h1>
        <p class="lead text-muted mx-auto" style="max-width: 650px;">
            At KidsAI Coding Academy, we are empowering kids and teens to become builders, not just consumers, of technology. Help us scale our premium STEM lessons globally.
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container my-4">
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success p-3 rounded-3 mb-5 text-center shadow-sm">
                <i class="fa-solid fa-circle-check me-2"></i> <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <h2 class="fw-bold mb-4">Current Openings</h2>
        
        <?php if(empty($jobs)): ?>
            <div class="text-center py-5 rounded-4 bg-light">
                <span class="fs-1 d-block mb-3">💼</span>
                <h4 class="fw-bold text-secondary">No openings at this time</h4>
                <p class="text-muted">Feel free to check back later or check in with support@kidsaicoding.com</p>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach($jobs as $job): ?>
                    <div class="col-lg-6">
                        <div class="job-card d-flex flex-column h-100 justify-content-between">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge-job badge-tech"><?= esc($job['department']) ?></span>
                                    <span class="text-muted small"><i class="fa-solid fa-clock me-1"></i> <?= esc($job['type']) ?></span>
                                </div>
                                <h4 class="fw-bold text-dark mb-2"><?= esc($job['title']) ?></h4>
                                <div class="text-muted small mb-3">
                                    <span class="me-3"><i class="fa-solid fa-location-dot me-1"></i> <?= esc($job['location']) ?></span>
                                </div>
                                <p class="text-secondary small line-clamp-3">
                                    <?= esc(substr(strip_tags($job['description']), 0, 180)) ?>...
                                </p>
                            </div>
                            
                            <div class="mt-4 pt-3 border-top d-flex justify-content-end">
                                <a href="<?= base_url('careers/' . $job['id']) ?>" class="btn btn-outline-primary btn-sm px-4 rounded-pill">
                                    View Position <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= view('components/footer') ?>
