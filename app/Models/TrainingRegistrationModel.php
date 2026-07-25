<?php

namespace App\Models;

use CodeIgniter\Model;

class TrainingRegistrationModel extends Model
{
    protected $table            = 'training_registrations';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'full_name',
        'email',
        'phone',
        'role',
        'experience_years',
        'program_type',
        'notes',
        'status'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
