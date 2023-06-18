<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>E-Library NOBAR</h1>
          <h2>Situs perpustakaan online terbaru dan terbesar</h2>
          <div class="d-flex">
            <a href="#about" style="text-decoration: none;" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/hero-img.png" class="img-fluid animated" width="60%">
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon
                src="https://cdn.lordicon.com/jqeuwnmb.json"
                trigger="hover"
                style="width:50px;height:50px">
              </lord-icon></div>
              <h4 class="title"><a href="">Online Platform</a></h4>
              <p class="description">Platform ini menyediakan tempat dan mempermudah para pembaca dalam membaca hasil investigasi jurnalistik kami</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon
                src="https://cdn.lordicon.com/wxnxiano.json"
                trigger="morph"
                style="width:50px;height:50px">
              </lord-icon></div>
              <h4 class="title"><a href="">Koleksi Lengkap</a></h4>
              <p class="description">Perpustakaan Online kami menyediakan semua jenis buku dan akan terus bertambah setiap harinya</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                <lord-icon
                src="https://cdn.lordicon.com/gqdnbnwt.json"
                trigger="hover"
                style="width:50px;height:50px">
              </lord-icon></div>
              <h4 class="title"><a href="">Perkembangan Pesat</a></h4>
              <p class="description">Platform kami mudah dijangkau, nyaman dilihat, dan berita nya terpercaya</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/about.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

        <?php
        // $libra = $this->db->query("SELECT * FROM jurnal")->result();

        // $data = mysqli_num_rows($libra);
        ?>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1975" data-purecounter-duration="1" class="purecounter"></span>
            <p>Buku</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Penulis</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="63" data-purecounter-duration="1" class="purecounter"></span>
            <p>Bahasa</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Kategori</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>yekang</span>
          <h2>yekang</h2>
          <p>infokan</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">semua</li>
              <li data-filter=".filter-wojak">wojak</li>
              <li data-filter=".filter-dugong">dugong</li>
              <li data-filter=".filter-lainnya">lainnya</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-wojak">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/wojak1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>wojak 1</h4>
              <p>wojak</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/akang/wojak1.jpg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wojak 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lainnya">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/antumsudahtobat.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>lainnya 1</h4>
              <p>lainnya</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lainnya 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-wojak">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/wojak2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>wojak 2</h4>
              <p>wojak</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/wojak2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wojak 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dugong">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>dugong 1</h4>
              <p>dugong</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="dugong 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lainnya">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong_terbang.jfif" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>lainnya 2</h4>
              <p>lainnya</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong_terbang.jfif" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lainnya 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-wojak">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/wojak3.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>wojak 3</h4>
              <p>wojak</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/wojak3.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="wojak 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dugong">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>dugong 2</h4>
              <p>dugong</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="dugong 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dugong">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/dugong3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>dugong 3</h4>
              <p>dugong</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="dugong 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lainnya">
            <img src="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/letmethink.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>lainnya 3</h4>
              <p>lainnya</p>
              <a href="<?=base_url('assets/ennocuy/enno/')?>assets/img/akang/letmethink.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="lainnya 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div> -->
    <!-- </section>End Portfolio Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Kontak</span>
          <h2>Kontak</h2>
          <p>Kontak kami tesedia 24 jam setiap hari</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Cipinang Pulo No.19, RT.7/RW.14, Cipinang Besar Utara, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13410</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>NobarTeam@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 852 1173 7356</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3533103300438!2d106.88180181476903!3d-6.217052295499468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36a76939ce9%3A0x1dd69348f251fa2a!2sSMKN%2046%20JAKARTA!5e0!3m2!1sid!2sid!4v1680225548770!5m2!1sid!2sid" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form class="php-email-form" name="submit-to-google-sheet">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda</label>
                  <input autocomplete="off" type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Email Anda</label>
                  <input autocomplete="off" type="email" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
                </div>
              </div>
              <label for="no_hp">Nomor Telepon</label>
              <div class="input-group mb-3">
                <input autocomplete="off" type="tel" class="form-control" name="noHp" placeholder="+62 846 ***" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Pesan</label>
                <textarea class="form-control" autocomplete="off" name="pesan" rows="10" placeholder="" required></textarea>
              </div>
              <div class="text-center"><button type="submit" class="submit">Kirim Pesan</button>

                <button class="btn btn-primary loading d-none" type="button" disabled>
                  <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                  Loading...
                </button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->