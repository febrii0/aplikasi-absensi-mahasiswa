<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $table = 'absen';
    protected $primarykey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'id_kelas', 'absen','tanggal'];

    public function getAllData()
    {
        return $this->findAll();
    }
}