<?= view('components/portal_header', ['title' => 'Student Dashboard']) ?>
<?= view('components/student_sidebar') ?>
<?php
// Dynamic greetings depending on current system hour
$hour = (int)date('H');
if ($hour < 12) {
    $greeting = 'Good morning';
} elseif ($hour < 17) {
    $greeting = 'Good afternoon';
} else {
    $greeting = 'Good evening';
}
$welcome_msg = $greeting . ', ' . esc($student_name) . '! 👋';
?>
<?= view('components/portal_topbar', [
    'welcome_msg' => $welcome_msg,
    'page_title' => 'Here is what\'s happening with your coding journey today.'
]) ?>

<!-- Stats Row -->
<div class="row g-3 mb-4">
    <!-- Stat 1: Registered Trials / Bookings -->
    <div class="col-6 col-sm-6 col-md-3">
        <div class="student-stat-card">
            <div class="student-stat-icon-wrapper" style="background: rgba(14, 165, 233, 0.1); color: var(--secondary)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
            </div>
            <div class="student-stat-info">
                <span class="student-stat-number"><?= count($bookings) ?></span>
                <span class="student-stat-name">Booked Trials</span>
            </div>
        </div>
    </div>
    <!-- Stat 2: Active Courses Mocked or Booked status -->
    <div class="col-6 col-sm-6 col-md-3">
        <div class="student-stat-card">
            <div class="student-stat-icon-wrapper" style="background: rgba(34, 197, 94, 0.1); color: var(--success);">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                    <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"/>
                </svg>
            </div>
            <div class="student-stat-info">
                <span class="student-stat-number"><?= count($bookings) > 0 ? 1 : 0 ?></span>
                <span class="student-stat-name">Active Classes</span>
            </div>
        </div>
    </div>
    <!-- Stat 3: Gamified XP Points -->
    <div class="col-6 col-sm-6 col-md-3">
        <div class="student-stat-card">
            <div class="student-stat-icon-wrapper" style="background: rgba(245, 158, 11, 0.1); color: var(--warning)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="8" r="7"/>
                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                </svg>
            </div>
            <div class="student-stat-info">
                <span class="student-stat-number">450 <span style="font-size:0.75rem; font-weight: 500; color: var(--text-muted);">XP</span></span>
                <span class="student-stat-name">Level 2 Coder</span>
            </div>
        </div>
    </div>
    <!-- Stat 4: Learning Streak -->
    <div class="col-6 col-sm-6 col-md-3">
        <div class="student-stat-card">
            <div class="student-stat-icon-wrapper streak-pulse" style="background: rgba(249, 115, 22, 0.1); color: var(--primary)">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>
                </svg>
            </div>
            <div class="student-stat-info">
                <span class="student-stat-number">5-Day</span>
                <span class="student-stat-name">Coding Streak</span>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Left Column: Bookings & Course Suggestions -->
    <div class="col-lg-8">
        
        <!-- Live trial bookings section -->
        <div class="data-card mb-4">
            <h2>📅 My Scheduled Bookings & Classes</h2>
            
            <?php if (empty($bookings)): ?>
                <!-- No bookings display custom beautiful banner -->
                <div class="text-center py-5 px-4 rounded-3" style="background: linear-gradient(135deg, var(--secondary-light) 0%, rgba(14,165,233,0.03) 100%); border: 1px dashed rgba(14,165,233,0.25);">
                    <div class="h1 mb-3 text-secondary" style="font-size:3rem;">🚀</div>
                    <h3 class="h5 fw-bold mb-2">Unlock Your Coding Journey!</h3>
                    <p class="text-muted small mx-auto mb-4" style="max-width:450px;">
                        Master premium skills in Scratch, Python, HTML/CSS, and AI. Book a free 1-on-1 trial class with our professional mentors to kickstart your journey.
                    </p>
                    <a href="<?= base_url('book-free-class') ?>" class="btn btn-primary shadow-sm hover-up">
                        Book Your Free Demo Class
                    </a>
                </div>
            <?php else: ?>
                <!-- Loop through bookings -->
                <div class="d-grid gap-3">
                    <?php foreach ($bookings as $booking): ?>
                        <div class="live-class-card rounded-4 p-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-primary text-white rounded-3 p-3 text-center d-flex flex-column justify-content-center" style="min-width: 75px; height: 75px;">
                                    <span class="fw-bold small" style="line-height:1;"><?= strtoupper(date('M', strtotime($booking['booking_date']))) ?></span>
                                    <span class="h3 fw-extrabold mb-0" style="line-height:1.1; font-family:'Outfit';"><?= date('d', strtotime($booking['booking_date'])) ?></span>
                                </div>
                                <div>
                                    <h4 class="h6 fw-bold mb-1" style="color:var(--text-dark);">
                                        1-on-1 Free Coding Demo Session (Grade <?= esc($booking['student_grade']) ?>)
                                    </h4>
                                    <div class="d-flex flex-wrap gap-x-3 gap-y-1 text-muted small">
                                        <span>⏰ Time Slot: <b><?= esc($booking['booking_time']) ?></b></span>
                                        <span class="d-none d-sm-inline">|</span>
                                        <span>🏫 School: <b><?= esc($booking['school_name'] ?? 'Not Specified') ?></b></span>
                                    </div>
                                    <p class="mb-0 text-muted x-small mt-1">Class Slot holds for Parent: <?= esc($booking['parent_name']) ?></p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <?php if (strtolower($booking['status']) === 'pending'): ?>
                                    <span class="badge rounded-pill bg-warning-subtle text-warning px-3 py-2">Pending Review</span>
                                <?php else: ?>
                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">Confirmed</span>
                                <?php endif; ?>
                                
                                <?php if (strtolower($booking['status']) === 'confirmed'): ?>
                                    <a href="#" class="btn btn-primary btn-sm px-4">Join via Zoom</a>
                                <?php else: ?>
                                    <button class="btn btn-outline-secondary btn-sm px-3" disabled>Awaiting Code Link</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Dynamic Course Catalog & Progress Catalog -->
        <div class="data-card">
            <h2>📚 Popular Coding Tracks for You</h2>
            <div class="row g-3">
                <?php if (empty($courses)): ?>
                    <p class="text-muted small">No courses found. Add coding curriculum in Admin panel to show here.</p>
                <?php else: ?>
                    <?php foreach ($courses as $course): ?>
                        <div class="col-md-6">
                            <div class="card h-100 border-light-outline rounded-3 overflow-hidden shadow-sm" style="border:1px solid #f1f5f9; transition:all 0.2s ease;">
                                <div class="bg-light p-3 text-center border-bottom d-flex align-items-center justify-content-center" style="height:150px; background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%)">
                                    <?php if (!empty($course['image_path'])): ?>
                                        <img src="<?= base_url($course['image_path']) ?>" alt="<?= esc($course['title']) ?>" style="max-height:100%; max-width:100%; object-fit:contain;">
                                    <?php else: ?>
                                        <div class="h1 mb-0"><?= esc($course['badge'] ?? '🐍') ?></div>
                                    <?php endif; ?>
                                </div>
                                <div class="p-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-secondary-subtle text-secondary small">Age <?= esc($course['age_range']) ?></span>
                                        <span class="text-muted x-small fw-semibold"><?= esc($course['difficulty'] ?? 'Beginner') ?></span>
                                    </div>
                                    <h4 class="h6 fw-bold mb-2 text-truncate" title="<?= esc($course['title']) ?>"><?= esc($course['title']) ?></h4>
                                    <p class="text-muted x-small mb-3 line-clamp-2" style="height: 38px; display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;">
                                        <?= esc($course['description']) ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                                        <div>
                                            <span class="text-muted x-small d-block">Lessons/Activities</span>
                                            <strong class="small text-dark"><?= esc($course['num_lessons']) ?> Classes</strong>
                                        </div>
                                        <a href="<?= base_url('course/' . $course['slug']) ?>" class="btn btn-outline-primary btn-sm py-1 px-3">Syllabus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

    <!-- Right Column: Achievements & Interactive coding todo component -->
    <div class="col-lg-4">

        <!-- Gamified Level and Milestone Card -->
        <div class="data-card gamified-header-card mb-4">
            <div class="d-flex justify-content-between align-items-start mb-3">
                <div>
                    <span class="level-indicator">Level 2 Apprentice</span>
                    <h3 class="h4 fw-bold mt-1 mb-0">Arjun's Journey</h3>
                </div>
                <span class="xp-badge">450 / 800 XP</span>
            </div>
            
            <div class="progress mb-2" style="height:8px; background-color:#ffedd5;">
                <div class="progress-bar" style="width: 56.2%; background: linear-gradient(90deg, #f97316 0%, #ea580c 100%)"></div>
            </div>
            <div class="d-flex justify-content-between text-muted x-small">
                <span>Next level unlocked at 800 XP</span>
                <span class="fw-bold" style="color:var(--primary);">56%</span>
            </div>
        </div>
        
        <!-- Achievements Box -->
        <div class="data-card mb-4">
            <h2>🏆 My Awesome Badges</h2>
            <div class="d-grid gap-3">
                <div class="p-2 border rounded-3 d-flex align-items-center gap-3">
                    <div class="fs-2">🥇</div>
                    <div>
                        <div class="fw-bold small text-dark">Hello World Builder</div>
                        <div class="text-muted x-small">Logged in and setup workspace profile.</div>
                    </div>
                </div>
                <div class="p-2 border rounded-3 d-flex align-items-center gap-3">
                    <div class="fs-2">🔥</div>
                    <div>
                        <div class="fw-bold small text-dark">5-Day Consistent Streak</div>
                        <div class="text-muted x-small">Coded five consecutive days without stopping!</div>
                    </div>
                </div>
                <div class="p-2 border rounded-3 d-flex align-items-center gap-3 opacity-50">
                    <div class="fs-2">🎓</div>
                    <div>
                        <div class="fw-bold small text-dark">Graduation Certificate</div>
                        <div class="text-muted x-small">Complete first full coding track to unlock.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Interactive Client-side Task list card -->
        <div class="data-card">
            <h2>📝 My Coding Action Tasks</h2>
            
            <!-- Add task fields -->
            <div class="todo-input-wrap mb-3">
                <input type="text" id="todoInput" class="form-control form-control-sm" placeholder="Add programming task (e.g. Write a loop)..." autocomplete="off">
                <button id="addTodoBtn" class="btn btn-primary btn-sm px-3">+</button>
            </div>
            
            <!-- list elements -->
            <div id="todoListContainer" class="d-grid gap-1">
                <!-- Javascript will inject list objects here -->
            </div>
        </div>

    </div>
</div>

<!-- Task manager LocalStorage scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const todoInput = document.getElementById('todoInput');
    const addTodoBtn = document.getElementById('addTodoBtn');
    const todoListContainer = document.getElementById('todoListContainer');
    
    // Initial task array
    let tasks = [
        { id: 1, text: 'Review Python Functions & Loops syntax', completed: false },
        { id: 2, text: 'Try building a simple calculator program', completed: true },
        { id: 3, text: 'Submit homework module 3 files to teacher', completed: false }
    ];
    
    // Load from LocalStorage if vorhanden
    const stored = localStorage.getItem('student_tasks');
    if (stored) {
        tasks = JSON.parse(stored);
    }
    
    function saveTasks() {
        localStorage.setItem('student_tasks', JSON.stringify(tasks));
    }
    
    function renderTasks() {
        todoListContainer.innerHTML = '';
        if (tasks.length === 0) {
            todoListContainer.innerHTML = '<div class="text-center text-muted small py-3">No tasks added yet. Happy coding! 🚀</div>';
            return;
        }
        
        tasks.forEach(task => {
            const item = document.createElement('div');
            item.className = 'todo-item' + (task.completed ? ' completed' : '');
            item.innerHTML = `
                <div class="d-flex align-items-center gap-2">
                    <input type="checkbox" class="form-check-input" ${task.completed ? 'checked' : ''} data-id="${task.id}">
                    <span class="todo-text small text-dark">${escapeHTML(task.text)}</span>
                </div>
                <button class="btn-todo-action btn-delete-task" data-id="${task.id}">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                    </svg>
                </button>
            `;
            todoListContainer.appendChild(item);
        });
        
        // Listeners for checkbox status change
        todoListContainer.querySelectorAll('.form-check-input').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const id = parseInt(this.getAttribute('data-id'));
                const task = tasks.find(t => t.id === id);
                if (task) {
                    task.completed = this.checked;
                    saveTasks();
                    renderTasks();
                }
            });
        });
        
        // Listeners for delete buttons
        todoListContainer.querySelectorAll('.btn-delete-task').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = parseInt(this.getAttribute('data-id'));
                tasks = tasks.filter(t => t.id !== id);
                saveTasks();
                renderTasks();
            });
        });
    }
    
    function escapeHTML(str) {
        return str.replace(/[&<>'"]/g, 
            tag => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                "'": '&#39;',
                '"': '&quot;'
            }[tag] || tag)
        );
    }
    
    // Add event handler
    addTodoBtn.addEventListener('click', function() {
        const text = todoInput.value.trim();
        if (text === '') return;
        
        const newTask = {
            id: Date.now(),
            text: text,
            completed: false
        };
        
        tasks.push(newTask);
        saveTasks();
        renderTasks();
        todoInput.value = '';
    });
    
    // Trigger on Enter key
    todoInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            addTodoBtn.click();
        }
    });
    
    renderTasks();
});
</script>

<?= view('components/portal_footer') ?>
