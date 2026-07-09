<?= view('components/header', ['title' => esc($course['title'])]) ?>

<!-- Banner Section -->
<div class="shadow-sm py-5 mb-5 border-bottom" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 70%); color: #fff; position: relative; overflow: hidden;">
    <div style="position: absolute; inset: 0; background: radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.15), transparent 50%); pointer-events: none;"></div>
    <div class="container relative-z">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-3 small fw-bold">
                <li class="breadcrumb-item"><a href="<?= base_url('courses') ?>" class="text-decoration-none" style="color: #0ea5e9;">Courses</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page"><?= esc($course['title']) ?></li>
            </ol>
        </nav>
        
        <?php if(!empty($course['badge'])): ?>
            <span class="badge mb-3" style="background: linear-gradient(90deg, #f97316, #ea580c); font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; padding: 6px 12px; border-radius: 6px;"><?= esc($course['badge']) ?></span>
        <?php endif; ?>

        <h1 class="display-5 fw-bold mb-3" style="font-family: 'Outfit', sans-serif;"><?= esc($course['title']) ?></h1>
        <p class="lead text-white-50 max-width-600 mb-4" style="font-size: 1.1rem; line-height: 1.6; max-width: 700px;"><?= esc(strip_tags($course['description'] ?? '')) ?></p>
        
        <div class="d-flex flex-wrap gap-4 text-white-50 small bg-white bg-opacity-10 p-3 rounded-4 d-inline-flex" style="backdrop-filter: blur(10px);">
            <span>⚡ <strong>Difficulty:</strong> <?= esc($course['difficulty'] ?? 'Beginner') ?></span>
            <span>📅 <strong>Sessions:</strong> <?= esc($course['num_lessons']) ?> Classes</span>
            <span>⏱️ <strong>Schedule:</strong> <?= esc($course['duration'] ?? '12 Weeks') ?></span>
            <span>👦 <strong>Age Requirement:</strong> Ages <?= esc($course['age_range']) ?></span>
            <span>📜 <strong>Goal:</strong> Certificates & Projects</span>
        </div>
    </div>
</div>

<!-- Main Layout -->
<div class="container py-4">
    <div class="row g-5">
        
        <!-- Left: Course Overview & Highlights -->
        <div class="col-lg-8">
            <!-- Tabs Menu -->
            <ul class="nav nav-tabs mb-4 border-bottom" id="courseTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active fw-bold text-dark px-4 py-3 border-0 border-bottom-3" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" style="border-radius: 0;">Overview &amp; Outcomes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold text-dark px-4 py-3 border-0" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum" type="button" style="border-radius: 0;">Curriculum</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link fw-bold text-dark px-4 py-3 border-0" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor" type="button" style="border-radius: 0;">Instructor</button>
                </li>
            </ul>

            <div class="tab-content" id="courseTabContent">
                <!-- Overview Tab -->
                <div class="tab-pane fade show active" id="overview" role="tabpanel">
                    
                    <div style="background: #fafdfc; border: 1px solid #10b98120; border-radius: 20px; padding: 30px;" class="mb-5">
                        <h2 class="h4 fw-bold mb-4" style="color: #0f172a; display: flex; align-items: center; gap: 8px;">
                            <span style="font-size: 1.25rem;">🏆</span> What Your Child Will Learn
                        </h2>
                        
                        <div class="row g-3">
                            <?php if(!empty($outcomes)): ?>
                                <?php foreach($outcomes as $out): ?>
                                    <div class="col-md-6">
                                        <div class="d-flex gap-3 align-items-start">
                                            <span class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle" style="width: 22px; height: 22px; font-weight: 900; font-size: 11px; flex-shrink: 0; margin-top:2px;">✓</span>
                                            <span style="color: #334155; font-size: 0.95rem; font-weight: 500;"><?= esc($out['outcome_text']) ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="col-12 text-muted">Course syllabus outlines are loading. Call support group for brochure.</div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <h2 class="h4 fw-bold mb-4" style="color: #0f172a;">Course Core Description</h2>
                    <p style="color: #475569; font-size: 1.05rem; line-height: 1.7; white-space: pre-line;" class="mb-5">
                        <?= esc($course['description']) ?>
                    </p>

                    <!-- Kids Milestones Features banner -->
                    <div class="p-4 rounded-4" style="background: linear-gradient(135deg, #0ea5e910 0%, #a855f710 100%); border: 1px solid #0ea5e915;">
                        <h3 class="h5 fw-bold mb-3">🎓 Included in Course Bundle:</h3>
                        <div class="row g-3 text-muted small">
                            <div class="col-sm-6">✓ Interactive 1-on-1 and Group project reviews</div>
                            <div class="col-sm-6">✓ Personal Git sandbox portfolio code pages</div>
                            <div class="col-sm-6">✓ Coding competition prep mock tests</div>
                            <div class="col-sm-6">✓ Live dashboard access to track assignments</div>
                        </div>
                    </div>
                </div>

                <!-- Curriculum Tab -->
                <div class="tab-pane fade" id="curriculum" role="tabpanel">
                    <h2 class="h4 fw-bold mb-4" style="color: #0f172a;">Curriculum Structure Matrix</h2>
                    
                    <?php
                    // Parse curriculum_text modules dynamically
                    $syllabus = [];
                    $currModule = null;
                    if (!empty($course['curriculum_text'])) {
                        $lines = explode("\n", $course['curriculum_text']);
                        foreach ($lines as $line) {
                            $line = trim($line);
                            if (empty($line)) continue;
                            
                            if (strpos($line, '#') === 0) {
                                $modTitle = trim(substr($line, 1));
                                $currModule = $modTitle;
                                $syllabus[$currModule] = [];
                            } else {
                                $lesson = $line;
                                if (strpos($line, '-') === 0) {
                                    $lesson = trim(substr($line, 1));
                                }
                                if ($currModule) {
                                    $syllabus[$currModule][] = $lesson;
                                } else {
                                    $syllabus['General Coding Chapters'][] = $lesson;
                                }
                            }
                        }
                    }
                    ?>
                    
                    <div class="accordion mb-4" id="curriculumAccordion">
                        <?php if(!empty($syllabus)): ?>
                            <?php $idx = 1; foreach($syllabus as $title => $lessons): ?>
                                <div class="accordion-item shadow-sm border-0 mb-3 rounded-4 overflow-hidden" style="border: 1px solid #e2e8f0 !important;">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button <?= $idx === 1 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#mod<?= $idx ?>" style="background: #f8fafc; font-weight: 700; color: #1e293b; font-size: 0.95rem;">
                                            <?= esc($title) ?>
                                        </button>
                                    </h2>
                                    <div id="mod<?= $idx ?>" class="accordion-collapse collapse <?= $idx === 1 ? 'show' : '' ?>" data-bs-parent="#curriculumAccordion">
                                        <div class="accordion-body bg-white">
                                            <ul class="list-unstyled mb-0" style="font-size: 0.9rem; line-height: 1.8;">
                                                <?php foreach($lessons as $les): ?>
                                                    <li class="py-2 border-bottom d-flex align-items-center gap-2" style="color: #475569;">
                                                        <span style="color: #f97316;">★</span> <?= esc($les) ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php $idx++; endforeach; ?>
                        <?php else: ?>
                            <div class="text-center py-5 border rounded-4 bg-light">
                                <span style="font-size: 3rem;">📄</span>
                                <h3 class="h5 fw-bold mt-2">Syllabus Outline</h3>
                                <p class="text-muted small mx-auto mb-4" style="max-width: 400px;">Detailed weekly module breakdowns, timelines and homework components details are pre-loaded inside course blueprints.</p>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($course['curriculum_url'])): ?>
                        <div class="text-center">
                            <a href="<?= esc($course['curriculum_url']) ?>" class="btn btn-outline-primary px-4 py-2" target="_blank">
                                <i class="fa-solid fa-download"></i> Download Full Curriculum PDF Booklet
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Instructor Tab -->
                <div class="tab-pane fade" id="instructor" role="tabpanel">
                    <h2 class="h4 fw-bold mb-4" style="color: #0f172a;">Meet Your Coach</h2>
                    <div class="card p-4 border rounded-4 bg-white shadow-sm" style="border: 1px solid #e2e8f0 !important;">
                        <div class="d-flex flex-column flex-md-row gap-4 align-items-center align-items-md-start">
                            <div style="width: 110px; height: 110px; border-radius: 50%; overflow: hidden; flex-shrink: 0; border: 3px solid #f97316; box-shadow: 0 4px 10px rgba(249,115,22,0.15); background: #f8fafc;">
                                <?php if(!empty($course['instructor_image'])): ?>
                                    <img src="<?= base_url($course['instructor_image']) ?>" alt="<?= esc($course['instructor_name'] ?? 'Senior Coding Coach') ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                <?php else: ?>
                                    <div class="w-100 h-100 d-flex align-items-center justify-content-center" style="font-size: 2.8rem;">👨‍🏫</div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3 class="h5 fw-bold mb-1" style="color: #0d1e3d;"><?= esc($course['instructor_name'] ?? 'Senior Coding Coach') ?></h3>
                                <span class="badge mb-3 text-orange" style="font-size: 0.78rem; background: #fff1f2; color: #ea580c; border: 1px solid #fee2e2;">Certified Mentor Academy Level</span>
                                <p style="color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 0; white-space: pre-line;">
                                    <?= esc($course['instructor_bio'] ?: 'Highly accomplished technology mentor with years of experience directing custom K-12 STEM coding curricula. Specializes in making algorithms, variables and web architecture interactive and accessible for students.') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Pricing Card / Register Widget -->
        <aside class="col-lg-4">
            <div class="card border-0 shadow-lg p-4 rounded-4 sticky-top" style="top: 100px; z-index: 900 !important; border: 1px solid #f1f5f9;">
                
                <!-- Graphic Image Banner -->
                <?php if(!empty($course['image_path'])): ?>
                    <div style="border-radius: 12px; overflow: hidden; margin-bottom: 24px; border: 1px solid #e2e8f0; height: 180px;">
                        <img src="<?= base_url($course['image_path']) ?>" alt="<?= esc($course['title']) ?>" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                <?php else: ?>
                    <div class="mb-4 bg-light rounded-3 d-flex align-items-center justify-content-center text-muted" style="height: 180px;">
                        👨‍💻 Kids AI Coding Sandbox
                    </div>
                <?php endif; ?>

                <!-- Pricing Calculation -->
                <div class="mb-3 d-flex align-items-baseline gap-2">
                    <span class="h2 fw-bold text-primary mb-0">₹<?= number_format($course['price'] ?? 9999) ?></span>
                    <?php if (!empty($course['compare_price'])): ?>
                        <span class="text-muted text-decoration-line-through small">₹<?= number_format($course['compare_price']) ?></span>
                        <?php 
                        $pct = round((($course['compare_price'] - $course['price']) / $course['compare_price']) * 100);
                        if ($pct > 0): ?>
                            <span class="badge bg-warning-subtle text-warning" style="font-size: 0.75rem;"><?= $pct ?>% OFF</span>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
                
                <p class="text-danger small fw-bold mb-4">⏰ Seats filling fast! Only a few discounts remain for this cohort.</p>
                
                <a href="<?= base_url('contact?enroll='.urlencode($course['title'])) ?>" class="btn btn-primary btn-lg w-100 mb-3 shadow" style="font-weight: 700; border-radius: 10px;">
                    Enroll In Course
                </a>
                <a href="<?= base_url('contact?demo='.urlencode($course['title'])) ?>" class="btn btn-outline-secondary btn-lg w-100 mb-4" style="font-weight: 600; border-radius: 10px;">
                    Book Free Demo Class
                </a>
                
                <div class="border-top pt-3">
                    <h4 class="h6 fw-bold mb-3 text-secondary text-uppercase" style="letter-spacing: 0.05em; font-size: 0.78rem;">This Program Includes:</h4>
                    <ul class="list-unstyled small text-muted mb-0" style="line-height: 1.8;">
                        <li class="d-flex align-items-center gap-2">✓ <?= esc($course['num_lessons']) ?> live interactive cohort classes</li>
                        <li class="d-flex align-items-center gap-2">✓ Lifetime code sandbox recording links</li>
                        <li class="d-flex align-items-center gap-2">✓ Co-branded certification with STEM recognition</li>
                        <li class="d-flex align-items-center gap-2">✓ WhatsApp group updates with certified experts</li>
                    </ul>
                </div>

            </div>
        </aside>
    </div>
</div>

<?= view('components/footer') ?>
