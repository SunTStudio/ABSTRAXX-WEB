<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link') ?>
<link rel="stylesheet" href="/css/monitoring.css">
<link rel="stylesheet" href="/css/progressAdmin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<section class="opsiData mt-5">
    <div class="container">
        <p class="fw-medium fs-2 text-secondary " >Monitoring</p>
        <div class="row ">
            <div class="col-5 mt-2">
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> All </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Terbaru </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Sebelumnya </a>
            </div>
            <div class="col-7 mb-3 d-flex justify-content-end">               
                <form class="d-flex" role="search">
                <input class="me-2 rounded" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary me-3" type="submit">Search</button>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-sort-up"></i> Sort
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Terbaru</a></li>
                    <li><a class="dropdown-item" href="#">Terlama action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </div>
            </form>
            </div>
            <hr>
        </div>
    </div>
</section>

<section class="appointment">
    <div class="container">
        <div class="row justify-content-center p-3 rounded" id="appointment">
            <div class="col-2 " >
                <p >Pesanan :</p>
                <p class="fw-medium ">Wedding Photography</p>
                <p>A.N Latip Dwi</p>
                <p>No Telp 085686144268</p>
            </div>
            <div class="col-2">
                <p >Progres :</p>
                <p class="fw-medium ">Menunggu Revisi</p>
                <p>Update Terakhir :</p>
                <p>20/10/2023</p>
            </div>
            <div class="col-6">
                <p class="text-light text-center fw-medium">Monitoring</p>
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

<?php $this->endSection() ?>