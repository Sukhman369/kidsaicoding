<?= view('components/header', ['title' => 'Login']) ?>

<style>
    .login-container {
        background: linear-gradient(135deg, #FFF7ED 0%, #F0F9FF 100%);
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
    }
    .login-card {
        max-width: 450px;
        width: 100%;
        background: #fff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
    }
    .auth-logo {
        text-align: center;
        margin-bottom: 30px;
    }
    .auth-logo div {
        width: 48px; height: 48px;
        background: var(--primary);
        border-radius: 12px;
        margin: 0 auto 10px;
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="auth-logo">
            <div class="shadow-sm"></div>
            <h1 class="h4 fw-bold mb-0">Kids AI Coding Squad</h1>
            <p class="text-muted small">Sign in to your dashboard</p>
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

        <form action="<?= base_url('login') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label small fw-bold">Email Address</label>
                <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" value="<?= old('email') ?>" required>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="form-label small fw-bold">Password</label>
                    <a href="#" class="small text-secondary text-decoration-none">Forgot?</a>
                </div>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="••••••••" required>
            </div>
            
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label small text-muted" for="remember">Keep me signed in</label>
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 shadow mb-4">Sign In</button>

            <div class="text-center">
                <p class="small text-muted">Don't have an account? <a href="<?= base_url('register') ?>" class="text-secondary fw-bold text-decoration-none">Create Account</a></p>
            </div>
        </form>
        
        <div class="mt-5 border-top pt-4">
            <a href="<?= base_url() ?>" class="btn btn-link text-muted w-100 text-decoration-none small">← Back to Homepage</a>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
