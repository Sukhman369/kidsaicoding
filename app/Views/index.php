<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Hero Section -->
    <header class="hero py-5" style="background: linear-gradient(135deg, #FFF7ED 0%, #F0F9FF 100%); min-height: 80vh; display: flex; align-items: center;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center bg-white px-3 py-2 rounded-pill shadow-sm mb-4 border border-primary border-opacity-10 animate-float">
                        <span class="badge bg-primary text-white rounded-pill px-2 me-2">New</span>
                        <span class="small fw-bold text-primary">AI for Kids batch starts soon! 🚀</span>
                    </div>
                    <h1 class="display-3 fw-extrabold mb-4 animate-slide-up" style="font-family: 'Outfit', sans-serif; letter-spacing: -2px; line-height: 1.1;">
                        The Fun Way to <br><span class="text-primary text-gradient">Master Coding</span>
                    </h1>
                    <p class="lead text-muted mb-5 pe-lg-5 animate-slide-up" style="animation-delay: 0.1s;">
                        Interactive, project-based learning for kids aged 7-18. Build games, apps, and AI models with expert mentors from the comfort of your home.
                    </p>
                    <div class="d-flex flex-wrap gap-3 animate-slide-up" style="animation-delay: 0.2s;">
                        <a href="<?= base_url('courses') ?>" class="btn btn-primary btn-lg shadow-lg px-5 py-3 rounded-4 fw-bold">Explore Courses</a>
                        <a href="#" class="btn btn-white btn-lg shadow-sm px-5 py-3 rounded-4 fw-bold border">Book Free Demo</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-card position-relative animate-fade-in">
                        <div class="bg-white rounded-5 shadow-2xl p-4 p-md-5 border border-white position-relative z-1 overflow-hidden" style="min-height: 400px; display:flex; align-items:center; justify-content:center;">
                            <div class="text-center">
                                <div class="h2 fw-bold mb-3">Building Future <br>Innovators 🎮</div>
                                <div class="d-flex justify-content-center gap-2">
                                    <div class="badge bg-soft-primary text-primary px-3 py-2">Roblox</div>
                                    <div class="badge bg-soft-success text-success px-3 py-2">Python</div>
                                    <div class="badge bg-soft-warning text-warning px-3 py-2">Web Dev</div>
                                </div>
                            </div>
                            <!-- Decorative elements -->
                            <div class="position-absolute top-0 end-0 p-4 opacity-10 h1">{}</div>
                            <div class="position-absolute bottom-0 start-0 p-4 opacity-10 h1">[]</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase letter-spacing-lg small">The KidsAI Advantage</span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Outfit', sans-serif;">Why Choose Us?</h2>
                <div class="bg-primary mx-auto mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
            </div>
            <div class="row g-4 pt-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;">🎯</div>
                        <h3 class="h4 fw-bold mb-3">Goal-Based Path</h3>
                        <p class="text-muted small lh-lg">Every child gets a customized roadmap based on their age, interests, and learning speed. No one gets left behind.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;">👩‍🏫</div>
                        <h3 class="h4 fw-bold mb-3">Expert Mentors</h3>
                        <p class="text-muted small lh-lg">Our educators are not just teachers; they are professionals from top tech backgrounds who love teaching kids.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;">🛠️</div>
                        <h3 class="h4 fw-bold mb-3">Real-World Projects</h3>
                        <p class="text-muted small lh-lg">From mobile apps to AI models, students create a professional portfolio of real-world work by the end of each module.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>
