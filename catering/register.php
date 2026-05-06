<?php
session_start();
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <!-- head -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Register</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    />
    <!-- css -->
    <style>
      .bi {
        font-size: 48px;
        color: #ff5722;
      }
      body {
        margin: 0;
        background-color: bisque;
      }
      .form-container {
        max-width: 800px;
        margin: auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .table-form td {
        padding: 12px;
        border-bottom: 1px solid #dee2e6;
      }
      .label-cell {
        width: 40%;
      }
      .btn-submit {
        background-color: #437e55;
        color: white;
      }
      .btn-submit:hover {
        background-color: #356343;
        color: white;
      }
    </style>
  </head>
  <!-- body -->
  <body>
    <?php
    if (isset($_POST['register'])) {
        $namalengkap = $_POST['namalengkap'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];

        // Simpan data ke database
        $query = "INSERT INTO cust (namalengkap, username, email, password, notelp, alamat) VALUES ('$namalengkap', '$username', '$email', '$password', '$no_telp', '$alamat')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal: " . mysqli_error($koneksi) . "');</script>";
        }
    }
    
    
    
    ?>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="home.html">
          <img src="logorasa.jpeg" alt="" height="120px" width="auto" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
            <a class="nav-link" href="#">Tentang Kami</a>
            <a class="nav-link" href="menu.php">Menu</a>
            <a class="nav-link" href="keunggulan.php">Keunggulan</a>
            <a class="nav-link" href="#">Kontak Kami</a>
            <!-- Mobile (text) -->
            <a href="keranjang.php" class="a1 d-block d-lg-none">Keranjang</a>
            <a href="login.php" class="a2 d-block d-lg-none">Login</a>
          </div>
          <div class="d-flex gap-3 align-items-center ms-auto">
            <!-- Desktop (icon) -->
            <a href="keranjang.php" class="d-none d-lg-block">
              <i class="bi bi-cart3 fs-4"></i>
            </a>
            <a href="login.php" class="d-none d-lg-block">
              <i class="bi bi-person-circle fs-4"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- judul -->
    <center>
      <h3 class="text-center mb-4 py-4">Daftar Akun</h3>
    </center>
    <!-- form tabel -->
    <form action="" method="post">
      <div class="form-container">
        <table class="table table-borderless table-form">
          <tr>
            <td class="label-cell">Nama Lengkap</td>
            <td>
              <input type="text" class="form-control" name="namalengkap" required />
            </td>
          </tr>
           <tr>
            <td class="label-cell">Username</td>
            <td>
              <input type="text" class="form-control" name="username" required />
            </td>
          </tr>
          <tr>
            <td class="label-cell">Email</td>
            <td>
              <input type="email" class="form-control" name="email" required />
            </td>
          </tr>
          <tr>
            <td class="label-cell">Password</td>
            <td>
              <input type="password" class="form-control" name="password" required />
            </td>
          </tr>
          <tr>
            <td class="label-cell">No Telepon</td>
            <td>
              <input type="text" class="form-control" name="no_telp" required />
            </td>
          </tr>             
          <tr>
            <td class="label-cell">Alamat</td>
            <td>
              <textarea
                class="form-control"
                name="alamat"
                rows="4"
                required
              ></textarea>
            </td>
          </tr>
        </table>

        <div class="text-center mt-3">
          <button
            type="submit"
            class="btn btn-submit text-uppercase"
            name="register"
          >
            Register
          </button>
        </div>
      </div>
    </form>
    <br>
    <!-- footer -->
        <div class="row">
          <div class="col-lg-2 offset-lg-2">
            <a href="menu.php">
              <img src="logorasa.jpeg" alt="" height="100px" width="auto" />
            </a>
          </div>
          <div class="col-lg-4">
            <a href="privacy.php">Privacy Policy</a>
            <br />
            <a href="terms&condition.php">Terms & Conditions</a>
          </div>
          <div class="col-lg-4">
            <div>
              <h6>Alamat</h6>
              <p>
                Jl. Kutai Utara No.1<br />Kelurahan Sumber, Kecamatan
                Banjarsari, Kota Surakarta, Jawa Tengah
              </p>
            </div>

            <div>
              <a href="https://wa.me/088221522682" target="_blank">
                <img src="wa.png" style="height: 60px; width: auto" />
              </a>
              <a
                href="https://www.tiktok.com/@rasa.nusa.caterin7?_r=1&_t=ZS-95t33s4U0Lk"
                target="_blank"
                ><img src="tiktok.png" alt="" style="height: 50px; width: auto"
              /></a>
              <a
                href="https://www.instagram.com/rasa.nusacatering?igsh=b2s4bDRpZjJrdjA4"
                target="_blank"
                class="link"
                ><img
                  src="instagram.png"
                  alt=""
                  style="height: 50px; width: auto"
              /></a>
            </div>

            <img src="email.png" style="height: 20px; width: auto" />
            rasanusacatering1@gmail.com
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" style="background-color: orange">
      <p class="mb-0" style="text-align: center; padding: 20px">
        @copyright 2026 Rasa Nusa Catering . All rights reserved.
      </p>
    </div>
  </body>
</html>
