<h2>Latihan 4: Membuat Function & Format Rupiah</h2>
<?php
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

$hargaAkhir = hitungDiskon(150000, 10);
echo "Harga setelah diskon: " . formatRupiah($hargaAkhir) . "<br>";

function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

function cekKelulusan($nilai) {
    return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
}

echo "Luas Persegi Panjang (8x4): " . hitungLuasPersegiPanjang(8, 4) . "<br>";
echo "Status Kelulusan Nilai 75: " . cekKelulusan(75) . "<br>";
?>
