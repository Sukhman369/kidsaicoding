<style>
/* Pricing Section Styles - Scoped to Component */
.pricing {
    max-width: 1350px;
    margin: 80px auto;
    padding: 0 20px;
}

.pricing .section-heading {
    text-align: center;
    margin-bottom: 50px;
}

.pricing .section-heading h2 {
    font-size: clamp(1.8rem, 4vw, 40px);
    color: #1f2b44;
    font-weight: 800;
    font-family: 'Outfit', sans-serif;
}

.pricing .section-heading p {
    font-size: 18px;
    color: #64748b;
    margin-top: 10px;
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding-top: 20px;
}

.price-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,.06);
    position: relative;
    transition: .3s ease;
    border: 1px solid #f1f5f9;
}

.price-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(0,0,0,.1);
}

.price-card.featured {
    transform: scale(1.05);
    border: 2px solid #ff6b00;
    z-index: 1;
}

.price-card.featured:hover {
    transform: scale(1.05) translateY(-8px);
}

.popular-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #ff6b00;
    color: white;
    padding: 5px 14px;
    border-radius: 40px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    z-index: 2;
}

.price-header {
    color: white;
    text-align: center;
    padding: 22px;
}

.price-header.prime { background: linear-gradient(135deg, #ff6464, #ff3f3f); }
.price-header.premier { background: linear-gradient(135deg, #8a46ff, #b04cff); }
.price-header.plus { background: linear-gradient(135deg, #2495ff, #43b2ff); }

.price-header h3 {
    font-size: 28px;
    margin: 0;
    font-weight: 700;
    font-family: 'Outfit', sans-serif;
}

.price-body {
    padding: 30px;
    text-align: center;
}

.price-body .price-main {
    font-size: 42px;
    color: #1f2b44;
    font-weight: 800;
    margin: 0;
    font-family: 'Outfit', sans-serif;
}

.price-body span {
    color: #64748b;
    font-size: 14px;
    font-weight: 500;
}

.price-body .old-price {
    margin: 10px 0;
    font-size: 20px;
    color: #94a3b8;
    font-weight: 600;
}

.discount-badge {
    display: inline-block;
    padding: 6px 16px;
    background: #fff3eb;
    color: #ff6b00;
    border-radius: 40px;
    font-weight: 700;
    font-size: 14px;
    margin-bottom: 25px;
}

.price-btn {
    display: block;
    background: #ff6b00;
    color: white;
    text-decoration: none;
    padding: 14px;
    border-radius: 12px;
    font-weight: 700;
    margin-bottom: 25px;
    transition: .2s;
}

.price-btn:hover {
    background: #ff5400;
    transform: scale(1.02);
}

.price-info-title {
    font-size: 18px;
    margin-bottom: 22px;
    color: #1f2b44;
    font-weight: 700;
}

.price-features-list {
    list-style: none;
    text-align: left;
    padding: 0;
    margin: 0;
}

.price-features-list li {
    padding: 10px 0;
    border-bottom: 1px solid #f1f5f9;
    position: relative;
    padding-left: 28px;
    font-size: 14px;
    color: #475569;
    line-height: 1.4;
}

.price-features-list li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #22c55e;
    font-weight: 900;
    font-size: 16px;
}

@media(max-width:992px){
    .price-card.featured {
        transform: none;
    }
    .price-card.featured:hover {
        transform: translateY(-8px);
    }
}
</style>

<!-- Plans section Start -->

 <section class="pricing">

    <div class="section-heading">
        <h2>Choose the Perfect Learning Plan</h2>
        <p>Flexible plans designed for every child's learning style.</p>
    </div>

    <div class="pricing-grid">

        <!-- PLAN 1 -->
        <div class="price-card">
            <div class="price-header prime">
                <h3>Prime</h3>
            </div>
            <div class="price-body">
                <h1 class="price-main">₹1,365</h1>
                <span>/ Session</span>
                <h4 class="old-price"><del>₹2,100</del></h4>
                <div class="discount-badge">35% OFF</div>
                <a href="<?= base_url('book-free-class') ?>" class="price-btn">Book Free Demo</a>
                <h5 class="price-info-title">Private 1-on-1 Classes</h5>
                <ul class="price-features-list">
                    <li>45-minute live personalized sessions</li>
                    <li>2–3 classes every week</li>
                    <li>Dedicated mentor</li>
                    <li>Unlimited rescheduling</li>
                    <li>Progress tracking dashboard</li>
                </ul>
            </div>
        </div>

        <!-- PLAN 2 -->
        <div class="price-card featured">
            <div class="popular-badge">MOST POPULAR</div>
            <div class="price-header premier">
                <h3>Premier</h3>
            </div>
            <div class="price-body">
                <h1 class="price-main">₹1,102</h1>
                <span>/ Session</span>
                <h4 class="old-price"><del>₹1,575</del></h4>
                <div class="discount-badge">30% OFF</div>
                <a href="<?= base_url('book-free-class') ?>" class="price-btn">Book Free Demo</a>
                <h5 class="price-info-title">Micro Group (2–3 Students)</h5>
                <ul class="price-features-list">
                    <li>60-minute live classes</li>
                    <li>8 classes per month</li>
                    <li>Collaborative learning</li>
                    <li>Flexible rescheduling</li>
                    <li>Project-based learning</li>
                </ul>
            </div>
        </div>

        <!-- PLAN 3 -->
        <div class="price-card">
            <div class="price-header plus">
                <h3>Plus</h3>
            </div>
            <div class="price-body">
                <h1 class="price-main">₹744</h1>
                <span>/ Session</span>
                <h4 class="old-price"><del>₹992</del></h4>
                <div class="discount-badge">25% OFF</div>
                <a href="<?= base_url('book-free-class') ?>" class="price-btn">Book Free Demo</a>
                <h5 class="price-info-title">Small Group (4–5 Students)</h5>
                <ul class="price-features-list">
                    <li>60-minute interactive classes</li>
                    <li>8 classes every month</li>
                    <li>Team collaboration</li>
                    <li>No rescheduling</li>
                    <li>Affordable learning</li>
                </ul>
            </div>
        </div>

    </div>

</section>
<!-- Plans Section Ends -->
