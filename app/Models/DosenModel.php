<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primarykey = 'id_dosen';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id_dosen', 'nip', 'nama_dosen', 'email', 'id_matkul'];

    public function getDosen()
    {
        $data = [
            [
                "nip" => "198708142015042002",
                "nama_dosen" => "Agiska Ria Supriyatna, S.Si., M.T.I",
                "email" => "agiskaria@gmail.com",
                "matkul" => "Pemrograman SQL"
            ],
            [
                "nip" => "198002062005011002",
                "nama_dosen" => "Imam Asrowardi, S.Kom., M.Kom.",
                "email" => "imam@gmail.com",
                "matkul" => "Rancang Bangun Jaringan Komputer"
            ],
            [
                "nip" => "198408162009121004",
                "nama_dosen" => "Halim Fathoni, S.T., M.Sc.",
                "email" => "halimfathoni@gmail.com",
                "matkul" => "Teknik Penulisan Karya Ilmiah"
            ],
            [
                "nip" => "199010082022031005",
                "nama_dosen" => "Panji Andhika Pratomo, S. Kom., M.T.I",
                "email" => "panjiandhika@gmail.com",
                "matkul" => "Kecakapan Antar Personal"
            ]
        ];
        return $data;
    }
    public function getAllData()
    {
        return $this->findAll();
    }

    public function totalDosen()
    {
        $query = $this->db->table('dosen');
        $query = $this ->db->table('dosen')
        ->select("dosen.*, mata_kuliah.nama_matkul")
        ->join("mata_kuliah", "mata_kuliah.id_matkul = dosen.id_matkul");
        return $query->get()->getResultArray();
    }
}