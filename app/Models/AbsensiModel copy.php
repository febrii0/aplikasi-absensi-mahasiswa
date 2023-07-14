<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'status_kehadiran';
    protected $primarykey = 'id_absen';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['nama', 'npm', 'id_semester', 'tanggal'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getAbsensi()
    {
        $data = [
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Hadir"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Alpa"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Ijin"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Sakit"
            ]
        ];
        return $data;
    }
}