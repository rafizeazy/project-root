<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['username', 'email', 'password', 'role'];

    public function getUser($username, $password)
    {
        return $this->where(['username' => $username])
            ->where(['password' => md5($password)]) // Pastikan untuk menggunakan hashing yang sesuai
            ->first();
    }
}
