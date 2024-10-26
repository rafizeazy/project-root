<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table      = 'account';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'password', 'role_id'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
