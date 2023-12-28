<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/monitoring.css">
<link rel="stylesheet" href="/css/progressAdmin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>

<section class="dashboard">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 bg-secondary-subtle rounded p-3 me-2">
                <div class="row text-light rounded ms-1 me-1
                " style="background: rgb(0,0,60);
background: linear-gradient(228deg, rgba(0,0,60,1) 0%, rgba(14,14,80,1) 34%, rgba(13,9,54,1) 66%, rgba(8,20,71,1) 100%);">
                <div class="col-6 p-2">
                    <p>Selamat Sore,</p>
                    <p class="fs-3 fw-medium"><?= $data_admin['nama_admin']; ?></p>
                    <a href="/" style="text-decoration:none;" class="text-light"><p class="fw-light" style="font-size:1vw;">Logout ></p></a>
                </div>
                <div class="col-6 d-flex align-items-end flex-column pt-4 pe-3">
                    <img src="/img/profile/iconPerson.png" width="55%" alt="">
                </div>
                </div>
                <div class="row mt-3">
                    <div class="col rounded text-light fw-medium fs-4">
                        <a href="/admin/input">
                            <button class="btn btn-primary text-light text-start fw-medium fs-4">
                          
                                <i class="bi bi-clipboard-plus d-flex float-end fs-1"> </i><span class="d-flex ms-3 mb-1">Tambah Pesanan</span> 
                            </button>
                        </a>   
                        <a href="/Cetak/laporan">
                        <button class="btn btn-success text-light text-start fw-medium fs-4 mt-2">
                          
                            <i class="bi bi-journals d-flex float-end fs-1"></i> <span class="d-flex  ms-3 mb-1">Cetak Laporan</span> </i>
                        </button>
                        </a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-danger text-light text-start fw-medium fs-4">
                          
                                     <span class="d-flex ms-3 mb-1 float-end fs-1 mt-2 me-3">20</span>  <span class="d-flex  ms-3 mb-1">Pesanan Selesai</span> 
                                </button>
                                <button class="btn btn-secondary text-light text-start fw-medium fs-4 mt-2">
                                
                                    <span class="d-flex ms-3 mb-1 float-end fs-1 mt-2 me-3">10</span>  <span class="d-flex  ms-3 mb-1">Pesanan Diproses</span> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 bg-secondary-subtle ms-2">
                <div class="row justify-content-center">
                    <p class=" fs-5 pt-3 text-center fw-medium">Your Appointment</p>
                    <?php foreach ($data_appointment as $index => $row) : ?>
                    <div class="col-5 me-2 p-3 text-light rounded" style="background: rgb(0,0,60);
background: linear-gradient(228deg, rgba(0,0,60,1) 0%, rgba(14,14,80,1) 34%, rgba(13,9,54,1) 66%, rgba(8,20,71,1) 100%);">
                        <p><?= $row->tanggal_appointment; ?></p>
                        <p><?= $row->keterangan_appointment; ?></p>
                        <p>A.N <?= $row->nama_users; ?></p>
                        <p>No Telp : <?= $row->notelp_koor; ?></p>
                        <p>Lokasi : <?= $row->tempat_appointment; ?></p>
                        <a href="/admin/appointment"><button class="btn btn-primary">Lihat Datail</button></a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row mt-5 pt-3 pb-3 rounded bg-secondary-subtle justify-content-center">
            <div class="row">
                <div class="col-10">
                    <p class="ps-3 fw-medium d-flex ">| Monitoring Progress Anda |</p>
                </div>
                <div class="col-2">
                     <p class="ps-3 fw-medium d-flex "><a href="#">Lihat Selengkapnya</a></p> 
                </div>
            </div>
            <div class="col ">
    <?php foreach ($data_monitoring as $index => $row) : ?>
                <section class="appointment">
    <div class="container">
           
        
        <?php 
            if($row->update_monitoring == 0){
            $progres_monitoring0 = 'current-item';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 1) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = 'current-item';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 2) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = 'current-item';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 3) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = 'current-item';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 4) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = 'current-item';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 5) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = 'current-item';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 6) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = 'current-item';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 7) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = 'current-item';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 8) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = 'current-item';
            $progres_monitoring9 = ' ';
        }elseif ($row->update_monitoring == 9) {
            $progres_monitoring0 = ' ';
            $progres_monitoring1 = ' ';
            $progres_monitoring2 = ' ';
            $progres_monitoring3 = ' ';
            $progres_monitoring4 = ' ';
            $progres_monitoring5 = ' ';
            $progres_monitoring6 = ' ';
            $progres_monitoring7 = ' ';
            $progres_monitoring8 = ' ';
            $progres_monitoring9 = 'current-item';
        }else{

        }
            
            ?>    
        <div class="row justify-content-center p-3 rounded mt-3" id="appointment">
            <div class="col-2 " >
                <p >Pesanan :</p>
                <p class="fw-medium "><?= $row->detail_users; ?></p>
                <p>A.N <?= $row->nama_users; ?></p>
                <p>No Telp <?= $row->notelp_users; ?></p>
            </div>
            <div class="col-2"> 
                <p >Progres :</p>
                <p class="fw-medium "><?= $row->progress_monitoring; ?></p>
                <p>Tanggal Pesan :</p>
                <p><?= $row->tanggal_pesan; ?></p>
            </div>
            <div class="col-6">
                <p class="text-light text-center fw-medium">Monitoring</p>
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
                    <form action="/admin/monitoring/update">
                        <button class="btn btn-primary custom-btn mb-1" style="font-size:0.8vw;"><i class="bi bi-repeat"></i> Update</button>
                        <button class="btn btn-warning custom-btn mb-1"><i class="bi bi-list"></i> Detail</button>
                        <button class="btn btn-danger custom-btn mb-1"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>



<footer class="mt-5" style="background-color:#00193F;" id="kontakKami"  >
  <div class="container-fluid">
    <div class="row text-light">
      <div class="col-8"><p class="fw-medium fs-5 m-3" >ABSTRAXXX</p></div>
      <div class="col-4 mt-3">
          <ul>
            <li><i class="bi bi-instagram mb-1"></i>  @abbstraxx</li>
            <li><i class="bi bi-envelope mb-1"></i>  abbstraxxstudio@gmail.com</li>
            <li><i class="bi bi-map mb-1">  Sambiroto, Purwomartani, Kalasan, Sleman</i></li>
          </ul>
      </div>
    </div>
  </div>
</footer>
<?php $this->endSection() ?>