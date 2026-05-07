<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami</title>
 
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

      /* kontak */
      .header {
        text-align: center;
        margin-bottom: 60px;
      }
      .layout {
        display: flex;
        justify-content: center;
      }

      .form-box {
        background: #fff;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      }
      form {
        display: flex;
        flex-direction: column;
        gap: 20px;
      }
      input,
      select,
      textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 10px;
        outline: none;
        font-size: 14px;
      }

      button {
        background: #047857;
        color: #fff;
        padding: 15px;
        border: none;
        border-radius: 12px;
        font-weight: bold;

      }
      button:hover {
        background: #054f3a;
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
            <a class="nav-link" href="menu.php">Menu</a>
            <a class="nav-link" href="keunggulan.php">Keunggulan</a>
            <a class="nav-link active" href="kontak_kami.php">Kontak Kami</a>
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
  <section class="kontak">
    <div class="container">

      <div class="header">
        <br><br><br>
        <h1>Kontak Kami</h1>
        <h2>Wujudkan Acara Anda Bersama Kami</h2>
        <p>Tim kami siap membantu dari konsultasi sampai hari H</p>
      </div>

      <div class="layout">
        <div class="form-box">
          <form>
            <div class="row">
              <div>
                <label>Nama Lengkap </label>
                <input type="text">
              </div>
              <div>
                <label>Email Anda</label>
                <input type="email">
              </div>
            </div>

          <label>Jenis Acara </label>
            <select>
              <option value="">Pilih Jenis Acara</option>
              <option value="pernikahan">Pernikahan</option>
              <option value="ulangtahun">Ulang Tahun</option>
              <option value="arisan">Arisan</option>
              <option value="lainnya">Lainnya</option>
            </select>

          <label>Pesan</label>
          <textarea rows="5"></textarea>
              <button type="submit">Kirim Pesan ke Kami</button>
          </form>
        </div>

      </div>
      
    </div> <br><br>
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
</body>
</html>