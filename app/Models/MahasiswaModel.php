<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
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
    //Fungsi ini digunakan untuk mencari data berdasarkan ID
    public function getDataByID($id)
    {
        return $this->find($id);
    }
    //Fungsi ini digunakan untuk melakukan query dengan kondisi WHERE
    public function getDataBy($data)
    {
        return $this->where('genre', $data)->findAll();
    }
    //digunakan untuk mengurutkan hasil query berdasarkan kolom tertentu
    public function getOrderBy()
    {
        return $this->OrderBy('created_at', 'desc')->findAll();
    }
    //digunakan untuk membatasi jumlah data yang diambil dari tabel
    public function getLimit()
    {
        return $this->limit(5)->findAll();
    }

}



