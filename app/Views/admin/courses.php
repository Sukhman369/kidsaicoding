<?= view('components/portal_header', ['title' => 'Course Management']) ?>
<?= view('components/admin_sidebar') ?>
<main class="main-content">
    <!-- Topbar -->
    <div class="topbar-card d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 mb-0">Course Management</h1>
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-primary d-flex align-items-center gap-2">
                <span>➕</span> Add New Course
            </button>
            <div style="width:40px;height:40px;border-radius:10px;background:var(--primary);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:700;">AD</div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row g-3 mb-4 mt-2">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="🔍 Search courses...">
        </div>
        <div class="col-md-2">
            <select class="form-select text-muted small">
                <option>All Categories</option>
                <option>Programming</option>
                <option>Web Dev</option>
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-select text-muted small">
                <option>All Status</option>
                <option>Published</option>
                <option>Draft</option>
            </select>
        </div>
    </div>

    <!-- Data Card -->
    <div class="data-card">
        <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
            <h2 class="h5 mb-0">All Courses <span class="text-muted small fw-normal ms-2">(18 total)</span></h2>
            <button class="btn btn-link text-secondary text-decoration-none p-0 small fw-bold">Export CSV</button>
        </div>
        
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="text-muted small text-uppercase">
                    <tr>
                        <th>Course Info</th>
                        <th>Category</th>
                        <th>Age Group</th>
                        <th>Price</th>
                        <th>Students</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="fw-bold">Python for Beginners</div>
                            <div class="text-muted small">ID: CRS-101</div>
                        </td>
                        <td>Programming</td>
                        <td>10-14</td>
                        <td>₹12,499</td>
                        <td>142</td>
                        <td><span class="badge bg-success-subtle text-success">Published</span></td>
                        <td>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-secondary text-decoration-none fw-bold small">Edit</a>
                                <a href="#" class="text-danger text-decoration-none fw-bold small">Archive</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="fw-bold">Full Stack Web Dev</div>
                            <div class="text-muted small">ID: CRS-102</div>
                        </td>
                        <td>Web Dev</td>
                        <td>12-18</td>
                        <td>₹15,999</td>
                        <td>89</td>
                        <td><span class="badge bg-success-subtle text-success">Published</span></td>
                        <td>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-secondary text-decoration-none fw-bold small">Edit</a>
                                <a href="#" class="text-danger text-decoration-none fw-bold small">Archive</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?= view('components/portal_footer') ?>
