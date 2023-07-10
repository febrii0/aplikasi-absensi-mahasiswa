<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
   public function getKelas() {
    $data = 
    [
        [
            "nama_kelas"       => "A"
        ],
        [
            "nama_kelas"       => "B"
        ],
        [
            "nama_kelas"       => "C"
        ]
    ];
    return $data;
   }
   
}