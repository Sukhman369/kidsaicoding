<?php
// Ensure url & setting helpers are loaded
helper(['url', 'setting']);
?>
<?= view('components/header', ['title' => '404 - Page Not Found']) ?>

<div class="container py-5 my-5">
    <div class="row justify-content-center py-5">
        <div class="col-md-8 col-lg-6 text-center">
            <!-- Error Code Graphic -->
            <div class="display-1 fw-extrabold text-primary mb-3" style="font-family: 'Outfit', sans-serif; font-size: 8rem; line-height: 1; letter-spacing: -0.05em; background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">404</div>
            <h1 class="fw-bold mb-3 h2 text-dark" style="font-family: 'Outfit', sans-serif;">Oops! Lost in Cyberspace</h1>
            
            <p class="text-secondary mb-5 fs-5" style="line-height: 1.6;">
                Even the best programmers write bugs! The page you are looking for has migrated or does not exist. Let's debug this together and get you back on the learning pathway.
            </p>
            
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="<?= base_url('courses') ?>" class="btn btn-primary px-4 py-3 fw-bold text-white shadow-sm" style="border-radius: 12px; background: #4f46e5; border: none; min-width: 180px; transition: transform 0.2s;">
                    Explore Courses 🚀
                </a>
                <a href="<?= base_url() ?>" class="btn btn-outline-secondary px-4 py-3 fw-bold" style="border-radius: 12px; min-width: 180px; border-width: 2px;">
                    Go Back Home 🏠
                </a>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
