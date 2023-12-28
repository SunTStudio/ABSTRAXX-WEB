<?php $this->extend('Template/template'); ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/profileCus.css">
<link rel="stylesheet" href="/css/progressProfile.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content'); ?>

<!-- <h1 class="text-light"><?= var_dump($data_users); ?></h1> -->

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

<section class="profile mt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4 rounded" style="background: rgb(0,0,60);
background: linear-gradient(228deg, rgba(0,0,60,1) 0%, rgba(14,14,80,1) 34%, rgba(13,9,54,1) 66%, rgba(8,20,71,1) 100%);">
        <div class="row text-light">
          <div class="col-6 p-3">
            <p>Selamat Datang,</p>
            <p class="fs-3 fw-medium"><?= $data_users['nama_users']; ?></p>
            <a href="/" style="text-decoration:none;" class="text-light"><p class="fw-light" style="font-size:1vw;">Logout ></p></a>
          </div>
          <div class="col-6 d-flex align-items-end flex-column pt-4 pe-3">
            <img src="/img/profile/iconPerson.png" width="70%" alt="">
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="row text-center text-light ms-4">
          <div class="col-6 rounded p-2" style="background-color: #007089;">
          <a href="/pesanan/cekPesananBaru" style="text-decoration:none; color:white;">
            <p class="fw-medium fs-2">Buat Pesanan</p>
          <i class="bi bi-plus-square" style="font-size:4.2vw;"></i>
          </a>
        </div>
          <div class="col-6">
            <form action="/profile/file">
              <button type="submit" class="btn btn-primary d-block mb-3 fs-3" style="width:15rem; height:4.6rem;"><i class="bi bi-download"></i> Unduh File</button>
              <button type="submit" class="btn btn-warning d-block fs-3"  style="width:15rem;height:4.6rem;"> <i class="bi bi-credit-card-fill"></i> Pembayaran</button>
            </form>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appointment mt-5 ">
            <div class="container" >
                <div class="row justify-content-center"  >
                  <div class="col-10 progressBg" >
                    <div class="row p-3 rounded justify-content-center " id="appointment">
                        <div class="col-2 mt-2" >
                        <p >Pesanan :</p>
                        <p class="fw-medium "><?= $data_monitoring['detail_users']; ?></p>
                        <p>A.N <?= $data_monitoring['nama_users']; ?></p>
                        <p>No Telp <?= $data_monitoring['notelp_users']; ?></p>
                    </div>
                    <div class="col-2 mt-2">
                        <p >Progres :</p>
                        <p class="fw-medium "><?= $data_monitoring['progress_monitoring']; ?></p>
                        <p>Tanggal Pesan :</p>
                        <p><?= $data_monitoring['tanggal_pesan']; ?></p>
                    </div>
                    <div class="col-6">
                            <ul class="monitoring-list mt-2">
                                
                                <li class="monitoring-item <?= $progres_monitoring0; ?>">
                                    <span class="progress-count">1</span>
                                    <span class="progress-label">Isi Data Diri</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring1; ?>">
                                    <span class="progress-count ">2</span>
                                    <span class="progress-label">Pilih Paket</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring2; ?>">
                                    <span class="progress-count">3</span>
                                    <span class="progress-label">kontrak</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring3; ?>">
                                    <span class="progress-count">4</span>
                                    <span class="progress-label">Dp Payment</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring4; ?>">
                                    <span class="progress-count">5</span>
                                    <span class="progress-label">Survei Tim</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring5; ?>">
                                    <span class="progress-count">6</span>
                                    <span class="progress-label">Eksekusi</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring6; ?>">
                                    <span class="progress-count">7</span>
                                    <span class="progress-label">Editing Foto</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring7; ?>">
                                    <span class="progress-count">8</span>
                                    <span class="progress-label">Revisi</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring8; ?>">
                                    <span class="progress-count">9</span>
                                    <span class="progress-label">Full Payment</span>
                                </li>
                                <li class="monitoring-item <?= $progres_monitoring9; ?>">
                                    <span class="progress-count">10</span>
                                    <span class="progress-label">Penerimaan File</span>
                                </li>
                            </ul>
                    </div>
                    <div class="col-2 d-flex justify-content-end">
                        <div>
                            <form action="#">
                            <button class="btn btn-primary custom-btn mb-1" style="font-size:0.8vw;"><i class="bi bi-repeat"></i> Update</button>
                            <button class="btn btn-warning custom-btn mb-1"><i class="bi bi-list"></i> Detail</button>
                            <button class="btn btn-danger custom-btn mb-1"><i class="bi bi-trash"></i> Ubah</button>
                            </form>
                        </div>
                    </div>
                    </div>
                      
                  </div>  
                </div>
            </div>
        </section>

<section class="dataProfile mt-5 mb-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6 rounded" style="background-color:#ecff00;">
        <div class="row p-3 justify-content-center">
          <p class="fw-medium fs-5">Jadwal Pertemuan Anda</p>
          <?php foreach ($data_appointment as $index => $row) : ?>
          <div class="col-5 text-light p-3 me-3 rounded" style="background: rgb(0,0,60);
background: linear-gradient(228deg, rgba(0,0,60,1) 0%, rgba(14,14,80,1) 34%, rgba(13,9,54,1) 66%, rgba(8,20,71,1) 100%);">
              <p class="fw-medium"><?= $row->tanggal_appointment ?></p>
              <!-- <br> -->
              <p class="fs-5 fw-medium"><?= $row->keterangan_appointment ?></p>
              <br>
              <p style="font-size:1vw;">A.N : <?= $row->nama_users ?></p>
              <p style="font-size:1vw;">No Telp : <?= $row->notelp_koor ?></p>
              <p style="font-size:1vw;">Lokasi : <?= $row->tempat_appointment ?></p>
              <p style="font-size:1vw;">Status : <?= $row->status_appointment ?></p>
              <!-- <br> -->
              <button type="submit" class="btn btn-primary">Reschedulle</button>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-4">
        <div class="row  rounded justify-content-end">
          <div class="col-11 bg-white rounded p-3">
            <!-- <table class="table" style="font-size: 1vw;">
                  <p class="fw-medium">Detail Pesanan</p>
                  <hr>
                    <tbody>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td>19/10/2023</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tanggal Pelaksanaan</td>
                            <td>:</td>
                            <td>30/10/2023</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tempat Pelaksanaan</td>
                            <td>:</td>
                            <td>GSP UGM</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Pilih paket</td>
                            <td>:</td>
                            <td>Paket Satu</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tambahan</td>
                            <td>:</td>
                            <td>Konsep Touring</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Penanggung Jawab</td>
                            <td>:</td>
                            <td>Mahsun Btamam</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Fotografer</td>
                            <td>:</td>
                            <td>Latip Dwi Susilo</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Videografer</td>
                            <td>:</td>
                            <td>Muhammad Rafi Nur</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Editor</td>
                            <td>:</td>
                            <td>Thori Muhammad</td>
                        </tr>
                    </tbody>
                </table> -->
                <table class="table" style="font-size: 1vw;">
                  <p class="fw-medium">Detail Pesanan</p>
                  <hr>
                    <tbody>
                        <tr>
                            <td>Nama Pemesan</td>
                            <td>:</td>
                            <td><?= $data_users['nama_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Email Pemesan</td>
                            <td>:</td>
                            <td><?= $data_users['email_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>:</td>
                            <td><?= $data_users['tanggal_pesan']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tempat Pelaksanaan</td>
                            <td>:</td>
                            <td><?= $data_users['alamat_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Pilih paket</td>
                            <td>:</td>
                            <td><?= $data_users['detail_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Tambahan</td>
                            <td>:</td>
                            <td><?= $data_monitoring['detail_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Progres Saat Ini</td>
                            <td>:</td>
                            <td><?= $data_monitoring['progress_monitoring']; ?></td>
                        </tr>
                    </tbody>
                    <?php foreach ($data_fotografer as $index => $row) : ?>
                    <tbody>
                        <tr>
                            <td><?= $row->spesialis_fotografer; ?></td>
                            <td>:</td>
                            <td><?= $row->nama_fotografer; ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach; ?>
                </table>
          </div>
        </div>
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