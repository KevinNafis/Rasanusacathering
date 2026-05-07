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
        <h1>Pilih Paket Prasmanan</h1>
        <div class="paket-grid">

            <form action="paketprasmanan2.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Normal">
                <input type="hidden" name="harga" value="75000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/nasigurih.jpg" alt="Nasi Liwet">
                </div>
                <h3>Paket Normal</h3>
                <p class="harga">Rp 75.000 /pack (min. 350 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu nasi, 2 snack berat, 
                        dan 1 minuman sesuai selera, dengan minimal<br>
                        pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Nasi + lauk</li>
                    <li>Snack</li>
                    <li>Minuman</li> <br>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>
            <form action="paketprasmanan3.php" method="POST">
                <input type="hidden" name="nama_paket" value="Paket Premium">
                <input type="hidden" name="harga" value="130000">
            <div class="card">
                <div class="img">
                    <img src="imgmenu/nasiliwet.png" alt="Nasi Gurih">
                </div>
                <h3>Paket Premium</h3>
                <p class="harga">Rp 130.000 / pack (min. 400 pack)</p>
                <ul>
                    <h4>Deskripsi</h4>
                    <li>Dapat memilih 1 jenis menu nasi, 1 jenis sop, 4 snack berat, 
                        1 dessert, dan 1 minuman sesuai selera, dengan minimal
                        pemesanan yang sudah tertera.</li>
                </ul>
                <ul>
                    <li>Nasi + lauk</li>
                    <li>Sop</li>
                    <li>Snack & Dessert</li>
                    <li>Minuman</li>
                </ul>
                <button type="submit" class="btn btn-success w-100">Pilih Paket</button>
            </div>
            </form>

        </div>
    </section>
</body>
</html>