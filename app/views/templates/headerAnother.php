<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= BASEURL; ?>/css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/styles.css">
    <link rel="shortcut icon" href="<?=BASEURL;?>/img/Logo/2.png">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ega Xavier Photography</title>
</head>

  <body id="home" class="scrollspy">
    
    <!-- navbar -->
    <div class="nav_links navbar-fixed" id='nav'>
    <!-- transparent z-depth-0 -->
      <nav class="brown lighten-4 z-depth-0 nav_height">
          <div class="container nav_links">
          <div class="nav-wrapper">
            <!-- bisa pake image -->
            <a href="<?= BASEURL?>" class="brand-logo">
            <img class="main-logo-another" src="<?=BASEURL;?>/img/Logo/2.png"></a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a></li>
              <li><a href="<?=BASEURL?>/portfolio">Portfolio</a></li>
              <li><a href="<?= BASEURL;?>/contactUs">Contact</a></li>

            </ul>
          </div>
      </div>
      </nav>
  </div>
  <div class="box"></div>

  <!-- side nav -->
<ul class="sidenav grey lighten-3 center" id="mobile-nav">
  <li class="btn-floating waves-effect waves-light"><i class="material-icons sidenav-close">close</i></li>
  <li><a href="<?= BASEURL;?>">Home</a></li>
  <li><a href="<?= BASEURL;?>/portfolio">Portfolio</a></li>
  <li><a href="<?= BASEURL;?>/contactUs">Contact</a></li>
</ul>