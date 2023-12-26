
<?php $this->extend('Template/templateAdmin') ?>
<?php $this->section('link'); ?>
<link rel="stylesheet" href="/css/modal.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link'); ?>
<?php $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4 text-center dotted-border p-5 rounded me-2">
            <a href="#"><i class="bi bi-upload" style="font-size: 10em;"></i></a><br>
            <a href="#" class="fw-medium fs-3 text-center link-underline link-underline-opacity-0">Drop File Or </a> <br>   
            <button class="btn btn-primary mt-3"> Upload </button>
        </div>
        <div class="col-4 dotted-border rounded ms-2 text-center">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Type</th>
                <th scope="col">Nama File</th>
                <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td><a href=""><i class="bi bi-file-earmark-zip-fill"></i></a></td>
                <td>Gambar1</td>
                <td><a href=""><i class="bi bi-trash"></i></a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td><a href=""><i class="bi bi-file-earmark-zip-fill"></i></a></td>
                <td>Gambar2</td>
                <td><a href=""><i class="bi bi-trash"></i></a></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td><a href=""><i class="bi bi-file-earmark-zip-fill"></i></a></td>
                <td>Gambar3</td>
                <td><a href=""><i class="bi bi-trash"></i></a></td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-8 text-center mt-3">
            <a href="/admin/users"><button class="btn btn-primary">Simpan</button></a>
            <a href="/admin/users"><button class="btn btn-warning">Kembali</button></a>
        </div>
        
    </div>
</div>

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
