
<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/users.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>
<!-- <?php var_dump($dataUsers) ?> -->
<section class="opsiData mt-5">
    <div class="container">
        <p class="fw-medium fs-2 text-secondary " >Users</p>
        <div class="row ">
            <div class="col-5 mt-2">
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> All </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Sedang Proses </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Selesai </a>
            </div>
            <div class="col-7 mb-3 d-flex justify-content-end">               
                <form class="d-flex" role="search">
                <a href="/admin/input"><button type="button" class="btn btn-secondary me-3"><i class="bi bi-file-plus"></i> Pesan Sekarang</button></a>
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

<section class="dataUsers">
    <div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kontrak</th>
                <th scope="col">No Telp</th>
                <th scope="col">Detail Pesanan</th>
                <th scope="col">Edit  |  Hapus</th>
                <th scope="col">Upload</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataUsers as $index => $row) : ?>
                <tr>
                <th scope="row"><?= $index+1; ?></th>
                <td><?= $row->nama_users; ?></td>
                <td><?= $row->tanggal_pesan; ?></td>
                <td><?= $row->alamat_users; ?></td>
                <td><a href="<?= $row->kontrak_users; ?>"><i class="bi bi-download"></i></a></td>
                <td><?= $row->notelp_users; ?></td>
                <td><?= $row->detail_users; ?></td>
                <td><a href="<?= base_url('Admin/ubahData?id_users='.$row->id_users); 
                    ?>">Edit</a>  |  <a href="<?= base_url('Admin/hapusData?id_users='.$row->id_users); 
                    ?>">Hapus</a></td>
                <td><a href="/admin/upload"><i class="bi bi-upload"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
    </div>
</section>











<footer style="background-color:#00193F;" id="kontakKami"  >
  <div class="container-fluid mt-5">
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
