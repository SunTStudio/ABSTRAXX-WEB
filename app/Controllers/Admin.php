<?php

namespace App\Controllers;

class Admin extends BaseController
{

    protected $session;
    protected $monitoring;
    protected $usersData;
    protected $adminData;
    protected $fotografer;
    protected $appointment;
    function __construct()
    {
    $this->usersData = new \App\Models\UsersData();
    $this->adminData = new \App\Models\AdminData();
    $this->fotografer = new \App\Models\Fotografer();
    $this->monitoring = new \App\Models\Monitoring();
    $this->appointment = new \App\Models\Appointment();
    $this->session = \Config\Services::session();
    }

    public function Users()
    {
        $arr_users = $this->usersData->query('SELECT * FROM `users`');

        $data = [
            "title" => "Users",
            "dataUsers" => $arr_users->getResult(),
        ];
        return view('Admin/Users/users',$data);
    }

    public function Input()
    {
        $default_id = isset($_GET['default_id'])?$_GET['default_id']:'';
        $default_nama = isset($_GET['default_nama'])?$_GET['default_nama']:' ';
        $default_email = isset($_GET['default_email'])?$_GET['default_email']:' ';
        $default_notelp = isset($_GET['default_notelp'])?$_GET['default_notelp']:' ';
        $default_tanggal = isset($_GET['default_tanggal'])?$_GET['default_tanggal']:' ';
        $default_detail = isset($_GET['default_detail'])?$_GET['default_detail']:' ';
        $default_alamat = isset($_GET['default_alamat'])?$_GET['default_alamat']:' ';

        $data = [
            'title' => 'Input Data',
            'default_id' => $default_id,
            'default_nama' => $default_nama,
            'default_email' => $default_email,
            'default_notelp' => $default_notelp,
            'default_tanggal' => $default_tanggal,
            'default_detail' => $default_detail,
            'default_alamat' => $default_alamat,
        ];
        return view('Admin/InputData/inputdata',$data);
    }

    public function InputData()
    {
        $id_users = $_GET['id_users'];
        $nama_users = $this->request->getGet('nama_users');
        $email_users = $this->request->getGet('email_users');
        $notelp_users = $this->request->getGet('notelp_users');
        $tanggal_pesan = $this->request->getGet('tanggal_pesan');
        $detail_users = $this->request->getGet('detail_users');
        $alamat_users = $this->request->getGet('alamat_users');

        $id_users_pk = $this->request->getGet('id_users_pk');
 
        $users_baru = [
            'nama_users' => $nama_users,
            'email_users' => $email_users,
            'notelp_users' => $notelp_users,
            'tanggal_pesan' => $tanggal_pesan,
            'detail_users' => $detail_users,
            'alamat_users' => $alamat_users,
            'id_users' => $id_users_pk,
        ];

        if($id_users_pk == ''){
            $this->usersData->insert($users_baru);
        }else{
            $this->usersData->update($id_users_pk,$users_baru);
        }

        return redirect()->to('Admin/Users/users');
    }
    
    public function hapusData()
    {
        $id = $this->request->getGet('id_users');
        $users_Data = $this->usersData->delete($id);
        return redirect()->to('Admin/Users/users');
    }

    public function ubahData()
    {
        $id = $this->request->getGet('id_users');
        
        $data_users = $this->usersData->where('id_users',$id)->first();
        $default_id = $data_users['id_users'];
        $default_nama = $data_users['nama_users'];
        $default_email = $data_users['email_users'];
        $default_notelp = $data_users['notelp_users'];
        $default_tanggal = $data_users['tanggal_pesan'];
        $default_detail = $data_users['detail_users'];
        $default_alamat = $data_users['alamat_users'];

        $data_view = [
            'title' => 'Ubah Data',
            'default_id' => $default_id,
            'default_nama' => $default_nama,
            'default_email' => $default_email,
            'default_notelp' => $default_notelp,
            'default_tanggal' => $default_tanggal, 
            'default_detail' => $default_detail,
            'default_alamat' => $default_alamat,
        ];
        
       return view('Admin/InputData/inputdata',$data_view);
    }

    public function appointment()
    {
        $arr_appointment = $this->appointment->query('SELECT * FROM `appointment`');

        $data = [
            "title" => "Appointment",
            "dataAppointment" => $arr_appointment->getResult(),
        ];
        return view('Admin/Appointment/appointment',$data);
    }
 
    public function appointmentBaru()
    {
        $arr_users = $this->usersData->query('SELECT * FROM `users`');
        $arr_fotografer = $this->fotografer->query('SELECT * FROM `fotografer`');
        
        $default_id = isset($_GET['default_id'])?$_GET['default_id']:'';
        $default_koor = isset($_GET['default_koor'])?$_GET['default_koor']:' ';
        $default_tanggal = isset($_GET['default_tanggal'])?$_GET['default_tanggal']:' ';
        $default_users = isset($_GET['default_users'])?$_GET['default_users']:' ';
        $default_notelp = isset($_GET['default_notelp'])?$_GET['default_notelp']:' ';
        $default_keterangan = isset($_GET['default_keterangan'])?$_GET['default_keterangan']:' ';
        $default_tempat = isset($_GET['default_tempat'])?$_GET['default_tempat']:' ';
        $default_status = isset($_GET['default_status'])?$_GET['default_status']:' ';
        

        $data = [
            "title" => "Appointment Baru",
            "data_users" => $arr_users->getResult(),
            "data_fotografer" => $arr_fotografer->getResult(),
            'default_id' => $default_id,
            'default_koor' => $default_koor,
            'default_tanggal' => $default_tanggal,
            'default_users' => $default_users,
            'default_notelp' => $default_notelp,
            'default_keterangan' => $default_keterangan,
            'default_tempat' => $default_tempat,
            'default_status' => $default_status,
        ];

        return view('Admin/Appointment/appointmentBaru',$data);
    }

    public function prosesAppointment()
    {
        // $id_appointment = $this->request->getGet('nama_users');
        $id_appointment = $_GET['id_appointment'];
        $nama_fotografer = $this->request->getGet('nama_fotografer');
        $tanggal_appointment = $this->request->getGet('tanggal_appointment');
        $nama_users = $this->request->getGet('nama_users');
        $notelp_koor = $this->request->getGet('notelp_koor');
        $keterangan_appointment = $this->request->getGet('keterangan_appointment');
        $tempat_appointment = $this->request->getGet('tempat_appointment');
        $status_appointment = $this->request->getGet('status_appointment');

        $id_appointment_pk = $this->request->getGet('id_appointment_pk');

        $appointment_baru = [
            'nama_fotografer' => $nama_fotografer,
            'tanggal_appointment' => $tanggal_appointment,
            'nama_users' => $nama_users,
            'notelp_koor' => $notelp_koor,
            'keterangan_appointment' => $keterangan_appointment,
            'tempat_appointment' => $tempat_appointment,
            'status_appointment' => $status_appointment,
            'id_appointment' => $id_appointment_pk,
        ];

        
        if($id_appointment_pk == ''){
            $this->appointment->insert($appointment_baru);
        }else{
            $this->appointment->update($id_appointment_pk,$appointment_baru);
        }

        return redirect()->to('Admin/Appointment/appointment');
    }

    public function ubahAppointment()
    {
        $arr_users = $this->usersData->query('SELECT * FROM `users`');
        $arr_fotografer = $this->fotografer->query('SELECT * FROM `fotografer`');
        
        $id = $this->request->getGet('id_appointment');
        
        $data_appointment = $this->appointment->where('id_appointment',$id)->first();
        $default_id = $data_appointment['id_appointment'];
        $default_koor = $data_appointment['nama_fotografer'];
        $default_tanggal = $data_appointment['tanggal_appointment'];
        $default_users = $data_appointment['nama_users'];
        $default_notelp = $data_appointment['notelp_koor'];
        $default_keterangan = $data_appointment['keterangan_appointment'];
        $default_tempat = $data_appointment['tempat_appointment'];
        $default_status = $data_appointment['status_appointment'];

        $data_view = [
            "data_users" => $arr_users->getResult(),
            "data_fotografer" => $arr_fotografer->getResult(),
            'title' => 'Ubah Data Appointment',
            'default_id' => $default_id,
            'default_koor' => $default_koor,
            'default_tanggal' => $default_tanggal,
            'default_users' => $default_users,
            'default_notelp' => $default_notelp,
            'default_keterangan' => $default_keterangan,
            'default_tempat' => $default_tempat,
            'default_status' => $default_status,
        ];
        
       return view('Admin/Appointment/appointmentBaru',$data_view);
    }

    public function hapusAppointment()
    {
        $id = $this->request->getGet('id_appointment');
        $users_Data = $this->appointment->delete($id);
        return redirect()->to('Admin/Appointment/appointment');
    }
    
    public function upload()
    {
        $data = [
            "title" => "Upload",
        ];
        return view('Admin/InputData/modal',$data);
    }
    
    public function setting()
    {
        $data = [
            "title" => "Setting",
        ];
        return view('Admin/Setting/setting',$data);
    }

    public function monitoring()
    {
        $arr_monitoring = $this->monitoring->query('SELECT * FROM `monitoring`');
        $data = [
            "data_monitoring" => $arr_monitoring->getResult(),
            "title" => "Monitoring",
        ];
        return view('Admin/Monitoring/monitoring',$data);
    }

    public function monitoringUpdate()
    {
        $data = [
            "title" => "Monitoring Update",
        ];
        return view('Admin/Monitoring/monitoringUpdate',$data);
    }
    public function dashboard()
    {
        $id_admin = $this->session->get('id_adminSession');


        $data = [
            "data_admin" => $this->adminData->where('id_admin',$id_admin)->first(),
            "data_monitoring" => $this->monitoring->orderBy('id_monitoring', 'DESC')->limit(2)->get()->getResult(),
            "data_appointment" => $this->appointment->orderBy('id_appointment', 'DESC')->limit(2)->get()->getResult(),
            "title" => "Dashboard",
        ];
        return view('Admin/Dashboard/dashboard',$data);
    }

    public function profile()
    {
        $data = [
            "title" => "profile",
        ];
        return view('Admin/Profile/profile',$data);
    }
    
}
