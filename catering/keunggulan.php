<?php
session_start();
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keunggulan</title>
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
    <style>
      .pembuka {
        font-size: 18px;
        line-height: 1.6;
        text-align: justify;
      }
      .card-text1 {
        text-align: justify;
      }
      .card-text2 {
        text-align: justify;
      }
      .card-text3 {
        text-align: justify;
      }
      .bi {
        font-size: 48px;
        color: #ff5722;
      }
      body {
        margin: 0;
      }
      a {
        text-decoration: none;
      }
      .a1 {
        text-decoration: none;
        color: #000;
        margin-top: 5px;
        margin-bottom: 5px;
      }
      .a2 {
        text-decoration: none;
        color: #000;
        margin-top: 8px;
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="homebenner.php">
          <img src="headerfooter/logorasa.jpeg" alt="" height="120px" width="auto" />
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
            <a class="nav-link" aria-current="page" href="homebenner.php">Home</a>
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
            <a class="nav-link" href="menu.html">Menu</a>
            <a class="nav-link active" href="keunggulan.php">Keunggulan</a>
            <a class="nav-link" href="kontak_kami.php">Kontak Kami</a>
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
    <!-- container -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <center>
              <h6>PILIH KAMI ADALAH PILIHAN YANG TEPAT</h6>
              <h2>Lebih Dari Sekadar Makanan</h2>
            </center>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
            <p class="pembuka">
              Indonesia kaya akan cita rasa yang tak ternilai, dan kami percaya
              kekayaan itu layak hadir di setiap momen spesial Anda. Mulai dari
              masakan Nusantara yang kaya rempah hingga hidangan berkuah yang
              hangat mengisi jiwa, kami menghadirkannya bukan sekadar sebagai
              makanan — tapi sebagai pengalaman yang membekas di hati.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-patch-check-fill"></i>
                <h5 class="card-title">Terpercaya</h5>
                <p class="card-text3">
                  bergabunglah dengan kami , terpercaya oleh ribuan pelanggan
                  yang telah merasakan kelezatan dan kualitas layanan kami.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-database-fill-down"></i>
                <i class="bi bi-graph-up"></i>
                <i class="bi bi-hand-thumbs-up-fill"></i>
                <h5 class="card-title">Harga Terjangkau, Kualitas Terbaik</h5>
                <p class="card-text3">
                  Nikmati cita rasa autentik masakan Nusantara dengan harga yang
                  terjangkau tanpa mengorbankan kualitas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-truck"></i>
                <h5 class="card-title">pengantaran</h5>
                <p class="card-text3">
                  kami menyediakan layanan pengantaran ke rumah, kantor, atau
                  lokasi acara Anda, memastikan makanan sampai dengan aman dan
                  tepat waktu.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- baris kedua -->
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-fork-knife"></i>
                <h5 class="card-title">Menu Beragam</h5>
                <p class="card-text3">
                  tersedia beragam menu yang dapat disesuaikan dengan kebutuhan
                  acara Anda, mulai dari hidangan pembuka hingga hidangan
                  penutup yang menggugah selera.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-stopwatch"></i>
                <h5 class="card-title">tepat waktu dan profesional</h5>
                <p class="card-text3">
                  kami berkomitmen untuk memberikan layanan yang tepat waktu dan
                  profesional, memastikan saat pengiriman dalam kondisi terbaik
                  dan siap disajikan.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3 w-100">
              <div class="card-body">
                <i class="bi bi-receipt"></i>
                <h5 class="card-title">Cita rasa khas nusantara</h5>
                <p class="card-text3">
                  kami menyediakan masakan nusantara dengan resep autentik
                  diwariskan secara turun-temurun,mengguanakan rempah serta
                  tanpa pengawet menghadirkan cita rasa yang kaya dan menggugah
                  selera yang memanjakan lidah Anda.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- footer -->
        <div class="row">
          <div class="col-lg-2 offset-lg-2">
            <a href="homebenner.php">
              <img src="headerfooter/logorasa.jpeg" alt="" height="100px" width="auto" />
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
                <img src="headerfooter/wa.png" style="height: 60px; width: auto" />
              </a>
              <a
                href="https://www.tiktok.com/@rasa.nusa.caterin7?_r=1&_t=ZS-95t33s4U0Lk"
                target="_blank"
                ><img src="headerfooter/tiktok.png" alt="" style="height: 50px; width: auto"
              /></a>
              <a
                href="https://www.instagram.com/rasa.nusacatering?igsh=b2s4bDRpZjJrdjA4"
                target="_blank"
                class="link"
                ><img
                  src="headerfooter/instagram.png"
                  alt=""
                  style="height: 50px; width: auto"
              /></a>
            </div>

            <img src="headerfooter/email.png" style="height: 20px; width: auto" />
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
