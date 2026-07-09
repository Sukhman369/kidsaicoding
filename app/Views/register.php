<?= view('components/header', ['title' => 'Create Account']) ?>

<style>
    .register-container {
        background: linear-gradient(135deg, #F0F9FF 0%, #FFF7ED 100%);
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 20px;
    }
    .register-card {
        max-width: 550px;
        width: 100%;
        background: #fff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }
    .auth-logo {
        text-align: center;
        margin-bottom: 35px;
    }
    .auth-logo div {
        width: 48px; height: 48px;
        background: var(--primary);
        border-radius: 12px;
        margin: 0 auto 10px;
    }
</style>

<div class="register-container">
    <div class="register-card">
        <div class="auth-logo">
            <div class="shadow-sm"></div>
            <h1 class="h4 fw-bold mb-0">Join Kids AI Coding Squad</h1>
            <p class="text-muted small">Start your child's coding journey today</p>
        </div>

        <?php if(session()->getFlashdata('error')): ?>
            <div style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 20px; padding: 12px; border-radius: 8px; font-weight: 500; font-size: 0.85rem;">
                <i class="fa-solid fa-circle-exclamation" style="margin-right: 6px;"></i> <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->getFlashdata('success')): ?>
            <div style="background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0; margin-bottom: 20px; padding: 12px; border-radius: 8px; font-weight: 500; font-size: 0.85rem;">
                <i class="fa-solid fa-circle-check" style="margin-right: 6px;"></i> <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('register') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Parent First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="John" value="<?= old('first_name') ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Parent Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Doe" value="<?= old('last_name') ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" value="<?= old('email') ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold">WhatsApp Number</label>
                <div class="input-group">
                    <span class="input-group-text small">+91</span>
                    <input type="tel" name="whatsapp" class="form-control" placeholder="9876543210" value="<?= old('whatsapp') ?>" required>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="••••••••" required>
                </div>
            </div>
            
            <div class="mb-4 small text-muted">
                By signing up, you agree to our <a href="#" class="text-secondary">Terms</a> and <a href="#" class="text-secondary">Privacy Policy</a>.
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 shadow mb-4">Create Account</button>

            <div class="text-center">
                <p class="small text-muted">Already have an account? <a href="<?= base_url('login') ?>" class="text-secondary fw-bold text-decoration-none">Sign In</a></p>
            </div>
        </form>
    </div>
</div>

<?= view('components/footer') ?>
