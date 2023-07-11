<?php

namespace App\Controllers;

use App\models\MahasiswaModel;


class Dashboard extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $jumlahMahasiswa = $mahasiswaModel->countAll();

        $data = [
            'jumlahMahasiswa' => $jumlahMahasiswa
        ];

        return view('home/dashboard', $data);
    }
}
