<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KelasModel;

class Kelas extends BaseController
{
     protected $kelas;

     public function __construct()
     {
         $this->kelas = new KelasModel();
     }
     public function index()
     {
         //dd($this -> kelas -> getKelas());
         $data['nama_kelas'] = $this -> kelas -> getKelas();
         return view("kelas/data_kelas", $data);
     }
}
