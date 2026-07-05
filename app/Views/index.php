<?= view('components/header', ['title' => 'Home']) ?>

    <!-- Hero Section -->
    <header class="home-hero">
        <div class="home-hero-container">
            <div class="hero-left">
                <span class="hero-tag">
                    🚀 New Batch Starting Soon
                </span>

                <h1>
                    <?= isset($settings['hero_title']) ? $settings['hero_title'] : 'Learn AI, Coding & Robotics The Fun Way.' ?>
                </h1>

                <p>
                    <?= isset($settings['hero_subtitle']) ? nl2br($settings['hero_subtitle']) : 'Interactive project-based learning for kids aged 6–18. Build games, websites, apps and AI projects with expert mentors.' ?>
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
                <div class="hero-image-placeholder">
                    IMAGE PLACEHOLDER
                </div>
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

        <!-- LEFT: Image Placeholder -->
        <div class="mentor-image-placeholder">
            IMAGE PLACEHOLDER
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
        <h2>100% Risk-Free Learning Guarantee</h2>
        <p>We are committed to providing the best learning experience for every child.</p>
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
            <h3>Your Satisfaction Comes First</h3>
            <p>
                We believe in the quality of our mentors and curriculum.
                If you feel our classes aren't the right fit after your first
                session, we'll refund your payment—no complicated process,
                no hidden conditions.
            </p>

            <div class="guarantee-list">
                <div class="check-item"><span>✔</span> 100% Money Back</div>
                <div class="check-item"><span>✔</span> Cancel Anytime</div>
                <div class="check-item"><span>✔</span> Transparent Pricing</div>
                <div class="check-item"><span>✔</span> Dedicated Support</div>
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
        <h2>Why Every Child Should Learn Coding</h2>
        <p>Coding isn't just about computers. It develops creativity, confidence and problem-solving skills that last a lifetime.</p>
    </div>

    <!-- ITEM 1 -->
    <div class="why-row">
        <div class="why-image">
            IMAGE PLACEHOLDER
        </div>
        <div class="why-content">
            <div class="icon-box">🧠</div>
            <h3>Develop Critical Thinking</h3>
            <p>
                Coding strengthens logical reasoning, analytical thinking and creative problem-solving,
                helping children perform better in academics and everyday life.
            </p>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="why-row reverse">
        <div class="why-image">
            IMAGE PLACEHOLDER
        </div>
        <div class="why-content">
            <div class="icon-box">🚀</div>
            <h3>Prepare for Future Careers</h3>
            <p>
                Technology is shaping every industry. Learning programming early gives children
                confidence to succeed in tomorrow's digital world.
            </p>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="why-row">
        <div class="why-image">
            IMAGE PLACEHOLDER
        </div>
        <div class="why-content">
            <div class="icon-box">🎯</div>
            <h3>Learn Through Projects</h3>
            <p>
                Kids build games, websites, AI applications and real projects,
                making learning practical and enjoyable.
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

        <!-- CARD 4 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Sukhman<h3>
                <span>Creative Design Lead</span>
                <p>Specializes in teaching UI/UX and Web Design, helping students build beautiful digital experiences.</p>
            </div>
        </div>

        <!-- CARD 5 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Sameer</h3>
                <span>Robotics Expert</span>
                <p>Engineer focused on hands-on robotics and hardware programming for students of all skill levels.</p>
            </div>
        </div>

        <!-- CARD 6 -->
        <div class="team-card">
            <div class="team-image-placeholder">IMAGE PLACEHOLDER</div>
            <div class="team-content">
                <h3>Name</h3>
                <span>Student Success Mgr</span>
                <p>Ensures every child's learning journey is personalized, fun and productive at every step.</p>
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

<?= view('components/footer', ['settings' => $settings]) ?>


<script>
    // Testimonial Slider Navigation
    const slider = document.querySelector('.testimonial-slider');
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');

    if (slider && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            const cardWidth = slider.querySelector('.testimonial-card').offsetWidth + 25;
            slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            const cardWidth = slider.querySelector('.testimonial-card').offsetWidth + 25;
            slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });
        });
    }
</script>
