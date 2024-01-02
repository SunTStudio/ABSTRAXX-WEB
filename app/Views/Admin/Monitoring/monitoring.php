<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link') ?>
<link rel="stylesheet" href="/css/monitoring.css">
<link rel="stylesheet" href="/css/progressAdmin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<section id="filter" class="opsiData mt-5">
    <div class="container">
        <p class="fw-medium fs-2 text-secondary " >Monitoring</p>
        <div class="row ">
            <div class="col-5 mt-2">
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> All </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Terbaru </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Sebelumnya </a>
            </div>
            <div class="col-7 mb-3 d-flex justify-content-end">               
                <form class="d-flex" role="search" action="/cariMonitoring">
                <input class="me-2 rounded" type="search" name="nama_cari" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary me-3" type="submit" name="cari_users" value="true">Search</button>
                <select class="form-select form-select-sm  rounded" name="filter" aria-label="Small select example">
                    <option selected><i class="bi bi-sort-up"></i> Urutkan</option>
                    <option value="DESC">Terbaru</option>
                    <option value="ASC">Terlama</option>
                </select>
            </form>
            </div>
            <hr>
        </div>
    </div>
</section>

<section class="appointment">
    <div class="container">
        <?php foreach ($data_monitoring as $index => $row) : ?>
        
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
        <?php endforeach; ?>
    </div>
</section>


<footer style="background-color:#00193F;" id="kontakKami"  >
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