<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Prasmanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="rasa.css">
</head>

<body>

    <section class="paket">
        <h1>Pilih Paket Ulang Tahun</h1>
        <div class="paket-grid">

            <form action="paketultah1.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Standar">
                <input type="hidden" name="harga" value="45000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/kue.jpg" alt="Kue">
                </div>
                <h3>Paket Standar</h3>
                <p class="harga">Rp 45.000 / pack (min. 100 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu kue, 1 pack snack chiki, sesuai 
                        selera, dengan minimal pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Kue</li>
                    <li>Snack</li><br><br><br>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>

            <form action="paketultah2.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Normal">
                <input type="hidden" name="harga" value="75000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/kueco.jpg" alt="Kue">
                </div>
                <h3>Paket Normal</h3>
                <p class="harga">Rp 75.000 /pack (min. 250 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu kue, 1 nasi box, 1 pack snack chiki,
                     sesuai selera, dengan minimal pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Kue</li>
                    <li>Nasi Box</li>
                    <li>Snack</li><br><br>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>

            <form action="paketultah3.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Premium">
                <input type="hidden" name="harga" value="119000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/kuemahal.jpeg" alt="Kue">
                </div>
                <h3>Paket Premium</h3>
                <p class="harga">Rp 119.000 / pack (min. 300 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu kue, 1 tumpeng, 1 nasi box, 1 pack snack chiki,
                     sesuai selera, dengan minimal pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Kue</li>
                    <li>Nasi Tumpeng</li>
                    <li>Nasi Box</li>
                    <li>Snack</li>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>
        </div>
    </section>
</body>
</html>