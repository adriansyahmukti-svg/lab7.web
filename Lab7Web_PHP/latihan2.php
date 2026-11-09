<h2>Latihan 2: Variabel, Operator, dan Nilai Rata-Rata</h2>
<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;

$rataRata = ($tugas + $uts + $uas) / 3;
$nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

if ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 75) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}

echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Rata-rata komponen (Tugas, UTS, UAS): " . number_format($rataRata, 2) . "<br>";
echo "Nilai akhir (dengan bobot): " . number_format($nilaiAkhir, 2) . "<br>";
echo "Predikat: " . $predikat;
?>
