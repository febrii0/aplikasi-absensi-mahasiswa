<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'user_id';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['user_nama', 'user_email'];

    public function getProfile()
    {
        $query = $this->db->table('users');
        return $query->get()->getResultArray();
    }
}