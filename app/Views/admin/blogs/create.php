<?= $this->extend('admin/layout') ?>

<?= $this->section('styles') ?>
.blog-editor-container {
    display: grid;
    grid-template-columns: 1fr;
    gap: 32px;
    max-width: 1200px;
    margin: 0 auto 50px auto;
    align-items: start;
}

@media (min-width: 1024px) {
    .blog-editor-container {
        grid-template-columns: 2.2fr 1.2fr;
    }
}

/* Tabs & Top Controls */
.editor-header-bar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 28px;
    border-bottom: 1px solid var(--border);
    padding-bottom: 20px;
}

.editor-tabs {
    display: flex;
    gap: 6px;
    background: #f1f5f9;
    padding: 4px;
    border-radius: 10px;
}

.editor-tab-btn {
    background: none;
    border: none;
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--text-muted);
    padding: 8px 20px;
    cursor: pointer;
    border-radius: 8px;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.editor-tab-btn.active {
    color: var(--primary);
    background: var(--white);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
}

/* Card customizations */
.editor-card {
    background: #fff;
    border-radius: 16px;
    border: 1px solid var(--border);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
    padding: 28px;
    margin-bottom: 28px;
    transition: all 0.3s ease;
}

.editor-card:hover {
    box-shadow: 0 10px 30px rgba(79, 70, 229, 0.04);
}

.editor-card-title {
    font-size: 1.05rem;
    font-weight: 700;
    margin-top: 0;
    margin-bottom: 20px;
    color: var(--text-main);
    display: flex;
    align-items: center;
    gap: 10px;
    border-bottom: 1px solid #f1f5f9;
    padding-bottom: 12px;
}

/* Form Styles */
.form-group {
    margin-bottom: 24px;
}

.form-group label {
    display: block;
    font-size: 0.88rem;
    font-weight: 600;
    color: var(--text-main);
    margin-bottom: 8px;
}

.form-input, .form-textarea, .form-select {
    width: 100%;
    background-color: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 10px;
    padding: 14px 16px;
    color: #1e293b;
    font-size: 0.95rem;
    font-weight: 400;
    outline: none;
    transition: all 0.2s ease-in-out;
    font-family: inherit;
}

.form-input:focus, .form-textarea:focus, .form-select:focus {
    background-color: #fff;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.12);
}

.form-input-title {
    font-size: 1.3rem;
    font-weight: 700;
    padding: 16px 20px;
    border-color: #cbd5e1;
}

/* Drag-drop zone */
.image-upload-wrapper {
    position: relative;
    border: 2px dashed #cbd5e1;
    border-radius: 12px;
    padding: 28px 20px;
    text-align: center;
    background: #f8fafc;
    cursor: pointer;
    transition: all 0.3s ease;
    overflow: hidden;
    min-height: 190px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.image-upload-wrapper:hover {
    border-color: var(--primary);
    background: rgba(79, 70, 229, 0.02);
}

.image-upload-wrapper.dragover {
    border-color: #10b981;
    background: rgba(16, 185, 129, 0.05);
}

.file-input-hidden {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    cursor: pointer;
    z-index: 5;
}

.upload-icon {
    font-size: 2.2rem;
    color: #94a3b8;
    margin-bottom: 12px;
    transition: transform 0.2s ease;
}

.image-upload-wrapper:hover .upload-icon {
    transform: translateY(-4px);
    color: var(--primary);
}

.preview-container {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    display: none;
    z-index: 6;
}

.preview-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.remove-image-btn {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(239, 68, 68, 0.9);
    color: white;
    border: none;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    z-index: 10;
    transition: all 0.2s ease;
}

.remove-image-btn:hover {
    background: rgba(220, 38, 38, 1);
    transform: scale(1.1);
}

/* Stats, counts & Progress bars */
.stats-row {
    display: flex;
    justify-content: space-between;
    font-size: 0.78rem;
    color: var(--text-muted);
    margin-top: 6px;
    font-weight: 500;
}

.progress-bar-container {
    width: 100%;
    height: 5px;
    background: #e2e8f0;
    border-radius: 10px;
    margin-top: 6px;
    overflow: hidden;
}

.progress-bar-fill {
    height: 100%;
    width: 0%;
    background: var(--primary);
    transition: width 0.3s ease, background 0.3s ease;
    border-radius: 10px;
}

.badge-status {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 700;
    background: #f1f5f9;
    color: #475569;
}

.badge-status.published {
    background: #dcfce7;
    color: #15803d;
}

/* Text editor toolbar styling */
.editor-toolbar {
    background: #f8fafc;
    border: 1px solid #cbd5e1;
    border-bottom: none;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 10px 14px;
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    align-items: center;
}

.toolbar-btn {
    background: white;
    border: 1px solid #cbd5e1;
    color: var(--text-main);
    width: 32px;
    height: 32px;
    border-radius: 6px;
    font-size: 0.85rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.15s ease;
}

.toolbar-btn:hover {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.toolbar-divider {
    width: 1px;
    height: 18px;
    background: #cbd5e1;
    margin: 0 4px;
}

.textarea-with-toolbar {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
}

/* Live Preview styling */
.live-preview-box {
    animation: fadeIn 0.4s ease;
}

.blog-preview-header {
    margin-bottom: 24px;
}

.blog-preview-title {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--text-main);
    line-height: 1.25;
    margin-bottom: 12px;
}

.blog-preview-meta {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 0.88rem;
    color: var(--text-muted);
    font-weight: 500;
}

.blog-preview-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
}

.blog-preview-banner {
    width: 100%;
    height: auto;
    max-height: 420px;
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 28px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    display: none;
}

.blog-preview-excerpt {
    font-size: 1.15rem;
    line-height: 1.6;
    color: #475569;
    font-weight: 500;
    border-left: 4px solid var(--primary);
    padding-left: 16px;
    margin-bottom: 28px;
    font-style: italic;
}

.blog-preview-content {
    font-size: 1.08rem;
    line-height: 1.8;
    color: #334155;
}

.blog-preview-content p {
    margin-bottom: 20px;
}

.status-indicator-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #94a3b8;
    display: inline-block;
}

.published .status-indicator-dot {
    background: #22c55e;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="<?= base_url('admin/blogs/store') ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div class="editor-header-bar">
        <div>
            <div class="editor-tabs">
                <button type="button" class="editor-tab-btn active" id="writeTabBtn">
                    <i class="fa-solid fa-pen-nib"></i> Write Article
                </button>
                <button type="button" class="editor-tab-btn" id="previewTabBtn">
                    <i class="fa-solid fa-eye"></i> Live Preview
                </button>
            </div>
        </div>
        <div style="display: flex; align-items: center; gap: 12px;">
            <a href="<?= base_url('admin/blogs') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main);">
                Cancel
            </a>
            <button type="submit" class="btn btn-primary" style="padding: 10px 24px;">
                <i class="fa-solid fa-cloud-arrow-up"></i> Publish Post
            </button>
        </div>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div style="background: #fef2f2; color: #991b1b; border: 1px solid #fee2e2; margin-bottom: 24px; padding: 14px 18px; border-radius: 12px; font-weight: 500; font-size: 0.9rem; display: flex; align-items: center; gap: 10px;">
            <i class="fa-solid fa-circle-exclamation" style="font-size: 1.1rem;"></i> <span><?= session()->getFlashdata('error') ?></span>
        </div>
    <?php endif; ?>

    <div class="blog-editor-container">
        
        <!-- MAIN WRITE AREA -->
        <div id="writeSection">
            
            <div class="editor-card">
                <div class="form-group" style="margin-bottom: 0;">
                    <label style="font-size: 0.95rem; font-weight: 700; margin-bottom: 10px;">Article Title</label>
                    <input type="text" name="title" id="blogTitleInput" class="form-input form-input-title" required 
                           placeholder="e.g. 5 Coding Games That Teach Kids Python in 2026" autocomplete="off" value="<?= old('title') ?>">
                    <div class="stats-row">
                        <span id="charCountTitle">0/60 chars</span>
                        <span>Recommended SEO length</span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" id="progressTitle"></div>
                    </div>
                </div>
            </div>

            <div class="editor-card">
                <div class="form-group" style="margin-bottom: 0;">
                    <label style="font-size: 0.95rem; font-weight: 700; margin-bottom: 10px;">Article Body Content</label>
                    <div class="editor-toolbar">
                        <button type="button" class="toolbar-btn" data-action="heading" title="Heading H2"><i class="fa-solid fa-heading"></i></button>
                        <button type="button" class="toolbar-btn" data-action="bold" title="Bold Text"><i class="fa-solid fa-bold"></i></button>
                        <button type="button" class="toolbar-btn" data-action="italic" title="Italic Text"><i class="fa-solid fa-italic"></i></button>
                        <div class="toolbar-divider"></div>
                        <button type="button" class="toolbar-btn" data-action="link" title="Insert Link"><i class="fa-solid fa-link"></i></button>
                        <button type="button" class="toolbar-btn" data-action="quote" title="Insert Quote"><i class="fa-solid fa-quote-left"></i></button>
                        <button type="button" class="toolbar-btn" data-action="list" title="Bullet List"><i class="fa-solid fa-list-ul"></i></button>
                    </div>
                    <textarea name="content" id="blogContentInput" class="form-textarea textarea-with-toolbar" rows="18" required 
                              placeholder="Write your beautiful article content here. You can use markdown or plain HTML headings, paragraphs, and links..." style="line-height: 1.75; font-size: 1rem; resize: vertical;"><?= old('content') ?></textarea>
                    <div class="stats-row">
                        <span id="wordCountField">0 words</span>
                        <span id="readTimeField">1 min read</span>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- SIDEBAR PANELS -->
        <div id="sidebarSection">
            
            <!-- Publish Options -->
            <div class="editor-card">
                <div class="editor-card-title">
                    <i class="fa-solid fa-sliders" style="color: var(--primary);"></i> Settings
                </div>
                
                <div class="form-group">
                    <label>Publish Status</label>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px;">
                        <span class="badge-status" id="statusBadge">
                            <span class="status-indicator-dot"></span> Draft Mode
                        </span>
                        <span style="font-size: 0.72rem; color: var(--text-muted); font-weight: 500;">Press save to apply</span>
                    </div>
                    <select name="status" id="statusSelect" class="form-select">
                        <option value="draft" <?= old('status') === 'draft' ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= old('status') === 'published' ? 'selected' : '' ?>>Published</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 0;">
                    <label>Author Account</label>
                    <div style="display: flex; align-items: center; gap: 10px; background: #eef2f6; padding: 10px 14px; border-radius: 8px;">
                        <img src="https://ui-avatars.com/api/?name=<?= session()->get('userName') ?>&background=4f46e5&color=fff" 
                             alt="Avatar" style="width: 28px; height: 28px; border-radius: 50%;">
                        <span style="font-size: 0.88rem; font-weight: 600; color: var(--text-main);">
                            <?= session()->get('userName') ?? 'Admin Editor' ?>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Cover Image Upload -->
            <div class="editor-card">
                <div class="editor-card-title">
                    <i class="fa-solid fa-image" style="color: var(--primary);"></i> Cover Banner
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <div class="image-upload-wrapper" id="uploadWrapper">
                        <div id="dropzoneText">
                            <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                            <h5 style="margin: 0 0 6px; font-size: 0.88rem; font-weight: 700; color: var(--text-main);">Browse or Drag & Drop</h5>
                            <p style="margin: 0; font-size: 0.7rem; color: var(--text-muted); line-height: 1.4;">Recommended: 1200x630px landscape.<br>Max size: 2MB.</p>
                        </div>
                        <input type="file" name="image" id="blogImageInput" accept="image/*" class="file-input-hidden">
                        <div class="preview-container" id="previewContainer">
                            <button type="button" class="remove-image-btn" id="removeImageBtn" title="Remove Cover Image">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                            <img src="#" alt="Preview" class="preview-image" id="previewImg">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Excerpt Card -->
            <div class="editor-card">
                <div class="editor-card-title">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--primary);"></i> SEO Excerpt
                </div>
                <div class="form-group" style="margin-bottom: 0;">
                    <label>Brief Excerpt / Summary</label>
                    <textarea name="excerpt" id="blogExcerptInput" rows="3" class="form-textarea" 
                              placeholder="Describe the article in one or two sentences. This snippet will show up on Google search results and blog index cards..." style="font-size: 0.88rem; line-height: 1.5; resize: vertical;"><?= old('excerpt') ?></textarea>
                    <div class="stats-row">
                        <span id="excerptCount">0/160 chars</span>
                        <span>Google Meta Limit</span>
                    </div>
                    <div class="progress-bar-container">
                        <div class="progress-bar-fill" id="progressExcerpt"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- PREVIEW AREA (HIDDEN BY DEFAULT) -->
    <div id="previewSection" class="live-preview-box" style="display: none; max-width: 850px; margin: 0 auto 50px auto;">
        
        <img src="#" alt="Blog Banner Preview" class="blog-preview-banner" id="prevBanner">

        <div class="blog-preview-header">
            <h1 class="blog-preview-title" id="prevTitle">Untitled Post</h1>
            
            <div class="blog-preview-meta">
                <div class="blog-preview-meta-item">
                    <i class="fa-solid fa-user"></i>
                    <span>By <strong style="color: var(--text-main);"><?= session()->get('userName') ?? 'Admin' ?></strong></span>
                </div>
                <div class="blog-preview-meta-item">
                    <i class="fa-solid fa-calendar-day"></i>
                    <span id="prevDate">Date</span>
                </div>
                <div class="blog-preview-meta-item">
                    <i class="fa-solid fa-clock"></i>
                    <span id="prevReadTime">1 min read</span>
                </div>
            </div>
        </div>

        <div class="blog-preview-excerpt" id="prevExcerpt">
            No summary snippet created yet. Excerpt will appear here...
        </div>

        <div class="blog-preview-content" id="prevContent">
            Let's get started. Content goes here...
        </div>

    </div>

</form>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Tab selectors
    const writeTabBtn = document.getElementById('writeTabBtn');
    const previewTabBtn = document.getElementById('previewTabBtn');
    const writeSection = document.getElementById('writeSection');
    const sidebarSection = document.getElementById('sidebarSection');
    const previewSection = document.getElementById('previewSection');
    const gridContainer = document.querySelector('.blog-editor-container');

    // Title elements
    const titleInput = document.getElementById('blogTitleInput');
    const charCountTitle = document.getElementById('charCountTitle');
    const progressTitle = document.getElementById('progressTitle');

    // Content elements
    const contentInput = document.getElementById('blogContentInput');
    const wordCountField = document.getElementById('wordCountField');
    const readTimeField = document.getElementById('readTimeField');

    // Excerpt elements
    const excerptInput = document.getElementById('blogExcerptInput');
    const excerptCount = document.getElementById('excerptCount');
    const progressExcerpt = document.getElementById('progressExcerpt');

    // Image/Dropzone elements
    const imageInput = document.getElementById('blogImageInput');
    const uploadWrapper = document.getElementById('uploadWrapper');
    const previewContainer = document.getElementById('previewContainer');
    const previewImg = document.getElementById('previewImg');
    const removeImageBtn = document.getElementById('removeImageBtn');
    const dropzoneText = document.getElementById('dropzoneText');

    // Status elements
    const statusSelect = document.getElementById('statusSelect');
    const statusBadge = document.getElementById('statusBadge');

    // Check status by default on page load
    function checkStatus() {
        if (statusSelect.value === 'published') {
            statusBadge.className = 'badge-status published';
            statusBadge.innerHTML = '<span class="status-indicator-dot"></span> Published Active';
        } else {
            statusBadge.className = 'badge-status';
            statusBadge.innerHTML = '<span class="status-indicator-dot"></span> Draft Mode';
        }
    }
    if (statusSelect && statusBadge) {
        statusSelect.addEventListener('change', checkStatus);
        checkStatus();
    }

    // Title length stats tracker
    function updateTitleStats() {
        const val = titleInput.value;
        const length = val.length;
        charCountTitle.textContent = `${length}/60 chars`;
        
        let percent = Math.min((length / 60) * 100, 100);
        progressTitle.style.width = `${percent}%`;
        if (length >= 45 && length <= 60) {
            progressTitle.style.background = '#22c55e'; // Green
        } else if (length > 60) {
            progressTitle.style.background = '#ef4444'; // Red (too long)
        } else {
            progressTitle.style.background = 'var(--primary)'; // Indigo
        }
    }
    if (titleInput) {
        titleInput.addEventListener('input', updateTitleStats);
        updateTitleStats();
    }

    // Excerpt length stats tracker
    function updateExcerptStats() {
        const val = excerptInput.value;
        const length = val.length;
        excerptCount.textContent = `${length}/160 chars`;
        
        let percent = Math.min((length / 160) * 100, 100);
        progressExcerpt.style.width = `${percent}%`;
        if (length >= 100 && length <= 160) {
            progressExcerpt.style.background = '#22c55e'; // Green (ideal meta)
        } else if (length > 160) {
            progressExcerpt.style.background = '#f59e0b'; // Amber (warning)
        } else {
            progressExcerpt.style.background = 'var(--primary)'; // Normal
        }
    }
    if (excerptInput) {
        excerptInput.addEventListener('input', updateExcerptStats);
        updateExcerptStats();
    }

    // Write counts & Estimated read speed estimator
    function updateContentStats() {
        const val = contentInput.value.trim();
        const words = val === "" ? 0 : val.split(/\s+/).length;
        wordCountField.textContent = `${words} words`;
        
        const readingTime = Math.max(1, Math.ceil(words / 200));
        readTimeField.textContent = `${readingTime} min read`;
        document.getElementById('prevReadTime').textContent = `${readingTime} min read`;
    }
    if (contentInput) {
        contentInput.addEventListener('input', updateContentStats);
        updateContentStats();
    }

    // Tab Switching
    if (writeTabBtn && previewTabBtn) {
        writeTabBtn.addEventListener('click', function() {
            writeTabBtn.classList.add('active');
            previewTabBtn.classList.remove('active');
            gridContainer.style.display = 'grid';
            writeSection.style.display = 'block';
            if (sidebarSection) sidebarSection.style.display = 'block';
            previewSection.style.display = 'none';
        });

        previewTabBtn.addEventListener('click', function() {
            writeTabBtn.classList.remove('active');
            previewTabBtn.classList.add('active');
            gridContainer.style.display = 'block'; // break the grid to expand preview layout fully
            writeSection.style.display = 'none';
            if (sidebarSection) sidebarSection.style.display = 'none';
            previewSection.style.display = 'block';

            // Populate live values
            document.getElementById('prevTitle').textContent = titleInput.value || "Untitled Post";
            document.getElementById('prevExcerpt').textContent = excerptInput.value || "No SEO summary excerpt written yet.";

            // Basic Markdown or formatting replacement for lines/spacing
            let contentText = contentInput.value;
            if (contentText) {
                // simple custom line spacing and style preview parser
                let formatted = contentText
                    .replace(/\n\n/g, '</p><p>')
                    .replace(/\n/g, '<br>')
                    .replace(/\*\*([^*]+)\*\*/g, '<strong>$1</strong>')
                    .replace(/\*([^*]+)\*/g, '<em>$1</em>')
                    .replace(/##\s+([^\n<]+)/g, '<h2>$1</h2>')
                    .replace(/#\s+([^\n<]+)/g, '<h1>$1</h1>');
                
                document.getElementById('prevContent').innerHTML = '<p>' + formatted + '</p>';
            } else {
                document.getElementById('prevContent').innerHTML = '<p style="color: var(--text-muted); font-style: italic;">Your article is empty. Start editing in the editor to see your draft details...</p>';
            }

            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('prevDate').textContent = new Date().toLocaleDateString('en-US', options);
        });
    }

    // Toolbar elements integration
    const toolbarButtons = document.querySelectorAll('.toolbar-btn');
    toolbarButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.getAttribute('data-action');
            if (!action || !contentInput) return;

            const startIdx = contentInput.selectionStart;
            const endIdx = contentInput.selectionEnd;
            const text = contentInput.value;
            const selectedText = text.substring(startIdx, endIdx);
            
            let wrapper = "";
            let offset = 0;
            switch(action) {
                case 'bold':
                    wrapper = `**${selectedText || 'bold text'}**`;
                    break;
                case 'italic':
                    wrapper = `*${selectedText || 'italic text'}*`;
                    break;
                case 'heading':
                    wrapper = `\n## ${selectedText || 'Subheading'}\n`;
                    break;
                case 'link':
                    wrapper = `[${selectedText || 'Anchor Text'}](https://example.com)`;
                    break;
                case 'quote':
                    wrapper = `\n> ${selectedText || 'Inspirational quote'}\n`;
                    break;
                case 'list':
                    wrapper = `\n- ${selectedText || 'List item text'}\n`;
                    break;
            }

            contentInput.value = text.substring(0, startIdx) + wrapper + text.substring(endIdx);
            contentInput.focus();
            
            // Recalculate word stats
            updateContentStats();
        });
    });

    // Cover image preview and dragging helper
    if (imageInput && uploadWrapper) {
        ['dragenter', 'dragover'].forEach(name => {
            uploadWrapper.addEventListener(name, (e) => {
                e.preventDefault();
                uploadWrapper.classList.add('dragover');
            }, false);
        });
        ['dragleave', 'drop'].forEach(name => {
            uploadWrapper.addEventListener(name, (e) => {
                e.preventDefault();
                uploadWrapper.classList.remove('dragover');
            }, false);
        });

        uploadWrapper.addEventListener('drop', (e) => {
            e.preventDefault();
            let dt = e.dataTransfer;
            let files = dt.files;
            if (files.length) {
                imageInput.files = files;
                handlePhotoFiles(files);
            }
        }, false);

        imageInput.addEventListener('change', function() {
            if (this.files && this.files.length) {
                handlePhotoFiles(this.files);
            }
        });

        function handlePhotoFiles(files) {
            const file = files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onloadend = function() {
                    previewImg.src = reader.result;
                    previewContainer.style.display = 'block';
                    dropzoneText.style.display = 'none';
                    
                    // Show in preview tab as well
                    const prevBanner = document.getElementById('prevBanner');
                    if (prevBanner) {
                        prevBanner.src = reader.result;
                        prevBanner.style.display = 'block';
                    }
                }
            }
        }

        if (removeImageBtn) {
            removeImageBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                imageInput.value = "";
                previewContainer.style.display = 'none';
                dropzoneText.style.display = 'block';
                
                const prevBanner = document.getElementById('prevBanner');
                if (prevBanner) {
                    prevBanner.style.display = 'none';
                }
            });
        }
    }
});
</script>
<?= $this->endSection() ?>
