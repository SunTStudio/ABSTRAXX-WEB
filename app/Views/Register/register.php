<?php $this->extend('Template/template'); ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/style.css">
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
  <!-- Login page -->
  
  <section class="portofolio">
    <div class="container">
        <div class="row bg-black mt-5 rounded p-1 mb-5">
            <div class="col-6 text-center">
                        <p class="fs-3 fw-medium text-center text-light mt-5 mb-4" >
                          <img src="/img/abbstraxxLogo.png" class="mt-4" width="25%" alt="">
                        </p>
                        <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <img src="../img/porto/c1p1.png" width="80%" alt="">
                        </div>
                        <div class="col-8">
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
            <div class="col-6">
                  <div class="container-fluid">
                      <div class="row justify-content-center ">
                        <div class="col-10 utama p-4 text-light text-center">
                            <img src="/img/abbstraxxLogo.png" class="mb-3" width="20%" alt="">
                            <p class="fw-normal fs-3 text-center">Buat Akun Baru</p>
                            <form action="/login/register" class="text-start" method="GET">
                              <div class="mb-3">
                                <label for="username" class="form-label fw-normal">Username</label>
                                <input type="username" name="nama_users" class="form-control" id="exampleInputUsername" aria-describedby="Username">
                              </div>
                              <div class="mb-3">
                                <label for="username" class="form-label fw-normal">Nomer Telepon</label>
                                <input type="username" name="notelp_users" class="form-control" id="exampleInputUsername" aria-describedby="Username">
                              </div>
                              <div class="mb-3">
                                <label for="username" class="form-label fw-normal">Email</label>
                                <input type="username" name="email_users" class="form-control" id="exampleInputUsername" aria-describedby="Username">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label fw-normal">Password Baru</label>
                                <input type="password" name="password_users" class="form-control" id="exampleInputPassword">
                              </div>
                              <button type="submit" class="btn btn-primary ">Buat Akun</button>
                            </form>
                            <p class="text-center fw-light mt-4">Sudah Punya Akun? <a href="/">Login Disini</a> </p>

                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
  </section>







  <!-- Login Page End -->
  <?php $this->endSection(); ?>