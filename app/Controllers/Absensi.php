<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\AbsensiModel;
use App\Models\KelasModel;
use App\Models\MahasiswaModel;
use App\Models\StatusModel;
use App\Models\MatkulModel;

class Absensi extends BaseController
{
    protected $absensi;
    protected $kelas;
    protected $mahasiswa;
    protected $status;
    protected $matkul;

    public function __construct()
    {
        //step 4
        $this->absensi = new AbsensiModel();
        $this->kelas = new KelasModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->status = new StatusModel();
        $this->matkul = new MatkulModel();
    }
    public function index()
    {
        $data['absensi'] = $this->absensi->findAll();
        return view('absensi/index', $data);
    }

    public function add_absen()
    {
        $data['kelas'] = $this->kelas->getAllData();
        $data['mahasiswa'] = $this->mahasiswa->getAllData();
        $data['status'] = $this->status->getAllData();
        $data['matkul'] = $this->matkul->getAllData();
        return view("absensi/index", $data);
    }

    public function addAbsensi()
    {

        $validation = $this->validate([
            'id_kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Kelas harus diisi.'
                ]
            ],
            'id_mhs' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Mahasiswa harus diisi.'
                ]
            ],
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom tanggal harus diisi.'
                ]
            ],
            'id_status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Status harus diisi.'
                ]
            ],
            'id_matkul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Mata Kuliah harus diisi.'
                ]
            ],

        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $data = [
            'id_kelas' => $this->request->getPost('id_kelas'),
            'id_mhs' => $this->request->getPost('id_mhs'),
            'id_status' => $this->request->getPost('id_status'),
            'id_matkul' => $this->request->getPost('id_matkul'),
        ];

        $this->absensi->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/absensi');
    }
}