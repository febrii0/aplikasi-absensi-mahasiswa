<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primarykey = 'id_kelas';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['kelas'];

    public function getAllData()
    {
        return $this->findAll();
    }
    public function getKelas()
    {
        $query = $this->db->table('kelas');
        return $query->get()->getResultArray();
        // $data =
        //     [
        //         [
        //             "nama_kelas" => "A"
        //         ],
        //         [
        //             "nama_kelas" => "B"
        //         ],
        //         [
        //             "nama_kelas" => "C"
        //         ]
        //     ];
        // return $data;
    }

}