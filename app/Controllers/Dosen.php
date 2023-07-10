<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\DosenModel;

class Dosen extends BaseController
{
    //step 2
    protected $dosen;

    //step 3
    public function __construct()
    {
        //step 4
        $this -> dosen = new DosenModel();
    }
    public function index()
    {
        //dd($this -> dosen -> getDosen());
        $data['data_dosen'] = $this -> dosen -> totalDosen();
        return view("user/data_dosen", $data);
    }
    public function all()
    {
        dd($this->dosen->getAllData());
    }
}
