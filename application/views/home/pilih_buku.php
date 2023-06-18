    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a style="text-decoration: none;" href="<?=base_url('Dash/')?>">E-Library</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/akang/dugong_terbang.jfif" alt="" class="img-fluid"></a> -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="<?=base_url('Dash/')?>">Home</a></li>
            <li><a class="nav-link scrollto active" href="#">Pilih Buku</a></li>
            <li><a class="nav-link scrollto" href="<?= base_url('Dash/#contact') ?>">Kontak</a></li>
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
        </nav>
        <!-- .navbar -->
      </div>
    </header>

    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <section class="breadcrumbs">
        <div class="container mt-4">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Pilih Buku</h2>
            <ol>
              <li><a style="text-decoration: none; color: black;" href="<?=base_url('Dash/pilih_buku')?>">Home</a></li>
              <li>Pilih Buku</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- End Breadcrumbs -->
      <section class="inner-page">
        <div class="container">



        <div class="row" id="isi">

<?php

    if($this->session->userdata('id_level') == '1' || $this->session->userdata('id_level') == '2'){ ?>

      <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Cari Keyword" aria-label="Recipient's username" aria-describedby="button-addon2" autocomplete="off">
            <button class="btn btn-outline-dark" type="submit" name="cari" id="button-addon2"><i data-feather="search"></i> Cari</button>
          </div>
        </form>

      <?php


      if($_POST) {

        $where = "WHERE judul LIKE '%$_POST[keyword]%' OR tahun_rilis LIKE '%$_POST[keyword]%' OR genre LIKE '%$_POST[keyword]%' OR penulis LIKE '%$_POST[keyword]%'";
      } else {
        $where = "";
      }

      $libra = $this->db->query("SELECT * FROM jurnal $where")->result();


      ?>

    <?php
    } else {
      $libra = $this->db->query("SELECT * FROM jurnal LIMIT 5")->result();

    } ?>


  <?php foreach ($libra as $data) : ?>

    <div class="col-md-4">
      <div class="card mb-4" style="height: 50rem !important">
      <img src="<?=base_url('assets/ennocuy/foto/'.$data->sampul )?>" class="card-img-top" style="height: 15rem !important" size="10" alt="...">
      <div class="card-body">
        <h2><?= $data->judul ?></h2>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Tahun : <?= $data->tahun_rilis ?></li>
        <li class="list-group-item"><b>Genre :</b><br><?= $data->genre ?></li>
        <li class="list-group-item"><b>Penulis :</b> <?= $data->penulis ?></li>
      </ul>
      <div class="card-footer">
      <?php echo anchor('Dash/lihat_buku/' . $data->id_buku, '<button class="btn btn-primary"><i data-feather="eye"></i> Lihat</button>'); ?>
      </div>
    </div>

    </div>

    <?php endforeach; ?>

</div>
<?php if($this->session->userdata('id_level') ==! '1' || $this->session->userdata('id_level') ==! '2') { ?>
<div>
  <h3 class="text-center mt-3">Login untuk melihat lebih banyak</h3>
  
</div>

  <?php } ?>
</div>

        </div>


      </section>
    </main>
    <!-- End #main -->
