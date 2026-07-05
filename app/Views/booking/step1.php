<?= view('components/header') ?>

<section class="py-5 bg-light" style="min-height: 100vh;">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="card border-0 shadow-lg" style="border-radius: 30px; overflow: hidden;">
                    <div class="row g-0">
                        <!-- Left Panel: Info -->
                        <div class="col-md-5 bg-primary text-white p-5 d-flex flex-column justify-content-center" style="background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%) !important;">
                            <h2 class="fw-bold mb-4">Start Your Coding Journey!</h2>
                            <p class="opacity-75 mb-5">Join 10,000+ students learning the skills of the future. Select your preferred slot for the free demo.</p>
                            
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-white bg-opacity-25 rounded-circle p-2 me-3" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">✔</div>
                                <span>1:1 Interactive Session</span>
                            </div>
                            <!-- ... rest of left panel ... -->
                        </div>

                        <!-- Right Panel: Form -->
                        <div class="col-md-7 p-5 bg-white">
                            <form action="<?= base_url('book-free-class/step1') ?>" method="POST">
                                <?= csrf_field() ?>
                                
                                <!-- Grade Selection -->
                                <div class="mb-5">
                                    <label class="form-label fw-bold h5 mb-3">Which grade are you in?</label>
                                    <div class="d-flex flex-wrap gap-2">
                                        <?php for($i=4; $i<=12; $i++): ?>
                                            <input type="radio" class="btn-check" name="grade" id="grade<?= $i ?>" value="<?= $i ?>" required <?= $i == 4 ? 'checked' : '' ?>>
                                            <label class="btn btn-outline-primary px-3 py-2 fw-semibold" for="grade<?= $i ?>" style="border-radius: 10px; border-width: 2px;">Grade <?= $i ?></label>
                                        <?php endfor; ?>
                                    </div>
                                </div>

                                <!-- Date Selection -->
                                <div class="mb-5">
                                    <label class="form-label fw-bold h5 mb-3">Select a Date</label>
                                    <div class="row g-3">
                                        <?php 
                                            // Indian Timezone for accuracy
                                            date_default_timezone_set('Asia/Kolkata');
                                            $dates = [
                                                date('Y-m-d') => date('D, M d'),
                                                date('Y-m-d', strtotime('+1 day')) => date('D, M d', strtotime('+1 day')),
                                                date('Y-m-d', strtotime('+2 days')) => date('D, M d', strtotime('+2 days'))
                                            ];
                                            $i = 0;
                                            foreach($dates as $val => $label):
                                        ?>
                                        <div class="col-4">
                                            <input type="radio" class="btn-check date-selector" name="date" id="date_<?= $i ?>" value="<?= $val ?>" required <?= $i == 0 ? 'checked' : '' ?>>
                                            <label class="btn btn-outline-primary w-100 py-3 d-flex flex-column" for="date_<?= $i ?>" style="border-radius: 15px; border-width: 2px;">
                                                <span class="fw-bold"><?= explode(',', $label)[0] ?></span>
                                                <span class="small opacity-75"><?= explode(',', $label)[1] ?></span>
                                            </label>
                                        </div>
                                        <?php $i++; endforeach; ?>
                                    </div>
                                </div>

                                <!-- Time Selection -->
                                <div class="mb-5">
                                    <label class="form-label fw-bold h5 mb-3">Pick a Time Slot</label>
                                    <div style="max-height: 250px; overflow-y: auto; padding-right: 10px;" class="custom-scroll">
                                        
                                        <!-- Today's Slots (Dynamic display) -->
                                        <div id="time_slots_container" class="row g-2">
                                            <?php 
                                            $currentTime = time();
                                            $start = strtotime("11:00 AM");
                                            $end = strtotime("10:00 PM");
                                            
                                            // Generate all slots for logic later in JS, but pre-render today's filtered slots
                                            while($start <= $end):
                                                $timeLabel = date("h:i A", $start);
                                                $timeVal = date("H:i:s", $start);
                                                $isPast = ($start <= ($currentTime + 1800)); // Current time + 30 mins
                                                
                                                // Pre-render today's slots (only future ones)
                                                echo '<div class="col-4 time-slot-item" data-time-unix="'.$start.'" data-is-past="'.($isPast ? '1' : '0').'">';
                                                echo '<input type="radio" class="btn-check" name="time" id="time_'.$timeVal.'" value="'.$timeVal.'" required '.($isPast ? 'disabled' : '').'>';
                                                echo '<label class="btn btn-outline-primary w-100 py-2 small fw-bold '.($isPast ? 'opacity-25' : '').'" for="time_'.$timeVal.'" style="border-radius: 8px; border-width: 2px;">'.$timeLabel.'</label>';
                                                echo '</div>';
                                                
                                                $start = strtotime("+30 minutes", $start);
                                            endwhile; 
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-3 fw-bold h5 m-0" style="border-radius: 15px; background: #4f46e5; border: none; box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);">
                                    Book My Free Demo ⚡
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    // Logic to filter time slots based on selected date
    const dateSelectors = document.querySelectorAll('.date-selector');
    const todayStr = "<?= date('Y-m-d') ?>";

    dateSelectors.forEach(selector => {
        selector.addEventListener('change', function() {
            const selectedDate = this.value;
            const timeSlots = document.querySelectorAll('.time-slot-item');
            
            timeSlots.forEach(slot => {
                const isPast = slot.getAttribute('data-is-past') === '1';
                const input = slot.querySelector('input');
                const label = slot.querySelector('label');

                if (selectedDate === todayStr) {
                    // Filter past slots for today
                    if (isPast) {
                        slot.style.display = 'none';
                        input.disabled = true;
                    } else {
                        slot.style.display = 'block';
                        input.disabled = false;
                    }
                } else {
                    // Show all slots for future dates
                    slot.style.display = 'block';
                    input.disabled = false;
                    label.classList.remove('opacity-25');
                }
            });
        });
    });

    // Run once on load to ensure Today is filtered
    document.querySelector('.date-selector:checked').dispatchEvent(new Event('change'));
</script>

<style>
    .btn-check:checked + .btn-outline-primary {
        background-color: #4f46e5 !important;
        border-color: #4f46e5 !important;
        color: white !important;
        box-shadow: 0 4px 10px rgba(79, 70, 229, 0.2);
    }
    .btn-outline-primary {
        color: #4f46e5;
        border-color: #e2e8f0;
    }
    .btn-outline-primary:hover {
        background-color: #f5f3ff;
        border-color: #4f46e5;
        color: #4f46e5;
    }
    .custom-scroll::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scroll::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
        background: #c7d2fe;
        border-radius: 10px;
    }
</style>

<?= view('components/footer') ?>
