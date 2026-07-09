<?= view('components/header', ['title' => 'Explore Coding Courses']) ?>

<!-- ══════════ PAGE HERO ══════════ -->
<section class="courses-hero">
    <div class="container">
        <div class="courses-hero-inner">
            <div class="courses-hero-badge">🚀 100+ Kids Enrolled</div>
            <h1 class="courses-hero-title">Find Your <span class="hero-gradient-text">Perfect Course</span></h1>
            <p class="courses-hero-sub">Project-based learning tracks curated for every age group and interest level.</p>
            <div class="courses-hero-stats">
                <div class="hero-stat"><span class="hero-stat-num"><?= count($courses) ?></span><span class="hero-stat-label">Courses</span></div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat"><span class="hero-stat-num">500+</span><span class="hero-stat-label">Students</span></div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat"><span class="hero-stat-num">4.9★</span><span class="hero-stat-label">Avg Rating</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════ MAIN CONTENT ══════════ -->
<main class="courses-main container">
    <div class="courses-layout">

        <!-- ── Sidebar Filter ── -->
        <aside class="filter-sidebar">
            <div class="filter-header">
                <span class="filter-icon">🎯</span>
                <h3>Filter Courses</h3>
            </div>

            <!-- Search -->
            <div class="filter-group">
                <div class="filter-search-wrap">
                    <span class="search-icon-inner">🔍</span>
                    <input type="text" class="filter-search-input" placeholder="Search courses…" id="courseSearch">
                </div>
            </div>

            <!-- Age Group -->
            <div class="filter-group">
                <h4 class="filter-label">🎂 Age Group</h4>
                <div class="filter-options">
                    <label class="filter-chip" for="age1">
                        <input type="checkbox" id="age1" checked>
                        <span>Junior (7–10)</span>
                    </label>
                    <label class="filter-chip" for="age2">
                        <input type="checkbox" id="age2" checked>
                        <span>Middle (10–14)</span>
                    </label>
                    <label class="filter-chip" for="age3">
                        <input type="checkbox" id="age3" checked>
                        <span>Senior (14–18)</span>
                    </label>
                </div>
            </div>

            <!-- Track / Category (Dynamically Generated) -->
            <div class="filter-group">
                <h4 class="filter-label">🛤️ Track</h4>
                <div class="filter-options">
                    <?php
                    $uniqueTracks = [];
                    foreach ($courses as $c) {
                        $track = !empty($c['course_type']) ? $c['course_type'] : 'Other';
                        if (!in_array($track, $uniqueTracks)) {
                            $uniqueTracks[] = $track;
                        }
                    }
                    $tcIdx = 1;
                    foreach ($uniqueTracks as $trk):
                    ?>
                        <label class="filter-chip" for="cat<?= $tcIdx ?>">
                            <input type="checkbox" class="track-filter-checkbox" id="cat<?= $tcIdx ?>" value="<?= esc($trk) ?>" checked>
                            <span><?= esc($trk) ?></span>
                        </label>
                    <?php 
                        $tcIdx++;
                    endforeach; 
                    ?>
                </div>
            </div>

            <!-- Difficulty -->
            <div class="filter-group">
                <h4 class="filter-label">⚡ Difficulty</h4>
                <div class="filter-options">
                    <label class="filter-chip" for="diff1">
                        <input type="checkbox" id="diff1" checked>
                        <span>Beginner</span>
                    </label>
                    <label class="filter-chip" for="diff2">
                        <input type="checkbox" id="diff2" checked>
                        <span>Intermediate</span>
                    </label>
                    <label class="filter-chip" for="diff3">
                        <input type="checkbox" id="diff3" checked>
                        <span>Advanced</span>
                    </label>
                </div>
            </div>

            <button class="btn-filter-reset" id="resetFilter" style="margin-top: 15px;">Clear / Select All</button>
        </aside>

        <!-- ── Course Grid Results ── -->
        <section class="courses-results">
            <div class="results-topbar">
                <p class="results-count" id="resultsCount"><strong><?= count($courses) ?> courses</strong> found</p>
                <div class="results-sort">
                    <label for="sortBy" class="sort-label">Sort:</label>
                    <select id="sortBy" class="sort-select">
                        <option value="popular">Most Popular</option>
                        <option value="price-asc">Price: Low–High</option>
                        <option value="price-desc">Price: High–Low</option>
                    </select>
                </div>
            </div>

            <div class="course-cards-grid" id="courseGrid">
                <?php foreach($courses as $course): ?>
                    <?php
                    // Dynamic layout variables mapping
                    $gradientClass = 'gradient-orange';
                    $emoji = '💻';
                    $trackShort = 'Other';
                    $type = strtolower($course['course_type'] ?? '');
                    
                    if (strpos($type, 'program') !== false) {
                        $gradientClass = 'gradient-orange';
                        $emoji = '🐍';
                        $trackShort = 'Programming';
                    } elseif (strpos($type, 'game') !== false) {
                        $gradientClass = 'gradient-purple';
                        $emoji = '🎮';
                        $trackShort = 'Game Design';
                    } elseif (strpos($type, 'ai') !== false || strpos($type, 'robot') !== false) {
                        $gradientClass = 'gradient-green';
                        $emoji = '🤖';
                        $trackShort = 'AI & Robotics';
                    } elseif (strpos($type, 'web') !== false) {
                        $gradientClass = 'gradient-blue';
                        $emoji = '🌐';
                        $trackShort = 'Web Dev';
                    } else {
                        $gradientClass = 'gradient-amber';
                        $emoji = '💻';
                        $trackShort = 'Other';
                    }

                    // Dynamically parse age groups for client side filtering
                    $isJunior = 0; $isMiddle = 0; $isSenior = 0;
                    preg_match_all('/\d+/', $course['age_range'] ?? '', $ageParts);
                    if (!empty($ageParts[0])) {
                        $min = intval($ageParts[0][0]);
                        $max = isset($ageParts[0][1]) ? intval($ageParts[0][1]) : $min;
                        if ($min <= 10 && $max >= 7) $isJunior = 1;
                        if ($min <= 14 && $max >= 10) $isMiddle = 1;
                        if ($min <= 18 && $max >= 14) $isSenior = 1;
                    } else {
                        $isMiddle = 1; // Fallback default
                    }
                    ?>
                    
                    <article class="cc-card" 
                             data-title="<?= esc(strtolower($course['title'])) ?>"
                             data-junior="<?= $isJunior ?>"
                             data-middle="<?= $isMiddle ?>"
                             data-senior="<?= $isSenior ?>"
                             data-track="<?= esc(!empty($course['course_type']) ? $course['course_type'] : 'Other') ?>"
                             data-diff="<?= esc($course['difficulty'] ?? 'Beginner') ?>"
                             data-price="<?= intval($course['price'] ?? 0) ?>"
                             data-pop="<?= intval($course['rating_count'] ?? 10) ?>">
                        
                        <?php if (!empty($course['badge'])): ?>
                            <div class="cc-ribbon popular"><?= esc($course['badge']) ?></div>
                        <?php endif; ?>

                        <!-- Card Header -->
                        <div class="cc-header <?= $gradientClass ?>">
                            <?php if(!empty($course['image_path'])): ?>
                                <img src="<?= base_url($course['image_path']) ?>" alt="<?= esc($course['title']) ?>" style="width: 100%; height: 100%; object-fit: cover; position: absolute; inset:0; opacity: 0.9;">
                                <div class="cc-header-overlay" style="position: absolute; inset: 0; background: linear-gradient(180deg, transparent 40%, rgba(0,0,0,0.6) 100%); z-index: 1;"></div>
                            <?php else: ?>
                                <div class="cc-icon"><?= $emoji ?></div>
                                <div class="cc-header-overlay"></div>
                            <?php endif; ?>
                        </div>

                        <!-- Card Body -->
                        <div class="cc-body">
                            <div class="cc-meta">
                                <span class="cc-badge age">Age <?= esc($course['age_range']) ?></span>
                                <span class="cc-badge diff <?= strtolower($course['difficulty'] ?? 'beginner') ?>"><?= esc($course['difficulty'] ?? 'Beginner') ?></span>
                            </div>
                            
                            <h2 class="cc-title"><?= esc($course['title']) ?></h2>
                            <p class="cc-desc"><?= esc(strip_tags($course['description'] ?? '')) ?></p>
                            
                            <div class="cc-stats">
                                <span class="cc-stat">📚 <?= esc($course['num_lessons']) ?> Sessions</span>
                                <span class="cc-stat">⏱️ <?= esc($course['duration']) ?></span>
                                <span class="cc-stat">⚙️ Live Projects</span>
                            </div>

                            <div class="cc-rating">
                                <span class="cc-stars">
                                    <?php 
                                    $stars = round(floatval($course['rating_val'] ?? 4.8));
                                    echo str_repeat('★', $stars) . str_repeat('☆', 5 - $stars);
                                    ?>
                                </span>
                                <span class="cc-rating-val"><?= esc($course['rating_val'] ?? '4.8') ?></span>
                                <span class="cc-rating-count">(<?= esc($course['rating_count'] ?? '32') ?> reviews)</span>
                            </div>

                            <!-- Progress Bar -->
                            <div class="cc-progress-wrap">
                                <div class="cc-progress-label">
                                    <span>Seats Filling Fast</span>
                                    <span><?= esc($course['seats_percent'] ?? '75') ?>%</span>
                                </div>
                                <div class="cc-progress-bar">
                                    <div class="cc-progress-fill" style="width: <?= esc($course['seats_percent'] ?? '75') ?>%; background: linear-gradient(90deg, #f97316, #0ea5e9);"></div>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="cc-footer">
                                <div class="cc-price-wrap">
                                    <?php if (!empty($course['compare_price'])): ?>
                                        <span class="cc-price-orig">₹<?= number_format($course['compare_price']) ?></span>
                                    <?php endif; ?>
                                    <span class="cc-price">₹<?= number_format($course['price'] ?? 9999) ?></span>
                                </div>
                                <a href="<?= base_url('course/' . $course['slug']) ?>" class="cc-cta-btn">
                                    Details <span class="cc-cta-arrow">→</span>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            
            <div id="noResults" style="display: none; text-align: center; padding: 60px 20px; color: var(--text-muted);">
                <span style="font-size: 3rem; display: block; margin-bottom: 12px;">🔍</span>
                <h4 style="font-weight: 700; color: var(--text-main); margin-bottom: 8px;">No Courses Found</h4>
                <p>Try clearing some of your search filters to view more courses.</p>
            </div>
        </section>

    </div>
</main>

<!-- ══════════ INLINE CSS FOR COURSE CARDS ══════════ -->
<style>
/* ─── Hero ─────────────────────────────────────────── */
.courses-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #1a3a4a 100%);
    padding: 85px 0 75px;
    position: relative;
    overflow: hidden;
}
.courses-hero::before {
    content: '';
    position: absolute;
    width: 500px; height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(249,115,22,0.15), transparent 70%);
    top: -150px; right: -100px;
    pointer-events: none;
}
.courses-hero-inner {
    text-align: center;
    max-width: 640px;
    margin: 0 auto;
}
.courses-hero-badge {
    display: inline-block;
    background: rgba(249,115,22,0.18);
    border: 1px solid rgba(249,115,22,0.4);
    color: #fb923c;
    padding: 6px 20px;
    border-radius: 999px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: 0.02em;
}
.courses-hero-title {
    font-family: 'Outfit', sans-serif;
    font-size: clamp(2.2rem, 5vw, 3.2rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.15;
    margin-bottom: 16px;
}
.hero-gradient-text {
    background: linear-gradient(90deg, #f97316, #0ea5e9);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.courses-hero-sub {
    color: #94a3b8;
    font-size: 1.05rem;
    margin-bottom: 36px;
}
.courses-hero-stats {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 28px;
}
.hero-stat { text-align: center; }
.hero-stat-num {
    display: block;
    font-size: 1.6rem;
    font-weight: 800;
    color: #fff;
    font-family: 'Outfit', sans-serif;
}
.hero-stat-label {
    font-size: 0.78rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 0.07em;
}
.hero-stat-divider {
    width: 1px;
    height: 36px;
    background: rgba(255,255,255,0.12);
}

/* ─── Layout ────────────────────────────────────────── */
.courses-main {
    padding: 50px 20px 80px;
}
.courses-layout {
    display: grid;
    grid-template-columns: 270px 1fr;
    gap: 36px;
    align-items: start;
}

/* ─── Sidebar ───────────────────────────────────────── */
.filter-sidebar {
    background: #fff;
    border-radius: 20px;
    padding: 28px 24px;
    box-shadow: 0 4px 30px rgba(15,23,42,0.04);
    position: sticky;
    top: 90px;
    border: 1px solid #f1f5f9;
}
.filter-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px solid #f1f5f9;
}
.filter-icon { font-size: 1.3rem; }
.filter-header h3 {
    font-size: 1.05rem;
    font-weight: 800;
    color: #1e293b;
    margin: 0;
}
.filter-group { margin-bottom: 24px; }
.filter-label {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #64748b;
    margin-bottom: 12px;
}
.filter-options { display: flex; flex-direction: column; gap: 8px; }
.filter-chip {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 12px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 0.88rem;
    font-weight: 500;
    color: #334155;
    transition: background 0.2s, color 0.2s;
    background: #f8fafc;
    border: 1px solid transparent;
}
.filter-chip:hover {
    background: #fff7ed;
    border-color: #fed7aa;
    color: #ea580c;
}
.filter-chip input[type="checkbox"] {
    accent-color: #f97316;
    width: 15px; height: 15px;
    flex-shrink: 0;
}
.filter-search-wrap {
    position: relative;
}
.search-icon-inner {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 0.9rem;
}
.filter-search-input {
    width: 100%;
    padding: 10px 12px 10px 36px;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    font-size: 0.88rem;
    color: #1e293b;
    background: #f8fafc;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s;
}
.filter-search-input:focus {
    border-color: #f97316;
    box-shadow: 0 0 0 3px rgba(249,115,22,0.1);
}
.btn-filter-reset {
    width: 100%;
    padding: 12px;
    background: #f1f5f9;
    color: #475569;
    font-size: 0.85rem;
    font-weight: 700;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    text-align: center;
    transition: background 0.2s, color 0.2s;
}
.btn-filter-reset:hover { background: #e2e8f0; color: #0f172a; }

/* ─── Results Topbar ────────────────────────────────── */
.results-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}
.results-count { color: #64748b; font-size: 0.9rem; margin: 0; }
.results-count strong { color: #1e293b; }
.sort-label { font-size: 0.85rem; color: #64748b; margin-right: 6px; }
.sort-select {
    padding: 8px 12px;
    border: 1.5px solid #e2e8f0;
    border-radius: 8px;
    font-size: 0.85rem;
    color: #334155;
    background: #fff;
    cursor: pointer;
    outline: none;
}

/* ─── Course Cards Grid ─────────────────────────────── */
.course-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(295px, 1fr));
    gap: 28px;
}

/* ─── Course Card ───────────────────────────────────── */
.cc-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(15,23,42,0.06);
    border: 1px solid #f1f5f9;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.cc-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(15,23,42,0.12);
}

/* Ribbon */
.cc-ribbon {
    position: absolute;
    top: 16px;
    right: 16px;
    padding: 4px 12px;
    font-size: 0.72rem;
    font-weight: 700;
    border-radius: 6px;
    z-index: 10;
    background: linear-gradient(135deg, #ea580c, #f97316);
    color: #fff;
    box-shadow: 0 2px 8px rgba(249,115,22,0.3);
}

/* Card Header */
.cc-header {
    height: 155px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.cc-icon {
    font-size: 3.6rem;
    z-index: 2;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.15));
    transition: transform 0.3s ease;
}
.cc-card:hover .cc-icon { transform: scale(1.1) rotate(-3deg); }

/* Gradient Themes */
.gradient-orange { background: linear-gradient(135deg, #f97316 0%, #fdba74 100%); }
.gradient-blue   { background: linear-gradient(135deg, #0ea5e9 0%, #67e8f9 100%); }
.gradient-purple { background: linear-gradient(135deg, #a855f7 0%, #d8b4fe 100%); }
.gradient-green  { background: linear-gradient(135deg, #22c55e 0%, #86efac 100%); }
.gradient-red    { background: linear-gradient(135deg, #ef4444 0%, #fca5a5 100%); }
.gradient-amber  { background: linear-gradient(135deg, #f59e0b 0%, #fde68a 100%); }

/* Card Body */
.cc-body {
    padding: 24px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.cc-meta {
    display: flex;
    gap: 8px;
    margin-bottom: 12px;
}
.cc-badge {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 999px;
    font-size: 0.72rem;
    font-weight: 700;
}
.cc-badge.age         { background: #eff6ff; color: #2563eb; }
.cc-badge.beginner    { background: #f0fdf4; color: #16a34a; }
.cc-badge.intermediate{ background: #fff7ed; color: #ea580c; }
.cc-badge.advanced    { background: #fdf2f8; color: #ca8a04; }

.cc-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.15rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 8px;
    line-height: 1.3;
}
.cc-desc {
    font-size: 0.85rem;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 16px;
    flex-grow: 1;
}

/* Stats */
.cc-stats {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    margin-bottom: 16px;
}
.cc-stat {
    font-size: 0.75rem;
    font-weight: 600;
    color: #475569;
    background: #f8fafc;
    padding: 4px 10px;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}

/* Rating */
.cc-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 16px;
}
.cc-stars { color: #f59e0b; font-size: 0.9rem; }
.cc-rating-val { font-weight: 700; font-size: 0.88rem; color: #1e293b; }
.cc-rating-count { font-size: 0.78rem; color: #94a3b8; }

/* Seats progress */
.cc-progress-wrap { margin-bottom: 20px; }
.cc-progress-label {
    display: flex;
    justify-content: space-between;
    font-size: 0.76rem;
    font-weight: 600;
    color: #64748b;
    margin-bottom: 5px;
}
.cc-progress-bar {
    height: 6px;
    background: #f1f5f9;
    border-radius: 99px;
    overflow: hidden;
}
.cc-progress-fill {
    height: 100%;
    border-radius: 99px;
    transition: width 1s ease;
}

/* Footer */
.cc-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 16px;
    border-top: 1px solid #f1f5f9;
}
.cc-price-wrap { display: flex; flex-direction: column; }
.cc-price-orig {
    font-size: 0.78rem;
    color: #94a3b8;
    text-decoration: line-through;
}
.cc-price {
    font-size: 1.3rem;
    font-weight: 800;
    color: #f97316;
    font-family: 'Outfit', sans-serif;
    line-height: 1.1;
}
.cc-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: #fff;
    font-weight: 700;
    font-size: 0.85rem;
    padding: 10px 18px;
    border-radius: 12px;
    text-decoration: none;
    box-shadow: 0 4px 14px rgba(249,115,22,0.25);
    transition: transform 0.2s, box-shadow 0.2s;
}
.cc-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(249,115,22,0.35);
    color: #fff;
}
.cc-cta-arrow { transition: transform 0.2s; }
.cc-cta-btn:hover .cc-cta-arrow { transform: translateX(3px); }

/* ─── Responsive ────────────────────────────────────── */
@media (max-width: 992px) {
    .courses-layout { grid-template-columns: 1fr; }
    .filter-sidebar { position: static; }
}
@media (max-width: 600px) {
    .course-cards-grid { grid-template-columns: 1fr; }
    .courses-hero-stats { gap: 16px; }
}
</style>

<!-- Public client-side instant filtering scripts -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Select selectors
    const searchInput = document.getElementById('courseSearch');
    const ageJunior = document.getElementById('age1');
    const ageMiddle = document.getElementById('age2');
    const ageSenior = document.getElementById('age3');
    
    // Select all dynamically loaded track checkboxes
    const trackCheckboxes = Array.from(document.querySelectorAll('.track-filter-checkbox'));
    
    const diffBeg = document.getElementById('diff1');
    const diffInt = document.getElementById('diff2');
    const diffAdv = document.getElementById('diff3');
    
    const resetButton = document.getElementById('resetFilter');
    const sortSelect = document.getElementById('sortBy');
    
    const cards = Array.from(document.querySelectorAll('.cc-card'));
    const grid = document.getElementById('courseGrid');
    const countText = document.getElementById('resultsCount');
    const noResultsDiv = document.getElementById('noResults');

    // Run filters
    function runFiltering() {
        const query = searchInput.value.toLowerCase().trim();
        
        let checkedAges = [];
        if (ageJunior.checked) checkedAges.push('junior');
        if (ageMiddle.checked) checkedAges.push('middle');
        if (ageSenior.checked) checkedAges.push('senior');
        
        let checkedTracks = [];
        trackCheckboxes.forEach(cb => {
            if (cb.checked) {
                checkedTracks.push(cb.value);
            }
        });
        
        let checkedDiffs = [];
        if (diffBeg.checked) checkedDiffs.push('Beginner');
        if (diffInt.checked) checkedDiffs.push('Intermediate');
        if (diffAdv.checked) checkedDiffs.push('Advanced');
        
        let visibleCount = 0;
        
        cards.forEach(card => {
            const title = card.getAttribute('data-title');
            
            // Age Match logic
            const juniorMatch = ageJunior.checked && (card.getAttribute('data-junior') === '1');
            const middleMatch = ageMiddle.checked && (card.getAttribute('data-middle') === '1');
            const seniorMatch = ageSenior.checked && (card.getAttribute('data-senior') === '1');
            const ageMatch = juniorMatch || middleMatch || seniorMatch || (checkedAges.length === 0);
            
            // Track Match
            const trackVal = card.getAttribute('data-track');
            const trackMatch = checkedTracks.includes(trackVal) || (checkedTracks.length === 0);
            
            // Difficulty Match
            const diffVal = card.getAttribute('data-diff');
            const diffMatch = checkedDiffs.includes(diffVal) || (checkedDiffs.length === 0);
            
            // Text search match
            const textMatch = (title.indexOf(query) !== -1 || query === '');
            
            if (ageMatch && trackMatch && diffMatch && textMatch) {
                card.style.display = 'flex';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        countText.innerHTML = `<strong>${visibleCount} courses</strong> found`;
        
        if (visibleCount === 0) {
            noResultsDiv.style.display = 'block';
            grid.style.display = 'none';
        } else {
            noResultsDiv.style.display = 'none';
            grid.style.display = 'grid';
        }
    }

    // Sort function
    function sortCards() {
        const method = sortSelect.value;
        let sorted = [...cards];
        
        if (method === 'price-asc') {
            sorted.sort((a,b) => parseInt(a.getAttribute('data-price')) - parseInt(b.getAttribute('data-price')));
        } else if (method === 'price-desc') {
            sorted.sort((a,b) => parseInt(b.getAttribute('data-price')) - parseInt(a.getAttribute('data-price')));
        } else {
            // popular
            sorted.sort((a,b) => parseInt(b.getAttribute('data-pop')) - parseInt(a.getAttribute('data-pop')));
        }
        
        sorted.forEach(c => grid.appendChild(c));
    }

    // Attach listeners
    searchInput.addEventListener('input', runFiltering);
    
    // Attach change events to all inputs
    const filterInputs = [ageJunior, ageMiddle, ageSenior, diffBeg, diffInt, diffAdv].concat(trackCheckboxes);
    filterInputs.forEach(input => {
        if(input) input.addEventListener('change', runFiltering);
    });
    
    sortSelect.addEventListener('change', sortCards);
    
    resetButton.addEventListener('click', () => {
        searchInput.value = '';
        filterInputs.forEach(input => {
            if(input) input.checked = true;
        });
        runFiltering();
    });
});
</script>

<?= view('components/footer') ?>
