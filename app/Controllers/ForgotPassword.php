<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ForgotPassword extends BaseController
{
    public function index()
    {
        return view('menu/forgot_password');
    }
}
