<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id_mhs', 'npm', 'nama', 'email', 'id_kelas'];

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

    public function totalMahasiswa()
    {
        $query = $this->db->table('mahasiswa');
        $query = $this ->db->table('mahasiswa')
        ->select("mahasiswa.*, kelas.nama_kelas")
        ->join("kelas", "kelas.id_kelas = mahasiswa.id_kelas");
        return $query->get()->getResultArray();
    }

    //digunakan untuk mengambil semua data dari tabel
    public function getAllData()
    { 
       return $this-> findAll();
    }
    public function countAll()
    {
        return $this->countAllResults();
    }
}



