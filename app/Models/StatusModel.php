<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table                = 'status_kehadiran';
    protected $primarykey           = 'id_status';
    protected $useAutoIncrement     = true;
    protected $allowFields          = [];

    public function getStatus() {
        $data = [
            [
                "status"       => "Hadir"
            ],
            [
                "status"       => "Izin"
            ],
            [
                "status"       => "Sakit"
            ],
            [
                "status"       => "Alpa"
            ]
        ];
        return $data;
       }
       public function getAllData()
       {
        return $this->findAll();
       }

}
