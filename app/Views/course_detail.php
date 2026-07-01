<?= view('components/header', ['title' => 'Python for Beginners']) ?>

    <!-- Banner -->
    <div class="bg-light-subtle shadow-sm py-5 mb-5 border-bottom">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-2 small fw-bold">
                    <li class="breadcrumb-item"><a href="<?= base_url('courses') ?>" class="text-decoration-none text-primary">Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Python for Beginners</li>
                </ol>
            </nav>
            <h1 class="display-5 fw-bold mb-3">Python for Beginners</h1>
            <p class="lead text-muted max-width-600 mb-4">Master logic, automation, and data with the world's most popular language. Designed for students aged 10–14.</p>
            <div class="d-flex flex-wrap gap-4 text-muted small">
                <span>🏆 <strong>Beginner</strong></span>
                <span>📅 <strong>24 Sessions</strong></span>
                <span>⏱️ <strong>60 min/class</strong></span>
                <span>👦 <strong>Ages 10-14</strong></span>
                <span>📜 <strong>Certificate</strong></span>
            </div>
        </div>
    </div>

    <!-- Main Layout -->
    <div class="container py-4">
        <div class="row g-5">
            
            <!-- Left: Tabs & Content -->
            <div class="col-lg-8">
                <ul class="nav nav-tabs mb-4" id="courseTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button">Overview</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button">Curriculum</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button">Instructor</button>
                    </li>
                </ul>

                <div class="tab-content" id="courseTabContent">
                    <!-- Overview -->
                    <div class="tab-pane fade show active" id="overview" role="tabpanel">
                        <h2 class="h3 fw-bold mb-4">What You'll Learn</h2>
                        <div class="row g-3">
                            <div class="col-md-6"><div class="d-flex gap-2 small"><span class="text-success fw-bold">✓</span> Variables & Data Types</div></div>
                            <div class="col-md-6"><div class="d-flex gap-2 small"><span class="text-success fw-bold">✓</span> Logic and Loops</div></div>
                            <div class="col-md-6"><div class="d-flex gap-2 small"><span class="text-success fw-bold">✓</span> Complex Projects</div></div>
                            <div class="col-md-6"><div class="d-flex gap-2 small"><span class="text-success fw-bold">✓</span> Problem-Solving</div></div>
                        </div>

                        <h2 class="h3 fw-bold mt-5 mb-4">Projects Included</h2>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="bg-light p-4 rounded-4 text-center h-100 shadow-sm border">
                                    <div class="h2 mb-2">🐍</div>
                                    <p class="fw-bold mb-0">Snake Game</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light p-4 rounded-4 text-center h-100 shadow-sm border">
                                    <div class="h2 mb-2">🧮</div>
                                    <p class="fw-bold mb-0">Todo CLI App</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light p-4 rounded-4 text-center h-100 shadow-sm border">
                                    <div class="h2 mb-2">🌤️</div>
                                    <p class="fw-bold mb-0">Weather App</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Curriculum -->
                    <div class="tab-pane fade" id="curriculum" role="tabpanel">
                        <div class="accordion" id="curriculumAccordion">
                            <div class="accordion-item shadow-sm border-0 mb-3 rounded-4 overflow-hidden">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mod1">
                                        Module 1: Getting Started
                                    </button>
                                </h2>
                                <div id="mod1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled small text-muted">
                                            <li class="py-2 border-bottom">📖 Installing Python & VS Code</li>
                                            <li class="py-2 border-bottom">📖 Variables and Data Types</li>
                                            <li class="py-2">🚀 Mini Project: Name Card</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Pricing Card -->
            <aside class="col-lg-4">
                <div class="card border-0 shadow-lg p-4 rounded-4 sticky-top" style="top: 100px;">
                    <div class="mb-4 bg-light rounded-3 d-flex align-items-center justify-content-center text-muted" style="height: 200px;">
                        Course Preview Video
                    </div>
                    <div class="mb-3">
                        <span class="h2 fw-bold text-primary">₹12,499</span>
                        <span class="text-muted text-decoration-line-through small ms-2">₹18,000</span>
                        <span class="badge bg-warning-subtle text-warning ms-2">30% OFF</span>
                    </div>
                    <p class="text-danger small fw-bold mb-4">⏰ Offer ends in 2 days</p>
                    <button class="btn btn-primary btn-lg w-100 mb-3 shadow">Buy Course Now</button>
                    <button class="btn btn-outline-secondary btn-lg w-100 mb-4">Book Free Demo</button>
                    
                    <h4 class="h6 fw-bold mb-3 border-bottom pb-2">Includes:</h4>
                    <ul class="list-unstyled small text-muted">
                        <li class="mb-2">✓ 24 live interactive sessions</li>
                        <li class="mb-2">✓ Lifetime recording access</li>
                        <li class="mb-2">✓ Certificate of completion</li>
                        <li class="mb-2">✓ WhatsApp support group</li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>

<?= view('components/footer') ?>
