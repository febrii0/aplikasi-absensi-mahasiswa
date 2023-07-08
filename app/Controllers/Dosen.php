<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dosen extends BaseController
{
    public function index()
    {
        return view('user/data_dosen');
    }
}
