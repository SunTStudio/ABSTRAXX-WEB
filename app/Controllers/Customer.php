<?php

namespace App\Controllers;

class Customer extends BaseController
{
    
    public function index()
    {
        $data = [
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
