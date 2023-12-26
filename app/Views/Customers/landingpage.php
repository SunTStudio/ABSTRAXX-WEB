<?php $this->extend('Template/template'); ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/landingpage.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content'); ?>

<h1 class="text-light"><?= session()->get('id_usersSession'); ?></h1>

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
            <a class="nav-link" href="#paket">Paket</a>
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

<!-- Headline -->

<section class="headline"> 
  <div class="container-fluid" >
    <div class="row">
      <div class="col text-end">
        <p class="fw-bold text-light fs-1 mt-5 pt-5 me-5 pe-5"  id="headAbs">ABBSTRAXX</p>
        <p class="fw-normal text-light fs-5 me-5 pe-5">Abadikan momen berharga anda bersama kami</p>
      </div>
    </div>
  </div>
</section>

<section class="portofolio">
  <div class="container-fluid">
    <p class="fs-3 fw-medium text-center text-light mt-5 mb-4" >PORTOFOLIO KAMI</p>
    <div class="row justify-content-center">
      <div class="col-2 text-end">
        <img src="../img/porto/c1p1.png" width="100%" alt="">
      </div>
      <div class="col-5">
        <div class="row mb-3">
          <div class="col-8"><img src="../img/porto/c2r1b1.png" width="100%" alt=""></div>
          <div class="col-4"><img src="../img/porto/c2r1b2.png" width="95%" alt=""></div>
        </div>
        <div class="row mb-3">
          <div class="col-8"><img src="../img/porto/c2r2b1.png" width="100%" alt=""></div>
          <div class="col-4"><img src="../img/porto/c2r2b2.png" width="97%" alt=""></div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<section class="paketJasa" id="paket">
  <div class="container-fluid">
    <p class="fs-3 fw-medium text-center text-light mt-5 mb-5 pb-2" >PAKET JASA KAMI</p>
    <form action="/pesanan/pesananBaru" method="get">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-3"><img src="../img/paketJasa/paket1.png" width="100%" alt=""></div>
      <div class="col-3 text-light ps-5">
        <p class="fs-3 fw-medium">Paket Satu</p>
        <ul>
          <li>Sesi Pemotretan 6 jam</li>
          <li>3 Kali Revisi</li>
          <li>Lebih dari 50 foto</li>
          <li>1 Photografer</li>
        </ul>
        <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
      </div>
      <div class="col-3 text-info text-center">
        <p class="fs-1 fw-normal mt-4" >Price</p>
        <p class="text-secondary" ><s>2000K</s></p>
        <p class="fs-2 fw-medium">1.500k</p>
      </div>
    </div>
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-3 text-info text-center">
        <p class="fs-1 fw-normal mt-4" >Price</p>
        <p class="text-secondary" ><s>3000K</s></p>
        <p class="fs-2 fw-medium">2.500k</p>
      </div>
      <div class="col-3 text-light ps-5">
        <p class="fs-3 fw-medium">Paket Dua</p>
        <ul>
          <li>Sesi Pemotretan 6 jam</li>
          <li>3 Kali Revisi</li>
          <li>Lebih dari 50 foto</li>
          <li>1 Photografer</li>
        </ul>
        <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
      </div>
      
      <div class="col-3"><img src="../img/paketJasa/paket2.png" width="100%" alt=""></div>

    </div>
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-3"><img src="../img/paketJasa/paket3.png" width="100%" alt=""></div>
      <div class="col-3 text-light ps-5">
        <p class="fs-3 fw-medium">Paket Tiga</p>
        <ul>
          <li>Sesi Pemotretan 6 jam</li>
          <li>3 Kali Revisi</li>
          <li>Lebih dari 50 foto</li>
          <li>1 Photografer</li>
        </ul>
        <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
      </div>
      <div class="col-3 text-info text-center">
        <p class="fs-1 fw-normal mt-4" >Price</p>
        <p class="text-secondary" ><s>4000K</s></p>
        <p class="fs-2 fw-medium">3.500k</p>
      </div>
    </div>
  </form>
  </div>
</section>


<section class="meetTeam mb-5">
  <div class="container-fluid mb-5">
  <p class="fs-3 fw-medium text-center text-light mt-5 pb-2" >TIM KAMI</p>
    <div class="row justify-content-center">
      <div class="col-2 text-light text-center">
          <img src="../img/timKami/latip.png" width="100%" alt=""><br>
          <p  class="fst-italic mt-2">Latip Dwi<br>Photografer</p>
      </div>
      <div class="col-2 text-light text-center">
          <img src="../img/timKami/thori.png" width="100%" alt=""><br>
          <p  class="fst-italic mt-2">Thori Muhammad<br>Editor</p>
      </div>
      <div class="col-2 text-light text-center">
          <img src="../img/timKami/rafi.png" width="100%" alt=""><br>
          <p  class="fst-italic mt-2">Rafi Nur<br>Photographer<br>& Videographer</p>
      </div>
      <div class="col-2 text-light text-center">
          <img src="../img/timKami/yanuar.png" width="100%" alt=""><br>
          <p  class="fst-italic mt-2">Yanuar Aji<br>Photografer</p>
      </div>
      <div class="col-2 text-light text-center">
          <img src="../img/timKami/mahsun.png" width="100%" alt=""><br>
          <p  class="fst-italic mt-2">Mahsun Btamam<br>Editor</p>
      </div>
    </div>
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













<?php $this->endSection(); ?>