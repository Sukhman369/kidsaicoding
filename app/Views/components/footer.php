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
                        <li><a href="<?= base_url('contact') ?>" class="text-white-50 text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white fw-bold mb-4">Newsletter</h5>
                    <p class="x-small">Get updates on new batches and scholarship exams.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control bg-transparent border-secondary text-white small" placeholder="Email addr">
                        <button class="btn btn-primary" type="button">Go</button>
                    </div>
                </div>
            </div>
            <div class="text-center pt-2">
                <p class="x-small mb-0">&copy; <?= date('Y') ?> <?= esc(get_setting('brand_name', 'KidsAI Coding Academy')) ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php if (isset($extra_scripts)) echo $extra_scripts; ?>
</body>
</html>
