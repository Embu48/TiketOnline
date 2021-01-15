<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username','name','password','role'];
    
    public function getUser($email)
    {
        return $this->where(['username' => $email])->first();
    }
}
