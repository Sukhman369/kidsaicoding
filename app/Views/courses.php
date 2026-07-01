<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Explore Coding Courses<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section class="py-5 bg-light-subtle border-bottom">
        <div class="container text-center py-4">
            <h1 class="display-5 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;">Browse All Courses</h1>
            <p class="text-muted lead mx-auto" style="max-width: 600px;">Project-based learning tracks curated for every age group and interest level.</p>
        </div>
    </section>

    <main class="container py-5 mt-4">
        <div class="row g-5">
            <!-- Sidebar -->
            <aside class="col-lg-3">
                <div class="card border-0 shadow-sm p-4 rounded-4 sticky-top" style="top: 100px;">
                    <div class="mb-4">
                        <h4 class="h6 fw-bold text-uppercase letter-spacing-sm mb-3">Age Group</h4>
                        <div class="d-grid gap-2">
                            <div class="form-check custom-check">
                                <input class="form-check-input" type="checkbox" id="age1">
                                <label class="form-check-label small fw-medium" for="age1">Junior (7-10)</label>
                            </div>
                            <div class="form-check custom-check">
                                <input class="form-check-input" type="checkbox" id="age2" checked>
                                <label class="form-check-label small fw-medium" for="age2">Middle (10-14)</label>
                            </div>
                            <div class="form-check custom-check">
                                <input class="form-check-input" type="checkbox" id="age3">
                                <label class="form-check-label small fw-medium" for="age3">Senior (14-18)</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h4 class="h6 fw-bold text-uppercase letter-spacing-sm mb-3">Track</h4>
                        <div class="d-grid gap-2">
                            <div class="form-check custom-check">
                                <input class="form-check-input" type="checkbox" id="cat1" checked>
                                <label class="form-check-label small fw-medium" for="cat1">Programming</label>
                            </div>
                            <div class="form-check custom-check">
                                <input class="form-check-input" type="checkbox" id="cat2">
                                <label class="form-check-label small fw-medium" for="cat2">Game Design</label>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 rounded-3 py-2 fw-bold mt-2">Filter Courses</button>
                </div>
            </aside>

            <!-- Results -->
            <div class="col-lg-9">
                <div class="row g-4">
                    <!-- Course 1 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden hover-lift transition">
                            <div class="bg-primary text-white py-4 text-center fw-bold">Python for Kids</div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="badge bg-primary-light text-primary rounded-pill px-3">Age 10-14</span>
                                    <span class="text-muted x-small fw-bold">24 Sessions</span>
                                </div>
                                <h3 class="h5 fw-bold mb-3">Python Beginners</h3>
                                <p class="text-muted small mb-4">Start your coding journey with the most popular language in the world.</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <div class="h5 fw-bold text-primary mb-0">₹12,499</div>
                                    <a href="<?= base_url('course/python-beginners') ?>" class="btn btn-link text-primary p-0 fw-bold text-decoration-none small">Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course 2 -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden hover-lift transition">
                            <div class="bg-secondary text-white py-4 text-center fw-bold">Web Dev</div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between mb-3">
                                    <span class="badge bg-secondary-light text-secondary rounded-pill px-3">Age 12-18</span>
                                    <span class="text-muted x-small fw-bold">32 Sessions</span>
                                </div>
                                <h3 class="h5 fw-bold mb-3">Full Stack Web</h3>
                                <p class="text-muted small mb-4">Master HTML, CSS, and JS to build modern websites.</p>
                                <div class="mt-auto d-flex justify-content-between align-items-center">
                                    <div class="h5 fw-bold text-primary mb-0">₹15,999</div>
                                    <a href="#" class="btn btn-link text-primary p-0 fw-bold text-decoration-none small">Details →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?= $this->endSection() ?>
