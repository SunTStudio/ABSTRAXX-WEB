<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/appointment.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>

<section class="inputData mt-5">
    <div class="container">
        <p class="fs-3 fw-medium text-secondary">Setting Akun</p>
        <hr>
        <div class="row">
            <div class="col-5">
                <form class="fw-medium text-secondry">
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
        </div>

        
    </div>
</section>
<footer class="mt-5" style="background-color:#00193F;" id="kontakKami"  >
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