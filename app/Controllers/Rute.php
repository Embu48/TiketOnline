<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TiketModel;

class Rute extends BaseController
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
        $model1 = new TiketModel();
        $data = [];
        $dataA['data1'] = $model1->getTiket();
        $session = session();
        if (session()->get('logged_in')) {
            if (session()->get('role') == '2') {
                return view('/home/dashboard-u', $data);
            } else {
                echo view('Home/rute', $dataA);
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function admin()
	{  
        return view('/home/admin');
    }
    
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'transport'          => 'required',
            'jenis'         => 'required',
            'asal'         => 'required',
            'tujuan'         => 'required',
            'harga'         => 'required|integer',
            'tanggal'         => 'required',
            'jam'         => 'required',
        ];
         
        if($this->validate($rules)){
            $model = new TiketModel();
            $data = [
                'transport'     => $this->request->getVar('transport'),
                'jenis_transportasi'    => $this->request->getVar('jenis'),
                'asal'    => $this->request->getVar('asal'),
                'tujuan'    => $this->request->getVar('tujuan'),
                'harga'    => $this->request->getVar('harga'),
                'tanggal_berangkat'    => $this->request->getVar('tanggal'),
                'jam_berangkat'    => $this->request->getVar('jam'),
                'status' => 'Tersedia'
            ];
            $model->save($data);
            return redirect()->to('/rute');
        }else{
            $data['validation'] = $this->validator;
            return view('/home/dashboard-a');
        }
         
    }
    public function Tutup($id)
    {
        $model = new TiketModel();
        $data = [
            'status' => 'Tutup'
        ];
        $ubah = $model->updateTiket($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Rute')); 
        }

    } 

    public function Sedia($id)
    {
        $model = new TiketModel();
        $data = [
            'status' => 'Tersedia'
        ];
        $ubah = $model->updateTiket($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Rute')); 
        }

    } 

    public function Hapus($id)
    {
        $model = new TiketModel();
        $hapus = $model->deleteTiket($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Rute'));
        }
    } 

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
