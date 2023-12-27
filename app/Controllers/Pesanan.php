<?php

namespace App\Controllers;

class Pesanan extends BaseController
{

    protected $session;
    protected $usersData;
    protected $adminData;
    protected $monitoring;
    protected $appointment;
    protected $fotografer;    
    function __construct()
    {
    $this->usersData = new \App\Models\UsersData();
    $this->adminData = new \App\Models\AdminData();
    $this->monitoring = new \App\Models\Monitoring();
    $this->appointment = new \App\Models\Appointment();
    $this->fotografer = new \App\Models\Fotografer();
    $this->session = \Config\Services::session();
    }


    public function pesananBaru()
    {
        $data = [
            "title" => "Pesanan Baru",
        ];
        return view('Customers/Pesanan/pesananBaru',$data);
    }

    public function prosesDataPesananBaru()
    {
        $id_users = $this->session->get('id_usersSession');
        $nama_users = $this->request->getGet('nama_users');
        $email_users = $this->request->getGet('email_users');
        $notelp_users = $this->request->getGet('notelp_users');
        $tanggal_pesan = $this->request->getGet('tanggal_pesan');
        $lokasi_users = $this->request->getGet('lokasi_users');
        $detail_users = $this->request->getGet('detail_users');
        
        $data_monitoring = [
            'id_users' => $id_users,
            'nama_users' => $nama_users,
            'email_users' => $email_users,
            'notelp_users' => $notelp_users,
            'tanggal_pesan' => $tanggal_pesan,
            'lokasi_users' => $lokasi_users,
            'detail_users' => $detail_users,
            'update_monitoring' => '1',
            'progress_monitoring' => 'Proses Input Data',
        ];

        $data_users = [
            'nama_users' => $nama_users,
            'email_users' => $email_users,
            'notelp_users' => $notelp_users,
            'tanggal_pesan' => $tanggal_pesan,
            'alamat_users' => $lokasi_users,
        ];

        $this->monitoring->insert($data_monitoring);
        $this->usersData->update($id_users,$data_users);


        $data = [
            "title" => "Pilih Paket",
        ];
        return redirect()->to(base_url('Pesanan/pilihPaket'));
    }

    
    public function cekPesananBaru()
    {
        $id_monitoring = $this->session->get('id_monitoringSession');
        $monitoringValidation = $this->monitoring->where('id_monitoring',$id_monitoring)->first();
        
        if($monitoringValidation['update_monitoring'] == '1'){
            return redirect()->to(base_url('Pesanan/pilihPaket'));
        }elseif ($monitoringValidation['update_monitoring'] == '2') {
            return redirect()->to(base_url('Pesanan/kontrak'));
        }elseif ($monitoringValidation['update_monitoring'] == '3') {
            return redirect()->to(base_url('Pesanan/downPayment'));
        }elseif ($monitoringValidation['update_monitoring'] == '4') {
            return redirect()->to(base_url('Pesanan/survei'));
        }elseif ($monitoringValidation['update_monitoring'] == '8') {
            return redirect()->to(base_url('Pesanan/fullPayment'));
        }else{
            return redirect()->to(base_url('Pesanan/pesananBaru'));
        }
    }

    public function pilihPaket()
    {
        $id_users = $this->session->get('id_usersSession');
        $userValidation = $this->usersData->where('id_users', $id_users)->first();
        $monitoringValidation = $this->monitoring->where('id_users',$userValidation['id_users'])->first();
        $this->session->set('id_monitoringSession', $monitoringValidation['id_monitoring']);
        $data = [
            "title" => "Pilih Paket",
        ];
        return view('Customers/Pesanan/pilihPaket',$data);
    }

    public function prosesPilihPaket()
    {
        $id_monitoring = $this->session->get('id_monitoringSession');
        $id_users = $this->session->get('id_usersSession');
        $update_monitoring = $this->request->getGet('update_monitoring');
        $detail_users = $this->request->getGet('detail_users');
        $dataMonitoring = [
            'update_monitoring' => $update_monitoring,
        ];

        $dataUsers = [
            'detail_users' => $detail_users,       
        ];
        $this->monitoring->update($id_monitoring,$dataMonitoring);
        $this->usersData->update($id_users,$dataUsers);



        return redirect()->to(base_url('Pesanan/kontrak'));
    }

        public function kontrak()
    {
        $data = [
            "title" => "kontrak",
        ];
        return view('Customers/Pesanan/kontrak',$data);
    }

    public function downPayment()
    {
        $id_monitoring = $this->session->get('id_monitoringSession');
        $id_users = $this->session->get('id_usersSession');
        $update_monitoring = $this->request->getGet('update_monitoring');
        $kontrak_users = $this->request->getGet('kontrak_users');
        $dataMonitoring = [
            'update_monitoring' => $update_monitoring,
        ];

        $dataUsers = [
            'kontrak_users' => $kontrak_users,       
        ];
        $this->monitoring->update($id_monitoring,$dataMonitoring);
        $this->usersData->update($id_users,$dataUsers);

        $arr_fotografer = $this->fotografer->query('SELECT * FROM `fotografer`');

        $data = [
            "data_users" => $this->usersData->where('id_users', $id_users)->first(),
            "data_monitoring" => $this->monitoring->where('id_monitoring',$id_monitoring)->first(),
            "data_fotografer" => $arr_fotografer->getResult(),
            "title" => "Pembayaran DP",
        ];
        return view('Customers/Pesanan/downPayment',$data);
    }

    public function prosesDownPayment()
    {
        $id_monitoring = $this->session->get('id_monitoringSession');
        $id_users = $this->session->get('id_usersSession');
        $update_monitoring = $this->request->getGet('update_monitoring');
        $userValidation = $this->usersData->where('id_users', $id_users)->first();

        $dataMonitoring = [
            'update_monitoring' => $update_monitoring,
        ];

        if($userValidation['detail_users'] == 'paket satu'){
            $dp_users = 1202000;
        }elseif ($userValidation['detail_users'] == 'paket dua') {
            $dp_users = 2002000;
        }elseif ($userValidation['detail_users'] == 'paket tiga') {
            $dp_users = 2802000;
        }else{

        }

        $dataUsers = [
            'dp_users' => $dp_users,       
        ];
        $this->monitoring->update($id_monitoring,$dataMonitoring);
        $this->usersData->update($id_users,$dataUsers);

        $data = [
            "data_users" => $userValidation,
            "title" => "Profil Anda",
        ];

        return view('Customers/ProfilePage/profileCus',$data);
    }

    public function survei()
    {
        $data = [
            "title" => "Survei",
        ];
        return view('Customers/Survei/survei',$data);
    }

    public function fullPayment()
    {
        $data = [
            "title" => "Pelunasan DP",
        ];
        return view('Customers/Pesanan/fullPayment',$data);
    }
}
