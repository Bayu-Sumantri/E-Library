 <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>eNno</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>eNno</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/enno-free-simple-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/jquery/jquery.min.js"></script>

<script>
  $(document).ready(function() {

    $('#keyword').on('keyup', function () {
      console.log('ok');
    });    

  });
</script>


  <!-- Vendor JS Files -->
  <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src=" <?=base_url('assets/ennocuy/enno/')?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Feather Icon -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace()
</script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('assets/ennocuy/enno/')?>assets/js/main.js"></script>


<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src=" <?=base_url('assets/eNnoCuy/eNno/')?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <!-- <script src="assets/js/main.js"></script> -->

<script>

</script>

  <!-- Web App -->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbwvKfmQKf-87q5LBQXW9F8U-RDJZ9tiObnkAekbMewGRz2InN5cFFlGOBAWU3t_kVpU/exec'
    const form = document.forms['submit-to-google-sheet'];
    const btnSubmit = document.querySelector('.submit');
    const btnLoading = document.querySelector('.loading');

    form.addEventListener('submit', e => {
      e.preventDefault()

      btnLoading.classList.toggle('d-none');
      btnSubmit.classList.toggle('d-none');
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
        Swal.fire(
          'Success !!!',
          'Thank you for your feedback',
          'success'
          )

          btnLoading.classList.toggle('d-none');
          btnSubmit.classList.toggle('d-none');

                // Reset form
                form.reset();
        console.log('Success!', response)})
        .catch(error => console.error('Error!', error.message))
    })
  </script>

  <script>
          function lihat() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>
  <script>
          function lihat_regis() {
            var x = document.getElementById("inputPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>





</body>

</html>