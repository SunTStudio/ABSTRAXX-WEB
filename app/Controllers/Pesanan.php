<?php

namespace App\Controllers;

class Pesanan extends BaseController
{
    public function pesananBaru()
    {
        $data = [
            "title" => "Pesanan Baru",
        ];
        return view('Customers/Pesanan/pesananBaru',$data);
    }

    public function pilihPaket()
    {
        $data = [
            "title" => "Pilih Paket",
        ];
        return view('Customers/Pesanan/pilihPaket',$data);
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
        $data = [
            "title" => "Pembayaran DP",
        ];
        return view('Customers/Pesanan/downPayment',$data);
    }
    public function fullPayment()
    {
        $data = [
            "title" => "Pelunasan DP",
        ];
        return view('Customers/Pesanan/fullPayment',$data);
    }
}
