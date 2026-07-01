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
                    <form action="#" method="POST">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Your Name</label>
                                <input type="text" class="form-control" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+91 00000 00000" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Message</label>
                            <textarea class="form-control" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary d-flex align-items-center gap-2 px-4 py-2">
                            <span>Send Message</span> 🚀
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?= view('components/footer') ?>
