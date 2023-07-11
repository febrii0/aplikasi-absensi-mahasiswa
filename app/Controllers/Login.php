<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('menu/login');
    }

    public function authenticate()
     {
   
         $NPM = $this->request->getPost('NPM');
         $password = $this->request->getPost('password');
         $validation = $this->validate([
            'NPM' => 'required|valid_NPM',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation) {
            return redirect()->to('/login')->withInput()->with('error', 'NPM dan password harus diisi.');
        }

        $userModel = new UserModel();
        $user = $userModel->where('NPM', $NPM)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->to('/login')->withInput()->with('error', 'NPM atau password salah.');
        }

        $session = session();
        $session->set('user_id', $user['id']);

        return redirect()->to('/dashboard');
    }

    public function logout()
    {
        $session = session();
        $session->remove('user_id');
        return redirect()->to('/login');
    }
}

