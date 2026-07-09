<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<?php if (session()->getFlashdata('error')): ?>
    <div style="padding: 16px; background: #fee2e2; color: #ef4444; border: 1px solid #fecaca; border-radius: 12px; margin-bottom: 24px; font-weight: 500;">
        <i class="fa-solid fa-circle-exclamation" style="margin-right: 8px;"></i> <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<form action="<?= base_url('admin/settings/update') ?>" method="POST" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 30px; align-items: start; margin-bottom: 30px;">
        
        <!-- CARD 1: IDENTITY & HERO BRANDING -->
        <div class="card" style="display: flex; flex-direction: column; gap: 20px; padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.02); border: 1px solid #f1f5f9;">
            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-bottom: 8px;">
                <i class="fa-solid fa-signature" style="margin-right: 8px;"></i> Identity & Branding
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Brand Name</label>
                <input type="text" name="settings[brand_name]" value="<?= esc(get_setting('brand_name', 'KidsAI Coding')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Brand Logo Icon</label>
                <p style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 8px;">Recommended: <b>32x32px</b> (Square) or <b>120x32px</b> (Horizontal). <b>ONLY WebP format (.webp) is allowed.</b> Max: 2MB</p>
                <?php if (get_setting('brand_logo')): ?>
                    <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; padding: 8px; border-radius: 8px; border: 1px solid var(--border); background: #f8fafc; max-width: fit-content;">
                        <img src="<?= base_url(get_setting('brand_logo')) ?>" alt="Logo" style="max-height: 28px; object-fit: contain;">
                        <span style="font-size: 0.7rem; font-weight: 600; color: var(--text-muted);">Active</span>
                    </div>
                <?php endif; ?>
                <input type="file" name="brand_logo" style="font-size: 0.85rem; width: 100%; border: 1px dashed var(--border); border-radius: 8px; padding: 8px; background: #fafafa;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Platform Support Email</label>
                <input type="email" name="settings[contact_email]" value="<?= esc(get_setting('contact_email', 'hello@kidsai.com')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-top: 15px; margin-bottom: 8px;">
                <i class="fa-solid fa-house" style="margin-right: 8px;"></i> Homepage Hero Section
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Hero Title</label>
                <input type="text" name="settings[hero_title]" value="<?= esc(get_setting('hero_title', 'Learn AI, Coding & Robotics The Fun Way.')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Hero Subtitle</label>
                <textarea name="settings[hero_subtitle]" rows="2" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none; resize: vertical;"><?= esc(get_setting('hero_subtitle', 'Interactive project-based learning for kids aged 6–18. Build games, websites, apps and AI projects with expert mentors.')) ?></textarea>
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Hero Banner Image</label>
                <p style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 8px;">Recommended: <b>1100x1000px</b>. <b>ONLY WebP format (.webp) is allowed.</b> Max: 5MB</p>
                <?php if (get_setting('hero_image')): ?>
                    <div style="position: relative; margin-bottom: 10px; border-radius: 8px; overflow: hidden; border: 1px solid var(--border); background: #f8fafc; max-width: 140px;">
                        <img src="<?= base_url(get_setting('hero_image')) ?>" alt="Hero" style="width: 100%; max-height: 90px; object-fit: cover;">
                        <span style="position: absolute; bottom: 4px; left: 4px; padding: 2px 6px; background: rgba(0,0,0,0.6); color: #fff; font-size: 0.65rem; border-radius: 4px; font-weight: 600;">Active</span>
                    </div>
                <?php endif; ?>
                <input type="file" name="hero_image" style="font-size: 0.85rem; width: 100%; border: 1px dashed var(--border); border-radius: 8px; padding: 8px; background: #fafafa;">
            </div>
        </div>

        <!-- CARD 2: GUARANTEE & INDUSTRY EXPERTS -->
        <div class="card" style="display: flex; flex-direction: column; gap: 20px; padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.02); border: 1px solid #f1f5f9;">
            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-bottom: 8px;">
                <i class="fa-solid fa-shield-halved" style="margin-right: 8px;"></i> 100% Risk-Free Guarantee Section
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Section Title</label>
                <input type="text" name="settings[guarantee_title]" value="<?= esc(get_setting('guarantee_title', '100% Risk-Free Learning Guarantee')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Section Subtitle</label>
                <input type="text" name="settings[guarantee_subtitle]" value="<?= esc(get_setting('guarantee_subtitle', 'We are committed to providing the best learning experience for every child.')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Card Title</label>
                <input type="text" name="settings[guarantee_detail_title]" value="<?= esc(get_setting('guarantee_detail_title', 'Your Satisfaction Comes First')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Card Description</label>
                <textarea name="settings[guarantee_detail_text]" rows="3" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none; resize: vertical;"><?= esc(get_setting('guarantee_detail_text', "We believe in the quality of our mentors and curriculum.\nIf you feel our classes aren't the right fit after your first\nsession, we'll refund your payment—no complicated process,\nno hidden conditions.")) ?></textarea>
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Feature Points (separated by commas)</label>
                <input type="text" name="settings[guarantee_features]" value="<?= esc(get_setting('guarantee_features', '100% Money Back, Cancel Anytime, Transparent Pricing, Dedicated Support')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-top: 15px; margin-bottom: 8px;">
                <i class="fa-solid fa-graduation-cap" style="margin-right: 8px;"></i> Industry Experts Section
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Mentor Expert Banner Image</label>
                <p style="font-size: 0.75rem; color: var(--text-muted); margin-bottom: 8px;">Recommended: <b>600x550px</b>. <b>ONLY WebP format (.webp) is allowed.</b> Max: 3MB</p>
                <?php if (get_setting('mentor_section_image')): ?>
                    <div style="position: relative; margin-bottom: 10px; border-radius: 8px; overflow: hidden; border: 1px solid var(--border); background: #f8fafc; max-width: 140px;">
                        <img src="<?= base_url(get_setting('mentor_section_image')) ?>" alt="Mentor Banner" style="width: 100%; max-height: 90px; object-fit: cover;">
                        <span style="position: absolute; bottom: 4px; left: 4px; padding: 2px 6px; background: rgba(0,0,0,0.6); color: #fff; font-size: 0.65rem; border-radius: 4px; font-weight: 600;">Active</span>
                    </div>
                <?php endif; ?>
                <input type="file" name="mentor_section_image" style="font-size: 0.85rem; width: 100%; border: 1px dashed var(--border); border-radius: 8px; padding: 8px; background: #fafafa;">
            </div>
        </div>

    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 30px; align-items: start; margin-bottom: 30px;">
        
        <!-- CARD 3: WHY EVERY CHILD SHOULD CODE (3 Rows) -->
        <div class="card" style="display: flex; flex-direction: column; gap: 20px; padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.02); border: 1px solid #f1f5f9;">
            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-bottom: 8px;">
                <i class="fa-solid fa-code" style="margin-right: 8px;"></i> Why Kids Should Code Section
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Section Title</label>
                <input type="text" name="settings[why_code_title]" value="<?= esc(get_setting('why_code_title', 'Why Every Child Should Learn Coding')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Section Subtitle</label>
                <input type="text" name="settings[why_code_subtitle]" value="<?= esc(get_setting('why_code_subtitle', "Coding isn't just about computers. It develops creativity, confidence and problem-solving skills that last a lifetime.")) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <!-- ROW 1 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Row 1 (Top)</span>
                    <input type="text" name="settings[why_code_r1_icon]" value="<?= esc(get_setting('why_code_r1_icon', '🧠')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[why_code_r1_title]" value="<?= esc(get_setting('why_code_r1_title', 'Develop Critical Thinking')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[why_code_r1_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('why_code_r1_desc', 'Coding strengthens logical reasoning, analytical thinking and creative problem-solving, helping children perform better in academics and everyday life.')) ?></textarea>
                <div>
                    <label style="display: block; font-size: 0.72rem; font-weight: 600; margin-bottom: 4px;">Representative Image (Recommended: 600x400px, <b>WebP format only</b>, Max Size: 2MB)</label>
                    <?php if (get_setting('why_code_r1_image')): ?>
                        <img src="<?= base_url(get_setting('why_code_r1_image')) ?>" alt="Row 1 Image" style="max-height: 48px; border-radius: 6px; display: block; margin-bottom: 6px;">
                    <?php endif; ?>
                    <input type="file" name="why_code_r1_image" style="font-size: 0.78rem;">
                </div>
            </div>

            <!-- ROW 2 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Row 2 (Middle)</span>
                    <input type="text" name="settings[why_code_r2_icon]" value="<?= esc(get_setting('why_code_r2_icon', '🚀')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[why_code_r2_title]" value="<?= esc(get_setting('why_code_r2_title', 'Prepare for Future Careers')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[why_code_r2_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('why_code_r2_desc', "Technology is shaping every industry. Learning programming early gives children\nconfidence to succeed in tomorrow's digital world.")) ?></textarea>
                <div>
                    <label style="display: block; font-size: 0.72rem; font-weight: 600; margin-bottom: 4px;">Representative Image (Recommended: 600x400px, <b>WebP format only</b>, Max Size: 2MB)</label>
                    <?php if (get_setting('why_code_r2_image')): ?>
                        <img src="<?= base_url(get_setting('why_code_r2_image')) ?>" alt="Row 2 Image" style="max-height: 48px; border-radius: 6px; display: block; margin-bottom: 6px;">
                    <?php endif; ?>
                    <input type="file" name="why_code_r2_image" style="font-size: 0.78rem;">
                </div>
            </div>

            <!-- ROW 3 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Row 3 (Bottom)</span>
                    <input type="text" name="settings[why_code_r3_icon]" value="<?= esc(get_setting('why_code_r3_icon', '🎯')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[why_code_r3_title]" value="<?= esc(get_setting('why_code_r3_title', 'Learn Through Projects')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[why_code_r3_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('why_code_r3_desc', 'Kids build games, websites, AI applications and real projects, making learning practical and enjoyable.')) ?></textarea>
                <div>
                    <label style="display: block; font-size: 0.72rem; font-weight: 600; margin-bottom: 4px;">Representative Image (Recommended: 600x400px, <b>WebP format only</b>, Max Size: 2MB)</label>
                    <?php if (get_setting('why_code_r3_image')): ?>
                        <img src="<?= base_url(get_setting('why_code_r3_image')) ?>" alt="Row 3 Image" style="max-height: 48px; border-radius: 6px; display: block; margin-bottom: 6px;">
                    <?php endif; ?>
                    <input type="file" name="why_code_r3_image" style="font-size: 0.78rem;">
                </div>
            </div>
        </div>

        <!-- CARD 4: WHY CHOOSE US? SECTION (Advantage) -->
        <div class="card" style="display: flex; flex-direction: column; gap: 20px; padding: 24px; border-radius: 16px; background: #fff; box-shadow: 0 4px 20px rgba(0,0,0,0.02); border: 1px solid #f1f5f9;">
            <h3 style="color: var(--primary); font-size: 1.2rem; font-weight: 700; border-bottom: 1px solid var(--border); padding-bottom: 12px; margin-bottom: 8px;">
                <i class="fa-solid fa-square-poll-horizontal" style="margin-right: 8px;"></i> Why Choose Us? Section
            </h3>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Advantage Badge/Tag</label>
                <input type="text" name="settings[choose_us_tag]" value="<?= esc(get_setting('choose_us_tag', 'The KidsAI Advantage')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <div class="form-group">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 0.9rem; color: var(--text-main);">Section Title</label>
                <input type="text" name="settings[choose_us_title]" value="<?= esc(get_setting('choose_us_title', 'Why Choose Us?')) ?>" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px; font-size: 0.9rem; outline: none;">
            </div>

            <!-- CHOOSE 1 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Feature 1</span>
                    <input type="text" name="settings[choose_us_f1_icon]" value="<?= esc(get_setting('choose_us_f1_icon', '🎯')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[choose_us_f1_title]" value="<?= esc(get_setting('choose_us_f1_title', 'Goal-Based Path')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[choose_us_f1_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('choose_us_f1_desc', 'Every child gets a customized roadmap based on their age, interests, and learning speed. No one gets left behind.')) ?></textarea>
            </div>

            <!-- CHOOSE 2 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Feature 2</span>
                    <input type="text" name="settings[choose_us_f2_icon]" value="<?= esc(get_setting('choose_us_f2_icon', '👩‍🏫')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[choose_us_f2_title]" value="<?= esc(get_setting('choose_us_f2_title', 'Expert Mentors')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[choose_us_f2_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('choose_us_f2_desc', 'Our educators are not just teachers; they are professionals from top tech backgrounds who love teaching kids.')) ?></textarea>
            </div>

            <!-- CHOOSE 3 -->
            <div style="border: 1px solid #f1f5f9; padding: 16px; border-radius: 10px; background: #fafafa; display: flex; flex-direction: column; gap: 10px;">
                <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin: 0; display: flex; align-items: center; justify-content: space-between;">
                    <span>Feature 3</span>
                    <input type="text" name="settings[choose_us_f3_icon]" value="<?= esc(get_setting('choose_us_f3_icon', '🛠️')) ?>" style="width: 38px; text-align: center; padding: 4px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.9rem;">
                </h4>
                <input type="text" name="settings[choose_us_f3_title]" value="<?= esc(get_setting('choose_us_f3_title', 'Real-World Projects')) ?>" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem;">
                <textarea name="settings[choose_us_f3_desc]" rows="2" placeholder="Description" style="width: 100%; padding: 8px; border: 1px solid var(--border); border-radius: 6px; font-size: 0.85rem; resize: vertical;"><?= esc(get_setting('choose_us_f3_desc', 'From mobile apps to AI models, students create a professional portfolio of real-world work by the end of each module.')) ?></textarea>
            </div>
        </div>

    </div>

    <!-- BUTTON FLOAT BAR -->
    <div style="position: sticky; bottom: 20px; background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(8px); padding: 16px; border-radius: 12px; border: 1px solid var(--border); box-shadow: 0 10px 25px rgba(0,0,0,0.05); display: flex; justify-content: flex-end; z-index: 100;">
        <button type="submit" class="btn btn-primary" style="padding: 12px 40px; font-size: 1rem; border-radius: 8px; box-shadow: 0 4px 12px rgba(249, 115, 22, 0.25);">
            <i class="fa-solid fa-floppy-disk" style="margin-right: 6px;"></i> Save All Site Settings
        </button>
    </div>

</form>

<?= $this->endSection() ?>
