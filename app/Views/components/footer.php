    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white-50 py-5 mt-5">
        <div class="container py-4">
            <div class="row g-4 mb-5 pb-5 border-bottom border-secondary border-opacity-25">
                <div class="col-lg-4">
                    <div class="navbar-brand text-white mb-3 d-block">
                        <?php if (get_setting('brand_logo')): ?>
                            <img src="<?= base_url(get_setting('brand_logo')) ?>" alt="Logo" style="max-height: 32px; max-width: 120px; object-fit: contain; vertical-align: middle; border-radius: 8px;">
                        <?php else: ?>
                            <div style="width: 32px; height: 32px; background: var(--primary); border-radius: 8px; display: inline-block; vertical-align: middle;"></div>
                        <?php endif; ?>
                        <span class="ms-2 fw-bold h4 mb-0" style="font-family: 'Outfit', sans-serif; vertical-align: middle;"><?= esc(get_setting('brand_name', 'KidsAI Coding')) ?></span>
                    </div>
                    <p class="small" style="max-width: 300px;">Empowering the next generation of innovators through high-quality coding education. Based in India, reaching the world.</p>
                </div>
                <div class="col-lg-2 offset-lg-1 col-6">
                    <h5 class="text-white fw-bold mb-4">Platform</h5>
                    <ul class="list-unstyled d-grid gap-2 small">
                        <li><a href="<?= base_url('courses') ?>" class="text-white-50 text-decoration-none">Courses</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Curriculum</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">For Schools</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h5 class="text-white fw-bold mb-4">Company</h5>
                    <ul class="list-unstyled d-grid gap-2 small">
                        <li><a href="<?= base_url('about') ?>" class="text-white-50 text-decoration-none">About Us</a></li>
                        <li><a href="<?= base_url('blog') ?>" class="text-white-50 text-decoration-none">Blog</a></li>
                        <li><a href="<?= base_url('contact') ?>" class="text-white-50 text-decoration-none">Contact</a></li>
                        <li><a href="<?= base_url('careers') ?>" class="text-white-50 text-decoration-none">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white fw-bold mb-4">Newsletter</h5>
                    <p class="x-small">Get updates on new batches and scholarship exams.</p>
                    
                    <?php if(session()->getFlashdata('newsletter_error')): ?>
                        <div style="background: rgba(239, 68, 68, 0.15); color: #f87171; font-size: 0.75rem; padding: 6px 10px; border-radius: 6px; margin-bottom: 10px; font-weight: 500;">
                            <?= session()->getFlashdata('newsletter_error') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->getFlashdata('newsletter_success')): ?>
                        <div style="background: rgba(16, 185, 129, 0.15); color: #34d399; font-size: 0.75rem; padding: 6px 10px; border-radius: 6px; margin-bottom: 10px; font-weight: 500;">
                            <?= session()->getFlashdata('newsletter_success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('newsletter/subscribe') ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control bg-transparent border-secondary text-white small" placeholder="Email address" required>
                            <button class="btn btn-primary" type="submit">Go</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 border-top border-secondary border-opacity-25 gap-3">
                <p class="x-small mb-0 text-white-50">&copy; <?= date('Y') ?> <?= esc(get_setting('brand_name', 'KidsAI Coding Academy')) ?>. All rights reserved.</p>
                <div class="d-flex flex-wrap gap-3 justify-content-center align-items-center">
                    <a href="<?= base_url('terms-of-service') ?>" class="x-small text-white-50 text-decoration-none hover-light" style="transition: color 0.2s ease;">Terms of Service</a>
                    <span class="text-secondary opacity-25">|</span>
                    <a href="<?= base_url('privacy-policy') ?>" class="x-small text-white-50 text-decoration-none hover-light" style="transition: color 0.2s ease;">Privacy Policy</a>
                    <span class="text-secondary opacity-25">|</span>
                    <a href="<?= base_url('refund-policy') ?>" class="x-small text-white-50 text-decoration-none hover-light" style="transition: color 0.2s ease;">Refund Policy</a>
                    <span class="text-secondary opacity-25">|</span>
                    <a href="<?= base_url('payment-policy') ?>" class="x-small text-white-50 text-decoration-none hover-light" style="transition: color 0.2s ease;">Payment Policy</a>
                    <span class="text-secondary opacity-25">|</span>
                    <a href="<?= base_url('pricing-policy') ?>" class="x-small text-white-50 text-decoration-none hover-light" style="transition: color 0.2s ease;">Pricing Policy</a>
                </div>
            </div>
            <style>
                .hover-light:hover {
                    color: #fff !important;
                }
            </style>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php if (isset($extra_scripts)) echo $extra_scripts; ?>
</body>
</html>
