<?php

namespace App\Controllers;

class Customer extends BaseController
{
    protected $usersData;
    protected $monitoring;
    protected $adminData;
    protected $fotografer;    
    protected $session;

    function __construct()
    {
    $this->usersData = new \App\Models\UsersData();
    $this->monitoring = new \App\Models\Monitoring();
    $this->fotografer = new \App\Models\Fotografer();
    $this->adminData = new \App\Models\AdminData();
    $this->session = \Config\Services::session();
    }

    
    public function index()
    {
        $id_users = $this->session->get('id_usersSession');
        $userValidation = $this->usersData->where('id_users', $id_users)->first();
        $monitoringValidation = $this->monitoring->where('id_users',$userValidation['id_users'])->first();
        $this->session->set('id_monitoringSession', $monitoringValidation['id_monitoring']);
        $arr_fotografer = $this->fotografer->query('SELECT * FROM `fotografer`');

        $data = [
            "data_users" => $this->usersData->where('id_users', $id_users)->first(),
            "data_monitoring" => $this->monitoring->where('id_monitoring',$monitoringValidation['id_monitoring'])->first(),
            "data_fotografer" => $arr_fotografer->getResult(),
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
