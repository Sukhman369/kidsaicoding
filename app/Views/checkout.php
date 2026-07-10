<?= view('components/header', ['title' => esc($title)]) ?>

<style>
.checkout-container {
    max-width: 1000px;
    margin: 40px auto;
}

.checkout-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 30px;
}

@media (min-width: 992px) {
    .checkout-grid {
        grid-template-columns: 1.2fr 0.8fr;
    }
}

.payment-method-card {
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    padding: 18px;
    cursor: pointer;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    gap: 12px;
}

.payment-method-card:hover {
    border-color: var(--primary);
    background: #f8fafc;
}

.payment-method-card.selected {
    border-color: var(--primary);
    background: #eef2ff;
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.payment-method-card input[type="radio"] {
    accent-color: var(--primary);
    transform: scale(1.2);
}

.payment-form-panel {
    display: none;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    margin-top: 16px;
    background: #fff;
    animation: slideDown 0.3s ease-out forwards;
}

.payment-form-panel.active {
    display: block;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.upi-simulation-box {
    text-align: center;
    padding: 20px;
    border: 2px dashed #cbd5e1;
    border-radius: 12px;
    background: #f8fafc;
}

.qr-code-placeholder {
    width: 160px;
    height: 160px;
    background: #fff;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    margin: 15px auto;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    position: relative;
}

.qr-code-placeholder img {
    max-width: 100%;
    max-height: 100%;
}

.trusted-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.78rem;
    color: #475569;
    background: #f1f5f9;
    padding: 4px 10px;
    border-radius: 6px;
}
</style>

<div class="container py-4">
    
    <!-- Title Area -->
    <div class="mb-4">
        <h1 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--text-dark);" class="h3">Checkout Details</h1>
        <p class="text-muted small">Please verify student billing particulars and complete secure enrollment.</p>
    </div>

    <!-- Alert Messaging -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
            <strong>Payment Issue:</strong> <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <div class="checkout-grid">
        
        <!-- Left: Payment details checklist -->
        <div>
            <div class="card p-4 rounded-4 shadow-sm border-light mb-4">
                <h3 class="h5 fw-bold mb-3">1. Student Details</h3>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label x-small fw-bold text-muted">STUDENT NAME</label>
                        <input type="text" class="form-control" value="<?= esc($student_name) ?>" readonly style="background: #f8fafc;">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label x-small fw-bold text-muted">EMAIL CONTACT</label>
                        <input type="text" class="form-control" value="<?= esc($student_email) ?>" readonly style="background: #f8fafc;">
                    </div>
                </div>
            </div>

            <form action="<?= base_url('course/checkout/' . $course['id']) ?>" method="POST" id="checkoutForm">
                <?= csrf_field() ?>

                <div class="card p-4 rounded-4 shadow-sm border-light">
                    <h3 class="h5 fw-bold mb-3">2. Select Payment Method</h3>
                    
                    <div class="d-grid gap-3">
                        
                        <!-- UPI Simulator Option -->
                        <div class="payment-method-card selected" id="optionUPI" onclick="selectPaymentMethod('upi')">
                            <input type="radio" name="payment_method" value="upi" id="radioUPI" checked>
                            <div style="flex-grow: 1;">
                                <div class="fw-bold text-dark">UPI QR Code Simulation (GPay / PhonePe / Paytm)</div>
                                <div class="text-muted x-small">Scan mock code to instantly debit.</div>
                            </div>
                            <span class="fs-4">📱</span>
                        </div>

                        <!-- Card Option -->
                        <div class="payment-method-card" id="optionCard" onclick="selectPaymentMethod('card')">
                            <input type="radio" name="payment_method" value="card" id="radioCard">
                            <div style="flex-grow: 1;">
                                <div class="fw-bold text-dark">Credit or Debit Card</div>
                                <div class="text-muted x-small">Visa, Mastercard, RuPay cards supported.</div>
                            </div>
                            <span class="fs-4">💳</span>
                        </div>

                    </div>

                    <!-- UPI Panel -->
                    <div class="payment-form-panel active" id="panelUPI">
                        <div class="upi-simulation-box">
                            <p class="small fw-bold text-dark mb-1">KidsAI Secure UPI Sandbox QR Code</p>
                            <p class="x-small text-muted mb-2">Debit from registered parent bank accounts.</p>
                            
                            <div class="qr-code-placeholder">
                                <!-- Standard static mock QR graphic -->
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=KidsAICodingSecureMerchantUPI" alt="Mock UPI QR Code">
                            </div>
                            
                            <div class="d-flex justify-content-center gap-2 mb-2">
                                <span class="badge bg-secondary-subtle text-dark x-small">GPay</span>
                                <span class="badge bg-secondary-subtle text-dark x-small">PhonePe</span>
                                <span class="badge bg-secondary-subtle text-dark x-small">Paytm</span>
                            </div>
                            <span class="x-small text-success fw-bold"><i class="fa-solid fa-lock"></i> Encrypted UPI Merchant Tunnel Ready</span>
                        </div>
                    </div>

                    <!-- Card Panel -->
                    <div class="payment-form-panel" id="panelCard">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label x-small fw-bold">CARD NUMBER</label>
                                <input type="text" class="form-control form-control-sm" placeholder="4111 2222 3333 4444" minlength="16" maxlength="19" id="cardNumberInput">
                            </div>
                            <div class="col-6">
                                <label class="form-label x-small fw-bold">EXPIRY DATE</label>
                                <input type="text" class="form-control form-control-sm" placeholder="MM/YY" maxlength="5" id="expiryInput">
                            </div>
                            <div class="col-6">
                                <label class="form-label x-small fw-bold">CVV CODE</label>
                                <input type="password" name="cvv" class="form-control form-control-sm" placeholder="123" maxlength="4" id="cvvInput">
                                <span class="x-small text-muted" style="font-size: 0.72rem;">Enter <b>999</b> to simulate a payment failure.</span>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100 py-3 shadow" style="border-radius: 10px; font-weight: 700;">
                            Secure Checkout (₹<?= number_format($course['price'], 2) ?>)
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Right: Course summary invoicing -->
        <aside>
            <div class="card p-4 rounded-4 shadow-sm border-0 sticky-top" style="top: 24px; border:1px solid #f1f5f9 !important;">
                <h3 class="h6 fw-bold text-muted text-uppercase mb-3" style="letter-spacing: 0.05em; font-size: 0.8rem;">Summary</h3>
                
                <div class="d-flex align-items-center gap-3 pb-3 border-bottom mb-3">
                    <div class="fs-1 bg-light rounded-3 p-2 text-center" style="width: 60px; height: 60px; line-height: 1;">
                        <?= esc($course['badge'] ?? '🎓') ?>
                    </div>
                    <div>
                        <h4 class="h6 fw-bold text-dark mb-1"><?= esc($course['title']) ?></h4>
                        <span class="badge bg-secondary-subtle text-secondary x-small">Ages: <?= esc($course['age_range']) ?></span>
                    </div>
                </div>

                <div class="d-grid gap-2 small text-muted mb-4">
                    <div class="d-flex justify-content-between">
                        <span>Cohort Duration:</span>
                        <strong class="text-dark"><?= esc($course['duration'] ?? '12 Weeks') ?></strong>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Interactive Classes:</span>
                        <strong class="text-dark"><?= esc($course['num_lessons']) ?> live sessions</strong>
                    </div>
                </div>

                <!-- Invoice list -->
                <div class="bg-light p-3 rounded-4 mb-4 border-light-outline">
                    <div class="d-grid gap-2 text-muted x-small">
                        <div class="d-flex justify-content-between">
                            <span>Base Enrollment Fee</span>
                            <span class="text-dark">₹<?= number_format($course['price'] * 0.82, 2) ?></span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>GST Charges (18%)</span>
                            <span class="text-dark">₹<?= number_format($course['price'] * 0.18, 2) ?></span>
                        </div>
                        <div class="d-flex justify-content-between fw-bold small border-top pt-2 mt-1 text-dark" style="font-size: 0.88rem;">
                            <span>Total Fees (INR)</span>
                            <span>₹<?= number_format($course['price'], 2) ?></span>
                        </div>
                    </div>
                </div>

                <!-- Guarantee features -->
                <div class="d-grid gap-2">
                    <span class="trusted-badge"><i class="fa-solid fa-shield-halved text-success"></i> 256-bit SSL secured payments</span>
                    <span class="trusted-badge"><i class="fa-solid fa-arrow-rotate-left text-primary"></i> 7-day hassle-free refund window</span>
                </div>

            </div>
        </aside>

    </div>
</div>

<script>
function selectPaymentMethod(method) {
    // Buttons
    const optionUPI = document.getElementById('optionUPI');
    const optionCard = document.getElementById('optionCard');
    const radioUPI = document.getElementById('radioUPI');
    const radioCard = document.getElementById('radioCard');
    
    // Panels
    const panelUPI = document.getElementById('panelUPI');
    const panelCard = document.getElementById('panelCard');

    if (method === 'upi') {
        optionUPI.classList.add('selected');
        optionCard.classList.remove('selected');
        radioUPI.checked = true;
        
        panelUPI.classList.add('active');
        panelCard.classList.remove('active');
    } else {
        optionCard.classList.add('selected');
        optionUPI.classList.remove('selected');
        radioCard.checked = true;
        
        panelCard.classList.add('active');
        panelUPI.classList.remove('active');
    }
}

// Add simple formatting checks to inputs
document.getElementById('cardNumberInput')?.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    let formatted = value.match(/.{1,4}/g)?.join(' ') || '';
    e.target.value = formatted.substring(0, 19);
});

document.getElementById('expiryInput')?.addEventListener('input', function (e) {
    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    if (value.length > 2) {
        e.target.value = value.substring(0, 2) + '/' + value.substring(2, 4);
    } else {
        e.target.value = value;
    }
});

document.getElementById('cvvInput')?.addEventListener('input', function (e) {
    e.target.value = e.target.value.replace(/[^0-9]/g, '').substring(0, 4);
});
</script>

<?= view('components/footer') ?>
