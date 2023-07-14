<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\MahasiswaModel;
use App\Models\KelasModel;

class Mahasiswa extends BaseController
{
    //step 2
    protected $mahasiswa;
    protected $kelas;

    //step 3
    public function __construct()
    {
        //step 4
        $this->mahasiswa = new MahasiswaModel();
        $this->kelas = new KelasModel();
    }
    public function index()
    {
        //dd($this -> mahasiswa -> getMahasiswa());
        $data['data_mhs'] = $this->mahasiswa->totalMahasiswa();
        return view("user/data_mhs", $data);
    }
    public function all()
    {
        $data['data_mhs'] = $this->mahasiswa->totalMahasiswa();
        return view("user/data_mhs", $data);
    }

    public function add()
    {
        // $data["kelas"] = $this->kelas->getAllData();
        $data["data_mhs"] = $this->kelas->getAllData();
        $data["errors"] = session('errors');
        return view("mahasiswa/add", $data);
    }

    public function update($id_mhs)
    {
        $data["data_mhs"] = $this->mahasiswa->getAllData();
        $data["errors"] = session('errors');
        $data["data_mhs"] = $this->mahasiswa->getDataByID($id_mhs);
        return view("mahasiswa/editMahasiswa", $data);
    }

    public function editMahasiswa()
    {
        $id_mhs = $this->request->getPost('id_mhs');

        $data = [
            'nama' => $this->request->getPost('nama'),
            'npm' => $this->request->getPost('npm'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        // Menambahkan validasi untuk memastikan nilai 'nama' tidak null
        if (!empty($data['nama'])) {
            $this->mahasiswa->save($data);

            session()->setFlashdata('success', 'Data berhasil diperbarui.');
            return view('mahasiswa/edit', $data);
        } else {
            // Menangani kesalahan jika 'nama' bernilai null
            session()->setFlashdata('error', 'Kolom Nama tidak boleh kosong.');
            return view('mahasiswa/edit', $data);
        }
    }



    public function addMhs()
    {

        $data["kelas"] = $this->kelas->getAllData();
        $data["data_mhs"] = $this->kelas->getAllData();
        $data["errors"] = session('errors');
        return view("mahasiswa/add", $data);

    }



    // public function update($id)
    // {
    //     $decryptedId = decryptUrl($id);
    //     $data["semuaGenre"] = $this->Genre->getAllData();
    //     $data["errors"] = session('errors');
    //     $data["semuaFilm"] = $this->Film->getDataByID($decryptedId);
    //     return view("film/update", $data);
    // }

    //simpan data mahasiswa
    // public function store()
    // {


    //     $data = [
    //         'npm' => $this->request->getPost('npm'),
    //         'nama' => $this->request->getPost('nama'),
    //         'id_kelas' => $this->request->getPost('id_kelas'),
    //     ];

    //     $this->mahasiswa->save($data);

    //     session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
    //     return redirect()->to('/mahasiswa');
    // }

    public function addMahasiswa()
    {
        $mhs = new MahasiswaModel();

        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'kelas' => $this->request->getPost('kelas'),
        ];

        if ($mhs->simpanDataMahasiswa($data)) {
            session()->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            session()->setFlashdata('error', 'Gagal menyimpan data.');
        }

        return redirect()->to('/mahasiswa');
    }

    //delete
    public function destroy($id_mhs)
    {
        $this->mahasiswa->delete($id_mhs);
        session()->setFlashdata('success', 'Data berhasil dihapus.'); // tambahkan ini
        return redirect()->to('/mahasiswa');
    }
}