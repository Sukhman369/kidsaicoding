<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | KidsAI Coding Academy</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

    <!-- Navigation (Same as index) -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand logo" href="<?= base_url() ?>">
                <div style="width: 32px; height: 32px; background: var(--primary); border-radius: 6px; display: inline-block;"></div>
                <span class="ms-2">KidsAI Coding</span>
            </a>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('courses') ?>">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Contact</a></li>
                    <li class="nav-item"><a href="<?= base_url('login') ?>" class="btn btn-outline-primary px-4">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-5 bg-primary text-white text-center">
        <div class="container py-4">
            <h1 class="display-4 fw-bold">Our Mission</h1>
            <p class="lead opacity-75">Empowering children to build the future through technology.</p>
        </div>
    </header>

    <main class="container py-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold mb-4">Why We Started</h2>
                <p class="text-muted">KidsAI Coding Academy was founded with a single goal: to make high-quality computer science education accessible, fun, and engaging for kids aged 7-18.</p>
                <p class="text-muted">We believe coding is more than just typing lines of text—it's a way of thinking, solving problems, and expressing creativity.</p>
            </div>
            <div class="col-lg-6 text-center">
                <div class="bg-light-subtle rounded-4 p-5 border shadow-sm h-100">
                    <div class="h1 mb-3">🚀</div>
                    <h3 class="h4">50k+ Students</h3>
                    <p class="text-muted small">Learning across 20+ countries</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer ... same ... -->
</body>
</html>
