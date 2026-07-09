<?= view('components/header', ['title' => $blog['title']]) ?>

<style>
    :root {
        --blog-primary: #4f46e5;
        --blog-text-main: #1e293b;
        --blog-text-muted: #64748b;
        --blog-border: #e2e8f0;
    }

    body {
        background-color: #fafbfc;
        color: var(--blog-text-main);
    }

    .detail-container {
        max-width: 820px;
        margin: 0 auto;
        padding: 50px 15px;
    }

    /* Meta details */
    .detail-meta {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 0.9rem;
        color: var(--blog-text-muted);
        margin-bottom: 20px;
        font-weight: 500;
    }

    .detail-meta-dot {
        width: 4px;
        height: 4px;
        background: #cbd5e1;
        border-radius: 50%;
    }

    /* Title */
    .detail-title {
        font-family: 'Outfit', sans-serif;
        font-weight: 800;
        font-size: 2.5rem;
        line-height: 1.25;
        color: var(--blog-text-main);
        margin-bottom: 30px;
    }

    @media (max-width: 600px) {
        .detail-title {
            font-size: 1.85rem;
        }
    }

    /* Cover Area */
    .detail-cover-wrapper {
        border-radius: 24px;
        overflow: hidden;
        margin-bottom: 40px;
        border: 1px solid var(--blog-border);
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
    }

    .detail-cover {
        width: 100%;
        max-height: 460px;
        object-fit: cover;
    }

    /* Article Content */
    .detail-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #334155;
    }

    .detail-content p {
        margin-bottom: 24px;
    }

    .detail-content h2, .detail-content h3 {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: var(--blog-text-main);
        margin-top: 40px;
        margin-bottom: 16px;
    }

    .detail-content h2 {
        font-size: 1.75rem;
    }

    .detail-content ul, .detail-content ol {
        margin-bottom: 24px;
        padding-left: 24px;
    }

    .detail-content li {
        margin-bottom: 8px;
    }

    .detail-content blockquote {
        margin: 30px 0;
        padding: 16px 24px;
        border-left: 4px solid var(--blog-primary);
        background: #f8fafc;
        border-radius: 0 12px 12px 0;
        font-style: italic;
        color: #475569;
    }
</style>

<div class="container">
    <article class="detail-container">
        
        <!-- Navigation Back -->
        <div style="margin-bottom: 30px;">
            <a href="<?= base_url('blog') ?>" style="text-decoration: none; color: var(--blog-primary); font-weight: 700; font-size: 0.95rem; display: inline-flex; align-items: center; gap: 6px;">
                ← Back to Blog & Insights
            </a>
        </div>

        <!-- Meta -->
        <div class="detail-meta">
            <span>✍️ By <b><?= esc($blog['author']) ?></b></span>
            <span class="detail-meta-dot"></span>
            <span>📅 Published: <?= date('M d, Y', strtotime($blog['created_at'])) ?></span>
        </div>

        <!-- Title -->
        <h1 class="detail-title"><?= esc($blog['title']) ?></h1>

        <!-- Cover Image -->
        <?php if (!empty($blog['image_path'])): ?>
            <div class="detail-cover-wrapper">
                <img class="detail-cover" src="<?= base_url($blog['image_path']) ?>" alt="<?= esc($blog['title']) ?>">
            </div>
        <?php endif; ?>

        <!-- Content -->
        <div class="detail-content">
            <?= nl2br($blog['content']) ?>
        </div>

        <!-- Footer Area -->
        <div style="margin-top: 60px; border-top: 1px solid var(--blog-border); padding-top: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
            <a href="<?= base_url('blog') ?>" class="btn px-4 py-2" style="background: #e2e8f0; color: var(--blog-text-main); font-weight: 600; border-radius: 10px; text-decoration: none;">
                ← Read More Articles
            </a>
            <a href="<?= base_url('book-free-class') ?>" class="btn btn-primary px-4 py-2" style="border-radius: 10px; background: var(--blog-primary); border: none; font-weight: 700;">
                Book Free Trial Class
            </a>
        </div>

    </article>
</div>

<?= view('components/footer') ?>
