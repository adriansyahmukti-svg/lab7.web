<h2>Latihan 3: Perulangan dan Array Mahasiswa</h2>
<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni"];
$mahasiswa[] = "Eka";
$mahasiswa[] = "Fajar";
$mahasiswa[] = "Gita";

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
?>
