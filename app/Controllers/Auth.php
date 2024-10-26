<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->getUser($username, $password);

        if ($user) {
            session()->set('username', $user['username']);
            session()->set('role', $user['role']);
            return redirect()->to('/dashboard');
        } else {
            session()->setFlashdata('error', 'Username atau password salah');
            return redirect()->to('/login');
        }
    }

    public function register()
    {
        return view('auth/register');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
