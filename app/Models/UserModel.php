<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nis', 'nisn', 'nama_siswa', 'tempat_lahir', 'tgl_lahir', 'jenis_kelamin', 'agama', 'status', 'foto'];

    //fungsi untuk menampilkan semua data dalam table
    public function getAllData()
    {
        return $this->findAll();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }
}