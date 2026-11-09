<h2>Latihan 5: Pencarian Nama dari Array (GET)</h2>
<?php
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita", "Siti", "Budi"];
$hasilPencarian = [];

$kataGet = $_GET["kata"] ?? "";
if ($kataGet !== "") {
    foreach ($daftarNama as $nama) {
        if (stripos($nama, $kataGet) !== false) {
            $hasilPencarian[] = $nama;
        }
    }
}
?>
<form method="GET" action="index.php">
    <input type="hidden" name="page" value="cari">
    <label for="kata">Cari Nama:</label>
    <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($kataGet) ?>">
    <button type="submit">Cari</button>
</form>

<?php
if ($kataGet !== "") {
    $kataSanitized = htmlspecialchars($kataGet, ENT_QUOTES, "UTF-8");
    echo "<p>Kata kunci: <strong>" . $kataSanitized . "</strong></p>";
    if (!empty($hasilPencarian)) {
        echo "<p>Ditemukan " . count($hasilPencarian) . " hasil:</p><ul>";
        foreach ($hasilPencarian as $hasil) {
            echo "<li>" . htmlspecialchars($hasil) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada nama yang cocok dengan kata kunci tersebut.</p>";
    }
}
?>
