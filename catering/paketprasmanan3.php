<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Premium</title>
    <link rel="stylesheet" href="rasa.css">
</head>

<body>
    
    <section class="menupaket">
        <h1>Pilih Menu</h1><br><br>
        <form action="pesanan.php" method="POST">

    <h2>Nasi</h2>
        <div class="list nasi">
            <label class="menu-item">
                <input type="checkbox" name="nasiputih[]" value="Nasi">
                    <div class="info">
                    <img src="imgmenu/nasiputih.jpg">
                    <h3>Nasi Putih</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="nasigurih[]" value="Nasi">
                    <div class="info">
                    <img src="imgmenu/nasigurih.jpg">
                    <h3>Nasi Gurih</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="nasiliwet[]" value="Nasi">
                    <div class="info">
                    <img src="imgmenu/nasiliwet.png">
                    <h3>Nasi Liwet</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 nasi</p>
            </label>
        </div>

    <h2>Sop</h2>
        <div class="list sop">
            <label class="menu-item">
                <input type="checkbox" name="sopsolo[]" value="Sop">
                    <div class="info">
                    <img src="imgmenu/sopsolo.jpg">
                    <h3>Sop Manten</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="sopmatahari[]" value="Sop">
                    <div class="info">
                    <img src="imgmenu/sopmatahari.jpg">
                    <h3>Sop Matahari</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 sop</p>
            </label>
        </div>
        
    <h2>Snack</h2>
        <div class="list snack">
            <label class="menu-item">
                <input type="checkbox" name="bolugulung[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/bolugulung.jpg">
                    <h3>Bolu Gulung</h3>
                </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="bolugulung[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/brownis.png">
                    <h3>Brownis</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="dadargulung[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/snackdargulung.jpg">
                    <h3>Snack Dadar Gulung</h3>
                    </div>
            <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kroket[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/snackkroket.jpg">
                    <h3>Snack Kroket</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="lumpia[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/snacklumpia.png">
                    <h3>Snack Lumpia</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="snacksosis[]" value="Snack Prasmanan">
                    <div class="info">
                    <img src="imgmenu/snacksosis.jpg">
                    <h3>Snack Sosis</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 4 snack</p>
            </label>
        </div>

    <h2>Dessert</h2>
        <div class="list dessert">
            <label class="menu-item">
                <input type="checkbox" name="puding choco[]" value="Dessert">
                    <div class="info">
                    <img src="imgmenu/puding (1).jpg">
                    <h3>Puding Choco Vanila</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="pudingvanila[]" value="Dessert">
                    <div class="info">
                    <img src="imgmenu/pudingg.jpg">
                    <h3>Puding Rose Vanila</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="puding[]" value="Dessert">
                    <div class="info">
                    <img src="imgmenu/pudingprem.jpg">
                    <h3>Puding Buah</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 dessert</p>
            </label>
        </div>

    <h2>Minuman</h2>
        <div class="list minuman">
            <label class="menu-item">
                <input type="checkbox" name="tea[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/minuman.jpg">
                    <h3>Es Melon Squash</h3>
                    </div>
                <span class="checkmark"></span>
            </label>

            <label class="menu-item">
                <input type="checkbox" name="teh[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/minumanteh.jpg">
                    <h3>Es Teh</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="cendol[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/cendol.png">
                    <h3>Es Cendol</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="eslacy]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/es.png">
                    <h3>Es Strawberry Lacy</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 minuman</p>
            </label>
        </div>
        <button type="submit" class="submit-btn">Kirim Pesanan</button>
        </form>    
    </section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function showAlert(pesan) {
    Swal.fire({
        title: "Pemberitahuan",
        text: pesan,
        icon: "warning",
        confirmButtonText: "OK"
    });
}
function limitCheckbox(className, max, min = 0) {
    const container = document.querySelector("." + className);
    if (!container) return;

    const checkboxes = container.querySelectorAll("input[type='checkbox']");
    checkboxes.forEach(cb => {
        cb.addEventListener("change", () => {
            const checked = container.querySelectorAll("input[type='checkbox']:checked");
            if (checked.length > max) {
                cb.checked = false;
                showAlert("Maksimal pilih " + max + " " + className);
                return;
            }
            checkboxes.forEach(c => {
                c.required = checked.length < min;
            });
        });
    });
}
document.querySelector("form").addEventListener("submit", function(e) {
    const rules = [
        {cls: "nasi", label: "Nasi", min: 1},
        {cls: "sop", label: "Sop", min: 1},
        {cls: "snack", label: "Snack", min: 1},
        {cls: "dessert", label: "Dessert", min: 1},
        {cls: "minuman", label: "Minuman", min: 1}
    ];
    for (let r of rules) {
        const container = document.querySelector("." + r.cls);
        if (!container) continue;

        const checked = container.querySelectorAll("input:checked");
        if (checked.length < r.min) {
            showAlert("Minimal pilih " + r.min + " " + r.label);
            e.preventDefault();
            return;
        }
    }
});
limitCheckbox("nasi", 1, 1);
limitCheckbox("sop", 1, 1);
limitCheckbox("snack", 4, 1);
limitCheckbox("dessert", 1, 1);
limitCheckbox("minuman", 1, 1);

</script>
</body>
</html>