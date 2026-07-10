<?php
$links = [
    'terms-of-service' => ['title' => 'Terms of Service', 'icon' => '📜'],
    'privacy-policy' => ['title' => 'Privacy Policy', 'icon' => '🔒'],
    'refund-policy' => ['title' => 'Cancellation & Refund Policy', 'icon' => '🔄'],
    'payment-policy' => ['title' => 'Payment & Subscription Policy', 'icon' => '💳'],
    'pricing-policy' => ['title' => 'Course Pricing Policy', 'icon' => '🏷️'],
];
?>
<div class="card border-0 shadow-sm p-3 sticky-top mb-4" style="top: 100px; border-radius: 16px;">
    <h5 class="fw-bold mb-3 px-3 text-dark" style="font-family: 'Outfit', sans-serif;">Legal Policies</h5>
    <div class="nav flex-column nav-pills gap-2">
        <?php foreach ($links as $slug => $data): 
            $isActive = ($active == $slug);
            $classes = $isActive 
                ? 'nav-link active text-white fw-bold shadow-sm d-flex align-items-center gap-2' 
                : 'nav-link text-muted hover-bg d-flex align-items-center gap-2';
            $style = $isActive 
                ? 'background: #4f46e5; border-radius: 12px; padding: 12px 16px;' 
                : 'border-radius: 12px; padding: 12px 16px; background: transparent; transition: all 0.2s;';
        ?>
            <a href="<?= base_url($slug) ?>" class="<?= $classes ?>" style="<?= $style ?>">
                <span class="fs-5"><?= $data['icon'] ?></span>
                <span><?= $data['title'] ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</div>

<style>
.hover-bg:hover {
    background-color: rgba(79, 70, 229, 0.05) !important;
    color: #4f46e5 !important;
    transform: translateX(4px);
}
</style>
