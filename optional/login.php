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
   
         $email = $this->request->getPost('email');
         $password = $this->request->getPost('password');
         $validation = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation) {
            return redirect()->to('/login')->withInput()->with('error', 'Email dan password harus diisi.');
        }

        $userModel = new ($userModel);
        $user = $userModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return redirect()->to('/login')->withInput()->with('error', 'Email atau password salah.');
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

