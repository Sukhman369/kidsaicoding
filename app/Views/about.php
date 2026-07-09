<?= view('components/header', ['title' => 'About Us']) ?>

<style>
    /* Styling tokens & overrides */
    :root {
        --about-primary: #4f46e5;
        --about-primary-light: #eff6ff;
        --about-accent: #ff6b00;
        --about-text-main: #1e293b;
        --about-text-muted: #64748b;
        --about-border: #e2e8f0;
    }

    body {
        background-color: #fafbfc;
        color: var(--about-text-main);
    }

    /* About Hero Header */
    .about-hero {
        background: linear-gradient(135deg, #4f46e5 0%, #1e1b4b 100%);
        color: white;
        padding: 90px 0 160px;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 50px 50px;
    }

    .about-hero::before {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(99,102,241,0.25) 0%, rgba(255,255,255,0) 70%);
        top: -100px;
        right: -100px;
    }

    .about-hero::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(239,68,68,0.15) 0%, rgba(255,255,255,0) 70%);
        bottom: -50px;
        left: -100px;
    }

    /* Floating Stats Bar */
    .stats-bar {
        margin-top: -100px;
        position: relative;
        z-index: 10;
        padding: 0 15px;
    }

    .stats-container {
        background: white;
        border-radius: 28px;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(79, 70, 229, 0.08);
        border: 1px solid var(--about-border);
    }

    .stat-card {
        text-align: center;
        padding: 15px;
    }

    .stat-number {
        font-family: 'Outfit', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        color: var(--about-primary);
        line-height: 1;
        margin-bottom: 8px;
    }

    .stat-number span {
        color: var(--about-accent);
    }

    .stat-label {
        font-weight: 600;
        color: var(--about-text-muted);
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.05em;
    }

    /* Core Values Cards */
    .value-card {
        background: white;
        border: 1px solid var(--about-border);
        border-radius: 24px;
        padding: 35px;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.01);
    }

    .value-card:hover {
        transform: translateY(-6px);
        border-color: var(--about-primary);
        box-shadow: 0 15px 35px rgba(79, 70, 229, 0.06);
    }

    .value-icon {
        width: 54px;
        height: 54px;
        border-radius: 14px;
        background: var(--about-primary-light);
        color: var(--about-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 24px;
    }

    .value-card.accent-value .value-icon {
        background: #fff7f1;
        color: var(--about-accent);
    }

    .value-card.accent-value:hover {
        border-color: var(--about-accent);
        box-shadow: 0 15px 35px rgba(255, 107, 0, 0.06);
    }

    /* Team Section Styles In-Page Override */
    .team-grid-about {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
        margin-top: 40px;
    }

    @media (max-width: 1200px) {
        .team-grid-about {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 900px) {
        .team-grid-about {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    @media (max-width: 600px) {
        .team-grid-about {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<header class="about-hero text-center">
    <div class="container py-4">
        <span class="text-uppercase fw-bold letter-spacing-lg mb-2" style="font-size: 0.85rem; color: #a5b4fc; display: block; letter-spacing: 0.2rem;">Inspired Next-Gen Innovators</span>
        <h1 class="display-3 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">Empowering Tomorrow's Creators</h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 650px; font-weight: 500;">
            We bridge the gap between imagination and technology, helping kids develop the computational thinking and creative confidence required for future leadership.
        </p>
    </div>
</header>

<!-- Stats Bar Section -->
<section class="stats-bar">
    <div class="container">
        <div class="stats-container">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">50K<span>+</span></div>
                        <div class="stat-label">Academics Taught</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">20<span>+</span></div>
                        <div class="stat-label">Countries Learning</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">300<span>+</span></div>
                        <div class="stat-label">Dynamic Coding Projects</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-card">
                        <div class="stat-number">4.9<span>★</span></div>
                        <div class="stat-label">Average Class Rating</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values and Story Section -->
<main class="container py-5" style="margin-top: 20px;">
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6">
            <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 0.1em;">OUR ORIGIN STORY</span>
            <h2 class="fw-bold h1 mt-2 mb-4" style="font-family: 'Outfit', sans-serif;">Why KidsAI Coding Began</h2>
            <p class="text-muted lh-lg">KidsAI Coding Academy was founded with a single, clear objective: to make high-quality, computer science and artificial intelligence education accessible, enjoyable, and relevant for kids aged 7-18.</p>
            <p class="text-muted lh-lg">We recognized that conventional classrooms often treat software development as an abstract science. We believe programming is a vibrant language of creativity—a tool for designing games, automating workflows, solving math problems, and crafting smart applications.</p>
        </div>
        <div class="col-lg-6">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="value-card">
                        <div class="value-icon">🚀</div>
                        <h3 class="h5 fw-bold mb-2">Project First</h3>
                        <p class="text-muted small mb-0">Students build actual working apps, animations, and robotics setups in every single module.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="value-card accent-value">
                        <div class="value-icon">🧠</div>
                        <h3 class="h5 fw-bold mb-2">Problem Solvers</h3>
                        <p class="text-muted small mb-0">We focus on logical thinking, teaching skills that help performance in science and school.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Complete Team Section -->
    <section class="team-section mt-5 pt-4">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold text-uppercase small" style="letter-spacing: 0.1em;">MEET OUR LEADERS</span>
            <h2 class="fw-bold h1 mt-2" style="font-family: 'Outfit', sans-serif;">Our Inspiring Team</h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Experienced researchers, engineers, and teachers who make tech learning absolute fun.</p>
        </div>

        <div class="team-grid-about">
            <?php foreach ($team as $member): ?>
                <div class="team-card">
                    <?php if (!empty($member['image_path'])): ?>
                        <img src="<?= base_url($member['image_path']) ?>" alt="<?= esc($member['name']) ?>" style="width: 100%; height: 240px; object-fit: cover; border-bottom: 1px solid #f1f5f9;">
                    <?php else: ?>
                        <div class="team-image-placeholder">
                            <div style="font-size: 3.5rem;">👨‍🏫</div>
                        </div>
                    <?php endif; ?>
                    <div class="team-content">
                        <h3><?= esc($member['name']) ?></h3>
                        <span><?= esc($member['role']) ?></span>
                        <p><?= esc($member['bio']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?= view('components/footer') ?>
