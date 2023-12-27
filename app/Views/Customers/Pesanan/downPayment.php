<?php $this->extend('Template/template') ?>
<?php $this->section('link') ?>
<link rel="stylesheet" href="/css/downPayment.css">
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

<section class="monitoring">
    <div class="container">
        <p class="fs-3 fw-medium text-light mt-5 mb-5 pb-2" >Pembayaran Pesanan</p>
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
            <li class="monitoring-item ">
                <span class="progress-count">3</span>
                <span class="progress-label">kontrak</span>
            </li>
            <li class="monitoring-item current-item">
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

<section class="downPayment mb-5">
    <div class="container">
        <p class="fs-3 fw-normal text-light mt-5 mb-5 pb-2" >Checkout DP</p>
        <div class="row justify-content-center text-light">
            <div class="col-5 pt-5 ps-4 me-3 pb-5 rounded">
                <table class="table">
                  <p class="fw-medium">1. Data Kamu</p>
                  <hr>
                    <tbody>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?= $data_users['nama_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>No telp</td>
                            <td>:</td>
                            <td><?= $data_users['notelp_users']; ?></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?= $data_users['email_users']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-5 p-5 ms-3 rounded">
                <table class="table">
                  <p class="fw-medium">2. Detail Pesanan</p>
                  <hr>
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
        <div class="row justify-content-center text-light mt-5">
            <div class="col-5 pt-5 ps-4 me-3 pb-2 rounded">
                <table class="table table-borderless text-center">
                  <p class="fw-medium">3. Metode Pembayaran</p>
                  <hr>
                    <tbody>
                        <tr>
                            <td>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              </div>
                            </td>
                            <td><img src="/img/pembayaran/bri.png" alt=""></td>
                            <td>42838894</td>
                            <td>an/ Muhammad Rafi</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              </div>
                            </td>
                            <td><img src="/img/pembayaran/bca.png" alt=""></td>
                            <td>42838894</td>
                            <td>an/ Muhammad Rafi</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              </div>
                            </td>
                            <td><img src="/img/pembayaran/muamalat.png" alt=""></td>
                            <td>42838894</td>
                            <td>an/ Muhammad Rafi</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              </div>
                            </td>
                            <td><img src="/img/pembayaran/bni.png" alt=""></td>
                            <td>42838894</td>
                            <td>an/ Muhammad Rafi</td>
                        </tr>
                    </tbody>
                    
                </table>
            </div>
            <div class="col-5 p-5 pb-4 ms-3 rounded">
                <table class="table table-borderless">
                  <p class="fw-medium">4. Checkout</p>
                  <hr>
                  <p class="fw-medium">Paket Satu :</p>
                    <tbody>
                        <tr>
                            <td>DP 80% </td>
                            <td class="text-end">Rp 1.200.000</td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>Admin </td>
                            <td class="text-end">Rp 2.500</td>
                        </tr>              
                    </tbody>  
                    
                </table>
                    <hr>
                <table class="table table-borderless">
                    <tbody>
                        <tr class="fw-medium">
                            <td>Total Price </td>
                            <td class="text-end">Rp 1.202.500</td>
                        </tr>
                    </tbody>
                  </table>
                 <button class="btn btn-secondary" type="submit"> <i class="bi bi-upload"></i> Upload Bukti Bayar</button>
                </div>
            
        </div>
        
        <div class="row justify-content-center mt-5">
          <div class="col-4 text-center">
            <a href="<?= base_url('Pesanan/prosesDownPayment?update_monitoring=4');?>">
            <button type="submit" class="btn btn-primary me-1">Simpan Perubahan</button>
        </a>
            

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