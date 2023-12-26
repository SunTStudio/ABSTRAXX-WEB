<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/inputdata.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>

<section class="inputData mt-5">
    <div class="container">
        <p class="fs-3 fw-medium text-secondary">Input Users</p>
        <hr>
        <div class="row">
            <div class="col-5">
                <form class="fw-medium text-secondry" action="/admin/proses-input" method="GET" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="hidden" name="id_users_pk" value="<?= isset($default_id)?$default_id:'' ?>">
            <input type="hidden" name="id_users" class="form-control" id="nama" value="<?= $default_id ?>">

        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemesan</label>
            <input type="text" name="nama_users" class="form-control" id="nama" value="<?= $default_nama ?>">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email_users" class="form-control" value="<?= $default_alamat ?>">

        </div>
        <div class="mb-3">
            <label for="noTelp" class="form-label">No Telepon</label>
            <input type="text" name="notelp_users" class="form-control" id="noTelp" value="<?= $default_notelp ?>">

        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="text" name="tanggal_pesan" class="form-control" id="datepicker" value="<?= $default_tanggal ?>">
                
        </div>
        <div class="mb-3">
            <label for="paket" class="form-label">Pilih Paket</label>
            <input type="text" name="detail_users" class="form-control" id="paket" value="<?= $default_detail ?>">

        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <textarea type="text" name="alamat_users" class="form-control" id="lokasi" value="<?= $default_alamat ?>"><?= $default_alamat ?></textarea>

        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Kontrak</label>
            <input class="form-control" name="kontrak_users" type="file" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Kirim Data</button>
        </form>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd' // Format tanggal yang diinginkan (yyyy-mm-dd)
      });
    } );
  </script>


<?php $this->endSection() ?>