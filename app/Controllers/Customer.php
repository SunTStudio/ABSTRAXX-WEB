<?php

namespace App\Controllers;

class Customer extends BaseController
{
    protected $usersData;
    protected $monitoring;
    protected $adminData;
    protected $appointment;
    protected $fotografer;    
    protected $session;

    function __construct()
    {
    $this->usersData = new \App\Models\UsersData();
    $this->monitoring = new \App\Models\Monitoring();
    $this->appointment = new \App\Models\Appointment();
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

        if($monitoringValidation['update_monitoring'] == 0){
            $progres_monitoring0 = 'current-item';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 1) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = 'current-item';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 2) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = 'current-item';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 3) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = 'current-item';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 4) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = 'current-item';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 5) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = 'current-item';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 6) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = 'current-item';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 7) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = 'current-item';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 8) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = 'current-item';
            $progres_monitoring9 = ' ';
        }elseif ($monitoringValidation['update_monitoring'] == 9) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = 'current-item';
        }else{

        }

        $data = [
            "data_users" => $this->usersData->where('id_users', $id_users)->first(),
            "data_monitoring" => $this->monitoring->where('id_monitoring',$monitoringValidation['id_monitoring'])->first(),
            "data_fotografer" => $arr_fotografer->getResult(),
            "data_appointment" => $this->appointment->orderBy('id_appointment', 'DESC')->limit(2)->get()->getResult(),
            //
            "progres_monitoring0" => $progres_monitoring0,
            "progres_monitoring1" => $progres_monitoring1,
            "progres_monitoring2" => $progres_monitoring2,
            "progres_monitoring3" => $progres_monitoring3,
            "progres_monitoring4" => $progres_monitoring4,
            "progres_monitoring5" => $progres_monitoring5,
            "progres_monitoring6" => $progres_monitoring6,
            "progres_monitoring7" => $progres_monitoring7,
            "progres_monitoring8" => $progres_monitoring8,
            "progres_monitoring9" => $progres_monitoring9,
            //
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
