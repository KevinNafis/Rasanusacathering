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

    <h2>Tumpeng</h2>
        <div class="list tumpeng">
            <label class="menu-item">
                <input type="checkbox" name="tumpeng[]" value="Tumpeng">
                    <div class="info">
                    <img src="imgmenu/Tumpeng2.jpg">
                    <h3>Nasi Tumpeng</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 tumpeng</p>
            </label>
        </div>

    <h2>Kue</h2>
        <div class="list kue">
            <label class="menu-item">
                <input type="checkbox" name="kuepinkyvanila[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kuemahal.jpeg">
                    <h3>Kue Golden Vanila</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kuehellokitty[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kuekity.jpg">
                    <h3>Kue Helo Kitty Pink</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kuecoklat[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kueco.jpg">
                    <h3>Kue Vanila Choco</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kuechoco[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kueprem.jpg">
                    <h3>Kue Vanila rose</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kue[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kue.jpg">
                    <h3>Kue Chocolate</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="kuechocovanila[]" value="Kue">
                    <div class="info">
                    <img src="imgmenu/kuecho.jpg">
                    <h3>Kue Chocolate</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 kue</p>
            </label>
        </div>

    <h2>Nasi Box</h2>
        <div class="list nasibox">
            <label class="menu-item">
                <input type="checkbox" name="nasibox[]" value="Nasi Box">
                    <div class="info">
                    <img src="imgmenu/nasiboxx.jpg">
                    <h3>Nasi Box</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="nasibox[]" value="Nasi Box">
                    <div class="info">
                    <img src="imgmenu/nasibox.jpg">
                    <h3>Nasi Box</h3>
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
                <input type="checkbox" name="snackpack[]" value="Snack Ultah">
                    <div class="info">
                    <img src="imgmenu/snack.jpg">
                    <h3>Snack Chiki</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="snackchiki[]" value="Snack Ultah">
                    <div class="info">
                    <img src="imgmenu/snc.jpg">
                    <h3>Snack Chiki</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="snackchikipack[]" value="Snack Ultah">
                    <div class="info">
                    <img src="imgmenu/sn.jpg">
                    <h3>Snack Chiki</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="snack+[]" value="Snack Ultah">
                    <div class="info">
                    <img src="imgmenu/snak.jpg">
                    <h3>Snack Lengkap</h3>
                    </div>
                <span class="checkmark"></span>
            </label>

            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 snack</p>
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
        {cls: "tumpeng", label: "Tumpeng", min: 1},
        {cls: "kue", label: "Kue", min: 1},
        {cls: "nasibox", label: "Nasi Box", min: 1},
        {cls: "snack", label: "Snack", min: 1}
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
limitCheckbox("tumpeng", 1, 1);
limitCheckbox("kue", 1, 1);
limitCheckbox("nasibox", 1, 1);
limitCheckbox("snack", 1, 1);
</script>
</body>
</html>