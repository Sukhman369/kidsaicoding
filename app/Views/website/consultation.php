<?= view('components/header', ['title' => $title ?? 'Consultation']) ?>

<style>
    .consultation-hero {
        background: linear-gradient(135deg, #1e1b4b 0%, #312e81 40%, #4338ca 100%);
        color: white;
        padding: 80px 0 120px;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 40px 40px;
    }
    .consultation-hero::before {
        content: "";
        position: absolute;
        width: 350px;
        height: 350px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(14, 165, 233, 0.3) 0%, rgba(255, 255, 255, 0) 70%);
        top: -80px;
        right: -50px;
    }
    .badge-open-source {
        background: rgba(249, 115, 22, 0.2);
        color: #f97316;
        border: 1px solid rgba(249, 115, 22, 0.4);
        padding: 6px 16px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 0.85rem;
        letter-spacing: 0.05em;
        display: inline-block;
    }
    .consultation-card {
        background: white;
        border-radius: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.06);
        padding: 40px;
        margin-top: -80px;
        position: relative;
        z-index: 10;
    }
    .service-box {
        background: #f8fafc;
        border-radius: 16px;
        padding: 24px;
        border: 1px solid #e2e8f0;
        height: 100%;
        transition: all 0.3s ease;
    }
    .service-box:hover {
        border-color: #0ea5e9;
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(14, 165, 233, 0.08);
    }
    .service-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: #e0f2fe;
        color: #0ea5e9;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        margin-bottom: 16px;
    }
</style>

<!-- Hero Section -->
<header class="consultation-hero text-center">
    <div class="container py-3">
        <span class="badge-open-source mb-3">FREE OPEN SOURCE PLATFORM + PAID SERVICES</span>
        <h1 class="display-4 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">Enterprise & Custom Setup Consultation</h1>
        <p class="lead opacity-90 mx-auto" style="max-width: 700px; font-size: 1.15rem;">
            Deploy your own branded Kids AI Coding Academy for free! Need custom feature engineering, white-label setup, or payment gateway integration? Our architects are here to help.
        </p>
    </div>
</header>

<!-- Main Container -->
<div class="container mb-5 pb-4">
    <div class="consultation-card">
        
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
            <!-- Left Side: Offerings -->
            <div class="col-lg-6">
                <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 0.1em;">OUR CONSULTING SERVICES</span>
                <h2 class="fw-bold h2 mt-2 mb-4" style="font-family: 'Outfit', sans-serif;">How We Can Help Your Organization</h2>
                
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <div class="service-box">
                            <div class="service-icon">🏷️</div>
                            <h3 class="h6 fw-bold mb-2">White-Label Branding</h3>
                            <p class="text-muted small mb-0">Custom domain, custom logo, color theme tailoring, and branded certificates.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-box">
                            <div class="service-icon">☁️</div>
                            <h3 class="h6 fw-bold mb-2">Managed Cloud Hosting</h3>
                            <p class="text-muted small mb-0">Turnkey deployment on Hostinger, AWS, or DigitalOcean with zero-downtime database setups.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-box">
                            <div class="service-icon">💳</div>
                            <h3 class="h6 fw-bold mb-2">Settlement & Gateway Setup</h3>
                            <p class="text-muted small mb-0">Custom Razorpay, Stripe, or local bank payout integrations with auto-split settlements.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="service-box">
                            <div class="service-icon">🧩</div>
                            <h3 class="h6 fw-bold mb-2">Custom Feature Engineering</h3>
                            <p class="text-muted small mb-0">Custom LMS modules, attendance apps, Zoom automations, and parent WhatsApp updates.</p>
                        </div>
                    </div>
                </div>

                <div class="p-3 rounded-3" style="background: #fff7ed; border: 1px dashed #f97316;">
                    <div class="d-flex align-items-center gap-3">
                        <div style="font-size: 2rem;">💡</div>
                        <div>
                            <h4 class="h6 fw-bold text-dark mb-1">100% Free Core Platform</h4>
                            <p class="small text-muted mb-0">The core platform source code is completely free and open-source. You only pay if you hire us for dedicated setup, consultation, or custom code development.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-6">
                <div class="bg-light p-4 rounded-4 border">
                    <h3 class="h4 fw-bold mb-1" style="font-family: 'Outfit', sans-serif;">Request a Consultation</h3>
                    <p class="text-muted small mb-4">Fill out your requirements below and our senior solution engineer will contact you.</p>

                    <form action="<?= base_url('consultation/submit') ?>" method="POST">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold small">Your Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control form-control-lg fs-6" placeholder="e.g. Rahul Sharma" value="<?= old('name') ?>" required>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold small">Email Address <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg fs-6" placeholder="rahul@example.com" value="<?= old('email') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold small">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="phone" class="form-control form-control-lg fs-6" placeholder="+91 98765 43210" value="<?= old('phone') ?>" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="organization" class="form-label fw-bold small">School / Academy Name</label>
                                <input type="text" name="organization" id="organization" class="form-control form-control-lg fs-6" placeholder="e.g. Apex Coding Academy" value="<?= old('organization') ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="service_type" class="form-label fw-bold small">Consultation Type</label>
                                <select name="service_type" id="service_type" class="form-select form-select-lg fs-6">
                                    <option value="custom_deployment">Custom Server Deployment</option>
                                    <option value="white_label">White-Label Branding</option>
                                    <option value="enterprise_setup">Enterprise LMS Setup</option>
                                    <option value="custom_curriculum">Custom Curriculum Integration</option>
                                    <option value="other">Other Inquiry</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="budget" class="form-label fw-bold small">Estimated Budget (INR / USD)</label>
                            <select name="budget" id="budget" class="form-select form-select-lg fs-6">
                                <option value="Under ₹25,000">Under ₹25,000 / $300</option>
                                <option value="₹25,000 - ₹75,000">₹25,000 - ₹75,000 ($300 - $900)</option>
                                <option value="₹75,000 - ₹2,000,000">₹75,000 - ₹2,000,000 ($900 - $2,500)</option>
                                <option value="₹2,000,000+">₹2,000,000+ / Enterprise</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-bold small">Project Details & Requirements <span class="text-danger">*</span></label>
                            <textarea name="message" id="message" rows="4" class="form-control fs-6" placeholder="Describe your target student count, timeline, and features required..." required><?= old('message') ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 py-3 fw-bold fs-6 shadow-sm" style="border-radius: 12px; background: #f97316; border: none;">
                            🚀 Submit Consultation Request
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
