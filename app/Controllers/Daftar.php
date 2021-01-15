<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TiketModel;

class Daftar extends BaseController
{
    protected $userModel,$transModel,$tiketModel;
    
    public function __construct()
    {
        $this->userModel  = new UserModel();
        $this->transModel = new TransModel();
        $this->tiketModel = new TiketModel();
        

    }

	public function index()
    {
        $data = [
            'transportasi'  => $this->transModel->getTrans(),
            'tiket'         => $this->tiketModel->getTiket(),
            'validation'    => \Config\Services::validation()
        ];

       if (session()->get('logged_in')) {
            return redirect()->to('/home', $data);
        } else {
            return view('/startup/login', $data);
        }
    }

    public function pesawat()
    {
        $session = session();
        return view('list/pesawat');
    }

    public function kapal()
    {
        $session = session();
        return view('list/kapal');
    }

    public function kereta()
    {
        $session = session();
        return view('list/kereta');
    }

    public function bus()
    {
        $session = session();
        return view('list/bus');
    }
}
