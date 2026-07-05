<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 24px;">
    <!-- Homepage Settings -->
    <div class="card">
        <h3 style="margin-bottom: 20px; color: var(--primary);"><i class="fa-solid fa-house"></i> Homepage Content</h3>
        <form action="<?= base_url('admin/settings/update') ?>" method="POST">
            <?= csrf_field() ?>
            
            <div class="form-group" style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Hero Section Title</label>
                <input type="text" name="settings[hero_title]" value="<?= isset($settings['hero_title']) ? $settings['hero_title'] : 'Learn AI, Coding & Robotics The Fun Way.' ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Hero Subtitle</label>
                <textarea name="settings[hero_subtitle]" rows="3" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;"><?= isset($settings['hero_subtitle']) ? $settings['hero_subtitle'] : 'Interactive project-based learning for kids aged 6–18.' ?></textarea>
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; font-weight: 600;">Contact Email</label>
                <input type="email" name="settings[contact_email]" value="<?= isset($settings['contact_email']) ? $settings['contact_email'] : 'hello@kidsai.com' ?>" style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px;">
            </div>

            <button type="submit" class="btn btn-primary">Save Homepage Content</button>
        </form>
    </div>

    <!-- Advanced Settings -->
    <div class="card">
        <h3 style="margin-bottom: 20px;"><i class="fa-solid fa-lock"></i> Platform Visibility</h3>
        <p style="color: var(--text-muted); font-size: 14px; margin-bottom: 20px;">
            Managing technical aspects of the platform. (Platform name editing is restricted).
        </p>
        
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 16px; background: #fff7ed; border-radius: 12px; border: 1px solid #ffedd5;">
            <div>
                <div style="font-weight: 600; color: #9a3412;">Maintenance Mode</div>
                <div style="font-size: 13px; color: #c2410c;">Only admins can view the frontend.</div>
            </div>
            <div style="width: 40px; height: 20px; background: #e2e8f0; border-radius: 20px; position: relative; cursor: pointer;">
                <div style="width: 16px; height: 16px; background: white; border-radius: 50%; position: absolute; left: 2px; top: 2px;"></div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
