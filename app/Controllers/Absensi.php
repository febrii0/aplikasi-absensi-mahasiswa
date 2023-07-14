<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\AbsensiModel;
use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use App\Models\StatusModel;
use App\Models\AbsenModel;

class Absensi extends BaseController
{
    protected $absensi;
    protected $kelas;
    protected $mahasiswa;
    protected $status;
    protected $absen;

    public function __construct()
    {
        //step 4
        $this->absensi = new AbsensiModel();
        $this->kelas = new KelasModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->status = new StatusModel();
        $this->absen = new AbsenModel();
    }
    public function index()
    {
        // $data['absensi'] = $this->absensi->findAll();
        // return view('absensi/index', $data);
    }

    public function absen()
    {
        $data['kelas'] = $this->kelas->getAllData();
        $data['mahasiswa'] = $this->mahasiswa->getAllData();
        $data['absen'] = $this->absen->getAllData();
        // return view("absensi/isiabsen", $data);
        return view("absensi/data_absen", $data);
    }

    public function insertabsen()
    {
        $data['kelas'] = $this->kelas->getAllData();
        $data['mahasiswa'] = $this->mahasiswa->getAllData();
        $data['absen'] = $this->absen->getAllData();
        return view("absensi/isiabsen", $data);
    }

    public function add()
    {
        $data["data_mhs"] = $this->mahasiswa->getAllData();
        $data["errors"] = session('errors');
        return view("mahasiswa/add", $data);
    }

    public function addAbsensi()
    {

        $validation = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Kelas harus diisi.'
                ]
            ],
            'id_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Mahasiswa harus diisi.'
                ]
            ],
            'absen' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom tanggal harus diisi.'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Status harus diisi.'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'id_kelas' => $this->request->getPost('id_kelas'),
            'absen' => $this->request->getPost('absen'),
            'tanggal' => $this->request->getPost('tanggal'),
        ];

        $this->absensi->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/absensi');
    }
    // public function dataAbsen()
    // {
    //     $data['data_absen'] = $this->absen->dataAbsen();
    //     return view("absensi/data_absen", $data);
    // }

    // public function dataAbsenn()
    // {
    //     $mhs = new AbsenModel();

    //     $data = [
    //         'nama' => $this->request->getPost('nama'),
    //         'id_kelas' => $this->request->getPost('id_kelas'),
    //         'id' => $this->request->getPost('id'),
    //         'tanggal' => $this->request->getPost('tanggal'),
    //     ];

    //     if ($mhs->save($data)) {
    //         session()->setFlashdata('success', 'Data berhasil disimpan.');
    //     } else {
    //         session()->setFlashdata('error', 'Gagal menyimpan data.');
    //     }

    //     return redirect()->to('/absensi/absen');
    // }

    public function dataAbsen()
    {
        $mhs = new AbsenModel();

        $nama = $this->request->getPost('nama');
        $id_kelas = $this->request->getPost('id_kelas');
        $id = $this->request->getPost('id');
        $tanggal = $this->request->getPost('tanggal');

        // Pengecekan data yang diperlukan sebelum penyimpanan
        if ($nama && $id_kelas && $id && $tanggal) {
            $data = [
                'nama' => $nama,
                'id_kelas' => $id_kelas,
                'id' => $id,
                'tanggal' => $tanggal,
            ];

            if ($mhs->save($data)) {
                session()->setFlashdata('success', 'Data berhasil disimpan.');
            } else {
                session()->setFlashdata('error', 'Gagal menyimpan data.');
            }
        } else {
            session()->setFlashdata('error', 'Gagal menyimpan data. Data tidak lengkap.');
        }

        return redirect()->to('/absensi/absen');
    }

}