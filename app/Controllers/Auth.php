<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $Usermodel;

    public function __construct()
    {
        $this->Usermodel = new UserModel();
    }
    public function index()
    {
        $data['title'] = 'login|page';
        return view('Auth/v_login', $data);
    }

    public function registerpage()
    {

        $data['title'] = 'Register|Page';
        return view('Auth/v_register', $data);
    }

    public function userRegister()
    {
        $token = rand(1, 999999);
        $username = $this->request->getVar('username');
        if (!$this->validate([
            //rule validation
            'nama' => [
                'rules' => ['min_length[3]', 'alpha_space'],
                'errors' => [
                    'min_length' => 'mohon dengan nama lengkap, itu terlalu pendek',
                    'alpha_space' => 'format nama tidak sesuai, silahkan coba lagi'
                ]
            ],
            'username' => [
                'rules' => ['min_length[3]', 'is_unique[users.username]'],
                'errors' => [
                    'min_length' => 'username terlalu pendek',
                    'is_unique' => 'maaf username sudah terdaftar'
                ]
            ],
            'email' => [
                'rules' => ['valid_email', 'is_unique[users.email]'],
                'errors' => [
                    'valid_email' => 'maaf, email anda tidak sesuai',
                    'is_unique' => 'maaf, email anda telah terdaftar'
                ]
            ],
            'password' => [
                'rules' => ['min_length[6]'],
                'errors' => [
                    'min_length' => 'password terlalu pendek'
                ]
            ],
            'alamat' => [
                'rules' => ['min_length[6]'],
                'errors' => [
                    'min_length' => 'alamat terlalu pendek'
                ]
            ],
        ])) {
            //throwback if isn"t valid
            session()->setFlashdata('Caution', 'Maaf, Isian anda belum lengkap atau tidak sesuai, silahkan periksa isian anda');
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // //if true!
        // inserting data
        $this->Usermodel->insert([
            // $data = ([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat' => $this->request->getVar('alamat'),
            'role' => $this->request->getVar('role'),
            'token' => $token,
            'is_active' => 1
        ]);
        session()->setFlashdata('success', 'User Berhasil di registrasi, silahkan coba login');
        return redirect()->to('/');
    }
}
