<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Standar</title>
    <link rel="stylesheet" href="rasa.css">
</head>

<body>

    <section class="menupaket">
    <h1>Pilih Menu</h1><br><br>
        <form action="pesanan.php" method="POST">

    <h2>Nasi Box</h2>
        <div class="list nasibox">
            <label class="menu-item">
                <input type="checkbox" name="balado[]" value="nasi box">
                    <div class="info">
                    <img src="imgmenu/balado.jpg">
                    <h3>Nasi Ayam Balado</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="nasitumpeng[]" value="nasi box">
                    <div class="info">
                    <img src="imgmenu/tumpeng.jpg">
                    <h3>Nasi Ayam Tumpeng</h3>
                    </div>
                    <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="nasirendang[]" value="nasi Box">
                    <div class="info">
                    <img src="imgmenu/rendang.jpg">
                    <h3>Nasi Rendang</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="sate[]" value="nasi box">
                    <div class="info">
                    <img src="imgmenu/sate.jpg">
                    <h3>Sate Lilit</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 nasi box</p>
            </label>
        </div>

    <h2>Snack</h2>
        <div class="list snack">
            <label class="menu-item">
                <input type="checkbox" name="rotiabon[]" value="snack arisan">
                    <div class="info">
                    <img src="imgmenu/rotiabon.jpg">
                    <h3>Snack Roti Abon Gulung</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="risolkentang[]" value="snack arisan">
                    <div class="info">
                    <img src="imgmenu/risolkentang.jpg">
                    <h3>Snack Risol Kentang</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="risolmayo[]" value="snack arisan">
                    <div class="info">
                    <img src="imgmenu/risolmayo.jpg">
                    <h3>Snack Risol Mayo</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="tahubakso[]" value="Snack arisan">
                    <div class="info">
                    <img src="imgmenu/tahubakso.jpg">
                    <h3>Snack Tahu Isi Bakso</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="tahuisi[]" value="Snack arisan">
                    <div class="info">
                    <img src="imgmenu/tahuisi.jpg">
                    <h3>Snack Tahu Isi</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="snackkroket[]" value="Snack Arisan">
                    <div class="info">
                    <img src="imgmenu/snackkroket.jpg">
                    <h3>Snack Kroket</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 4 snack</p>
            </label>
        </div>

    <h2>Puding</h2>
        <div class="list puding">
            <label class="menu-item">
                <input type="checkbox" name="pudingcoklat[]" value="Puding">
                    <div class="info">
                    <img src="imgmenu/pudingco.jpg">
                    <h3>Puding Cokelat</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="pudingmangga[]" value="Puding">
                    <div class="info">
                    <img src="imgmenu/pudingmangga.jpg">
                    <h3>Puding Mangga</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 puding</p>
            </label>
        </div>

    <h2>Minuman</h2>
        <div class="list minuman">
            <label class="menu-item">
                <input type="checkbox" name="esbuah[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/esbuah-Cup.jpg">
                    <h3>Es Buah Jumbo</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="esbuah[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/esbuahh.jpg">
                    <h3>Es Buah</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="tea[]" value="Minuman">
                    <div class="info">
                    <img src="imgmenu/tea.jpg">
                    <h3>Es Teh</h3>
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
                showAlert("Maksimal pilih " + max + " pada " + className);
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
        {cls: "nasibox", label: "Nasi Box", min: 1},
        {cls: "snack", label: "Snack", min: 1},
        {cls: "puding", label: "Puding", min: 1},
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
limitCheckbox("nasibox", 1, 1);
limitCheckbox("snack", 4, 1);
limitCheckbox("puding", 1, 1);
limitCheckbox("minuman", 1, 1);
</script>
</body>
</html>