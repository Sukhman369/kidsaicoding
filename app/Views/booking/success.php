<?= view('components/header') ?>

<section class="py-5 bg-white" style="min-height: 100vh; display: flex; align-items: center; background: linear-gradient(180deg, #ffffff 0%, #f5f3ff 100%) !important;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                
                <div class="animation-container mb-5">
                    <div style="font-size: 80px; display: inline-block; animation: bounce 2s infinite;">🌟</div>
                </div>

                <h1 class="display-4 fw-800 mb-3" style="font-family: 'Outfit', sans-serif; background: linear-gradient(90deg, #4f46e5, #7c3aed); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Your Adventure Begins!</h1>
                
                <p class="h4 fw-bold text-dark mb-4">"The future belongs to those who learn more skills and combine them in creative ways."</p>
                
                <div class="card border-0 shadow-sm p-4 mb-5" style="border-radius: 20px; background: rgba(255,255,255,0.7); backdrop-filter: blur(5px);">
                    <p class="lead mb-0 text-muted">
                        We have successfully received your booking. Our expert mentor will connect with you shortly on your registered number for the next steps. 
                        <strong>Get ready to code your dreams into reality!</strong>
                    </p>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <a href="<?= base_url() ?>" class="btn btn-outline-primary w-100 py-3 fw-bold" style="border-radius: 15px; border-width: 2px;">Back to Home</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('courses') ?>" class="btn btn-primary w-100 py-3 fw-bold shadow-lg" style="border-radius: 15px; background: #4f46e5; border: none;">Explore Courses</a>
                    </div>
                </div>

                <div class="mt-5 pt-4 border-top">
                    <p class="small text-muted mb-0">Follow us for more updates</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-2" style="width: 40px; height: 40px;">📱</div>
                        <div class="bg-primary bg-opacity-10 rounded-circle p-2" style="width: 40px; height: 40px;">🎥</div>
                        <div class="bg-primary bg-opacity-10 rounded-circle p-2" style="width: 40px; height: 40px;">📸</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
        40% {transform: translateY(-30px);}
        60% {transform: translateY(-15px);}
    }
    .fw-800 { font-weight: 800; }
</style>

<?= view('components/footer') ?>
