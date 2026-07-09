<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Admin Panel</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --secondary: #6366f1;
            --bg: #f8fafc;
            --sidebar: #1e293b;
            --white: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text-main);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background-color: var(--sidebar);
            color: white;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 30px 24px;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: -0.5px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-header span {
            color: var(--secondary);
        }

        .sidebar-menu {
            flex: 1;
            padding: 20px 0;
        }

        .menu-item {
            padding: 12px 24px;
            display: flex;
            align-items: center;
            color: #94a3b8;
            text-decoration: none;
            transition: all 0.3s;
            gap: 12px;
            font-weight: 500;
        }

        .menu-item:hover, .menu-item.active {
            background: rgba(255,255,255,0.05);
            color: white;
            border-left: 4px solid var(--primary);
        }

        .menu-item i {
            font-size: 18px;
            width: 20px;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 260px;
            padding: 40px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            background: white;
            padding: 8px 16px;
            border-radius: 50px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        .user-profile img {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #e2e8f0;
        }

        /* Cards & UI */
        .card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);
            border: 1px solid var(--border);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            transform: translateY(-2px);
        }

        /* Alerts */
        .alert {
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 24px;
        }
        .alert-success { background: #dcfce7; color: #166534; }

        <?= $this->renderSection('styles') ?>
    </style>
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">
            Kids<span>AI</span>
        </div>
        <nav class="sidebar-menu">
            <!-- Main -->
            <div style="padding: 12px 24px 6px; font-size: 11px; text-transform: uppercase; font-weight: 700; color: #475569; letter-spacing: 0.05em;">Main</div>
            <a href="<?= base_url('admin/dashboard') ?>" class="menu-item <?= url_is('admin/dashboard') ? 'active' : '' ?>">
                <i class="fa-solid fa-gauge"></i> Dashboard
            </a>
            <a href="<?= base_url('admin/bookings') ?>" class="menu-item <?= url_is('admin/bookings*') ? 'active' : '' ?>">
                <i class="fa-solid fa-calendar-check"></i> Bookings
            </a>

            <!-- Content Management -->
            <div style="padding: 20px 24px 6px; font-size: 11px; text-transform: uppercase; font-weight: 700; color: #475569; letter-spacing: 0.05em;">Content</div>
            <a href="<?= base_url('admin/courses') ?>" class="menu-item <?= url_is('admin/courses*') ? 'active' : '' ?>">
                <i class="fa-solid fa-graduation-cap"></i> Courses
            </a>
            <a href="<?= base_url('admin/team') ?>" class="menu-item <?= url_is('admin/team*') ? 'active' : '' ?>">
                <i class="fa-solid fa-people-group"></i> Team Members
            </a>
            <a href="<?= base_url('admin/blogs') ?>" class="menu-item <?= url_is('admin/blogs*') ? 'active' : '' ?>">
                <i class="fa-solid fa-newspaper"></i> Blogs
            </a>
            <a href="<?= base_url('admin/settings') ?>" class="menu-item <?= url_is('admin/settings*') ? 'active' : '' ?>">
                <i class="fa-solid fa-gears"></i> Site Settings
            </a>

            <!-- People -->
            <div style="padding: 20px 24px 6px; font-size: 11px; text-transform: uppercase; font-weight: 700; color: #475569; letter-spacing: 0.05em;">People</div>
            <a href="<?= base_url('admin/students') ?>" class="menu-item <?= url_is('admin/students*') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-graduate"></i> Students
            </a>
            <a href="<?= base_url('admin/users') ?>" class="menu-item <?= url_is('admin/users*') ? 'active' : '' ?>">
                <i class="fa-solid fa-user-shield"></i> Admins / RBAC
            </a>

            <!-- Logout -->
            <a href="<?= base_url('logout') ?>" class="menu-item" style="margin-top: auto; color: #f87171;">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </nav>


    </aside>

    <main class="main-content">
        <header>
            <h2 style="font-weight: 700; font-size: 28px;"><?= $title ?></h2>
            <div class="user-profile">
                <div style="text-align: right;">
                    <div style="font-weight: 600; font-size: 14px;"><?= session()->get('userName') ?></div>
                    <div style="font-size: 12px; color: var(--text-muted);">Administrator</div>
                </div>
                <img src="https://ui-avatars.com/api/?name=<?= session()->get('userName') ?>&background=4f46e5&color=fff" alt="Avatar">
            </div>
        </header>

        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?= $this->renderSection('content') ?>
    </main>

</body>
</html>
