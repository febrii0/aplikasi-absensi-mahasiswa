<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\AbsensiModel;

class Absensi extends BaseController
{
    //step 2
    protected $absensi;

    //step 3
    public function __construct()
    {
        //step 4
        $this -> absensi = new AbsensiModel();
    }
    public function index()
    {
        //dd($this -> absensi -> getAbsensi());
        $data['data_absensi'] = $this -> absensi -> getAbsensi();
        return view("absensi/absen_mhs", $data);
    }
    public function all()
    {
        dd($this->absensi->getAllData());
    }
}
