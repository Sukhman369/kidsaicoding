<?= view('components/header', ['title' => 'Home']) ?>

    <!-- Hero Section -->
    <header class="home-hero">
        <div class="home-hero-container">
            <div class="hero-left">
                <span class="hero-tag">
                    🚀 New Batch Starting Soon
                </span>

                <h1>
                    <?= esc(get_setting('hero_title', 'Learn AI, Coding & Robotics The Fun Way.')) ?>
                </h1>

                <p>
                    <?= nl2br(esc(get_setting('hero_subtitle', 'Interactive project-based learning for kids aged 6–18. Build games, websites, apps and AI projects with expert mentors.'))) ?>
                </p>

                <div class="hero-features">
                    <div>✔ Live Interactive Classes</div>
                    <div>✔ STEM Accredited Curriculum</div>
                    <div>✔ Build Real Projects</div>
                    <div>✔ Certified Mentors</div>
                </div>

                <div class="hero-buttons">
                    <a href="<?= base_url('courses') ?>" class="btn-hero-primary">
                        Explore Courses
                    </a>
                    <a href="<?= base_url('book-free-class') ?>" class="btn-hero-secondary">
                        Book Free Demo
                    </a>

                </div>

                <div class="hero-trust">
                    <div class="hero-trust-item">
                        <strong>10,000+</strong>
                        <span>Students</span>
                    </div>
                    <div class="hero-trust-item">
                        <strong>4.9★</strong>
                        <span>Google Rating</span>
                    </div>
                    <div class="hero-trust-item">
                        <strong>STEM</strong>
                        <span>Accredited</span>
                    </div>
                </div>
            </div>

            <div class="hero-right">
                <?php if (get_setting('hero_image')): ?>
                    <img src="<?= base_url(get_setting('hero_image')) ?>" alt="<?= esc(get_setting('brand_name', 'KidsAI')) ?> Hero" style="width: 100%; max-width: 550px; aspect-ratio: 1.1 / 1; border-radius: 40px; object-fit: cover; box-shadow: 0 20px 60px rgba(0,0,0,.05);">
                <?php else: ?>
                    <div class="hero-image-placeholder">
                        IMAGE PLACEHOLDER
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>

<!-- Course Section Start -->
<section class="home-courses" id="courses">

    <div class="section-title">
        <h2>
            Choose an <span>AI & Coding Course</span> That Inspires Your Child
        </h2>
    </div>

    <div class="course-grid">

        <?php foreach($courses as $course): ?>
        <div class="course-card">
            <div class="course-image">
                <?php if($course['badge']): ?>
                    <span class="badge ai"><?= $course['badge'] ?></span>
                <?php endif; ?>
                <span class="badge age">Age <?= $course['age_range'] ?></span>
                
                <?php if($course['image_path']): ?>
                    <img src="<?= base_url($course['image_path']) ?>" alt="<?= $course['title'] ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 20px 20px 0 0;">
                <?php else: ?>
                    <div class="image-placeholder">
                        <span><?= $course['course_type'] ?? 'Interactive Class' ?></span>
                    </div>
                <?php endif; ?>
            </div>
            <div class="course-body">
                <h3><?= $course['title'] ?></h3>
                <div class="course-meta">
                    <span>🎓 Grade <?= $course['grade_range'] ?></span>
                    <span>📚 <?= $course['num_lessons'] ?> Lessons</span>
                    <span>📝 <?= $course['num_activities'] ?> Activities</span>
                    <span>⏱ <?= $course['duration'] ?></span>
                </div>
                <p class="description">
                    <?= $course['description'] ?>
                </p>
            </div>
            <div class="course-footer" style="padding: 25px; border-top: 1px solid #eee; display: flex; flex-direction: column; gap: 15px;">
                <a href="<?= base_url('book-free-class') ?>" style="width: 100%; padding: 12px; background: #4f46e5; color: white; border: none; border-radius: 12px; font-weight: 700; cursor: pointer; transition: all 0.3s; text-align: center; text-decoration: none;">Try a Free Lesson</a>
            </div>

        </div>
        <?php endforeach; ?>

        <?php if(empty($courses)): ?>
            <p style="text-align: center; grid-column: 1/-1; padding: 40px; color: #666;">Our exciting courses are coming soon! Stay tuned.</p>
        <?php endif; ?>

    </div>

</section>

<!-- Course Section End -->

<!-- Sections -->
<?php //echo view('sections/plans') ?>


<!-- Benefits Section Start -->
<section class="benefits-section">

    <!-- Scholarship Banner -->
    <div class="scholarship-banner">
        <div class="penguin">🐧</div>
        <p>Complete a <strong>FREE Trial Lesson</strong> to unlock additional scholarships!</p>
    </div>

    <!-- Benefits Card -->
    <div class="benefits-card">
        <div class="sparkle">✨</div>
        <h2>Every student at <span>KidsAI</span> gets these amazing benefits!</h2>
        <ul>
            <li>A handpicked mentor matched to your child's learning style.</li>
            <li>Two FREE monthly doubt-clearing sessions.</li>
            <li>Unlimited AI Tutor access anytime.</li>
            <li>24×7 Parent Support Team.</li>
            <li>Lifetime access to recordings & worksheets.</li>
            <li>STEM Accredited Certificate after milestones.</li>
            <li>Worksheets & quizzes after every class.</li>
            <li>Monthly progress reports.</li>
            <li>Flexible payment options.</li>
            <li>100% Money Back Guarantee.</li>
            <li>Student Dashboard with analytics.</li>
        </ul>
    </div>

    <!-- Bottom CTA -->
    <div class="benefits-footer">
        <p>Start with a FREE Trial Lesson at your preferred date & time. No commitments. No hidden charges.</p>
        <a href="<?= base_url('book-free-class') ?>" class="trial-btn">Try a FREE Lesson</a>
    </div>

</section>
<!-- Benefits Section Ends -->

<!-- Testimonials Section Start -->
<section class="testimonials">

    <div class="section-heading">
        <h2>Hear From Our Happy Students</h2>
        <p>Real students sharing their coding journey through projects & innovation.</p>
    </div>

    <div class="testimonial-slider-wrap">
        <button class="slider-btn prev">❮</button>
        <button class="slider-btn next">❯</button>

        <div class="testimonial-slider">

            <!-- Card 1 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Aarav Sharma</h3>
                    <span>Grade 6 • AI & Coding</span>
                    <p>"I built my own platformer games and learned Python logic in just a few months!"</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Priya Patel</h3>
                    <span>Grade 8 • Web Development</span>
                    <p>"Learning to build responsive websites was so much fun. My confidence has grown so much!"</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Rohan Mehta</h3>
                    <span>Grade 10 • Python Advanced</span>
                    <p>"The hands-on projects helped me discover my real passion for software engineering."</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Ananya Iyer</h3>
                    <span>Grade 5 • Game Design</span>
                    <p>"I love how we can create anything we imagine. My mentor is always there to help me."</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Ishaan Gupta</h3>
                    <span>Grade 7 • App Development</span>
                    <p>"Building my first mobile app was a dream come true. KidsAI makes it so simple!"</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Zoya Khan</h3>
                    <span>Grade 9 • Artificial Intelligence</span>
                    <p>"Understanding machine learning through fun experiments was the best part of my summer."</p>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Kabir Singh</h3>
                    <span>Grade 4 • Scratch Jr.</span>
                    <p>"I made a story with talking animals! Coding is like playing with digital blocks."</p>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Sana Reddy</h3>
                    <span>Grade 11 • Data Science</span>
                    <p>"The complex topics were explained so clearly. I'm now ready for my college projects."</p>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Arjun Das</h3>
                    <span>Grade 6 • Robotics</span>
                    <p>"Programing virtual robots to navigate mazes was incredibly exciting and challenging."</p>
                </div>
            </div>

            <!-- Card 10 -->
            <div class="testimonial-card">
                <div class="video-box">
                    <div class="play-btn">▶</div>
                    VIDEO THUMBNAIL
                </div>
                <div class="testimonial-content">
                    <div class="stars">★★★★★</div>
                    <h3>Meera Nair</h3>
                    <span>Grade 8 • UI/UX Design</span>
                    <p>"I learned how to design beautiful app interfaces. It's the perfect mix of art and tech."</p>
                </div>
            </div>

        </div>
    </div>

    <div class="slider-dots">
        <span class="active"></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

</section>
<!-- Testimonials Section Ends -->

<!-- Mentor Section Start -->
<section class="mentor-section">

    <div class="section-title">
        <h2>Learn From Industry Expert Mentors</h2>
        <p>Our carefully selected mentors make coding fun, practical, and engaging for every child.</p>
    </div>

    <div class="mentor-container">

        <!-- LEFT: Image -->
        <div class="mentor-image-wrap" style="flex: 1; min-width: 300px; display: flex; justify-content: center;">
            <?php if (get_setting('mentor_section_image')): ?>
                <img src="<?= base_url(get_setting('mentor_section_image')) ?>" alt="Industry Experts" style="width: 100%; max-width: 500px; height: 350px; border-radius: 24px; object-fit: cover; box-shadow: 0 15px 40px rgba(0,0,0,0.06);">
            <?php else: ?>
                <div class="mentor-image-placeholder">
                    IMAGE PLACEHOLDER
                </div>
            <?php endif; ?>
        </div>

        <!-- RIGHT: Stats Grid -->
        <div class="mentor-grid">

            <div class="mentor-card">
                <div class="icon">🎓</div>
                <h3>1000+</h3>
                <p>Expert Mentors</p>
            </div>

            <div class="mentor-card">
                <div class="icon">🏆</div>
                <h3>8+ Years</h3>
                <p>Teaching Experience</p>
            </div>

            <div class="mentor-card">
                <div class="icon">⭐</div>
                <h3>4.9/5</h3>
                <p>Student Rating</p>
            </div>

            <div class="mentor-card">
                <div class="icon">💻</div>
                <h3>10+</h3>
                <p>Programming Languages</p>
            </div>

        </div>

    </div>

    <div class="mentor-buttons">
        <a href="#" class="btn-outline">Become a Mentor</a>
        <a href="<?= base_url('book-free-demo') ?>" class="btn-fill">Book Free Demo</a>
    </div>

</section>
<!-- Mentor Section Ends -->

<!-- Guarantee Section Start -->
<section class="guarantee-section">

    <div class="section-title">
        <h2><?= esc(get_setting('guarantee_title', '100% Risk-Free Learning Guarantee')) ?></h2>
        <p><?= esc(get_setting('guarantee_subtitle', 'We are committed to providing the best learning experience for every child.')) ?></p>
    </div>

    <div class="guarantee-card">

        <!-- LEFT: Visual Seal -->
        <div class="guarantee-image">
            <div class="badge-seal-placeholder">
                100%<br>GUARANTEE
            </div>
        </div>

        <!-- RIGHT: Content -->
        <div class="guarantee-content">
            <h3><?= esc(get_setting('guarantee_detail_title', 'Your Satisfaction Comes First')) ?></h3>
            <p>
                <?= nl2br(esc(get_setting('guarantee_detail_text', "We believe in the quality of our mentors and curriculum.\nIf you feel our classes aren't the right fit after your first\nsession, we'll refund your payment—no complicated process,\nno hidden conditions."))) ?>
            </p>

            <div class="guarantee-list">
                <?php 
                $feats = explode(',', get_setting('guarantee_features', '100% Money Back, Cancel Anytime, Transparent Pricing, Dedicated Support'));
                foreach ($feats as $f): 
                    $f = trim($f);
                    if (!$f) continue;
                ?>
                    <div class="check-item"><span>✔</span> <?= esc($f) ?></div>
                <?php endforeach; ?>
            </div>

            <div class="guarantee-btn-wrap">
                <a href="<?= base_url('book-free-demo') ?>" class="btn-fill">Book Free Trial</a>
            </div>
        </div>

    </div>

</section>
<!-- Guarantee Section Ends -->

<!-- Why Code Section Start -->
<section class="why-code">

    <div class="section-title">
        <h2><?= esc(get_setting('why_code_title', 'Why Every Child Should Learn Coding')) ?></h2>
        <p><?= esc(get_setting('why_code_subtitle', "Coding isn't just about computers. It develops creativity, confidence and problem-solving skills that last a lifetime.")) ?></p>
    </div>

    <!-- ITEM 1 -->
    <div class="why-row">
        <div class="why-image">
            <?php if (get_setting('why_code_r1_image')): ?>
                <img src="<?= base_url(get_setting('why_code_r1_image')) ?>" alt="Critical Thinking" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            <?php else: ?>
                IMAGE PLACEHOLDER
            <?php endif; ?>
        </div>
        <div class="why-content">
            <div class="icon-box"><?= esc(get_setting('why_code_r1_icon', '🧠')) ?></div>
            <h3><?= esc(get_setting('why_code_r1_title', 'Develop Critical Thinking')) ?></h3>
            <p>
                <?= nl2br(esc(get_setting('why_code_r1_desc', 'Coding strengthens logical reasoning, analytical thinking and creative problem-solving, helping children perform better in academics and everyday life.'))) ?>
            </p>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="why-row reverse">
        <div class="why-image">
            <?php if (get_setting('why_code_r2_image')): ?>
                <img src="<?= base_url(get_setting('why_code_r2_image')) ?>" alt="Future Careers" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            <?php else: ?>
                IMAGE PLACEHOLDER
            <?php endif; ?>
        </div>
        <div class="why-content">
            <div class="icon-box"><?= esc(get_setting('why_code_r2_icon', '🚀')) ?></div>
            <h3><?= esc(get_setting('why_code_r2_title', 'Prepare for Future Careers')) ?></h3>
            <p>
                <?= nl2br(esc(get_setting('why_code_r2_desc', "Technology is shaping every industry. Learning programming early gives children\nconfidence to succeed in tomorrow's digital world."))) ?>
            </p>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="why-row">
        <div class="why-image">
            <?php if (get_setting('why_code_r3_image')): ?>
                <img src="<?= base_url(get_setting('why_code_r3_image')) ?>" alt="Project Based" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
            <?php else: ?>
                IMAGE PLACEHOLDER
            <?php endif; ?>
        </div>
        <div class="why-content">
            <div class="icon-box"><?= esc(get_setting('why_code_r3_icon', '🎯')) ?></div>
            <h3><?= esc(get_setting('why_code_r3_title', 'Learn Through Projects')) ?></h3>
            <p>
                <?= nl2br(esc(get_setting('why_code_r3_desc', 'Kids build games, websites, AI applications and real projects, making learning practical and enjoyable.'))) ?>
            </p>
        </div>
    </div>

    <div class="why-btn-wrap">
        <a href="<?= base_url('book-free-demo') ?>">Start Free Trial</a>
    </div>

</section>
<!-- Why Code Section Ends -->

<!-- Team Section Start -->
<section class="team-section">

    <div class="section-title">
        <h2>Meet Our Expert Team</h2>
        <p>Experienced educators and technology professionals dedicated to inspiring the next generation of innovators.</p>
    </div>

    <div class="team-grid">

        <!-- CARD 1 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Gaurav</h3>
                <span>Founder & Lead Mentor</span>
                <p>Passionate educator with 10+ years of experience teaching AI, Python and Robotics to young innovators.</p>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Rupali</h3>
                <span>Head of Curriculum</span>
                <p>Expert in STEM education with focus on project-based learning and interactive student engagement.</p>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Manish</h3>
                <span>Senior AI Mentor</span>
                <p>Tech professional with background in Machine Learning, dedicated to making complex AI concepts simple.</p>
            </div>
        </div>

    </div>

    <div class="team-btn-wrap">
        <a href="<?= base_url('about') ?>">Meet The Entire Team</a>
    </div>

</section>
<!-- Team Section Ends -->

    <!-- Features Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-primary fw-bold text-uppercase letter-spacing-lg small"><?= esc(get_setting('choose_us_tag', 'The KidsAI Advantage')) ?></span>
                <h2 class="fw-bold h1 mt-2" style="font-family: 'Outfit', sans-serif;"><?= esc(get_setting('choose_us_title', 'Why Choose Us?')) ?></h2>
                <div class="bg-primary mx-auto mt-3" style="width: 60px; height: 4px; border-radius: 2px;"></div>
            </div>
            <div class="row g-4 pt-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;"><?= esc(get_setting('choose_us_f1_icon', '🎯')) ?></div>
                        <h3 class="h4 fw-bold mb-3"><?= esc(get_setting('choose_us_f1_title', 'Goal-Based Path')) ?></h3>
                        <p class="text-muted small lh-lg"><?= esc(get_setting('choose_us_f1_desc', 'Every child gets a customized roadmap based on their age, interests, and learning speed. No one gets left behind.')) ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;"><?= esc(get_setting('choose_us_f2_icon', '👩‍🏫')) ?></div>
                        <h3 class="h4 fw-bold mb-3"><?= esc(get_setting('choose_us_f2_title', 'Expert Mentors')) ?></h3>
                        <p class="text-muted small lh-lg"><?= esc(get_setting('choose_us_f2_desc', 'Our educators are not just teachers; they are professionals from top tech backgrounds who love teaching kids.')) ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 p-lg-5 border-0 shadow-sm rounded-5 hover-lift transition">
                        <div class="feature-icon mb-4" style="font-size: 3rem;"><?= esc(get_setting('choose_us_f3_icon', '🛠️')) ?></div>
                        <h3 class="h4 fw-bold mb-3"><?= esc(get_setting('choose_us_f3_title', 'Real-World Projects')) ?></h3>
                        <p class="text-muted small lh-lg"><?= esc(get_setting('choose_us_f3_desc', 'From mobile apps to AI models, students create a professional portfolio of real-world work by the end of each module.')) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= view('components/footer', ['settings' => $settings]) ?>


<script>
    // Testimonial Slider Navigation
    const slider = document.querySelector('.testimonial-slider');
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');
    const dots = document.querySelectorAll('.slider-dots span');

    if (slider && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            const cardWidth = slider.querySelector('.testimonial-card').offsetWidth + 25;
            slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            const cardWidth = slider.querySelector('.testimonial-card').offsetWidth + 25;
            slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });
        });

        // Sync dots on scroll
        slider.addEventListener('scroll', () => {
            const maxScroll = slider.scrollWidth - slider.clientWidth;
            if (maxScroll <= 0) return;
            const scrollPercent = slider.scrollLeft / maxScroll;
            const activeIndex = Math.min(
                dots.length - 1,
                Math.round(scrollPercent * (dots.length - 1))
            );
            dots.forEach((dot, index) => {
                if (index === activeIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        });

        // Click dots to scroll
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const maxScroll = slider.scrollWidth - slider.clientWidth;
                const targetScroll = (index / (dots.length - 1)) * maxScroll;
                slider.scrollTo({ left: targetScroll, behavior: 'smooth' });
            });
        });
    }
</script>
