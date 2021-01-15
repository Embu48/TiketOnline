<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TransModel;
use App\Models\TiketModel;

class Dashboard extends BaseController
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
        $model1 = new TransModel();
        $data = [];
        $dataA['data1'] = $model1->getTrans();
        $session = session();
        if (session()->get('logged_in')) {
            if (session()->get('role') == '2') {
                return view('/home/dashboard-u', $data);
            } else {
                echo view('Home/dashboard-a', $dataA);
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
            'nama'          => 'required',
            'jenis'         => 'required',
            'jumlah'         => 'required|integer',
        ];
         
        if($this->validate($rules)){
            $model = new TransModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'jenis_transportasi'    => $this->request->getVar('jenis'),
                'kursi'     => $this->request->getVar('jumlah'),
                'status' => 'Beroperasi'
            ];
            $model->save($data);
            return redirect()->to('/home');
        }else{
            $data['validation'] = $this->validator;
            return view('/home/dashboard-a');
        }
         
    }
    public function Berhenti($id)
    {
        $model = new TransModel();
        $data = [
            'status' => 'Berhenti'
        ];
        $ubah = $model->updateTrans($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Dashboard')); 
        }

    } 

    public function Operasi($id)
    {
        $model = new TransModel();
        $data = [
            'status' => 'Beroperasi'
        ];
        $ubah = $model->updateTrans($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Dashboard')); 
        }

    } 

    public function Hapus($id)
    {
        $model = new TransModel();
        $hapus = $model->deleteTrans($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Dashboard'));
        }
    } 

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
