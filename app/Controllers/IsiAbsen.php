<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IsiAbsen extends BaseController
{
    public function index()
    {
        return view('isiabsen/add_absen');
    }
}
