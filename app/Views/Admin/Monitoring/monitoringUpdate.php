<?php $this->extend('Template/templateAdmin');
?>
<?php $this->section('link');
?>
<link rel="stylesheet" href="/css/monitoringUpdate.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link');
?>
<?php $this->section('content'); 
?>

<section class="inputData mt-5">
    <div class="container">
        <p class="fs-3 fw-medium text-secondary">Monitoring</p>

    <div class="container-fluid">
        <p class="fs-5 fw-medium text-secondary">Data Pemesan</p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-4 me-5">
            <form class="fw-medium text-secondry">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pemesan</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">No Telepon</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

        </div>
        </form>
            </div>
        <div class="col-4 ms-5">
            <form class="fw-medium text-secondry">
        <div class="mb-3">
            <label for="nama" class="form-label">Pesanan</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Tanggal dan waktu sesi foto</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

        </div>
        </form>
        </div>
        </div>
        <div class="row">
            <p>
                Progres Pemesanan
            </p>
        <hr>
        <div class="row justify-content-center">
        <div class="col-5 ms-5">
        <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Pilih Paket <a href="" class="text-secondary link-underline link-underline-opacity-0" style="font-size:1vw;"> (detail...)</a></label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Set Tanggal Acara</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Upload Kontrak</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">DP Payment</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Photografer Survei</label>
            </div>
            <button type="submit" class="btn btn-primary mt-4 me-2">Simpan Perubahan</button>
            <button type="submit" class="btn btn-warning mt-4">Batal</button>
        </div>
        <div class="col-4 me-5 ms-5">
            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Eksekusi Pesanan</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Editing</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Revisi</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Pengiriman File Pesanan</label>
            </div>

            <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input border-black" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Full Payment</label>
            </div>
        </div>
        </div>
        
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




<?php $this->endSection(); 
?>