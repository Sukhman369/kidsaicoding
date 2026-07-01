<?= view('components/header', ['title' => 'About Us']) ?>

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

<?= view('components/footer') ?>
