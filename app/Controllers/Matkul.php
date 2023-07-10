<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\MatkulModel;

class Matkul extends BaseController
{
    //step 2
    protected $matkul;

    //step 3
    public function __construct()
    {
        //step 4
        $this -> matkul = new MatkulModel();
    }
    public function index()
    {
        //dd($this -> absensi -> getAbsensi());
        $data['data_matkul'] = $this -> matkul -> getMatkul();
        return view("matkul/matkul", $data);
    }
    public function all()
    {
        dd($this->matkul->getAllData());
    }
}
