<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/appointment.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>

<section id="filter" class="opsiData mt-5">
    <div class="container">
        <p class="fw-medium fs-2 text-secondary " >Appointment</p>
        <div class="row ">
            <div class="col-5 mt-2">
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> All </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Mendatang </a>
                <a href="#" class="text-secondary link-offset-2 link-underline link-underline-opacity-0 me-3"> Selesai </a>
            </div>
            <div class="col-7 mb-3 d-flex justify-content-end">               
                <form class="d-flex" role="search" action="/cariAppointment" method="GET">
                <a href="/admin/appointmentBaru"><button type="button" class="btn btn-secondary me-3"><i class="bi bi-file-plus"></i> Appointment Baru</button></a>
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

<section class="dataUsers">
    <div class="container">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Koor Tim</th>
                <th scope="col">Tanggal Appointment</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">No Telp</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Edit  |  Hapus</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataAppointment as $index => $row) : ?>
                <tr>
                <td scope="row"><?= $index+1; ?></td>
                <td><?= $row->nama_fotografer; ?></td>
                <td><?= $row->tanggal_appointment; ?></td>
                <td><?= $row->nama_users; ?></td>
                <td><?= $row->notelp_koor; ?></td>
                <td><?= $row->keterangan_appointment; ?></td>
                <td><?= $row->tempat_appointment; ?></td>
                <td>
                    <a href="<?= base_url('Admin/ubahAppointment?id_appointment='.$row->id_appointment); 
                    ?>">Edit</a>  
                    |  
                    <a href="<?= base_url('Admin/hapusAppointment?id_appointment='.$row->id_appointment); 
                    ?>">Hapus</a></td>
                <td><?= $row->status_appointment; ?></td>
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