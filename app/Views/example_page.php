<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Example Page
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 fw-bold mb-4">Hello, Layouts!</h1>
            <p class="lead text-muted"> This page is powered by the <strong>layouts/main.php</strong> template. Notice how the Navbar and Footer appear automatically without any extra code here!</p>
            <div class="mt-5 p-5 bg-light rounded-4 border">
                <h3>Try it out</h3>
                <p>Edit the <code>content</code> section in this file to see it change on the website.</p>
                <a href="<?= base_url() ?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    console.log("Example page scripts loaded!");
</script>
<?= $this->endSection() ?>
