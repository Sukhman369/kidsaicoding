<?= view('components/header', ['title' => 'Component Page']) ?>

<div class="container py-5 text-center">
    <h1 class="display-3 fw-bold">Using Components</h1>
    <p class="lead">Instead of extending a layout, we are "including" a header and footer component directly.</p>
    
    <div class="my-5 p-5 bg-white shadow-sm rounded-4 border">
        <h3>How it works:</h3>
        <code class="d-block bg-dark text-success p-3 rounded-3 mb-4">
            &lt;?= view('components/header') ?&gt;<br>
            <span class="text-white">// Your Page Content Here</span><br>
            &lt;?= view('components/footer') ?&gt;
        </code>
        <p>This gives you more literal control over where the header and footer start and end on each page.</p>
    </div>
</div>

<?= view('components/footer') ?>
