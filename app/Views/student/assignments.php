<?= view('components/portal_header', ['title' => 'Assignments']) ?>
<?= view('components/student_sidebar') ?>
<?= view('components/portal_topbar', ['page_title' => 'Academic tasks and challenges']) ?>

<div class="data-card">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="text-muted small text-uppercase">
                <tr>
                    <th>Assignment Title</th>
                    <th>Course</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><div class="fw-bold">Level 3: Loops Challenge</div></td>
                    <td>Python for Beginners</td>
                    <td>Today, 11:59 PM</td>
                    <td><span class="badge bg-warning-subtle text-warning">In Progress</span></td>
                    <td><button class="btn btn-primary btn-sm px-3">Open</button></td>
                </tr>
                <tr>
                    <td><div class="fw-bold">My First Webpage</div></td>
                    <td>HTML & CSS</td>
                    <td>Passed</td>
                    <td><span class="badge bg-success-subtle text-success">Graded: A+</span></td>
                    <td><a href="#" class="text-muted small text-decoration-none">View Feedback</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= view('components/portal_footer') ?>
