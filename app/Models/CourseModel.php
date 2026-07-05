<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table            = 'courses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'title', 'slug', 'age_range', 'grade_range', 'num_lessons', 
        'num_activities', 'duration', 'description', 'badge', 
        'image_path', 'course_type', 'curriculum_url', 'status', 'order_index'
    ];

    // Dates
    protected $useTimestamps = false; // We use created_at in SQL but manual update is okay for simple CMS
}
