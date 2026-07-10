<?= view('components/header', ['title' => 'Course Pricing Policy']) ?>

<!-- Header Banner -->
<div class="py-5 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 60%); pointer-events: none;"></div>
    <div class="container py-4 text-center">
        <span class="badge mb-2 px-3 py-2 text-uppercase fw-bold" style="background: rgba(255,255,255,0.15); border-radius: 30px; letter-spacing: 0.05em; font-size: 0.75rem;">Legal Agreements</span>
        <h1 class="fw-extrabold display-5 mb-3" style="font-family: 'Outfit', sans-serif;">Course Pricing Policy</h1>
        <p class="lead mb-0 text-white-50 mx-auto" style="max-width: 600px; font-size: 1.05rem;">Get complete transparency on how we rate our classes, package offerings, and fee structures.</p>
    </div>
</div>

<!-- Main Section -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Sidebar Menu -->
        <div class="col-lg-4 col-xl-3">
            <?= view('components/legal_sidebar', ['active' => 'pricing-policy']) ?>
        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                <p class="text-muted small mb-4">Last Updated: July 10, 2026</p>
                
                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">1. Transparency in Pricing</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    At <strong>KidsAI Coding Academy</strong>, we maintain full pricing transparency. All costs, custom packages, block discounts, and optional project kit pricing are clearly displayed on our course checkout templates or communicated directly by academic counselors before enrollment.
                    <br><br>
                    <strong>We do not apply any hidden administration charges, portal maintenance fees, or hidden textbook/project card costs.</strong>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">2. Course Block Structures</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Our courses are structured into standard modular session blocks designed to match different levels of STEM capability:
                    <ul class="mt-2 text-secondary">
                        <li><strong>Starter Packs (12 Lessons):</strong> Introducing core blocks or basics of coding (e.g. Scratch foundations, basic variables).</li>
                        <li><strong>Developer Packs (24 Lessons):</strong> Developing active games or dynamic web layouts (e.g., intermediate CSS/HTML, Python structures).</li>
                        <li><strong>Mastery Packs (48 Lessons+):</strong> Comprehensive curriculum encompassing AI databases, deep learning algorithms, or robotic APIs.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">3. Currencies and Tax Policy</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Fees are determined based on the parent's current country of residence and the regional portal version accessed:
                    <ul class="mt-2 text-secondary">
                        <li><strong>Domestic Enrollments (India):</strong> Billed in INR (Indian Rupee) including standard Goods and Services Tax (GST) allocations.</li>
                        <li><strong>International Enrollments:</strong> Billed in USD, GBP, SGD, or EUR depending on the client profile, reflecting international mentorship rates and multi-lingual teacher allocations.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">4. Group vs. 1-on-1 Tuition Rates</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    Pricing fluctuates based on the format of instructions selected:
                    <ul class="mt-2 text-secondary">
                        <li><strong>Group Batches (Up to 4-6 Kids):</strong> Affordable pricing with peers sharing the same timezone and batch pace.</li>
                        <li><strong>Private 1-on-1 Mentorship:</strong> Premium pricing per session due to exclusive mentor dedication and customizable project timelines tailored specifically to your child.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">5. Price Protections for Active Enrollees</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    If KidsAI Coding Academy adjusts standard course pricing or batch rates, active parents are protected. Your rate remains locked in at the pre-existing speed/rate for the remainder of your currently purchased lesson block. The adjusted rates will only apply if you decide to buy a new lesson pack or subscribe to higher levels.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">6. Dynamic Discounts & Coupon Codes</h2>
                <div class="text-secondary mb-0" style="line-height: 1.7;">
                    Seasonal campaigns, sibling discounts, and regional scholarships can only be redeemed before completing a checkout transaction. Discounts cannot be combined or backdated to previously purchased lesson blocks. We reserve the right to expire coupon campaigns at our sole discretion.
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
