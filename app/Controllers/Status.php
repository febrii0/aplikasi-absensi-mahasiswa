<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\StatusModel;

class Status extends BaseController
{
    protected $status;

    public function __construct()
    {
        $this -> status = new StatusModel();
    }

    public function index()
    {
        //dd($this -> status -> getStatus());
        $data['data_status'] = $this -> status -> getStatus();
        return view("absensi/status", $data);
    }

    public function all()
    {
        dd($this->status->getAllData());
    }
}
