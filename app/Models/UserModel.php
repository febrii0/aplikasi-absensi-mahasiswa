<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
      protected $table             ='user';
      protected $primaryKey        ='id_user';
      protected $useAutoIncrement  = true;
      protected $allowedFields     = ['user_nama', 'user_email', 'user_pass'];

	public function get_data($email, $password)
	{
      return $this->db->table('users')
      ->where(array('user_email' => $email, 'user_pass' => $password))
      ->get()->getRowArray();
	}
      
}