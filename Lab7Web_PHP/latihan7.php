<h2>Latihan 7: Pengolahan Data Transaksi Sederhana</h2>
<?php
$error = null;
$subtotal = null;
$barang = "";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['page']) && $_GET['page'] === 'latihan7') {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = $_POST["harga"] ?? "";
    $jumlahInput = $_POST["jumlah"] ?? "";

    if ($barang === "" || !is_numeric($hargaInput) || !ctype_digit((string)$jumlahInput) || (float)$hargaInput < 0 || (int)$jumlahInput < 1) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>

<form method="POST" action="index.php?page=latihan7">
    <p><label>Nama barang <input name="barang" required value="<?= htmlspecialchars($barang) ?>"></label></p>
    <p><label>Harga <input name="harga" type="number" min="0" step="0.01" required></label></p>
    <p><label>Jumlah <input name="jumlah" type="number" min="1" step="1" required></label></p>
    <button type="submit">Hitung</button>
</form>

<?php
if ($error) {
    echo "<p style='color:red;'>" . htmlspecialchars($error) . "</p>";
} elseif ($subtotal !== null) {
    echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
}
?>
