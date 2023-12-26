<?php $this->extend('Template/template') ?>
<?php $this->section('link') ?>
<link rel="stylesheet" href="/css/landingpage.css">
<link rel="stylesheet" href="/css/progress.css">
<?php $this->endSection('link') ?>
<?php $this->section('content') ?>


<div class="container">
  <nav class="navbar navbar-expand-lg" data-bs-theme="dark" >
    <div class="container-fluid">
      <a href="/profile" class="me-3 link-underline link-underline-opacity-0"><i class="bi bi-file-person"></i> Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/home#paket">Paket</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li>
        </ul>
        <a class="navbar-brand" href="#"><b>ABSTRAXXX</b></a>
        <a href="/Login/logout"><button class="btn fw-medium me-5" type="submit">Logout</button></a>

      </div>
    </div>
  </nav>
</div>

<section class="pesananBaru mt-5">
  <div class="container text-light">
    <p class="fs-3">Pesanan Baru</p>
  </div>
</section>

<section>
    <div class="container">
        <ul class="monitoring-list">
            <li class="monitoring-item ">
                <span class="progress-count">1</span>
                <span class="progress-label">Isi Data Diri</span>
            </li>
            <li class="monitoring-item ">
                <span class="progress-count ">2</span>
                <span class="progress-label">Pilih Paket</span>
            </li>
            <li class="monitoring-item current-item">
                <span class="progress-count">3</span>
                <span class="progress-label">kontrak</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">4</span>
                <span class="progress-label">Dp Payment</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">5</span>
                <span class="progress-label">Survei Tim</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">6</span>
                <span class="progress-label">Eksekusi</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">7</span>
                <span class="progress-label">Editing Foto</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">8</span>
                <span class="progress-label">Revisi</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">9</span>
                <span class="progress-label">Full Payment</span>
            </li>
            <li class="monitoring-item">
                <span class="progress-count">10</span>
                <span class="progress-label">Penerimaan File</span>
            </li>
        </ul>
    </div>
</section>

<section class="kontrak" style="margin-bottom:10rem ;">
  <div class="container">
    <p class="fs-3 fw-normal text-light mt-5 mb-5 pb-2" >Kontak Pemesanan</p>
    <div class="row justify-content-center">
      <div class="col text-center mt-5">
          <p class="text-light fs-5 fw-light">Untuk Melanjutkan Pesanan silahkan unduh file kontrak dibawah dan <br>
              silahkan di isi sesuai keterangan yang tertera pada kontrak pemesanan,<br>
                upload file kontrak yang sudah di isi di kolom upload</p>
      </div>
    </div>
    <div class="row justify-content-center text-light mt-5 mb-5">
      <div class="col-4 text-center">
        <p>Unduh File Kontrak</p>
        <button class="btn btn-secondary"><i class="bi bi-download"></i> Download File Kontrak</button>
      </div>
      <div class="col-4 text-center">
        <p>Download File Kontrak</p>
        <button class="btn btn-secondary"><i class="bi bi-upload"></i> Upload File Kontrak</button>
      </div>
    </div>
    <form action="/pesanan/down-payment" class="text-center mt-5">
      <button class="btn btn-primary me-2">Simpan</button>
      <button class="btn btn-warning ms-2">Kembali</button>
    </form>
  </div>
</section>


<footer class="mt-5 " style="background-color:#00193F;" id="kontakKami"  >
  <div class="container-fluid">
    <div class="row text-light">
      <div class="col-8"><p class="fw-medium fs-5 m-3" >ABSTRAXXX</p></div>
      <div class="col-4 mt-3">
          <ul >
            <li><i class="bi bi-instagram mb-1"></i>  @abbstraxx</li>
            <li><i class="bi bi-envelope mb-1"></i>  abbstraxxstudio@gmail.com</li>
            <li><i class="bi bi-map mb-1">  Sambiroto, Purwomartani, Kalasan, Sleman</i></li>
          </ul>
      </div>
    </div>
  </div>
</footer>


















<?php $this->endSection() ?>