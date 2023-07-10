<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
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
}
