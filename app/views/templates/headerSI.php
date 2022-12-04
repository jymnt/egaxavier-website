<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?=$data['judul']?></title>

    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="shortcut icon" href="<?=BASEURL;?>/img/Logo/2.png">
    <script src="<?= BASEURL; ?>/js/jquery-3.6.0.min.js"></script>

</head>
<body>


  <div class="container" style="height : 50px">
    <!-- Container fluid -->

  </div>

<div class="container">
  <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand" href="<?= BASEURL?>/homesi">HALAMAN ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Kelola Data</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Landing Page</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/Customer">Data Customer</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/paket">Data Paket</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/galeri">Data Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL;?>/package">Data Package</a>
          </li>
          <li>
            <a class="nav-link" href="<?= BASEURL;?>/login/logout">Logout(<?=$_SESSION['namaAdmin']?>)</a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>
</div>


