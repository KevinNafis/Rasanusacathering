<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Arisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="rasa.css">
</head>
<body>
    <section class="paket">
        <h1>Pilih Paket Arisan</h1>

        <div class="paket-grid">
            <form action="paketarisan1.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Standar">
                <input type="hidden" name="harga" value="40000">

            <div class="card">
                <div class="img">
                <img src="imgmenu/nasiuduk.jpg" alt="Box Nasi">
                </div>
                <h3>Paket Standar</h3>
                <p class="harga">Rp 40.000 / pack (min. 100 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu nasi box, 2 snack berat,<br>
                        dan 1 minuman sesuai selera, dengan minimal<br>
                        pemesanan yang sudah tertera.</li>
                    </ul>
                    <ul>
                        <li>Nasi Box</li>
                        <li>Snack</li>
                        <li>Es Teh</li><br>
                    </ul>
                    <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>

            <form action="paketarisan2.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Normal">
                <input type="hidden" name="harga" value="65000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/sate.jpg" alt="Box Nasi">
                </div>
                <h3>Paket Normal</h3>
                <p class="harga">Rp 65.000 /pack (min. 250 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu nasi box, 3 snack berat, 1 puding,<br>
                        dan 1 minuman sesuai selera, dengan minimal<br>
                        pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Nasi Box</li>
                    <li>Snack</li>
                    <li>Puding</li>
                    <li>Minuman</li>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>

            <form action="paketarisan3.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Premium">
                <input type="hidden" name="harga" value="99000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/balado.jpg" alt="Box Nasi">
                </div>
                <h3>Paket Premium</h3>
                <p class="harga">Rp 99.000 / pack (min. 300 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu nasi box high class, 4 snack berat,<br> 
                        1 puding, dan 1 minuman sesuai selera, dengan minimal<br>
                        pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Nasi Box</li>
                    <li>Snack</li>
                    <li>Puding</li>
                    <li>Minuman</li>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>
        </div>
    </section>
</body>
</html>