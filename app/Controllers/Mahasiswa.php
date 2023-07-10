<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;
    //buat fungsi construct untuk inisiasi class model
    public function __construct()
    {
        $this -> mahasiswa = new MahasiswaModel();
    }
    public function index()
    {
        $data['data_mahasiswa']=($this->mahasiswa->getMahasiswa());
        return view('user/data_mhs');
    }
    public function all(){
        $data['data_mahasiswa']=($this->mahasiswa->getAllData());
        return view("user/data_mhs", $data);
    }

}
