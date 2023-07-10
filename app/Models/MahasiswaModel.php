<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $allowFields = [];

    public function getMahasiswa(){
        $data= [
        [
            "npm" => "21753047",
            "nama_mhs" => "Dwi Ellya",
            "email" => "dwie2Gmail.com",
            "id_kelas" => " B ",
        ],
        [
            "npm" => "21753088",
            "nama_mhs" => "Alifia Rahmanita",
            "email" => "aliff@gmail.com",
            "id_kelas" => " B ",
        ]
        ];
        return $data;
    
    }

    //digunakan untuk mengambil semua data dari tabel
    public function getAllData()
    { 
       return $this-> findAll();
    }
    
}



