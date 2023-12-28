<?php

namespace App\Controllers;

class Login extends BaseController
{

    protected $usersData;
    protected $adminData;
    protected $session;

    function __construct()
    {
    $this->usersData = new \App\Models\UsersData();
    $this->adminData = new \App\Models\AdminData();
    $this->session = \Config\Services::session();
    }

    public function index()
    {
        $session = session();
        if ($session->get('isLoggedIn')) {
            // Jika belum login, redirect ke halaman login
            $data = [
            "title" => "Home",
             ];
             return view('Customers/landingpage',$data);
        }

        if ($session->get('isLoggedAdminIn')) {
            // Jika belum login, redirect ke halaman login
            $data = [
            "title" => "Dashboard",
             ];
            return redirect()->to('/Admin/dashboard'); 
        }
        $data = [
            "title" => "Login",
             ];
            return view('Login/login',$data);

        
    }

    public function prosesLogin()
    {
        $users = $this->request->getPost('username');
        $pass = $this->request->getPost('password');

        $userValidation = $this->usersData->where('nama_users', $users)->first();
        $adminValidation = $this->adminData->where('nama_admin', $users)->first();
        if($userValidation){
            
            if($pass == $userValidation['password_users']){
                $this->session->set('isLoggedIn', true);
                $this->session->set('id_usersSession', $userValidation['id_users']);
                return redirect()->to('/home');
            }
           
        }

        if($adminValidation){
            
            if($pass == $adminValidation['password_admin']){
                $this->session->set('isLoggedAdminIn', true);
                $this->session->set('id_adminSession', $adminValidation['id_admin']);
                return redirect()->to('/admin');
            }
           
        }
        
        return redirect()->to('/')->with('error', 'Username atau password salah');

    }

    public function prosesLogout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function register()
    {
        $data = [
            "title" => "Buat Akun Baru",
        ];
        return view('Register/register',$data);
    }

    public function prosesRegister()
    {
        $nama_users = $this->request->getGet('nama_users');
        $email_users = $this->request->getGet('email_users');
        $notelp_users = $this->request->getGet('notelp_users');
        $password_users = $this->request->getGet('password_users');

        $users_baru = [
            'nama_users' => $nama_users,
            'email_users' => $email_users,
            'notelp_users' => $notelp_users,
            'password_users' => $password_users,
        ];

        $this->usersData->insert($users_baru);

        return redirect()->to('/');
    }
}
