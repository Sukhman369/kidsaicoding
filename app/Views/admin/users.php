<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<div class="row" style="display: grid; grid-template-columns: 1fr 340px; gap: 24px; align-items: start;">
    
    <!-- User List -->
    <div class="card">
        <h3 style="margin-bottom: 24px;">System Users</h3>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="border-bottom: 2px solid var(--border); text-align: left;">
                        <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">User</th>
                        <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Role</th>
                        <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase;">Status</th>
                        <th style="padding: 12px; color: var(--text-muted); font-size: 13px; text-transform: uppercase; text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr style="border-bottom: 1px solid var(--border);">
                        <td style="padding: 16px 12px;">
                            <div style="font-weight: 600;"><?= $user['name'] ?></div>
                            <div style="font-size: 13px; color: var(--text-muted);"><?= $user['email'] ?></div>
                        </td>
                        <td style="padding: 16px 12px;">
                            <span style="padding: 4px 10px; border-radius: 6px; font-size: 12px; font-weight: 600; background: #f1f5f9; color: #475569; text-transform: capitalize;">
                                <?= $user['role'] ?>
                            </span>
                        </td>
                        <td style="padding: 16px 12px;">
                            <span style="color: #10b981; font-size: 13px; font-weight: 600; display: flex; align-items: center; gap: 6px;">
                                <span style="width: 8px; height: 8px; background: #10b981; border-radius: 50%;"></span>
                                Active
                            </span>
                        </td>
                        <td style="padding: 16px 12px; text-align: right;">
                            <?php if ($user['id'] != session()->get('userId')): ?>
                                <a href="<?= base_url('admin/users/delete/'.$user['id']) ?>" style="color: #ef4444;" onclick="return confirm('Delete this user?')">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            <?php else: ?>
                                <span style="color: var(--text-muted); font-size: 12px;">(You)</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Links -->
        <?php if (isset($pager)): ?>
            <div style="margin-top: 16px;">
                <?= $pager->links('users', 'admin_pager') ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Add User Form -->
    <div class="card">
        <h3 style="margin-bottom: 20px;"><i class="fa-solid fa-user-plus"></i> Create User</h3>
        <form action="<?= base_url('admin/users/store') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="form-group" style="margin-bottom: 16px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Full Name</label>
                <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group" style="margin-bottom: 16px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Email Address</label>
                <input type="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <div class="form-group" style="margin-bottom: 16px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Role</label>
                <select name="role" style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="parent">Parent</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 24px;">
                <label style="display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px;">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid var(--border); border-radius: 8px;">
            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center;">Create Account</button>
        </form>
    </div>

</div>

<?= $this->endSection() ?>
