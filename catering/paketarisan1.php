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
    <h1>Pilih Menu</h1>

        <form action="pesanan.php" method="POST">
    <h2>Nasi Box</h2>
        <div class="list nasibox">
            <label class="menu-item">
                <input type="checkbox" name="nasiuduk[]" value="Nasi Box">
                    <div class="info">
                    <img src="imgmenu/nasiuduk.jpg">
                    <h3>Nasi Uduk</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="sate[]" value="Nasi Box">
                    <div class="info">
                    <img src="imgmenu/sate2.jpg">
                    <h3>Sate</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 1 menu nasi</p>
            </label>
        </div>

    <h2>Snack</h2>
        <div class="list snack">
            <label class="menu-item">
                <input type="checkbox" name="risolkentang[]" value="Snack Arisan">
                    <div class="info">
                    <img src="imgmenu/risolkentang.jpg">
                    <h3>Snack Risol Kentang</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <input type="checkbox" name="tahuisi[]" value="Snack Arisan">
                    <div class="info">
                    <img src="imgmenu/tahuisi.jpg">
                    <h3>Snack Tahu Isi</h3>
                    </div>
                <span class="checkmark"></span>
            </label>
            <label class="menu-item">
                <p style="color: red;">* Pilih maksimal 2 snack</p>
            </label>
        </div>

    <h2>Minuman</h2>
        <div class="list minuman">
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
// limit checkbox
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
limitCheckbox("snack", 2, 1);
limitCheckbox("minuman", 1, 1);
</script>
</body>
</html>