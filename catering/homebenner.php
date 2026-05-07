<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Promo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
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
      .bi {
        font-size: 48px;
        color: #ff5722;
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
            <a class="nav-link active" aria-current="page" href="homebenner.php">Home</a>
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
            <a class="nav-link" href="menu.php">Menu</a>
            <a class="nav-link" href="keunggulan.php">Keunggulan</a>
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
    <div id="bannerCarousel" class="carousel slide container mt-4" data-bs-ride="carousel">
        <div class="carousel-inner rounded shadow">
            <div class="carousel-item active">
                <img src="imgmenu/benner1.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="imgmenu/bennermanten.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="imgmenu/benner1.png" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold text-black">Promo Spesial</h2>
            <p class="mb-4">Nikmati diskon menarik untuk tiap paket</p>
            <div  class="row g-4">
                <div class="col-md-4">
                    <form action="paketultah3.php" method="POST">
                      <input type="hidden" name="nama_paket" value="Paket Premium">
                      <input type="hidden" name="harga" value="119000">
                    <div class="card shadow position-relative">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-20%</span>
                        <img src="imgmenu/kuemahal.jpeg" class="card-img-top" width="100%" height="275">
                        <div class="card-body">
                            <h5>Paket Ulang Tahun Premium</h5>
                            <p>
                            <span class="text-muted text-decoration-line-through">Rp 119.000</span><br>
                            <span class="text-danger fw-bold">Rp 95.200</span>
                            </p>
                            <button type="submit" class="btn btn-success w-100">+ Pesan</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="paketprasmanan3.php" method="POST">
                      <input type="hidden" name="nama_paket" value="Paket Premium">
                      <input type="hidden" name="harga" value="130000">
                    <div class="card shadow position-relative">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-30%</span>
                        <img src="imgmenu/es.png" class="card-img-top" width="100%" height="275">
                        <div class="card-body">
                            <h5>Paket Pernikahan Premium</h5>
                            <p>
                            <span class="text-muted text-decoration-line-through">Rp 130.000</span><br>
                            <span class="text-danger fw-bold">Rp 84.500</span>
                            </p>
                            <button type="submit" class="btn btn-success w-100">+ Pesan</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="paketarisan3.php" method="POST">
                      <input type="hidden" name="nama_paket" value="Paket Premium">
                      <input type="hidden" name="harga" value="99000">
                    <div class="card shadow position-relative">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-2">-40%</span>
                        <img src="imgmenu/balado.jpg" class="card-img-top" width="100%" height="275">
                        <div class="card-body">
                            <h5>Paket Arisan Premium</h5>
                            <p>
                            <span class="text-muted text-decoration-line-through">Rp 99.000</span><br>
                            <span class="text-danger fw-bold">Rp 59.400</span>
                            </p>
                            <button type ="submit" class="btn btn-success w-100">+ Pesan</button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Kenapa Harus Pilih Kami?</h2>
            <div class="card shadow p-4">
                <p class="mb-0">
                Rasa Nusa Catering menghadirkan masakan nusantara autentik dengan harga terjangkau
                dan kualitas terbaik. Dipercaya oleh banyak pelanggan, kami menyediakan menu beragam,
                layanan profesional, serta pengantaran tepat waktu untuk memastikan setiap acara Anda berjalan
                sempurna.
                </p>
            </div>
        </div>
    </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>