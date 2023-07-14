<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table = 'absen';
    protected $primarykey = 'id';
    protected $useAutoIncrement = true;
    protected $allowdFields = ['id', 'nama', 'id_kelas', 'absen', 'tanggal'];

    public function getAllData()
    {
        return $this->findAll();
    }

    public function getAbsensi()
    {
        $data = [
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Hadir"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Alpa"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Ijin"
            ],
            [
                "tanggal" => "10 Juli 2023",
                "matkul" => "Pemrograman Framework",
                "status" => "Sakit"
            ]
        ];
        return $data;
    }
    public function countHadir()
    {
        return $this->where('absen', 'Hadir')->countAllResults();
    }
    public function countSakit()
    {
        return $this->where('absen', 'Sakit')->countAllResults();
    }
    public function countAlpa()
    {
        return $this->where('absen', 'Alpa')->countAllResults();
    }
    public function countIzin()
    {
        return $this->where('absen', 'Izin')->countAllResults();
    }

    public function dataAbsen()
    {
        $query = $this->db->table("absen")
            ->select("absen.*, mahasiswa.nama, kelas.kelas, status_kehadiran.absen")
            ->join("mahasiswa", "mahasiswa.id_mhs = absen.id_mhs")
            ->join("kelas", "kelas.id_kelas = absen.id_kelas")
            ->join("status_kehadiran","status_kehadiran.id_absen = absen.id_absen");
            return $query->get()->getResultArray();
       }
    
}