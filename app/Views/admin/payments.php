<?= $this->extend('admin/layout') ?>

<?= $this->section('styles') ?>
.payments-stats-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 24px;
    margin-bottom: 30px;
}

@media (min-width: 640px) {
    .payments-stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .payments-stats-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.stat-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid var(--border);
    padding: 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(79, 70, 229, 0.04);
    border-color: rgba(79, 70, 229, 0.2);
}

.stat-info h4 {
    font-size: 0.82rem;
    text-transform: uppercase;
    color: var(--text-muted);
    font-weight: 700;
    letter-spacing: 0.05em;
    margin-bottom: 6px;
}

.stat-info .value {
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--text-main);
    line-height: 1.2;
}

.stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
}

.stat-icon.revenue {
    background: rgba(16, 185, 129, 0.1);
    color: #10b981;
}

.stat-icon.success {
    background: rgba(59, 130, 246, 0.1);
    color: #3b82f6;
}

.stat-icon.pending {
    background: rgba(245, 158, 11, 0.1);
    color: #f59e0b;
}

.stat-icon.failed {
    background: rgba(239, 68, 68, 0.1);
    color: #ef4444;
}

/* Filters & Table Card */
.payments-table-card {
    background: #white;
    border-radius: 16px;
    border: 1px solid var(--border);
    padding: 24px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
}

.filter-bar {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f1f5f9;
}

.search-input-wrapper {
    position: relative;
    max-width: 320px;
    width: 100%;
}

.search-input-wrapper i {
    position: absolute;
    left: 14px;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
    font-size: 0.9rem;
}

.filter-search {
    width: 100%;
    padding: 10px 14px 10px 38px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    outline: none;
    font-size: 0.88rem;
    transition: all 0.2s;
    background: #f8fafc;
}

.filter-search:focus {
    background: #fff;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
}

.select-filter {
    padding: 10px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 0.88rem;
    outline: none;
    background: #f8fafc;
    min-width: 155px;
    transition: all 0.2s;
    cursor: pointer;
}

.select-filter:focus {
    border-color: var(--primary);
    background: #fff;
}

/* Table Style custom */
.payments-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

.payments-table th {
    padding: 14px 16px;
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--text-muted);
    border-bottom: 2px solid #e2e8f0;
    background: #f8fafc;
}

.payments-table td {
    padding: 16px;
    border-bottom: 1px solid #f1f5f9;
    vertical-align: middle;
    font-size: 0.9rem;
}

.payments-table tr:hover {
    background: #fafdfc;
}

.student-info {
    display: flex;
    flex-direction: column;
}

.student-info .name {
    font-weight: 700;
    color: var(--text-main);
}

.student-info .email {
    font-size: 0.78rem;
    color: var(--text-muted);
    margin-top: 2px;
}

.course-badge-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.course-mini-icon {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: #eef2f6;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    font-weight: 700;
    border: 1px solid #e2e8f0;
    object-fit: cover;
}

.amount-text {
    font-weight: 800;
    color: var(--text-main);
    font-size: 0.95rem;
}

.pay-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.76rem;
    font-weight: 700;
}

.pay-tag.completed {
    background: #dcfce7;
    color: #166534;
}

.pay-tag.pending {
    background: #fef3c7;
    color: #92400e;
}

.pay-tag.failed {
    background: #fee2e2;
    color: #991b1b;
}

.txn-code {
    font-family: 'Courier New', Courier, monospace;
    font-weight: 700;
    color: #475569;
    font-size: 0.85rem;
    background: #f1f5f9;
    padding: 2px 6px;
    border-radius: 4px;
}

.receipt-btn {
    text-decoration: none;
    background: var(--white);
    border: 1px solid #cbd5e1;
    color: var(--text-main);
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 0.8rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    transition: all 0.2s;
}

.receipt-btn:hover {
    background: #f8fafc;
    border-color: var(--primary);
    color: var(--primary);
}
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- PAGE TITLE -->
<div style="margin-bottom: 24px;">
    <h2 style="font-family: 'Outfit', sans-serif; font-weight: 800; color: var(--text-main); margin: 0;">Student Purchase Records</h2>
    <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px;">Monitor courses purchased by students, billing summaries, and transaction validation status.</p>
</div>

<!-- TOP STATISTICS CARDS -->
<div class="payments-stats-grid">
    
    <!-- CARD 1 -->
    <div class="stat-card">
        <div class="stat-info">
            <h4>Total Revenue</h4>
            <div class="value">$<?= number_format($totalRevenue, 2) ?></div>
        </div>
        <div class="stat-icon revenue">
            <i class="fa-solid fa-sack-dollar"></i>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="stat-card">
        <div class="stat-info">
            <h4>Completed Sales</h4>
            <div class="value"><?= $completedCount ?></div>
        </div>
        <div class="stat-icon success">
            <i class="fa-solid fa-circle-check"></i>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="stat-card">
        <div class="stat-info">
            <h4>Pending Invoicing</h4>
            <div class="value"><?= $pendingCount ?></div>
        </div>
        <div class="stat-icon pending">
            <i class="fa-solid fa-clock"></i>
        </div>
    </div>

    <!-- CARD 4 -->
    <div class="stat-card">
        <div class="stat-info">
            <h4>Failed Payments</h4>
            <div class="value"><?= $failedCount ?></div>
        </div>
        <div class="stat-icon failed">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
    </div>

</div>

<!-- DATA PANEL -->
<div class="payments-table-card card">
    
    <div class="filter-bar">
        <div class="search-input-wrapper">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="searchInput" placeholder="Search by student, email, course..." class="filter-search">
        </div>
        
        <div style="display: flex; gap: 12px; align-items: center;">
            <label style="font-size: 0.85rem; font-weight: 600; color: var(--text-muted);">Status Filter:</label>
            <select id="statusFilter" class="select-filter">
                <option value="all">Show All Statuses</option>
                <option value="completed">Completed Only</option>
                <option value="pending">Pending Only</option>
                <option value="failed">Failed Only</option>
            </select>
        </div>
    </div>

    <div style="overflow-x: auto;">
        <table class="payments-table">
            <thead>
                <tr>
                    <th>Student Details</th>
                    <th>Course Purchased</th>
                    <th>Price Paid</th>
                    <th>Txn Reference</th>
                    <th>Method</th>
                    <th>Billing Date</th>
                    <th>Status</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody id="paymentsTableBody">
                <?php foreach ($payments as $payment): ?>
                    <tr class="payment-row" 
                        data-student="<?= esc(strtolower($payment['student_name'] . ' ' . $payment['student_email'])) ?>" 
                        data-course="<?= esc(strtolower($payment['course_title'])) ?>" 
                        data-status="<?= esc($payment['status']) ?>">
                        
                        <!-- Student -->
                        <td>
                            <div class="student-info">
                                <span class="name"><?= esc($payment['student_name']) ?></span>
                                <span class="email"><?= esc($payment['student_email']) ?></span>
                            </div>
                        </td>

                        <!-- Course -->
                        <td>
                            <div class="course-badge-info">
                                <?php if (!empty($payment['course_image'])): ?>
                                    <img src="<?= base_url($payment['course_image']) ?>" class="course-mini-icon" alt="course thumbnail">
                                <?php else: ?>
                                    <span class="course-mini-icon">🎓</span>
                                <?php endif; ?>
                                <span style="font-weight: 600; color: var(--text-main);"><?= esc($payment['course_title']) ?></span>
                            </div>
                        </td>

                        <!-- Price -->
                        <td>
                            <span class="amount-text">$<?= number_format($payment['amount'], 2) ?></span>
                        </td>

                        <!-- Txn Ref -->
                        <td>
                            <span class="txn-code"><?= esc($payment['transaction_id']) ?></span>
                        </td>

                        <!-- Payment Method -->
                        <td style="color: var(--text-muted); font-weight: 500;">
                            <?= esc($payment['payment_method'] ?? 'Online Payment') ?>
                        </td>

                        <!-- Date -->
                        <td style="font-size: 0.82rem; color: var(--text-muted); font-weight: 500;">
                            <?= date('M d, Y H:i', strtotime($payment['created_at'])) ?>
                        </td>

                        <!-- Status -->
                        <td>
                            <?php if ($payment['status'] === 'completed'): ?>
                                <span class="pay-tag completed">
                                    <i class="fa-solid fa-circle-check"></i> Completed
                                </span>
                            <?php elseif ($payment['status'] === 'pending'): ?>
                                <span class="pay-tag pending">
                                    <i class="fa-solid fa-clock"></i> Pending
                                </span>
                            <?php else: ?>
                                <span class="pay-tag failed">
                                    <i class="fa-solid fa-circle-xmark"></i> Failed
                                </span>
                            <?php endif; ?>
                        </td>

                        <!-- Actions -->
                        <td style="text-align: right;">
                            <a href="#" onclick="alert('Transaction Details:\n\nReference: <?= esc($payment['transaction_id']) ?>\nStudent: <?= esc($payment['student_name']) ?>\nAmount: $<?= number_format($payment['amount'], 2) ?>\nMethod: <?= esc($payment['payment_method']) ?>\nStatus: <?= esc(ucfirst($payment['status'])) ?>\nDate: <?= esc($payment['created_at']) ?>'); return false;" class="receipt-btn">
                                <i class="fa-solid fa-file-invoice"></i> Details
                            </a>
                        </td>

                    </tr>
                <?php endforeach; ?>

                <?php if (empty($payments)): ?>
                    <tr id="noPaymentsRow">
                        <td colspan="8" style="text-align: center; padding: 60px; color: var(--text-muted);">
                            <i class="fa-solid fa-credit-card" style="font-size: 3rem; color: var(--border); display: block; margin-bottom: 12px;"></i>
                            No course purchase logs found in the database.
                        </td>
                    </tr>
                <?php endif; ?>

                <!-- Empty filter results row -->
                <tr id="emptySearchRow" style="display: none;">
                    <td colspan="8" style="text-align: center; padding: 60px; color: var(--text-muted);">
                        <i class="fa-solid fa-magnifying-glass" style="font-size: 2.5rem; color: var(--border); display: block; margin-bottom: 12px;"></i>
                        No payment records match your search criteria.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('searchInput');
    const statusFilter = document.getElementById('statusFilter');
    const paymentRows = document.querySelectorAll('.payment-row');
    const emptySearchRow = document.getElementById('emptySearchRow');

    function executeFilter() {
        const query = searchInput.value.toLowerCase().trim();
        const selectedStatus = statusFilter.value;
        let visibleCount = 0;

        paymentRows.forEach(row => {
            const studentText = row.getAttribute('data-student');
            const courseText = row.getAttribute('data-course');
            const statusText = row.getAttribute('data-status');

            // Flags
            const matchesSearch = studentText.includes(query) || courseText.includes(query);
            const matchesStatus = (selectedStatus === 'all') || (statusText === selectedStatus);

            if (matchesSearch && matchesStatus) {
                row.style.display = 'table-row';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Show/hide helper empty rows
        if (visibleCount === 0 && paymentRows.length > 0) {
            emptySearchRow.style.display = 'table-row';
        } else {
            emptySearchRow.style.display = 'none';
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', executeFilter);
    }
    if (statusFilter) {
        statusFilter.addEventListener('change', executeFilter);
    }
});
</script>
<?= $this->endSection() ?>
