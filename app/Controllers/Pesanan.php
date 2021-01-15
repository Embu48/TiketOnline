<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TiketModel;
use App\Models\TransaksiModel;

class Pesanan extends BaseController
{
    protected $userModel,$transModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->transModel = new TransModel();
        $this->tiketModel = new TiketModel();
    }

	public function index()
    {
        helper(['form']);
        $model1 = new TransaksiModel();
        $data = [];
        $dataA['data1'] = $model1->getTransaksi();
        $session = session();
        if (session()->get('logged_in')) {
            if (session()->get('role') == '2') {
                return view('/home/dashboard-u', $data);
            } else {
                echo view('Home/pesanan', $dataA);
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function admin()
	{  
        return view('/home/admin');
    }
    

    public function Valid($id)
    {
        $model = new TransaksiModel();
        $data = [
            'status' => 'Berhasil'
        ];
        $ubah = $model->updateTransaksi($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Pesanan')); 
        }

    } 

    public function Batal($id)
    {
        $model = new TransaksiModel();
        $data = [
            'status' => 'Batal'
        ];
        $ubah = $model->updateTransaksi($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Pesanan')); 
        }

    } 

    public function Hapus($id)
    {
        $model = new TransaksiModel();
        $hapus = $model->deleteTransaksi($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Pesanan'));
        }
    } 

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
