<h2>Latihan 6: Memproses Form dengan POST</h2>
<form method="POST" action="index.php?page=latihan6">
    <label for="nama">Nama: </label>
    <input id="nama" name="nama" type="text" required>
    <br><br>
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" required>
    <br><br>
    <button type="submit" name="kirim">Kirim Data</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['page']) && $_GET['page'] === 'latihan6') {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");

    if ($nama === "" || $prodi === "") {
        echo "<p style='color:red;'>Semua kolom wajib diisi.</p>";
    } else {
        echo "<h3>Data diterima</h3>";
        echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
        echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
    }
}
?>
