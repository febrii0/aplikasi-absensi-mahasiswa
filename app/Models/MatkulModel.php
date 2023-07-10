<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table                = 'mata_kuliah';
    protected $primarykey           = 'id_matkul';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];

   public function getMatkul() {
    $data = [
        [
            "nama_matkul"       => "Pemrograman SQL",
            "kode_matkul"        => "PMI 1417",
            
        ],
        [
            "nama_matkul"       => "Pemrograman Web Framework",
            "kode_matkul"        => "PMI 1416",
        ],
        [
            "nama_matkul"       => "Kecakapan Antar Personal",
            "kode_matkul"        => "PMI 1415",
        ],
       
    ];
    return $data;
   }
   public function getAllData()
   {
    return $this->findAll();
   }
}
