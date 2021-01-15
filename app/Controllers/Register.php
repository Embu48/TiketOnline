<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{

    public function __construct()
    {
        helper('form', 'url');
        $this->form_validation = \Config\Services::validation();
    }


    public function index()
    {
        $data = [];
        echo view('startup/login', $data);
    }
 
    public function save()
    {
        
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'username'      => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.username]',
            'password'      => 'required|min_length[3]|max_length[200]',
            'confpassword'  => 'required|matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'username'    => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($data);
            echo '<script>alert("Silahkan login untuk melanjutkan");window.location.href="'.base_url('/login').'";</script>';
            
        }else{
            $data['validation'] = $this->validator;
            echo '<script>alert("maaf, input yang anda masukkan terdapat data yang salah");window.location.href="'.base_url('/login').'";</script>';
        }
         
    }
 
}