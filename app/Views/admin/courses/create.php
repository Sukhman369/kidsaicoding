<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="card" style="max-width: 900px; padding: 28px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.02); background: #fff; border: 1px solid var(--border);">
    
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px; border-bottom: 1px solid var(--border); padding-bottom: 16px;">
        <h3 style="color: var(--text-main); font-weight: 700; margin: 0;">
            <i class="fa-solid fa-square-plus" style="color: var(--primary); margin-right: 8px;"></i> Create New Course
        </h3>
        <a href="<?= base_url('admin/courses') ?>" style="text-decoration: none; color: var(--text-muted); font-weight: 500; font-size: 0.9rem;">
            <i class="fa-solid fa-arrow-left"></i> Back to Courses
        </a>
    </div>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" style="background: #fee2e2; color: #b91c1c; border: 1px solid #fecaca; margin-bottom: 24px; padding: 12px; border-radius: 8px; font-weight: 500;">
            <i class="fa-solid fa-circle-exclamation"></i> <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/courses/store') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <!-- SECTION 1: MEDIA & STATUS -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Course Banner Image</label>
                <input type="file" name="image" accept="image/webp" required style="width: 100%; padding: 10px; border: 1px dashed var(--border); border-radius: 8px; background: #fafafa;">
                <p style="font-size: 0.72rem; color: var(--text-muted); margin-top: 4px;"><b>Mandatory: WEBP format (.webp) only.</b> Recommended: 600x400px.</p>
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Publish Status</label>
                <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; background: #fff;">
                    <option value="published">Published</option>
                    <option value="draft" selected>Draft</option>
                </select>
            </div>
        </div>

        <!-- SECTION 2: BASICS -->
        <div style="display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Course Title</label>
                <input type="text" name="title" required placeholder="e.g. Scratch Game Development" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Badge Notification</label>
                <input type="text" name="badge" placeholder="e.g. Popular, Hot, New" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Display Order Index</label>
                <input type="number" name="order_index" value="0" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
        </div>

        <!-- SECTION 3: CATEGORY & TAXONOMY -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Category Track</label>
                <input type="text" name="course_type" list="tracksList" value="Programming" placeholder="Select/Type track category" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; background: #fff;">
                <datalist id="tracksList">
                    <option value="Programming">
                    <option value="Game Design">
                    <option value="AI & Robotics">
                    <option value="Web Dev">
                    <option value="Other">
                </datalist>
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Difficulty Level</label>
                <select name="difficulty" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; background: #fff;">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Curriculum Document Link</label>
                <input type="text" name="curriculum_url" placeholder="Optional URL path to PDF" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
        </div>

        <!-- SECTION 4: LESSON METADATA -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 20px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Lessons (Count)</label>
                <input type="number" name="num_lessons" value="24" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Activities (Count)</label>
                <input type="number" name="num_activities" value="50" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Duration / Schedule</label>
                <input type="text" name="duration" placeholder="e.g. 12 Weeks" value="12 Weeks" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Audience Age Range</label>
                <input type="text" name="age_range" placeholder="e.g. 8–12" value="8-12" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
        </div>

        <!-- SECTION 5: PRICING & SOCIAL PROOF -->
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr 1fr; gap: 15px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Offer Price (₹)</label>
                <input type="number" name="price" value="9999" placeholder="Discounted Price" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Original Price (₹)</label>
                <input type="number" name="compare_price" value="14999" placeholder="Crossed Price" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Grade Target</label>
                <input type="text" name="grade_range" placeholder="e.g., Grades 3-7" value="Grades 3-7" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Rating Score</label>
                <input type="number" step="0.1" max="5" min="1" name="rating_val" value="4.8" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Seats filled (%)</label>
                <input type="number" max="100" min="10" name="seats_percent" value="70" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
        </div>

        <!-- SECTION 6: DESCRIPTION & HIGHLIGHTS -->
        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Introductory Description</label>
            <textarea name="description" rows="3" placeholder="Key marketing pitch for this course..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical;"></textarea>
        </div>

        <div class="form-group" style="margin-bottom: 28px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">What You'll Learn (Highlights - One point per line)</label>
            <textarea name="outcomes" rows="5" placeholder="e.g.&#10;Variables & Data Types&#10;Develop custom interactive games&#10;Logic control with loops and variables&#10;Build critical problem-solving skills" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-family: monospace; font-size: 0.85rem; line-height: 1.5;"></textarea>
        </div>

        <!-- SECTION 7: INSTRUCTOR PROFILE -->
        <h4 style="margin: 28px 0 16px 0; border-bottom: 1px solid var(--border); padding-bottom: 6px; font-size: 1rem; color: var(--primary);">Instructor Profile</h4>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-bottom: 24px;">
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Instructor Name</label>
                <input type="text" name="instructor_name" value="Senior Coding Coach" placeholder="e.g., Jane Doe" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none;">
            </div>
            <div class="form-group">
                <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Instructor Headshot (.webp only)</label>
                <input type="file" name="instructor_image" accept="image/webp" style="width: 100%; padding: 10px; border: 1px dashed var(--border); border-radius: 8px; background: #fafafa;">
            </div>
        </div>
        <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Instructor Biography Summary</label>
            <textarea name="instructor_bio" rows="3" placeholder="Explain mentor credentials and passion..." style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical;"></textarea>
        </div>

        <!-- SECTION 8: DETAILED CURRICULUM SYLLABUS -->
        <h4 style="margin: 28px 0 16px 0; border-bottom: 1px solid var(--border); padding-bottom: 6px; font-size: 1rem; color: var(--primary);">Detailed Syllabus Tab Content</h4>
        <div class="form-group" style="margin-bottom: 28px;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Curriculum Modules (Show in accordion modules - Use '#' for Module Title & '-' for lessons)</label>
            <textarea name="curriculum_text" rows="8" placeholder="e.g.&#10;# Module 1: Introduction to Variables&#10;- Getting set up with the playground&#10;- Storing numbers & texts in memory&#10;# Module 2: Logic Control Blocks&#10;- If/Else decisions constructs&#10;- Loop control iterations" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; outline: none; resize: vertical; font-family: monospace; font-size: 0.85rem; line-height: 1.5;"></textarea>
        </div>

        <div style="display: flex; gap: 12px; border-top: 1px solid var(--border); padding-top: 20px;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-weight: 700; border-radius: 8px;">
                <i class="fa-solid fa-save" style="margin-right: 6px;"></i> Create Course
            </button>
            <a href="<?= base_url('admin/courses') ?>" class="btn" style="background: #f1f5f9; color: var(--text-main); padding: 12px 30px; border-radius: 8px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center;">Cancel</a>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
