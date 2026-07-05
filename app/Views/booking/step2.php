<?= view('components/header') ?>

<section class="py-5 bg-white" style="min-height: 80vh; display: flex; align-items: center; background: radial-gradient(circle at 50% 50%, #f5f3ff 0%, #ffffff 100%) !important;">
    <div class="container text-center">
        <div class="spinner-border text-primary mb-4" role="status" style="width: 3rem; height: 3rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
        <h2 class="fw-bold h1">Securing Your Slot...</h2>
        <p class="text-muted">Just one more step to confirm your free AI & Coding class.</p>
    </div>
</section>

<!-- Contact Info Modal -->
<div class="modal fade" id="contactModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 25px;">
            <div class="modal-body p-5">
                <div class="text-center mb-4">
                    <div class="display-4 mb-2">🚀</div>
                    <h3 class="fw-bold">Tell us about yourself</h3>
                    <p class="text-muted small">We'll use these details to send you the meeting link and class materials.</p>
                </div>

                <form action="<?= base_url('book-free-class/submit') ?>" method="POST" id="bookingForm">
                    <?= csrf_field() ?>
                    
                    <div class="form-group mb-3">
                        <label class="form-label small fw-bold text-muted">Student Name</label>
                        <input type="text" name="parent_name" class="form-control form-control-lg" required placeholder="Enter student's full name" style="border-radius: 12px; border: 2px solid #f1f5f9; font-size: 16px;">
                    </div>


                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Email Address</label>
                            <input type="email" name="email" class="form-control form-control-lg" required placeholder="name@email.com" style="border-radius: 12px; border: 2px solid #f1f5f9; font-size: 16px;">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Phone Number</label>
                            <input type="tel" name="phone" class="form-control form-control-lg" required placeholder="00000 00000" style="border-radius: 12px; border: 2px solid #f1f5f9; font-size: 16px;">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label small fw-bold text-muted">School Name</label>
                        <input type="text" name="school_name" class="form-control form-control-lg" required placeholder="Your school name" style="border-radius: 12px; border: 2px solid #f1f5f9; font-size: 16px;">
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label small fw-bold text-muted">City</label>
                        <input type="text" name="city" class="form-control form-control-lg" required placeholder="Which city do you live in?" style="border-radius: 12px; border: 2px solid #f1f5f9; font-size: 16px;">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-3 fw-bold h5 m-0" style="border-radius: 15px; background: #4f46e5; border: none; box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);">
                        Confirm My Free Demo →
                    </button>
                    
                    <p class="text-center mt-3 small text-muted">
                        Secure Connection <span class="ms-1">🔒</span>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var myModal = new bootstrap.Modal(document.getElementById('contactModal'));
        myModal.show();
    });

    // Auto-close logic and inspiration page is handled by the redirect to /success
</script>

<style>
    .form-control:focus {
        border-color: #4f46e5 !important;
        box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1) !important;
    }
</style>

<?= view('components/footer') ?>
