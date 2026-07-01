<?= view('components/header', ['title' => 'Explore Coding Courses']) ?>

<!-- ══════════ PAGE HERO ══════════ -->
<section class="courses-hero">
    <div class="container">
        <div class="courses-hero-inner">
            <div class="courses-hero-badge">🚀 100+ Kids Enrolled</div>
            <h1 class="courses-hero-title">Find Your <span class="hero-gradient-text">Perfect Course</span></h1>
            <p class="courses-hero-sub">Project-based learning tracks curated for every age group and interest level.</p>
            <div class="courses-hero-stats">
                <div class="hero-stat"><span class="hero-stat-num">12+</span><span class="hero-stat-label">Courses</span></div>
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

        <!-- ── Sidebar ── -->
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
                        <input type="checkbox" id="age1">
                        <span>Junior (7–10)</span>
                    </label>
                    <label class="filter-chip" for="age2">
                        <input type="checkbox" id="age2" checked>
                        <span>Middle (10–14)</span>
                    </label>
                    <label class="filter-chip" for="age3">
                        <input type="checkbox" id="age3">
                        <span>Senior (14–18)</span>
                    </label>
                </div>
            </div>

            <!-- Track -->
            <div class="filter-group">
                <h4 class="filter-label">🛤️ Track</h4>
                <div class="filter-options">
                    <label class="filter-chip" for="cat1">
                        <input type="checkbox" id="cat1" checked>
                        <span>Programming</span>
                    </label>
                    <label class="filter-chip" for="cat2">
                        <input type="checkbox" id="cat2">
                        <span>Game Design</span>
                    </label>
                    <label class="filter-chip" for="cat3">
                        <input type="checkbox" id="cat3">
                        <span>AI &amp; Robotics</span>
                    </label>
                    <label class="filter-chip" for="cat4">
                        <input type="checkbox" id="cat4">
                        <span>Web Dev</span>
                    </label>
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
                        <input type="checkbox" id="diff2">
                        <span>Intermediate</span>
                    </label>
                    <label class="filter-chip" for="diff3">
                        <input type="checkbox" id="diff3">
                        <span>Advanced</span>
                    </label>
                </div>
            </div>

            <button class="btn-filter-apply" id="applyFilter">Apply Filters</button>
            <button class="btn-filter-reset" id="resetFilter">Reset</button>
        </aside>

        <!-- ── Course Grid ── -->
        <section class="courses-results">
            <div class="results-topbar">
                <p class="results-count"><strong>6 courses</strong> found</p>
                <div class="results-sort">
                    <label for="sortBy" class="sort-label">Sort:</label>
                    <select id="sortBy" class="sort-select">
                        <option>Most Popular</option>
                        <option>Newest First</option>
                        <option>Price: Low–High</option>
                        <option>Price: High–Low</option>
                    </select>
                </div>
            </div>

            <div class="course-cards-grid" id="courseGrid">

                <!-- ══ Card 1: Python ══ -->
                <article class="cc-card" id="card-python">
                    <div class="cc-ribbon popular">🔥 Popular</div>
                    <div class="cc-header gradient-orange">
                        <div class="cc-icon">🐍</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 10–14</span>
                            <span class="cc-badge diff beginner">Beginner</span>
                        </div>
                        <h2 class="cc-title">Python Beginners</h2>
                        <p class="cc-desc">Start your coding journey with the most popular language in the world. Build real projects from day one.</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 24 Sessions</span>
                            <span class="cc-stat">⏱️ 3 hrs/week</span>
                            <span class="cc-stat">👨‍🏫 Live Classes</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★★</span>
                            <span class="cc-rating-val">4.9</span>
                            <span class="cc-rating-count">(128 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Seats Filling Fast</span>
                                <span>78%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:78%; background: linear-gradient(90deg,#f97316,#fb923c);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹16,999</span>
                                <span class="cc-price">₹12,499</span>
                            </div>
                            <a href="<?= base_url('course/python-beginners') ?>" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- ══ Card 2: Web Dev ══ -->
                <article class="cc-card" id="card-webdev">
                    <div class="cc-ribbon new">✨ New</div>
                    <div class="cc-header gradient-blue">
                        <div class="cc-icon">🌐</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 12–18</span>
                            <span class="cc-badge diff intermediate">Intermediate</span>
                        </div>
                        <h2 class="cc-title">Full Stack Web Dev</h2>
                        <p class="cc-desc">Master HTML, CSS, and JavaScript to build stunning, modern websites that work on any device.</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 32 Sessions</span>
                            <span class="cc-stat">⏱️ 4 hrs/week</span>
                            <span class="cc-stat">🖥️ Project-Based</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★★</span>
                            <span class="cc-rating-val">4.8</span>
                            <span class="cc-rating-count">(94 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Seats Filling Fast</span>
                                <span>55%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:55%; background: linear-gradient(90deg,#0ea5e9,#38bdf8);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹19,999</span>
                                <span class="cc-price">₹15,999</span>
                            </div>
                            <a href="#" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- ══ Card 3: Game Design ══ -->
                <article class="cc-card" id="card-game">
                    <div class="cc-header gradient-purple">
                        <div class="cc-icon">🎮</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 8–13</span>
                            <span class="cc-badge diff beginner">Beginner</span>
                        </div>
                        <h2 class="cc-title">Game Design with Scratch</h2>
                        <p class="cc-desc">Design and publish your own video games using Scratch. Learn logic, storytelling &amp; animation.</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 20 Sessions</span>
                            <span class="cc-stat">⏱️ 2 hrs/week</span>
                            <span class="cc-stat">🎯 Fun Projects</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★☆</span>
                            <span class="cc-rating-val">4.7</span>
                            <span class="cc-rating-count">(76 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Seats Filling Fast</span>
                                <span>40%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:40%; background: linear-gradient(90deg,#a855f7,#c084fc);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹12,999</span>
                                <span class="cc-price">₹9,499</span>
                            </div>
                            <a href="#" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- ══ Card 4: AI & ML ══ -->
                <article class="cc-card" id="card-ai">
                    <div class="cc-ribbon popular">🤖 Trending</div>
                    <div class="cc-header gradient-green">
                        <div class="cc-icon">🤖</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 13–18</span>
                            <span class="cc-badge diff advanced">Advanced</span>
                        </div>
                        <h2 class="cc-title">AI &amp; Machine Learning</h2>
                        <p class="cc-desc">Dive into the world of Artificial Intelligence. Build chatbots, image classifiers &amp; smart apps.</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 36 Sessions</span>
                            <span class="cc-stat">⏱️ 5 hrs/week</span>
                            <span class="cc-stat">🧠 Real AI Tools</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★★</span>
                            <span class="cc-rating-val">5.0</span>
                            <span class="cc-rating-count">(42 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Almost Full!</span>
                                <span>91%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:91%; background: linear-gradient(90deg,#22c55e,#86efac);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹24,999</span>
                                <span class="cc-price">₹18,999</span>
                            </div>
                            <a href="#" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- ══ Card 5: App Dev ══ -->
                <article class="cc-card" id="card-app">
                    <div class="cc-header gradient-red">
                        <div class="cc-icon">📱</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 12–16</span>
                            <span class="cc-badge diff intermediate">Intermediate</span>
                        </div>
                        <h2 class="cc-title">Mobile App Development</h2>
                        <p class="cc-desc">Build Android &amp; iOS apps using MIT App Inventor. Launch your idea on the App Store!</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 28 Sessions</span>
                            <span class="cc-stat">⏱️ 3 hrs/week</span>
                            <span class="cc-stat">📲 Publish App</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★☆</span>
                            <span class="cc-rating-val">4.6</span>
                            <span class="cc-rating-count">(58 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Seats Filling Fast</span>
                                <span>62%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:62%; background: linear-gradient(90deg,#ef4444,#f87171);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹17,499</span>
                                <span class="cc-price">₹13,999</span>
                            </div>
                            <a href="#" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- ══ Card 6: Robotics ══ -->
                <article class="cc-card" id="card-robotics">
                    <div class="cc-ribbon new">🌟 Bestseller</div>
                    <div class="cc-header gradient-amber">
                        <div class="cc-icon">🦾</div>
                        <div class="cc-header-overlay"></div>
                    </div>
                    <div class="cc-body">
                        <div class="cc-meta">
                            <span class="cc-badge age">Age 9–14</span>
                            <span class="cc-badge diff beginner">Beginner</span>
                        </div>
                        <h2 class="cc-title">Robotics &amp; Arduino</h2>
                        <p class="cc-desc">Program real robots using Arduino! Build line-followers, obstacle avoiders &amp; more in this hands-on course.</p>
                        <div class="cc-stats">
                            <span class="cc-stat">📚 18 Sessions</span>
                            <span class="cc-stat">⏱️ 2 hrs/week</span>
                            <span class="cc-stat">🔧 Hardware Kit</span>
                        </div>
                        <div class="cc-rating">
                            <span class="cc-stars">★★★★★</span>
                            <span class="cc-rating-val">4.9</span>
                            <span class="cc-rating-count">(89 reviews)</span>
                        </div>
                        <div class="cc-progress-wrap">
                            <div class="cc-progress-label">
                                <span>Seats Filling Fast</span>
                                <span>85%</span>
                            </div>
                            <div class="cc-progress-bar"><div class="cc-progress-fill" style="width:85%; background: linear-gradient(90deg,#f59e0b,#fbbf24);"></div></div>
                        </div>
                        <div class="cc-footer">
                            <div class="cc-price-wrap">
                                <span class="cc-price-orig">₹21,999</span>
                                <span class="cc-price">₹16,499</span>
                            </div>
                            <a href="#" class="cc-cta-btn">
                                Enroll Now <span class="cc-cta-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </article>

            </div><!-- /course-cards-grid -->
        </section>
    </div><!-- /courses-layout -->
</main>

<!-- ══════════ INLINE CSS FOR COURSE CARDS ══════════ -->
<style>
/* ─── Hero ─────────────────────────────────────────── */
.courses-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #1a3a4a 100%);
    padding: 80px 0 70px;
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
    font-size: clamp(2rem, 5vw, 3rem);
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
    font-size: 1.5rem;
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
    grid-template-columns: 260px 1fr;
    gap: 36px;
    align-items: start;
}

/* ─── Sidebar ───────────────────────────────────────── */
.filter-sidebar {
    background: #fff;
    border-radius: 20px;
    padding: 28px 24px;
    box-shadow: 0 2px 24px rgba(15,23,42,0.07);
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
    font-weight: 700;
    color: #1e293b;
    margin: 0;
}
.filter-group { margin-bottom: 22px; }
.filter-label {
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #64748b;
    margin-bottom: 10px;
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
    padding: 9px 12px 9px 36px;
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
.btn-filter-apply {
    width: 100%;
    padding: 11px;
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: #fff;
    font-weight: 700;
    font-size: 0.9rem;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    margin-top: 8px;
    box-shadow: 0 4px 14px rgba(249,115,22,0.35);
    transition: transform 0.2s, box-shadow 0.2s;
}
.btn-filter-apply:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(249,115,22,0.45);
}
.btn-filter-reset {
    width: 100%;
    padding: 9px;
    background: transparent;
    color: #94a3b8;
    font-size: 0.82rem;
    border: none;
    cursor: pointer;
    margin-top: 8px;
    transition: color 0.2s;
}
.btn-filter-reset:hover { color: #ef4444; }

/* ─── Results Topbar ────────────────────────────────── */
.results-topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}
.results-count { color: #64748b; font-size: 0.9rem; }
.results-count strong { color: #1e293b; }
.sort-label { font-size: 0.85rem; color: #64748b; margin-right: 6px; }
.sort-select {
    padding: 6px 12px;
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
    grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
    gap: 26px;
}

/* ─── Course Card ───────────────────────────────────── */
.cc-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(15,23,42,0.07);
    border: 1px solid #f1f5f9;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: transform 0.35s cubic-bezier(.25,.8,.25,1),
                box-shadow 0.35s cubic-bezier(.25,.8,.25,1);
}
.cc-card:hover {
    transform: translateY(-8px) scale(1.01);
    box-shadow: 0 20px 50px rgba(15,23,42,0.13);
}

/* Ribbon */
.cc-ribbon {
    position: absolute;
    top: 16px;
    right: -28px;
    padding: 4px 36px 4px 16px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.04em;
    border-radius: 4px 0 0 4px;
    z-index: 10;
    transform: rotate(0deg);
    box-shadow: 0 2px 8px rgba(0,0,0,0.18);
}
.cc-ribbon.popular { background: linear-gradient(90deg,#f97316,#fb923c); color: #fff; }
.cc-ribbon.new     { background: linear-gradient(90deg,#0ea5e9,#38bdf8); color: #fff; }

/* Card Header / Banner */
.cc-header {
    height: 140px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}
.cc-header::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, transparent 40%, rgba(0,0,0,0.18) 100%);
}
/* Shimmer on hover */
.cc-card:hover .cc-header::before {
    content: '';
    position: absolute;
    top: 0; left: -60%;
    width: 40%; height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    animation: shimmer 0.5s ease forwards;
    z-index: 3;
}
@keyframes shimmer {
    from { left: -60%; }
    to   { left: 120%; }
}

.cc-icon {
    font-size: 3.6rem;
    position: relative;
    z-index: 2;
    filter: drop-shadow(0 4px 12px rgba(0,0,0,0.2));
    transition: transform 0.35s ease;
}
.cc-card:hover .cc-icon { transform: scale(1.15) rotate(-4deg); }

/* Gradient Themes */
.gradient-orange { background: linear-gradient(135deg, #f97316 0%, #fdba74 100%); }
.gradient-blue   { background: linear-gradient(135deg, #0ea5e9 0%, #67e8f9 100%); }
.gradient-purple { background: linear-gradient(135deg, #a855f7 0%, #d8b4fe 100%); }
.gradient-green  { background: linear-gradient(135deg, #22c55e 0%, #86efac 100%); }
.gradient-red    { background: linear-gradient(135deg, #ef4444 0%, #fca5a5 100%); }
.gradient-amber  { background: linear-gradient(135deg, #f59e0b 0%, #fde68a 100%); }

/* Card Body */
.cc-body {
    padding: 22px 22px 20px;
    display: flex;
    flex-direction: column;
    flex: 1;
}
.cc-meta {
    display: flex;
    gap: 8px;
    margin-bottom: 12px;
    flex-wrap: wrap;
}
.cc-badge {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 999px;
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.03em;
}
.cc-badge.age         { background: #eff6ff; color: #2563eb; }
.cc-badge.beginner    { background: #f0fdf4; color: #16a34a; }
.cc-badge.intermediate{ background: #fff7ed; color: #ea580c; }
.cc-badge.advanced    { background: #fdf2f8; color: #9333ea; }

.cc-title {
    font-family: 'Outfit', sans-serif;
    font-size: 1.13rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 8px;
    line-height: 1.3;
}
.cc-desc {
    font-size: 0.84rem;
    color: #64748b;
    line-height: 1.6;
    margin-bottom: 14px;
    flex-grow: 1;
}

/* Stats row */
.cc-stats {
    display: flex;
    gap: 6px;
    flex-wrap: wrap;
    margin-bottom: 14px;
}
.cc-stat {
    font-size: 0.75rem;
    font-weight: 600;
    color: #475569;
    background: #f8fafc;
    padding: 4px 9px;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}

/* Rating */
.cc-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 14px;
}
.cc-stars { color: #f59e0b; font-size: 0.9rem; letter-spacing: -1px; }
.cc-rating-val { font-weight: 700; font-size: 0.88rem; color: #1e293b; }
.cc-rating-count { font-size: 0.78rem; color: #94a3b8; }

/* Seat Progress */
.cc-progress-wrap { margin-bottom: 18px; }
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
    border-radius: 999px;
    overflow: hidden;
}
.cc-progress-fill {
    height: 100%;
    border-radius: 999px;
    transition: width 1s ease;
}

/* Footer */
.cc-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 14px;
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
    box-shadow: 0 4px 14px rgba(249,115,22,0.35);
    transition: transform 0.2s, box-shadow 0.2s;
    white-space: nowrap;
}
.cc-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(249,115,22,0.5);
    color: #fff;
}
.cc-cta-arrow {
    transition: transform 0.25s ease;
}
.cc-cta-btn:hover .cc-cta-arrow { transform: translateX(4px); }

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

<!-- Animate progress bars on scroll -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const fills = document.querySelectorAll('.cc-progress-fill');
    fills.forEach(el => {
        const target = el.style.width;
        el.style.width = '0%';
        setTimeout(() => { el.style.width = target; }, 400);
    });
});
</script>

<?= view('components/footer') ?>
