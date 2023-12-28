<?php

namespace App\Controllers;

use App\Libraries\Pdf;

class CetakPDF extends BaseController
{
    protected $usersData;

    public function __construct()
    {
        $this->usersData = new \App\Models\UsersData();
    }

    public function generatePdf()
    {
        $pdf = new Pdf(); // Menggunakan library PDF yang telah dibuat
        $pdf->AddPage('L', 'A4', 'landscape');
        $pdf->SetFont('times', 'B', 8);

        // Mengambil data dari database
        $arr_users = $this->usersData->query('SELECT * FROM `users`'); // Menggunakan model untuk mengambil data users
        $users = $arr_users->getResult();
        // Menyusun data ke dalam PDF
        foreach ($users as $index => $row) {
            $pdf->Cell(7, 7, $index+1, 1, 0, 'C');
            $pdf->Cell(25, 7, $row->nama_users, 1, 0, 'C');
            $pdf->Cell(30, 7, $row->email_users, 1, 0, 'C');
            $pdf->Cell(25, 7, $row->tanggal_pesan, 1, 0, 'C');
            $pdf->Cell(25, 7, $row->notelp_users, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->alamat_users, 1, 0, 'C');
            $pdf->Cell(25, 7, $row->detail_users, 1, 0, 'C');
            $pdf->Cell(20, 7, $row->dp_users, 1, 0, 'C');
            $pdf->Cell(20, 7, $row->fp_users, 1, 0, 'C');
            $pdf->Ln(); // Tambahkan baris baru setelah setiap data
        }

        $pdf->Output('Laporan_Customers.pdf', 'D'); // Output PDF sebagai file atau langsung ke browser
    }
}