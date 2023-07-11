<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Nama tabel pengguna (sesuaikan dengan tabel yang Anda gunakan)
    protected $primaryKey = 'id'; // Nama kolom kunci utama (sesuaikan dengan kolom yang Anda gunakan)
    protected $allowedFields = ['NPM', 'password']; // Kolom yang diizinkan untuk diisi

    // Tambahkan fungsi untuk memvalidasi NPM
    public function valid_NPM(string $str, string &$error = null): bool
    {
        // Kode validasi NPM
        // Anda dapat menyesuaikan kode validasi sesuai dengan aturan NPM yang diinginkan.
    }
}
