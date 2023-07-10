<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
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
}
