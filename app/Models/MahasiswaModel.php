<?php
namespace App\Models;
use CodeIgniter\Model;
class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mhs';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['npm', 'nama', 'kelas'];
    public function getMahasiswa(){
        $data= [
        [
            "npm" => "21753047",
            "nama_mhs" => "Dwi Ellya",
            "email" => "dwie2Gmail.com",
            "id_kelas" => " B ",
        ],
        [
            "npm" => "21753088",
            "nama_mhs" => "Alifia Rahmanita",
            "email" => "aliff@gmail.com",
            "id_kelas" => " B ",
        ]
        ];
        return $data;
    }
    public function totalMahasiswa()
    {
        // $query = $this->db->table('mahasiswa');
        // $query = $this->db->table('mahasiswa')
        //     ->select("mahasiswa.*, kelas.kelas")
        //     ->join("kelas", "kelas.id_kelas = mahasiswa.id_kelas");
        return $this->findAll();
    }

    public function countMahasiswa()
    {
        // Kode untuk menghitung jumlah mahasiswa
        // Misalnya, Anda dapat menggunakan query builder untuk mengambil jumlah mahasiswa dari tabel mahasiswa
        return $this->countAllResults();
    }


    //digunakan untuk mengambil semua data dari tabel
    public function getAllData()
    { 
       return $this-> findAll();
    }
    public function countAll()
    {
        return $this->countAllResults();
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
    
}



