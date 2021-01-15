<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TransaksiModel;


class Mybook extends BaseController
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
            'validation' => \Config\Services::validation()
        ];

       if (session()->get('logged_in')) {
            return redirect()->to('/home');
        } else {
            return view('/startup/login', $data);
        }
    }

    public function mybook()
    {
        $model1 = new TransaksiModel();
        $data = [];
        $data['data1'] = $model1->getTransaksi();       
        return view('home/mybook', $data);
    }

}