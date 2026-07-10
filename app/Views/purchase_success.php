<?= view('components/header', ['title' => esc($title)]) ?>

<style>
.success-container {
    max-width: 600px;
    margin: 60px auto;
}
.receipt-table {
    width: 100%;
    border-collapse: collapse;
}
.receipt-table td {
    padding: 12px 0;
    border-bottom: 1px solid #f1f5f9;
    font-size: 0.9rem;
}
.icon-seal-completed {
    width: 80px;
    height: 80px;
    background: #dcfce7;
    color: #15803d;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    margin-bottom: 20px;
    border: 4px solid #fff;
    box-shadow: 0 4px 14px rgba(22, 163, 74, 0.2);
}
.icon-seal-failed {
    width: 80px;
    height: 80px;
    background: #fee2e2;
    color: #b91c1c;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    margin-bottom: 20px;
    border: 4px solid #fff;
    box-shadow: 0 4px 14px rgba(220, 38, 38, 0.2);
}
</style>

<div class="container py-4">
    <div class="success-container">
        
        <?php if ($payment['status'] === 'completed'): ?>
            
            <!-- SUCCESS CASE -->
            <div class="card p-5 rounded-4 shadow-lg text-center border-0 mb-4" style="background: #fff; border-top: 6px solid #10b981 !important;">
                <div class="icon-seal-completed">✓</div>
                <h1 class="h3 fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Payment Confirmed!</h1>
                <p class="text-muted small mb-4">Welcome to the cohort, <?= esc($student_name) ?>! Your payment transaction was processed successfully. You now have full access to study materials.</p>
                
                <div class="text-start bg-light p-4 rounded-4 mb-4">
                    <h3 class="h6 fw-bold text-dark mb-3">Receipt Summary</h3>
                    
                    <table class="receipt-table">
                        <tr>
                            <td class="text-muted">Purchased Course:</td>
                            <td class="text-end fw-bold text-dark"><?= esc($payment['course_title']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Total Amount Paid:</td>
                            <td class="text-end fw-extrabold text-primary">₹<?= number_format($payment['amount'], 2) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Transaction ID:</td>
                            <td class="text-end text-dark font-monospace" style="font-size: 0.85rem;"><?= esc($payment['transaction_id']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Payment Mode:</td>
                            <td class="text-end text-dark"><?= esc($payment['payment_method']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Enrollment Date:</td>
                            <td class="text-end text-dark"><?= date('F d, Y H:i', strtotime($payment['created_at'])) ?></td>
                        </tr>
                    </table>
                </div>

                <div class="d-grid gap-2">
                    <a href="<?= base_url('student/my-courses') ?>" class="btn btn-primary btn-lg shadow-sm" style="border-radius: 10px; font-weight: 700; font-size: 1rem;">
                        Go to My Learning Journey →
                    </a>
                    <a href="<?= base_url('/') ?>" class="btn btn-link text-muted btn-sm">Back to Home page</a>
                </div>
            </div>

        <?php else: ?>
            
            <!-- FAILURE CASE -->
            <div class="card p-5 rounded-4 shadow-lg text-center border-0 mb-4" style="background: #fff; border-top: 6px solid #ef4444 !important;">
                <div class="icon-seal-failed">✕</div>
                <h1 class="h3 fw-bold text-dark mb-2" style="font-family: 'Outfit', sans-serif;">Transaction Failed</h1>
                <p class="text-muted small mb-4">We were unable to complete your checkout sequence. The transaction was rejected by input validation filters.</p>
                
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger rounded-3 p-3 x-small mb-4 text-start">
                        <strong>Reason:</strong> <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <div class="text-start bg-light p-4 rounded-4 mb-4">
                    <h3 class="h6 fw-bold text-dark mb-3">Transaction Blueprint</h3>
                    
                    <table class="receipt-table">
                        <tr>
                            <td class="text-muted">Requested Course:</td>
                            <td class="text-end fw-bold text-dark"><?= esc($payment['course_title']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Target Amount:</td>
                            <td class="text-end text-dark">₹<?= number_format($payment['amount'], 2) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Attempt Reference:</td>
                            <td class="text-end text-dark font-monospace" style="font-size: 0.85rem;"><?= esc($payment['transaction_id']) ?></td>
                        </tr>
                        <tr>
                            <td class="text-muted">Gateway:</td>
                            <td class="text-end text-dark"><?= esc($payment['payment_method']) ?></td>
                        </tr>
                    </table>
                </div>

                <div class="d-grid gap-2">
                    <a href="<?= base_url('course/buy/' . esc($payment['transaction_id'])) ?>" onclick="history.back(); return false;" class="btn btn-danger btn-lg shadow-sm" style="border-radius: 10px; font-weight: 700; font-size: 1rem;">
                        Return to Checkout &amp; Retry
                    </a>
                    <a href="<?= base_url('courses') ?>" class="btn btn-outline-secondary py-2" style="border-radius: 10px;">Browse Other Courses</a>
                </div>
            </div>

        <?php endif; ?>

    </div>
</div>

<?= view('components/footer') ?>
