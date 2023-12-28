<?
namespace App\Controllers;
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanfpdf extends BaseController {

    protected $usersData;


    function __construct(){
        $this->usersData = new \App\Models\UsersData();
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
    }
	public function inddex()
	{
        // error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm','Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(0,7,'DAFTAR PEGAWAI AYONGODING.COM',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0,'C');
        $pdf->Cell(90,6,'Nama Pegawai',1,0,'C');
        $pdf->Cell(120,6,'Alamat',1,0,'C');
        $pdf->Cell(40,6,'Telp',1,1,'C');
        $pdf->SetFont('Arial','',10);
        $pdf->Output();
	}

    public function generatePdf()
{
    $pdf = new FPDF('P', 'mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    // Mengambil data dari database
    $users = $this->usersData->findAll(); // Menggunakan model untuk mengambil data users

    // Menyusun data ke dalam PDF
    foreach ($users as $row) {
        $pdf->Cell(40, 10, $row['nama_users'], 1, 0, 'C');
        $pdf->Cell(60, 10, $row['email_users'], 1, 0, 'C');
    }

    $pdf->Output();
}
}