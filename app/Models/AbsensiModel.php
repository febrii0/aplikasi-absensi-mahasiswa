<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'absensi';
    protected $primarykey = 'id_absen';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id_absen', 'id_kelas', 'id_mhs', 'tanggal', 'id_status', 'id_matkul'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getAbsensi()
    {
        $query = $this->db->table('absensi');
        return $query->get()->getResultArray();
    }
}