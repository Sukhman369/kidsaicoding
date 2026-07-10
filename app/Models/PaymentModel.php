<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table            = 'payments';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id', 'course_id', 'amount', 
        'status', 'payment_method', 'transaction_id'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    /**
     * Get payments details with student and course joins
     */
    public function getPaymentsDetails()
    {
        return $this->select('payments.*, users.name as student_name, users.email as student_email, courses.title as course_title, courses.image_path as course_image')
                    ->join('users', 'users.id = payments.user_id')
                    ->join('courses', 'courses.id = payments.course_id')
                    ->orderBy('payments.created_at', 'DESC')
                    ->findAll();
    }
}
