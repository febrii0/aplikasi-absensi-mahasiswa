<?php

namespace App\Controllers;

use App\models\MahasiswaModel;
use App\models\AbsensiModel;
use CodeIgniter\Controller;


class Dashboard extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();
        $absensiModel = new AbsensiModel();
        $jumlahMahasiswa = $mahasiswaModel->countAll();
        $jumlahMahasiswaHadir = $absensiModel->countHadir();
        $jumlahMahasiswaSakit = $absensiModel->CountSakit();
        $jumlahMahasiswaAlpa = $absensiModel->CountAlpa();
        $jumlahMahasiswaIzin = $absensiModel->CountIzin();


        $data = [
            'jumlahMahasiswa' => $jumlahMahasiswa,
            'jumlahMahasiswaHadir' => $jumlahMahasiswaHadir,
            'jumlahMahasiswaSakit' => $jumlahMahasiswaSakit,
            'jumlahMahasiswaAlpa' => $jumlahMahasiswaAlpa,
            'jumlahMahasiswaIzin' => $jumlahMahasiswaIzin,
        ];

        return view('home/dashboard', $data);
    }
    public function Home()
    {
        $mMahasiswa = new MahasiswaModel();
        $data['jumlahMahasiswaHadir'] = $mMahasiswa->getJumlahMahasiswaHadir(); // Mengambil jumlah mahasiswa yang hadir dari Model

        return view('home/dashboard', $data);
    }
}



