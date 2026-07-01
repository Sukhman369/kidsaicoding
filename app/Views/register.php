<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account | KidsAI Coding Academy</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        body {
            background: linear-gradient(135deg, #F0F9FF 0%, #FFF7ED 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 0;
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
</head>
<body>

    <div class="register-card">
        <div class="auth-logo">
            <div class="shadow-sm"></div>
            <h1 class="h4 fw-bold mb-0">Join KidsAI Coding</h1>
            <p class="text-muted small">Start your child's coding journey today</p>
        </div>

        <form action="#" method="POST">
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Parent First Name</label>
                    <input type="text" class="form-control" placeholder="John" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Parent Last Name</label>
                    <input type="text" class="form-control" placeholder="Doe" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold">Email Address</label>
                <input type="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-bold">WhatsApp Number</label>
                <div class="input-group">
                    <span class="input-group-text small">+91</span>
                    <input type="tel" class="form-control" placeholder="9876543210" required>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Password</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label small fw-bold">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="••••••••" required>
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

</body>
</html>
