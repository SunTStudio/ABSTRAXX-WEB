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
            <a class="nav-link" aria-disabled="true">About</a>
          </li>
        </ul>
        <a class="navbar-brand" href="#"><b>ABSTRAXXX</b></a>
      </div>
    </div>
  </nav>
</div>

<section class="pesananBaru mt-5">
  <div class="container text-light text-center">
    <p class="fs-3 fw-medium">Unduh File Photo</p>
  </div>
</section>

<section class="file">
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="col-8 bg-light rounded pb-3 pt-3">
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-filetype-jpg fs-5"></i>
                        <span class="fw-medium"> Sample.jpg</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-file-earmark-zip fs-5"></i>
                        <span class="fw-medium"> Sample.zip</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-filetype-jpg fs-5"></i>
                        <span class="fw-medium"> Sample.jpg</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-file-earmark-zip fs-5"></i>
                        <span class="fw-medium"> Sample.zip</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-filetype-jpg fs-5"></i>
                        <span class="fw-medium"> Sample.jpg</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
                <div class="row  pt-3  text-center">
                    <div class="col-4">
                        <i class="bi bi-file-earmark-zip fs-5"></i>
                        <span class="fw-medium"> Sample.zip</span>
                    </div>
                    <div class="col-4 pt-1">
                        <p class="fw-medium">10 Oktober 2023</p>
                    </div>
                    <div class="col-4">
                        <form action="#">
                        <button class="btn btn-secondary">Unduh</button>
                        <button class="btn btn-warning">Revisi</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row text-light  p-3 fw-medium" >
                    <div class="col-6"><a href="" style="text-decoration:none; color:white;">< Previous Page</a> </div>
                    <div class="col-6 d-flex justify-content-end"><a href="" style="text-decoration:none; color:white;" class="">Next Page > </a> </div>
                </div>
            </div>
        </div>
        
    </div>
</section>




<!-- <footer class="mt-5 " style="background-color:#00193F;" id="kontakKami"  >
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
</footer> -->


















<?php $this->endSection() ?>