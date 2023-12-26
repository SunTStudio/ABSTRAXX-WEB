<?php $this->extend('Template/template'); ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/style.css">
<?php $this->endSection(); ?>
<?php $this->section('content'); ?>
  <!-- Login page -->
  
<?php if(session()->get('error')): ?>
        <script>
          alert('<?= session()->get('error') ?>')
        </script>
<?php endif; ?>

  <section class="portofolio">
    <div class="container">
        <div class="row bg-black mt-5 rounded p-5">
            <div class="col-6 text-center">
                        <p class="fs-3 fw-medium text-center text-light mt-5 mb-4" >
                          <img src="/img/abbstraxxLogo.png" width="25%" alt="">
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
                            <img src="/img/abbstraxxLogo.png" class="mb-3" width="50%" alt="">
                            <form action="/login/proseslogin" class="text-start" method="POST">
                              <div class="mb-1">
                                <label for="username" class="form-label fw-medium">Username</label>
                                <input name="username" type="text" class="form-control" id="exampleInputUsername" aria-describedby="Username">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label fw-medium">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword">
                              </div>
                              <button type="submit" class="btn btn-primary ">Login</button>
                            </form>
                            <p class="text-center fw-light mt-4">Belum Punya Akun? <a href="/register">Daftar Disini</a> </p>

                        </div>
                      </div>
                    </div>
            </div>
        </div>
    </div>
  </section>







  <!-- Login Page End -->
  <?php $this->endSection(); ?>