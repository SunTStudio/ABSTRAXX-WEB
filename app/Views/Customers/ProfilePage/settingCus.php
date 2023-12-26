<?php $this->extend('Template/template'); ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/settingCus.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content'); ?>

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

<section class="setting mt-5 mb-5">
    <div class="container text-light">
        <p class="fs-3 fw-medium ">Setting Akun</p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="/profile/" class="fw-medium text-secondry">
        <div class="mb-3">
            <label for="nama" class="form-label">Username</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Email</label>
            <input type="text" class="form-control" id="tanggal" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="paket" class="form-label">No Telepon</label>
            <input type="email" class="form-control" id="paket" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="passwordAdmin" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="passwordAdmin">
        </div>
        <div class="mb-3">
            <label for="konfirmasiPassword" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="konfirmasiPassword">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <button type="submit" class="btn btn-warning">Batal</button>
        </form>
            </div>
            <div class="col-5 text-center">
                <a href="#" style="font-size: 15em;" class="link-underline link-underline-opacity-0">
                    <i class="bi bi-person-circle"></i>
                    <p class="fs-4 "  >Change Profile Photo</p>
                </a>
                
            </div>
        </div>

        
    </div>
</section>





<footer  style="background-color:#00193F;" id="kontakKami"  >
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



<?php $this->endSection(); ?>