<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];

        if (session()->get('logged_in')) {
            return redirect()->to('/home', $data);
        } else {
            return view('/startup/login', $data);
        }
        
    }

    public function auth()
    {
        $inputEmail = $this->request->getVar('username');
        $inputPassword = $this->request->getVar('password');
        $user = $this->userModel->getUser($inputEmail);
        if ($user) {
            $password = $user['password'];
            if ($inputPassword == $password) {
                $dataSession = [
                    'id'        => $user['id'],
                    'username'  => $user['username'],
                    'name'      => $user['name'],
                    'role'      => $user['role'],
                    'logged_in' => TRUE
                ];
                session()->set($dataSession);
                return redirect()->to('/home');
            } else {
                session()->setFlashdata('pesan', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('pesan', 'Username tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    //--------------------------------------------------------------------

}
