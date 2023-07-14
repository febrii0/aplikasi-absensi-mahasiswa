<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\KelasModel;

class Kelas extends BaseController
{
    //step 2
    protected $kelas;

    //step 3
    public function __construct()
    {
        //step 4
        $this -> kelas = new KelasModel();
    }
    public function index()
    {
        //dd($this -> kelas -> getKelas());
        $data['data_kelas'] = $this -> kelas -> getKelas();
        return view("kelas/data_kelas", $data);
    }

    public function add()
    {
        $data["data_kelas"] = $this->kelas->getAllData();
        $data["errors"] = session('errors');
        return view("kelas/add", $data);
    }

    public function store()
    {
        
    }
}