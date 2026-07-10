<?= view('components/header', ['title' => 'Cancellation & Refund Policy']) ?>

<!-- Header Banner -->
<div class="py-5 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 60%); pointer-events: none;"></div>
    <div class="container py-4 text-center">
        <span class="badge mb-2 px-3 py-2 text-uppercase fw-bold" style="background: rgba(255,255,255,0.15); border-radius: 30px; letter-spacing: 0.05em; font-size: 0.75rem;">Legal Agreements</span>
        <h1 class="fw-extrabold display-5 mb-3" style="font-family: 'Outfit', sans-serif;">Cancellation & Refund Policy</h1>
        <p class="lead mb-0 text-white-50 mx-auto" style="max-width: 600px; font-size: 1.05rem;">We strive for complete satisfaction. Read our cooling-off periods and refund instructions.</p>
    </div>
</div>

<!-- Main Section -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Sidebar Menu -->
        <div class="col-lg-4 col-xl-3">
            <?= view('components/legal_sidebar', ['active' => 'refund-policy']) ?>
        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                <p class="text-muted small mb-4">Last Updated: July 10, 2026</p>
                
                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">1. The Free Trial Class Experience</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    At <strong>KidsAI Coding Academy</strong>, we believe parents should be completely confident in building their kid's programming foundation before making any payments. We offer one (1) <strong>Free 1-on-1 Demo Lesson</strong> for every child, allowing you to test webcam tools, witness the mentor's coaching interaction, and review our gamified curriculums absolutely risk-free.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">2. Money-Back Guarantee (Cooling-off Period)</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    If you decide to enroll in a batch and later feel the coding style doesn't fit your student's learning pace, we support a hassle-free partial refund within the specified window:
                    <ul class="mt-2 text-secondary">
                        <li><strong>14-Day Refund Guarantee:</strong> Parents can request a cancellation of their purchase up to fourteen (14) days from the date of payment or before the student attends the third (3rd) live batch session (whichever occurs earlier).</li>
                        <li>This money-back window applies exclusively to our standard monthly or quarterly subscription models and semester programs.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">3. Non-Refundable Items & Workshops</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    The following products, resources, and services are non-refundable:
                    <ul class="mt-2 text-secondary">
                        <li>One-off weekend bootcamps or special holiday hackathon events.</li>
                        <li>Self-paced downloadable premium learning kits or e-books where instant file links are unlocked.</li>
                        <li>Courses where more than three (3) live sessions have already been attended or where assignments are submitted/reviewed by graders.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">4. Refund Pro-Rata Calculations</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    When calculations for refunds are performed, we deduct:
                    <ul class="mt-2 text-secondary">
                        <li>A flat transaction and processing setup fee of INR 500 (or $15 for international accounts) charged by our gateway processors.</li>
                        <li>The pro-rata cost of the live classes already attended. For example, if a student completes 2 lessons of a 12-lesson block, the fees for 2 sessions will be adjusted before refunding.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">5. Submitting a Cancellation request</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    To initiate a cancellation, please email our billing department at <a href="mailto:billing@kidsaicoding.com" class="text-decoration-none fw-bold" style="color: #4f46e5;">billing@kidsaicoding.com</a> with the subject line <em>"Refund Request - [Student Name] - [Order ID]"</em>. Please include:
                    <ul class="mt-2 text-secondary">
                        <li>Payment confirmation receipt copy or date of payment.</li>
                        <li>The reason for cancellation (we appreciate feedback to improve).</li>
                        <li>Your UPI ID, net-banking account number, or bank details to facilitate a refund.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">6. Processing Timelines</h2>
                <div class="text-secondary mb-0" style="line-height: 1.7;">
                    Once your cancellation email is approved, our accounting team will initiate the refund within <strong>7 to 10 working days</strong> for accounts within India, and up to <strong>15 working days</strong> for international transactions. Funds will reflect in the original source payment method (card, net-banking, UPI, or PayPal) used during purchase.
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
