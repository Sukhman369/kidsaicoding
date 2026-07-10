<?= view('components/header', ['title' => 'Payment & Subscription Policy']) ?>

<!-- Header Banner -->
<div class="py-5 text-white" style="background: linear-gradient(135deg, #4f46e5 0%, #312e81 100%); position: relative; overflow: hidden;">
    <div style="position: absolute; top:0; left:0; width:100%; height:100%; background: radial-gradient(circle at 80% 20%, rgba(255,255,255,0.08) 0%, transparent 60%); pointer-events: none;"></div>
    <div class="container py-4 text-center">
        <span class="badge mb-2 px-3 py-2 text-uppercase fw-bold" style="background: rgba(255,255,255,0.15); border-radius: 30px; letter-spacing: 0.05em; font-size: 0.75rem;">Legal Agreements</span>
        <h1 class="fw-extrabold display-5 mb-3" style="font-family: 'Outfit', sans-serif;">Payment & Subscription Policy</h1>
        <p class="lead mb-0 text-white-50 mx-auto" style="max-width: 600px; font-size: 1.05rem;">Review our billing parameters, secure payment protocols, and auto-renewal terms.</p>
    </div>
</div>

<!-- Main Section -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Sidebar Menu -->
        <div class="col-lg-4 col-xl-3">
            <?= view('components/legal_sidebar', ['active' => 'payment-policy']) ?>
        </div>

        <!-- Content Area -->
        <div class="col-lg-8 col-xl-9">
            <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                <p class="text-muted small mb-4">Last Updated: July 10, 2026</p>
                
                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">1. Secure Transaction Processing</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    At <strong>KidsAI Coding Academy</strong>, we prioritize the secure handling of your financial records. Our website uses strong SSL/TLS encryption for all data sent over the web. We partner exclusively with PCI-DSS Level 1 compliant online payment processors (such as Razorpay, Instamojo, Stripe, or PayPal) to process transaction charges.
                    <br><br>
                    <strong>KidsAI Coding Academy never stores, writes, or keeps your credit card numbers, CVVs, or Net Banking PINs on our servers.</strong>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">2. Accepted Payment Options</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    To make paying for course tuition convenient, we support:
                    <ul class="mt-2 text-secondary">
                        <li><strong>In India:</strong> UPI (Google Pay, PhonePe, Paytm), RuPay Cards, Visa/Mastercard Debit and Credit Cards, Net Banking across all major banks, and EMI options through selected bank credit cards.</li>
                        <li><strong>International Accounts:</strong> PayPal, Credit Cards (Visa, Mastercard, American Express, Discover), and Stripe local settlement currencies.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">3. Advance Tuition & Subscriptions</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    All class enrollment packages must be purchased in full advance before the student begins live lessons in a batch:
                    <ul class="mt-2 text-secondary">
                        <li>Course fees can be paid as a one-time block payment or as monthly/quarterly recurring subscriptions.</li>
                        <li><strong>Subscription Renewals:</strong> If you select a recurring plan, your payment method will be charged automatically at the start of each billing cycle unless you request suspension/cancellation 3 days prior.</li>
                    </ul>
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">4. GST & Invoicing Compliance</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    All course values and pricing listed on the website for Indian residents are inclusive of standard Government GST (Goods and Services Tax) regulations. After a successful transaction, a digital tax invoice will be automatically emailed to the parent's registered email address for your records.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">5. Failed Recurring Payments</h2>
                <div class="text-secondary mb-4" style="line-height: 1.7;">
                    If subscription renewals fail (e.g. expired cards, low balances), we allow a <strong>grace period of 3 days</strong>. During this window, access to class batches and student portal resources remains active. If the invoice remains unpaid after the grace period, our system will temporarily pause dashboard access and batch scheduling until payment is resolved.
                </div>

                <hr class="my-4 text-muted opacity-25">

                <h2 class="h4 fw-bold mb-3 text-dark" style="font-family: 'Outfit', sans-serif;">6. Disputes & Chargebacks</h2>
                <div class="text-secondary mb-0" style="line-height: 1.7;">
                    We strongly encourage parents to contact us at <a href="mailto:billing@kidsaicoding.com" class="text-decoration-none fw-bold" style="color: #4f46e5;">billing@kidsaicoding.com</a> to resolve any billing conflicts. Raising unauthorized chargebacks through your credit card provider without contacting support will result in automatic, permanent suspension of all student records and portal accounts.
                </div>
            </div>
        </div>
    </div>
</div>

<?= view('components/footer') ?>
