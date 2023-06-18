    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a style="text-decoration: none;" href="<?=base_url('Dash/')?>">E-Library</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/akang/dugong_terbang.jfif" alt="" class="img-fluid"></a> -->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="<?=base_url('Dash/')?>">Home</a></li>
            <li><a class="nav-link scrollto active" href="<?= base_url('Dash/pilih_buku') ?>">Pilih Buku</a></li>
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

            <!-- <li>
              <a class="getstarted scrollto" href="#">Get Started</a>
            </li> -->
          </ul>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    End Header

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

        

<h1><?= $buku->judul ?></h1> <h3>(<?= $buku->tahun_rilis ?>)</h3>
<hr>
<div>
  <?= $buku->isi_buku ?>
</div>


</div>

        </div>
      

      </section>
    </main>
    <!-- End #main -->


    <!-- <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/tinymce/tinymce.min.js"></script> -->

		<script>
			// tinymce.init({
			// 	forced_root_block : false,
			// 	selector: '#editor',
			// 	width: 1000,
			// 	height: 300,
			// 	readonly: 1,
			// });

      //       tinymce.activeEditor.getBody().setAttribute('contenteditable', false);
		</script>