<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['npm', 'nama', 'kelas'];

    public function totalMahasiswa()
    {
        // $query = $this->db->table('mahasiswa');
        // $query = $this->db->table('mahasiswa')
        //     ->select("mahasiswa.*, kelas.kelas")
        //     ->join("kelas", "kelas.id_kelas = mahasiswa.id_kelas");
        return $this->findAll();
    }
    

    public function simpanDataMahasiswa($data)
    {
        $this->db->table($this->table, $data);
        return $this->insert($data);
    }

    public function getDataAddMhs()
    {
        $query = $this->db->table("mahasiswa");
        $query = $this->db->table("mahasiswa")
            ->select("mahasiswa.*")
            ->get();
        return $query->getResultArray();
    }

    public function getDataById($id_mhs)
    {
        return $this->find($id_mhs);
    }

    //digunakan untuk mengambil semua data dari tabel
    public function getAllData()
    {
        return $this->findAll();
    }
}