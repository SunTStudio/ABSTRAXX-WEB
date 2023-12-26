<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/appointment.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>


<section class="inputData mt-5">
    <div class="container">
        <p class="fs-3 fw-medium text-secondary">Appointment Baru</p>
        <hr>
        <div class="row">
            <div class="col-5">
                <form class="fw-medium text-secondry" action="/admin/proses-appointment" method="GET">
        <div class="mb-3">
            <input type="hidden" name="id_appointment_pk" value="<?= isset($default_id)?$default_id:'' ?>">
            <input type="hidden" name="id_appointment" class="form-control" id="nama" value="<?= $default_id ?>">

        </div>
                <div class="mb-3">
            <label for="nama" class="form-label">Nama Koor</label>
            <select class="form-select" name="nama_fotografer" aria-label="Default select example">
            <option selected value="<?= $default_koor ?>"><?= $default_koor ?></option>
            <?php foreach($data_fotografer as $index => $row) : ?>
            <option name="nama_fotografer" value="<?= $row->nama_fotografer; ?>"><?= $row->nama_fotografer; ?></option>

            <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="noTelp" class="form-label">No Telepon</label>
            <input type="text" name="notelp_koor" class="form-control" id="noTelp" value="<?= $default_notelp ?>">

        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Appointment</label>
            <input type="text" name="tanggal_appointment" class="form-control" id="datepicker" aria-describedby="emailHelp" value="<?= $default_tanggal ?>">

        </div>
        <div class="mb-3">
            <label for="namaCus" class="form-label">Nama Customers</label>
            <select class="form-select" name="nama_users" aria-label="Default select example" >
            <option selected value="<?= $default_tanggal ?>"><?= $default_tanggal ?></option>
            <?php foreach($data_users as $index => $row) : ?>
            <option name="nama_users" value="<?= $row->nama_users; ?>"><?= $row->nama_users; ?></option>

            <?php endforeach; ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="lokasi" class="form-label">Keterangan</label>
            <textarea type="email" name="keterangan_appointment" value="<?= $default_keterangan ?>" class="form-control" id="lokasi" aria-describedby="emailHelp"><?= $default_keterangan ?></textarea>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Alamat</label>
            <textarea type="email" name="tempat_appointment" class="form-control" value="<?= $default_tempat ?>" id="lokasi" aria-describedby="emailHelp"> <?= $default_tempat ?> </textarea>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status_appointment" aria-label="Default select example">
                <option selected value="<?= $default_status ?>"><?= $default_status ?></option>
                <option name="status_appointment" value="Sudah">Sudah</option>
                <option name="status_appointment" value="Belum">Belum</option>
            </select>
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