<?= view('components/header', ['title' => 'Blog & Resources']) ?>

<style>
    :root {
        --blog-primary: #4f46e5;
        --blog-primary-light: #eff6ff;
        --blog-accent: #ff6b00;
        --blog-text-main: #1e293b;
        --blog-text-muted: #64748b;
        --blog-border: #e2e8f0;
    }

    body {
        background-color: #fafbfc;
        color: var(--blog-text-main);
    }

    /* Blog Hero */
    .blog-hero {
        background: linear-gradient(135deg, #4f46e5 0%, #1e1b4b 100%);
        color: white;
        padding: 80px 0 120px;
        position: relative;
        overflow: hidden;
        border-radius: 0 0 40px 40px;
    }

    .blog-hero::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(99,102,241,0.25) 0%, rgba(255,255,255,0) 70%);
        top: -80px;
        right: -80px;
    }

    /* Blog Grid */
    .blog-card {
        background: white;
        border: 1px solid var(--blog-border);
        border-radius: 20px;
        overflow: hidden;
        height: 100%;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        flex-direction: column;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        border-color: var(--blog-primary);
        box-shadow: 0 20px 40px rgba(79, 70, 229, 0.08);
    }

    .blog-image-wrapper {
        position: relative;
        padding-top: 56.25%; /* 16:9 ratio */
        background: #f1f5f9;
        overflow: hidden;
    }

    .blog-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .blog-card:hover .blog-image {
        transform: scale(1.05);
    }

    .blog-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(255, 255, 255, 0.95);
        color: var(--blog-primary);
        font-weight: 700;
        font-size: 0.72rem;
        padding: 5px 12px;
        border-radius: 30px;
        text-transform: uppercase;
        backdrop-filter: blur(5px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .blog-content {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .blog-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.8rem;
        color: var(--blog-text-muted);
        margin-bottom: 12px;
    }

    .blog-meta-dot {
        width: 4px;
        height: 4px;
        background: #cbd5e1;
        border-radius: 50%;
    }

    .blog-title {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        font-size: 1.25rem;
        line-height: 1.4;
        margin-bottom: 12px;
    }

    .blog-title a {
        color: var(--blog-text-main);
        text-decoration: none;
        transition: color 0.2s;
    }

    .blog-title a:hover {
        color: var(--blog-primary);
    }

    .blog-excerpt {
        color: var(--blog-text-muted);
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .blog-link {
        margin-top: auto;
        color: var(--blog-primary);
        font-weight: 700;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 0.9rem;
        transition: gap 0.2s;
    }

    .blog-link:hover {
        gap: 10px;
    }
</style>

<!-- Hero Section -->
<header class="blog-hero text-center">
    <div class="container py-4">
        <span class="text-uppercase fw-bold letter-spacing-lg mb-2" style="font-size: 0.85rem; color: #a5b4fc; display: block; letter-spacing: 0.2rem;">KIDSAI ACADEMY BLOG</span>
        <h1 class="display-4 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">Coding Insights & STEM Articles</h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 600px; font-weight: 500; font-size: 1.1rem;">
            Explore tips, expert guides, and updates about AI programming, Python, and digital literacy for kids and teens.
        </p>
    </div>
</header>

<!-- Main Blog Section -->
<main class="container py-5" style="margin-top: -30px;">
    <div class="row g-4">
        
        <?php foreach ($blogs as $post): ?>
            <div class="col-md-6 col-lg-4">
                <article class="blog-card">
                    <div class="blog-image-wrapper">
                        <?php if (!empty($post['image_path'])): ?>
                            <img class="blog-image" src="<?= base_url($post['image_path']) ?>" alt="<?= esc($post['title']) ?>" loading="lazy">
                        <?php else: ?>
                            <div class="blog-image" style="background: linear-gradient(135deg, #a5b4fc, #818cf8); display: flex; align-items: center; justify-content: center; font-size: 3rem;">📝</div>
                        <?php endif; ?>
                        <span class="blog-tag">Article</span>
                    </div>

                    <div class="blog-content">
                        <div class="blog-meta">
                            <span>👩‍💻 By <?= esc($post['author']) ?></span>
                            <span class="blog-meta-dot"></span>
                            <span>📅 <?= date('M d, Y', strtotime($post['created_at'])) ?></span>
                        </div>

                        <h3 class="blog-title">
                            <a href="<?= base_url('blog/'.esc($post['slug'])) ?>"><?= esc($post['title']) ?></a>
                        </h3>
                        
                        <p class="blog-excerpt">
                            <?= esc($post['excerpt']) ?>
                        </p>

                        <a href="<?= base_url('blog/'.esc($post['slug'])) ?>" class="blog-link">
                            Read Full Article <i class="fs-6">→</i>
                        </a>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>

        <?php if (empty($blogs)): ?>
            <div class="col-12 py-5 text-center">
                <div style="font-size: 4rem; margin-bottom: 20px;">🎒</div>
                <h3 class="fw-bold" style="font-family: 'Outfit', sans-serif;">New Articles coming soon!</h3>
                <p class="text-muted mx-auto" style="max-width: 480px;">We are currently crafting premium programming guides, AI resources, and student highlights. Subscribe to our newsletter or check back shortly!</p>
            </div>
        <?php endif; ?>

    </div>
</main>

<?= view('components/footer') ?>
