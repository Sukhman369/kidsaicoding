<?= view('components/header', ['title' => $title ?? 'Teacher Training']) ?>

<style>
    .training-hero {
        background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 40%, #0369a1 100%);
        color: white;
        padding: 80px 0 120px;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 40px 40px;
    }
    .training-hero::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(249, 115, 22, 0.3) 0%, rgba(255, 255, 255, 0) 70%);
        top: -80px;
        left: -50px;
    }
    .badge-training {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: 1px solid rgba(255, 255, 255, 0.4);
        padding: 6px 16px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.05em;
        display: inline-block;
    }
    .training-card {
        background: white;
        border-radius: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
        padding: 40px;
        margin-top: -80px;
        position: relative;
        z-index: 10;
    }
    .curriculum-pill {
        background: #f0f9ff;
        border-left: 4px solid #0ea5e9;
        padding: 16px 20px;
        border-radius: 0 12px 12px 0;
        margin-bottom: 12px;
    }
</style>

<!-- Hero Section -->
<header class="training-hero text-center">
    <div class="container py-3">
        <span class="badge-training mb-3">CERTIFIED INSTRUCTOR & ACADEMY WORKSHOPS</span>
        <h1 class="display-4 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">Kids AI Coding Teacher Certification</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 720px; font-size: 1.15rem;">
            Empower yourself or your teaching staff with practical pedagogical skills in AI, Python, Scratch, and Game Development for students aged 7-18.
        </p>
    </div>
</header>

<!-- Main Container -->
<div class="container mb-5 pb-4">
    <div class="training-card">
        
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                <strong>Error:</strong> <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                <strong>Success!</strong> <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="row g-5">
            <!-- Left Column: Training Overview -->
            <div class="col-lg-6">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 0.1em;">ACADEMY CURRICULUM & CERTIFICATION</span>
                <h2 class="fw-bold h2 mt-2 mb-4" style="font-family: 'Outfit', sans-serif;">Master Modern STEM Teaching</h2>
                <p class="text-muted lh-lg mb-4">
                    Our training modules provide hands-on techniques, live class management templates, assignment evaluation frameworks, and project starter kits designed specifically for teaching kids.
                </p>

                <div class="curriculum-pill">
                    <h3 class="h6 fw-bold mb-1 text-dark">Module 1: Visual Block Coding & Scratch Mastery</h3>
                    <p class="small text-muted mb-0">Teaching animation logic, sprite physics, and interactive storytelling for kids aged 7-10.</p>
                </div>

                <div class="curriculum-pill" style="border-left-color: #f97316; background: #fff7ed;">
                    <h3 class="h6 fw-bold mb-1 text-dark">Module 2: Python Algorithms & Game Design</h3>
                    <p class="small text-muted mb-0">Transitioning students from blocks to Pygame, turtle graphics, and object-oriented concepts.</p>
                </div>

                <div class="curriculum-pill" style="border-left-color: #8b5cf6; background: #f5f3ff;">
                    <h3 class="h6 fw-bold mb-1 text-dark">Module 3: Artificial Intelligence & Machine Learning</h3>
                    <p class="small text-muted mb-0">Building image recognition models, speech classifiers, and prompt engineering activities for teens.</p>
                </div>

                <div class="curriculum-pill" style="border-left-color: #10b981; background: #ecfdf5;">
                    <h3 class="h6 fw-bold mb-1 text-dark">Module 4: Classroom Management & Zoom Engagement</h3>
                    <p class="small text-muted mb-0">Best practices for keeping online batches engaged, managing breakout rooms, and issuing parent reports.</p>
                </div>
            </div>

            <!-- Right Column: Registration Form -->
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded-4 border">
                    <h3 class="h4 fw-bold mb-1" style="font-family: 'Outfit', sans-serif;">Register for Training</h3>
                    <p class="text-muted small mb-4">Join an upcoming instructor batch or request customized group training for your academy.</p>

                    <form action="<?= base_url('training/submit') ?>" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="full_name" class="form-label fw-bold small">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="full_name" id="full_name" class="form-control form-control-lg fs-6" placeholder="e.g. Ananya Sen" value="<?= old('full_name') ?>" required>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold small">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg fs-6" placeholder="ananya@example.com" value="<?= old('email') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold small">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control form-control-lg fs-6" placeholder="+91 98765 43210" value="<?= old('phone') ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="role" class="form-label fw-bold small">Current Role</label>
                                <select name="role" id="role" class="form-select form-select-lg fs-6">
                                    <option value="teacher">Independent Teacher / Tutor</option>
                                    <option value="academy_owner">Coding Academy Owner</option>
                                    <option value="school_educator">School Educator / Computer Teacher</option>
                                    <option value="other">Other Tech Professional</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="experience_years" class="form-label fw-bold small">Teaching Experience</label>
                                <select name="experience_years" id="experience_years" class="form-select form-select-lg fs-6">
                                    <option value="0-1 years">Beginner (0-1 years)</option>
                                    <option value="1-3 years">Intermediate (1-3 years)</option>
                                    <option value="3+ years">Experienced (3+ years)</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="program_type" class="form-label fw-bold small">Program Preference</label>
                            <select name="program_type" id="program_type" class="form-select form-select-lg fs-6">
                                <option value="certification">Instructor Certification Workshop (4-Week Live)</option>
                                <option value="bootcamp">Weekend Fast-Track Bootcamp</option>
                                <option value="institutional">Institutional / Staff Bulk Training</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="notes" class="form-label fw-bold small">Additional Notes / Questions</label>
                            <textarea name="notes" id="notes" rows="3" class="form-control fs-6" placeholder="Tell us about your teaching goals or target subjects..."><?= old('notes') ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold fs-6 shadow-sm" style="border-radius: 12px; background: #0ea5e9; border: none;">
                            🎓 Register for Instructor Training
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
