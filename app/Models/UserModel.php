<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'password', 'role', 'status'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function login($email, $password)
    {
        $user = $this->where('email', $email)->first();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }

    public function loginByName($identity, $password)
    {
        $user = $this->groupStart()
                     ->where('name', $identity)
                     ->orWhere('email', $identity)
                     ->groupEnd()
                     ->first();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }
}
