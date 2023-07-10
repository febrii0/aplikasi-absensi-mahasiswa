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
            "id_kelas" => " B ",
            "email" => "dwie@gmail.com"
        ],
        [
            "npm" => "21753088",
            "nama_mhs" => "sgasjhgjh",
            "id_kelas" => " B ",
            "email" => "ahjgsahjdg"
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



