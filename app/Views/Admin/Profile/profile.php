<?php $this->extend('Template/templateAdmin');
?>
<?php $this->section('link');
?>
<link rel="stylesheet" href="/css/profil.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<?php $this->endSection('link');
?>
<?php $this->section('content'); 
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 ps-2">
                <i class="bi bi-person-circle ms-5 my-icon"></i>
            </div>

            <div class="col-6 align-self-end pb-5 fw-medium">
                <p><span class="fs-2">Hi, Welcome</span>
                <br><span class="fs-3">Muhammad Rafi Nur Yuliana</span> 
                <br><span class="fs-5">Email : rafiyulian@gmail.com</span></p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-5">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Bio :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
           

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat :</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telepon :</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     
                </div>
                <button type="submit" class="btn btn-primary mt-4 me-2">Simpan Perubahan</button>
            <button type="submit" class="btn btn-warning mt-4">Batal</button>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col">
                        <p>Media Sosial :</p>
                        <i class ="bi bi-instagram fs-1 me-3"></i>
                        <i class="bi bi-twitter-x fs-1 me-3"></i>
                        <i class="bi bi-linkedin fs-1 me-3"></i>
                        <i class="bi bi-github fs-1 me-3"></i>
                        <p class="mt-4">Report Pekerjaan :</p>
                    </div>

                </div>
                <div class="row ">
                    <div class="col bg-primary rounded text-light">
                    <i class="bi bi-patch-check-fill fs-1 d-flex pt-3"><p class="d-flex ms-3 fs-3">05</p> <p class="ms-3 fs-4">Pengerjaan selesai bulan ini</p></i>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col bg-success rounded text-light">
                    <i class="bi bi-person-walking fs-1 d-flex pt-3"><p class="ms-3 fs-3">27</p> <p class="ms-3 fs-4">Pengerjaan dalam proses</p></i>
                    </div>
                </div>
                
            </div>

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



<?php $this->endSection();
?>