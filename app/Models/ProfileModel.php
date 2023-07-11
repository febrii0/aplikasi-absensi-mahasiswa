<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primarykey = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id_mhs', 'npm', 'nama', 'email', 'id_kelas'];
    public function getProfile()
    {
        $query = $this->db->table('mahasiswa');
        return $query->get()->getResultArray();
    }

}