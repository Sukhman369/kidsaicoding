<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Home' ?> | KidsAI Coding Academy</title>
    
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
            z-index: 1000;
        }
        .nav-links li a {
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .nav-links li a:hover {
            color: var(--primary) !important;
        }
    </style>
</head>

<body>

    <!-- Navigation Component -->
    <nav class="custom-navbar">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="<?= base_url() ?>">
                <div style="width: 32px; height: 32px; background: var(--primary); border-radius: 8px;"></div>
                <span class="fw-bold h4 mb-0" style="font-family: 'Outfit', sans-serif; color: var(--primary);">KidsAI Coding</span>
            </a>
            
            <ul class="nav-links d-none d-lg-flex list-unstyled align-items-center gap-4 mb-0">
                <li><a href="<?= base_url() ?>" class="text-decoration-none fw-semibold <?= current_url() == base_url() ? 'text-primary' : 'text-muted' ?>">Home</a></li>
                <li><a href="<?= base_url('courses') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'courses') !== false ? 'text-primary' : 'text-muted' ?>">Courses</a></li>
                <li><a href="<?= base_url('about') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'about') !== false ? 'text-primary' : 'text-muted' ?>">About</a></li>
                <li><a href="<?= base_url('contact') ?>" class="text-decoration-none fw-semibold <?= strpos(current_url(), 'contact') !== false ? 'text-primary' : 'text-muted' ?>">Contact</a></li>
                <li><a href="<?= base_url('login') ?>" class="btn btn-secondary px-4 py-2 fw-bold text-white shadow-sm" style="border-radius: 12px; background: #0F172A; border: none;">Login</a></li>
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
                <li class="mb-4"><a href="<?= base_url('login') ?>" class="btn btn-secondary w-100">Login</a></li>
            </ul>
        </div>
    </nav>

    <main>
