<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table                = 'absensi';
    protected $primarykey           = 'id_absen';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];

   public function getAbsensi() {
    $data = [
        [
            "tanggal"       => "10 Juli 2023",
            "matkul"        => "Pemrograman Framework",
            "status"        => "Hadir"
        ],
        [
            "tanggal"       => "10 Juli 2023",
            "matkul"        => "Pemrograman Framework",
            "status"        => "Alpa"
        ],
        [
            "tanggal"       => "10 Juli 2023",
            "matkul"        => "Pemrograman Framework",
            "status"        => "Ijin"
        ],
        [
            "tanggal"       => "10 Juli 2023",
            "matkul"        => "Pemrograman Framework",
            "status"        => "Sakit"
        ]
    ];
    return $data;
   }
   public function getAllData()
   {
    return $this->findAll();
   }
}
