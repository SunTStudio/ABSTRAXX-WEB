<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- my css -->
    <?php $this->renderSection('link'); ?>
  </head>
  <body>
<section class="navigasi">
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid ms-5 me-5">
    <a class="navbar-brand fs-3 ms-5"><b>ABBSTRAXX</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active ms-5 me-3" aria-current="page" href="/admin/dashboard">Dashboard</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="/admin/users">Users</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="/admin/appointment">Appointment</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="/admin/monitoring">Monitoring</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link " href="/admin/setting">Setting</a>
        </li>
      </ul>
        <a href="/admin/profile" class="me-3"><i class="bi bi-file-person"></i> Profile</a>
       
       <a href="/Login/logout"><button class="btn btn-primary fw-medium me-5" type="submit">Logout</button></a>
      
    </div>
  </div>
</nav>
<hr>
</section>
<?= $this->renderSection('content'); ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>