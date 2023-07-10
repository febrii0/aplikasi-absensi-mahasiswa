<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primarykey = 'id_kelas';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id_kelas', 'nama_kelas'];
    public function getKelas()
    {
        $data =
            [
                [
                    "nama_kelas" => "A"
                ],
                [
                    "nama_kelas" => "B"
                ],
                [
                    "nama_kelas" => "C"
                ]
            ];
        return $data;
    }

}