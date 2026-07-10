<?= view('components/header', ['title' => 'Terms of Service']) ?>

<!-- Header Banner -->
<div class="py-5 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 60%); pointer-events: none;"></div>
    <div class="container py-4 text-center">
        <span class="badge mb-2 px-3 py-2 text-uppercase fw-bold" style="background: rgba(255,255,255,0.15); border-radius: 30px; letter-spacing: 0.05em; font-size: 0.75rem;">Legal Agreements</span>
        <h1 class="fw-extrabold display-5 mb-3" style="font-family: 'Outfit', sans-serif;">Terms of Service</h1>
        <p class="lead mb-0 text-white-50 mx-auto" style="max-width: 600px; font-size: 1.05rem;">Please read these terms carefully before enrolling in our courses or using the KidsAI Coding platform.</p>
    </div>
</div>

<!-- Main Section -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Sidebar Menu -->
        <div class="col-lg-4 col-xl-3">
            <?= view('components/legal_sidebar', ['active' => 'terms-of-service']) ?>
        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                <p class="text-muted small mb-4">Last Updated: July 10, 2026</p>
                
                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">1. Introduction & Acceptance of Terms</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Welcome to <strong>KidsAI Coding Academy</strong> ("we," "our," "us"). By accessing our website, booking trial classes, enrolling in batches, or utilizing our virtual classrooms, learning portals, and downloadable course resources, you ("you," "your," or "Parent/Guardian" on behalf of the student) agree to comply with and be bound by these Terms of Service. If you do not agree, please do not use our services.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">2. Account Registration & Safety</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    To access student dashboards, complete assignments, or track grades, children will require accounts managed by a Parent or legal Guardian:
                    <ul class="mt-2 text-secondary">
                        <li>Parents/Guardians are responsible for ensuring the accuracy of register details (names, contact numbers, email addresses).</li>
                        <li>You are responsible for keeping passwords and portal login information confidential and secure.</li>
                        <li>Any student interaction inside team batches must be safe, friendly, and supportive. We maintain a zero-tolerance policy against cyberbullying, harassment, and inappropriate language.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">3. Classroom Attendance & Equipment</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    To optimize the learning outcomes for students during Python, Scratch, or AI batches, parents must ensure:
                    <ul class="mt-2 text-secondary">
                        <li>Students have a functional desktop/laptop computer with a stable internet connection, webcam, and microphone.</li>
                        <li>Students arrive on time for scheduled live sessions. If a student misses a session, they can review lesson recordings and assignments via the student dashboard.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">4. Intellectual Property</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    All class presentations, game templates, source codes, project ideas, videos, text modules, and lesson notes provided during execution are the exclusive intellectual property of KidsAI Coding Academy. 
                    Parents/students are granted a personal, non-transferable, non-sublicensable license to use these resources solely for personal learning. Re-distributing, republishing, or reselling our original learning content is strictly prohibited.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">5. Batch Postponement & Counselor Schedule Changes</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    KidsAI Coding Academy reserves the right to postpone live batch start dates or merge batches if minimum student counts are not achieved. We also reserve the right to change assigned mentors to ensure the highest instructional quality and continuity.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">6. Indemnification & Limitation of Liability</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Under no circumstances shall KidsAI Coding Academy or its affiliates be liable for direct, indirect, incidental, or consequential damages resulting from technical interruptions, server downtimes, software glitches from third-party tools (like Scratch or Zoom), or a student's inability to access resources.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">7. Governing Law</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    These Terms of Service shall be governed by, construed, and enforced in accordance with the laws of India. Any legal dispute or claims arising out of these terms shall be subject to the exclusive jurisdiction of the courts located in New Delhi, India.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">8. Contact Information</h2>
                <div class="text-secondary mb-0" style="line-height: 1.7;">
                    If you have questions regarding these terms, please contact our support team at <a href="mailto:support@kidsaicoding.com" class="text-decoration-none fw-bold" style="color: #4f46e5;">support@kidsaicoding.com</a> or phone us at +91 98765 43210.
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
