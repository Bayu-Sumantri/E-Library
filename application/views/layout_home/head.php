<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/img/logo.png" rel="icon" type="image/png">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/css/style.css" rel="stylesheet" />
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/css/my_style.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> -->

  <!-- =======================================================
  * Template Name: eNno
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a style="text-decoration: none;" href="<?= base_url('Dash/admin') ?>">eNno</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url('Dash/') ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('Dash/pilih_buku')?>">Pilih Buku</a></li>
          <!-- <li><a class="nav-link scrollto" href="<?= base_url('Dash/admin')?>">Admin Login</a></li> -->
          <li><a class="nav-link scrollto" href="<?= base_url('Dash/') ?>#contact">Kontak</a></li>
          <?php
          if ($this->session->userdata('id_level') == '1' || $this->session->userdata('id_level') == '2') { ?>
          
        <a href="<?= base_url('Dash/admin') ?>">
          <img src="<?=base_url('assets/ennocuy/foto/'.$this->session->userdata('pic_user'))?>" class="avatar" size="1" style="opacity: .8;   vertical-align: middle;
        width: 50px;
        height: 50px;
        border-radius: 50%;">
      </a>

      
      
            
            
          <?php } else { ?>
            <li><a style="text-decoration: none;" class="getstarted scrollto" href="<?= base_url('Dash/login_regis')?>" >Sign In/Sign Up</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
