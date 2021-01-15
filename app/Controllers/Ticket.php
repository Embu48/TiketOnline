<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TiketModel;
use App\Models\TransaksiModel;


class Ticket extends BaseController
{
    protected $userModel,$transModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->transModel = new TransModel();
    }

	public function index()
    {
        $data = [
            'transportasi' => $this->transModel->getTrans(),
            'validation' => \Config\Services::validation()
        ];

       if (session()->get('logged_in')) {
            return redirect()->to('/home', $data);
        } else {
            return view('/startup/login');
        }
    }

    public function pesawat()
    {
        helper(['form']);
        $model1 = new TiketModel();
        $data = [];
        $data['data1'] = $model1->getTiket();
        return view('ticket/pesawat', $data);
    }

    public function kapal()
    {
        helper(['form']);
        $model1 = new TiketModel();
        $data = [];
        $data['data1'] = $model1->getTiket();
        return view('ticket/kapal', $data);
    }

    public function kereta()
    {
        helper(['form']);
        $model1 = new TiketModel();
        $data = [];
        $data['data1'] = $model1->getTiket();
        return view('ticket/kereta', $data);
    }

    public function bus()
    {
        helper(['form']);
        $model1 = new TiketModel();
        $data = [];
        $data['data1'] = $model1->getTiket();
        return view('ticket/bus', $data);
    }
    public function pesan($travel)
    {
        $session = session();
        //include helper form
        //set rules validation form
         
            $model = new TransaksiModel();
            $data = [
                'user'     => $session->get('name'),
                'tiket'    => $travel,
                'status' => 'Proses'
            ];
            $model->save($data);
            return redirect()->to('/mybook');
         
    }
}
