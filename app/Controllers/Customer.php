<?php

namespace App\Controllers;

class Customer extends BaseController
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
        $id_users = $this->session->get('id_usersSession');
        $data = [
            "data_users" => $this->usersData->where('id_users', $id_users)->first(),
            "title" => "Profil Anda",
        ];
        return view('Customers/ProfilePage/profileCus',$data);
    }
    public function setting()
    {
        $data = [
            "title" => "Setting Profile",
        ];
        return view('Customers/ProfilePage/settingCus',$data);
    }

    public function unduh()
    {
        $data = [
            "title" => "File Anda",
        ];
        return view('Customers/ProfilePage/unduhFile',$data);
    }
}
