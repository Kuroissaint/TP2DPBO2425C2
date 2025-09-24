<?php
require_once "ProdukImpor.php";
session_start();

unset($_SESSION['produk']);

// Inisialisasi dummy 5 produk (sekali aja kalau kosong)
if (!isset($_SESSION['produk']) || count($_SESSION['produk']) === 0) {
    $_SESSION['produk'] = [
        new ProdukImpor("P001", "Laptop Gaming", "Laptop spek tinggi", 15000000,
                        "Asus", "ROG Strix", "220V", "Jepang", "API123", "INV001", "laptop.jpg"),
        new ProdukImpor("P002", "Smartphone", "HP flagship terbaru", 12000000,
                        "Samsung", "Galaxy S25", "5V", "Korea Selatan", "API456", "INV002", "hp.jpg"),
        new ProdukImpor("P003", "TV LED", "TV layar lebar 55 inci", 7000000,
                        "LG", "OLED55", "220V", "Korea Selatan", "API789", "INV003", "tv.jpg"),
        new ProdukImpor("P004", "Kulkas", "Kulkas hemat energi 2 pintu", 8500000,
                        "Panasonic", "NR-BX421", "220V", "Thailand", "API321", "INV004", "kulkas.jpg"),
        new ProdukImpor("P005", "Headphone", "Noise Cancelling Headset", 3500000,
                        "Sony", "WH-1000XM6", "5V", "Jepang", "API654", "INV005", "headphone.jpg")
    ];
}

$produk = $_SESSION['produk'];

// Tambah produk baru
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id       = $_POST["id"];
    $nama     = $_POST["nama"];
    $deskripsi= $_POST["deskripsi"];
    $harga    = $_POST["harga"];
    $merek    = $_POST["merek"];
    $model    = $_POST["model"];
    $tegangan = $_POST["tegangan"];
    $negara   = $_POST["negara"];
    $api      = $_POST["api"];
    $invoice  = $_POST["invoice"];

    $gambar = "";
    if (!empty($_FILES["gambar"]["name"])) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) mkdir($targetDir, 0777, true);
        $fileName = time() . "_" . basename($_FILES["gambar"]["name"]);
        $targetFile = $targetDir . $fileName;
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $targetFile);
        $gambar = $fileName;
    }

    $_SESSION['produk'][] = new ProdukImpor(
        $id, $nama, $deskripsi, $harga, $merek, $model, $tegangan,
        $negara, $api, $invoice, $gambar
    );

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Produk Impor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Daftar Produk Elektronik Impor</h2>

<table>
    <tr>
        <th>Gambar</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Merek</th>
        <th>Model</th>
        <th>Tegangan</th>
        <th>Negara</th>
        <th>API</th>
        <th>Invoice</th>
    </tr>
    <?php foreach ($produk as $p): ?>
    <tr>
        <td>
            <?php if ($p->getGambar()): ?>
                <img src="uploads/<?= htmlspecialchars($p->getGambar()) ?>" alt="gambar">
            <?php else: ?>
                (tidak ada)
            <?php endif; ?>
        </td>
        <td><?= htmlspecialchars($p->getIdProduk()) ?></td>
        <td><?= htmlspecialchars($p->getNama()) ?></td>
        <td><?= htmlspecialchars($p->getDeskripsi()) ?></td>
        <td>Rp <?= number_format($p->getHarga(), 0, ',', '.') ?></td>
        <td><?= htmlspecialchars($p->getMerek()) ?></td>
        <td><?= htmlspecialchars($p->getModel()) ?></td>
        <td><?= htmlspecialchars($p->getTegangan()) ?></td>
        <td><?= htmlspecialchars($p->getNegara()) ?></td>
        <td><?= htmlspecialchars($p->getNomorAPI()) ?></td>
        <td><?= htmlspecialchars($p->getInvoice()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<div class="form-container">
    <h3>Tambah Produk Baru</h3>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="id" placeholder="ID Produk" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <textarea name="deskripsi" placeholder="Deskripsi"></textarea>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="text" name="merek" placeholder="Merek">
        <input type="text" name="model" placeholder="Model">
        <input type="text" name="tegangan" placeholder="Tegangan">
        <input type="text" name="negara" placeholder="Negara">
        <input type="text" name="api" placeholder="Nomor API">
        <input type="text" name="invoice" placeholder="Invoice">
        <input type="file" name="gambar" accept="image/*">
        <button type="submit">Tambah Produk</button>
    </form>
</div>

</body>
</html>
