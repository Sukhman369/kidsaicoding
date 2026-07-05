<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseOutcomeModel extends Model
{
    protected $table            = 'course_outcomes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['course_id', 'outcome_text'];
}
