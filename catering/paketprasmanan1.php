<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Menu</title>
    
    <link rel="stylesheet" href="rasa.css">
</head>

<body>
    <section class="menupaket">
    <h1>Pilih Menu</h1>
        <form action="pesanan.php" method="POST">
            
        <h2>Menu Nasi</h2>
            <div class="list">
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Nasi Putih" required>
                    <div class="info">
                        <img src="nasiputih.jpg">
                        <h3>Nasi Putih</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Nasi Gurih">
                    <div class="info">
                        <img src="nasigurih.jpg">
                        <h3>Nasi Gurih</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Nasi Liwet">
                    <div class="info">
                        <img src="nasiliwet.png">
                        <h3>Nasi Liwet</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <p style="color: red;">* Pilih maksimal 1 menu nasi</p>
                </label>
            </div>

        <h2>Menu Snack</h2>
            <div class="list">
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Bolu Gulung">
                    <div class="info">
                        <img src="bolugulung.jpg">
                        <h3>Bolu Gulung</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Dadar Gulung">
                    <div class="info">
                        <img src="snackdargulung.jpg">
                        <h3>Dadar Gulung</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Kroket">
                    <div class="info">
                        <img src="snackkroket.jpg">
                        <h3>Kroket</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Lumpia">
                    <div class="info">
                        <img src="snacklumpia.png">
                        <h3>Lumpia</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <p style="color: red;">* Pilih maksimal 1 menu nasi</p>
                </label>
            </div>

        <h2>Minuman</h2>
            <div class="list">
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Es Melon">
                    <div class="info">
                        <img src="minuman.jpg">
                        <h3>Es Melon Squash</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <input type="checkbox" name="menu[]" value="Es Teh">
                    <div class="info">
                        <img src="minumanteh.jpg">
                        <h3>Es Teh</h3>
                    </div>
                    <span class="checkmark"></span>
                </label>
                <label class="menu-item">
                    <p style="color: red;">* Pilih maksimal 1 menu nasi</p>
                </label>
            </div>
            <button type="submit" class="submit-btn">Kirim Pesanan</button>
        </form>
    </section>
</body>
</html>