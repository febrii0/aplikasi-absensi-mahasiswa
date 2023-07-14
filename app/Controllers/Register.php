<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\ProfileModel;

class Profile extends BaseController
{
    //step 2
    protected $profile;

    //step 3
    public function __construct()
    {
        //step 4
        $this->profile = new ProfileModel();
    }
    public function index()
    {
        $data['data_profile'] = $this->profile->getProfile();
        return view("profile/data_profile", $data);
    }
}