<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    //step 2
    protected $mahasiswa;

    //step 3
    public function __construct()
    {
        //step 4
        $this -> mahasiswa = new MahasiswaModel();
    }
    public function index()
    {
        //dd($this -> mahasiswa -> getMahasiswa());
        $data['data_mhs'] = $this -> mahasiswa -> totalMahasiswa();
        return view("user/data_mhs", $data);
    }
    public function all()
    {
        dd($this->mahasiswa->getAllData());
    }

    
}
