<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Home') ?> | <?= esc(get_setting('brand_name', 'Kids AI Coding Squad')) ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= esc($meta_description ?? 'Empowering kids and teens aged 7-18 with premium AI coding lessons, Python programming, robotics, and interactive computational STEM curriculum.') ?>">
    <meta name="keywords" content="<?= esc($meta_keywords ?? 'kids coding, AI lessons, Python for kids, programming courses for children, STEM education') ?>">
    <link rel="canonical" href="<?= current_url() ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:title" content="<?= esc($title ?? 'Home') ?> | <?= esc(get_setting('brand_name', 'Kids AI Coding Squad')) ?>">
    <meta property="og:description" content="<?= esc($meta_description ?? 'Empowering kids and teens aged 7-18 with premium AI coding lessons, Python programming, robotics, and interactive computational STEM curriculum.') ?>">
    <?php if (isset($meta_image) && !empty($meta_image)): ?>
        <meta property="og:image" content="<?= base_url($meta_image) ?>">
    <?php endif; ?>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= current_url() ?>">
    <meta property="twitter:title" content="<?= esc($title ?? 'Home') ?> | <?= esc(get_setting('brand_name', 'Kids AI Coding Squad')) ?>">
    <meta property="twitter:description" content="<?= esc($meta_description ?? 'Empowering kids and teens aged 7-18 with premium AI coding lessons, Python programming, robotics, and interactive computational STEM curriculum.') ?>">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <style>
        .custom-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 2000 !important;
        }
        .nav-links li a {
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .nav-links li a:not(.btn):hover {
            color: var(--primary) !important;
        }
        .btn-primary:hover {
            background-color: #4338ca !important;
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.3) !important;
        }

    </style>
</head>

<body>

    <!-- Navigation Component -->
    <nav class="custom-navbar">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="<?= base_url() ?>">
                <?php if (get_setting('brand_logo')): ?>
                    <img src="<?= base_url(get_setting('brand_logo')) ?>" alt="Logo" style="max-height: 36px; max-width: 120px; object-fit: contain; border-radius: 8px;">
                <?php else: ?>
                    <div style="width: 32px; height: 32px; background: var(--primary); border-radius: 8px;"></div>
                <?php endif; ?>
                <span class="fw-bold h4 mb-0" style="font-family: 'Outfit', sans-serif; color: var(--primary);"><?= esc(get_setting('brand_name', 'Kids AI Coding Squad')) ?></span>
            </a>
            
            <ul class="nav-links d-none d-lg-flex list-unstyled align-items-center gap-4 mb-0">
                <li><a href="<?= base_url() ?>" class="text-decoration-none fw-semibold <?= current_url() == base_url() ? 'text-primary' : 'text-muted' ?>">Home</a></li>
                <li><a href="<?= base_url('courses') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'courses') !== false ? 'text-primary' : 'text-muted' ?>">Courses</a></li>
                <li><a href="<?= base_url('about') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'about') !== false ? 'text-primary' : 'text-muted' ?>">About</a></li>
                <li><a href="<?= base_url('blog') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'blog') !== false ? 'text-primary' : 'text-muted' ?>">Blog</a></li>
                <li><a href="<?= base_url('contact') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'contact') !== false ? 'text-primary' : 'text-muted' ?>">Contact</a></li>
                <li><a href="<?= base_url('login') ?>" class="text-decoration-none fw-bold text-dark px-3">Login</a></li>
                <li><a href="<?= base_url('book-free-class') ?>" class="btn btn-primary px-4 py-2 fw-bold text-white shadow-sm" style="border-radius: 12px; background: #4f46e5; border: none;">Book Free Class</a></li>
            </ul>


            <!-- Mobile Toggler (Simplified) -->
            <button class="btn d-lg-none p-0 border-0 shadow-none text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="h2 mb-0">☰</span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="collapse d-lg-none bg-white border-top border-bottom" id="navMain">
            <ul class="list-unstyled p-4 text-center">
                <li class="mb-3"><a href="<?= base_url() ?>" class="text-decoration-none fw-bold text-dark">Home</a></li>
                <li class="mb-3"><a href="<?= base_url('courses') ?>" class="text-decoration-none fw-bold text-dark">Courses</a></li>
                <li class="mb-3"><a href="<?= base_url('about') ?>" class="text-decoration-none fw-bold text-dark">About</a></li>
                <li class="mb-3"><a href="<?= base_url('blog') ?>" class="text-decoration-none fw-bold text-dark">Blog</a></li>
                <li class="mb-3"><a href="<?= base_url('contact') ?>" class="text-decoration-none fw-bold text-dark">Contact</a></li>
                <li class="mb-4"><a href="<?= base_url('login') ?>" class="btn btn-secondary w-100">Login</a></li>
            </ul>
        </div>
    </nav>

    <main>
