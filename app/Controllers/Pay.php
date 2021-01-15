<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pay extends BaseController
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

    public function pay()
    {
        return view('payment/pay');
    }

}
