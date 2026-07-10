<?= view('components/header', ['title' => 'Privacy Policy']) ?>

<!-- Header Banner -->
<div class="py-5 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 60%); pointer-events: none;"></div>
    <div class="container py-4 text-center">
        <span class="badge mb-2 px-3 py-2 text-uppercase fw-bold" style="background: rgba(255,255,255,0.15); border-radius: 30px; letter-spacing: 0.05em; font-size: 0.75rem;">Legal Agreements</span>
        <h1 class="fw-extrabold display-5 mb-3" style="font-family: 'Outfit', sans-serif;">Privacy Policy</h1>
        <p class="lead mb-0 text-white-50 mx-auto" style="max-width: 600px; font-size: 1.05rem;">We prioritize your child's data security. Read how we gather, protect, and handle data.</p>
    </div>
</div>

<!-- Main Section -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Sidebar Menu -->
        <div class="col-lg-4 col-xl-3">
            <?= view('components/legal_sidebar', ['active' => 'privacy-policy']) ?>
        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                <p class="text-muted small mb-4">Last Updated: July 10, 2026</p>
                
                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">1. Our Commitment to Kid's Privacy</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    At <strong>KidsAI Coding Academy</strong>, we are committed to safeguarding the privacy and security of our online classes and student accounts. Since our students are often children under the age of 18, we adhere strictly to global kids data protection principles, including guidelines consistent with COPPA (Children's Online Privacy Protection Rule) and India's Digital Personal Data Protection Act (DPDPA).
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">2. Information We Collect</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    We collect minimal personal data to facilitate registrations, online tuition services, and performance dashboards. 
                    <ul class="mt-2 text-secondary">
                        <li><strong>Parent/Guardian Information:</strong> Full name, billing email address, contact phone number, address, and transaction logs.</li>
                        <li><strong>Student Information:</strong> First name or nickname, age/grade, coding skill levels, and class batch assignments. We do NOT collect social profiles, personal contact details, or other sensitive details from kids.</li>
                        <li><strong>Course Interaction:</strong> Code files submitted during assignments, Scratch projects shared with class mentors, quiz results, and certification badges earned.</li>
                        <li><strong>Video Classroom Recordings:</strong> Live online classes are recorded for training quality assurance and shared security playback. These class recordings are only shared with students enrolled in the same batch via their secure portal dashboard.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">3. How We Use Collected Data</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    The information we process is strictly restricted to educational operations:
                    <ul class="mt-2 text-secondary">
                        <li>Providing course booking confirmations, schedules, and class progress reminders.</li>
                        <li>Reviewing students' assignments, giving personalized mentor feedback, and issuing certificates of completion.</li>
                        <li>Improving learning tools, web experience, and customizing curriculums.</li>
                        <li>Preventing platform abuse, protecting student safety, and complying with billing regulations in India.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">4. Data Sharing & Third-Party Integrations</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    KidsAI Coding Academy does NOT sell, lease, rent, or trade student personal records or project files with third-party advertisers. We share metadata only with reliable infrastructure providers under strict privacy mandates:
                    <ul class="mt-2 text-secondary">
                        <li><strong>Live Video Tools:</strong> Third-party platforms (like Zoom or Google Meet) to host live video batches.</li>
                        <li><strong>Payment Gateways:</strong> Secure PCI-DSS compliant companies (like Razorpay, Stripe, or Instamojo) to handle card/UPI processing.</li>
                        <li><strong>Cloud Databases:</strong> Hosting servers (e.g. AWS or Google Cloud) to store backups and databases safely.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">5. Consent, Access, and Control</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    As a Parent or Guardian, you hold full control page access rights. You can:
                    <ul class="mt-2 text-secondary">
                        <li>Request review, modification, or deletion of your child's data.</li>
                        <li>Choose to opt-out of marketing newsletter campaigns while keeping transaction updates active.</li>
                        <li>Withdraw consent to record live class sessions (please contact support to discuss student isolation in public batches).</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">6. Security Policies</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Our database uses industry-standard 256-bit encryption (SSL/TLS) for data in transit and encrypted columns for stored profile data. We run daily vulnerability sweeps and restrict data access on a strict "least privilege" basis to authorized batch supervisors only.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">7. Contact for Privacy Inquiries</h2>
                <div class="text-secondary mb-0" style="line-height: 1.7;">
                    For issues or requests regarding information deletion, cookies, or children safety control policies, reach our Dedicated Data Protection Officer at: <a href="mailto:privacy@kidsaicoding.com" class="text-decoration-none fw-bold" style="color: #4f46e5;">privacy@kidsaicoding.com</a>.
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
