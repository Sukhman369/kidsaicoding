<?= view('components/header', ['title' => 'Contact Us']) ?>

    <main class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <h1 class="fw-bold mb-4">Get in Touch</h1>
                <p class="text-muted mb-5">Have questions about our courses or demo classes? We're here to help!</p>
                
                <div class="d-flex gap-3 mb-4">
                    <div class="bg-primary-light text-primary p-3 rounded-3 h4 mb-0">📧</div>
                    <div>
                        <div class="fw-bold">Email Us</div>
                        <div class="text-muted small">support@kidsaicoding.com</div>
                    </div>
                </div>
                
                <div class="d-flex gap-3 mb-4">
                    <div class="bg-primary-light text-primary p-3 rounded-3 h4 mb-0">💬</div>
                    <div>
                        <div class="fw-bold">WhatsApp</div>
                        <div class="text-muted small">+91 98765 43210</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4 rounded-4">
                    <h5 class="fw-bold mb-3">Send Enquiry</h5>

                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" style="border-radius: 8px; font-size: 0.85rem; padding: 10px 14px;">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if(session()->getFlashdata('success')): ?>
                        <div class="alert alert-success" style="border-radius: 8px; font-size: 0.85rem; padding: 10px 14px;">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('contact/submit') ?>" method="POST">
                        <?= csrf_field() ?>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Your Name</label>
                                <input type="text" name="name" class="form-control" placeholder="John Doe" value="<?= old('name') ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Email Address</label>
                                <input type="email" name="email" class="form-control" placeholder="john@example.com" value="<?= old('email') ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+91 00000 00000" value="<?= old('phone') ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Message</label>
                            <textarea name="message" class="form-control" rows="5" placeholder="How can we help you?" required><?= old('message') ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2 shadow-sm">
                            <span>Send Message</span> 🚀
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?= view('components/footer') ?>
