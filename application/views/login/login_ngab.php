<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?=base_url('assets/eNnoCuy/eNno/')?>assets/css/login.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Form Login</div>
      <div class="title signup">Form Registrasi</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Daftar</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="<?= base_url('login')?>" method="post" class="login">
          <pre>
          </pre>
          <div class="field">
            <input type="email" placeholder="Masukan Email" name="email_user" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Masukan Password" name="password" id="inputPassword" required>
          </div>
          <div class="form-check form-check-reverse form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="remember" onclick="lihat()">
            <label class="form-check-label" for="flexSwitchCheckDefault"><i>Show Password</i></label>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" class="btn btn-outline-success">
          </div>
          <div class="signup-link">Buat akun <a href="">Daftar sekarang</a></div>
          <br><br>
          <?php echo anchor('Dash', '<div class="btn btn-success mt-2"><<i class="fa-sharp fa-solid fa-arrow-left fa-bounce"></i> kembali sebagai tamu</div>'); ?>
        </form>
        <form action="<?= base_url('Login/add_user')?>" method="post" class="signup">
          <div class="field">
            <input type="text" placeholder="Full Name" name="nama_user"  autocomplete="off" required>
          </div>
          <div class="field">
            <input type="email" placeholder="Masukan Email" name="email_user" autocomplete="off" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Masukan Username" name="username" autocomplete="off" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Masukkan password" name="password" id="inputPass" required>
          </div>
          <div class="form-check form-check-reverse form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="remember" onclick="lihat_password()">
            <label class="form-check-label" for="flexSwitchCheckDefault"><i>Show Password</i></label>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" class="btn btn-outline-success" value="Daftar">
          </div>
          <div class="signup-link">Sudah punya akun? <a href="">Login</a></div>
        </form>
      </div>
    </div>
  </div>
  <script  src="<?=base_url('assets/eNnoCuy/eNno/')?>assets/js/login.js" rel="stylesheet" ></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    function lihat() {
      let x = document.getElementById("inputPassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <script>
    function lihat_password() {
      let y = document.getElementById("inputpass");
      if (y.type === "password") {
        y.type = "text";
      } else {
        y.type = "password";
      }
    }
  </script>

</body>
</html>
