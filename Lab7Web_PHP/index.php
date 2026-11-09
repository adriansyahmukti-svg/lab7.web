<?php
// Single Entry Point / Router utama
$page = $_GET['page'] ?? 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 7 - Praktikum Pemrograman Web</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; display: flex; background: #f4f6f9; color: #333; }
        sidebar { width: 280px; background: #2c3e50; color: #fff; min-height: 100vh; padding: 20px; box-sizing: border-box; }
        sidebar h2 { font-size: 18px; border-bottom: 1px solid #4e6a85; padding-bottom: 10px; margin-top: 0; }
        sidebar ul { list-style: none; padding: 0; margin: 0; }
        sidebar li { margin-bottom: 8px; }
        sidebar a { display: block; color: #b8c7ce; text-decoration: none; padding: 10px 12px; border-radius: 4px; transition: 0.2s; }
        sidebar a:hover, sidebar a.active { background: #1abc9c; color: #fff; }
        content { flex: 1; padding: 40px; background: #fff; min-height: 100vh; box-sizing: border-box; overflow-y: auto; }
        .card { background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 25px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <sidebar>
        <h2>Menu Praktikum</h2>
        <ul>
            <li><a href="index.php?page=home" <?= $page=='home'?'class="active"':'' ?>>🏠 Beranda Utama</a></li>
            <li><a href="index.php?page=latihan1" <?= $page=='latihan1'?'class="active"':'' ?>>Latihan 1: Dasar PHP</a></li>
            <li><a href="index.php?page=latihan2" <?= $page=='latihan2'?'class="active"':'' ?>>Latihan 2: Variabel & Rata-Rata</a></li>
            <li><a href="index.php?page=latihan3" <?= $page=='latihan3'?'class="active"':'' ?>>Latihan 3: Array & Perulangan</a></li>
            <li><a href="index.php?page=latihan4" <?= $page=='latihan4'?'class="active"':'' ?>>Latihan 4: Function & Rupiah</a></li>
            <li><a href="index.php?page=cari" <?= $page=='cari'?'class="active"':'' ?>>Latihan 5: Pencarian Nama (GET)</a></li>
            <li><a href="index.php?page=latihan6" <?= $page=='latihan6'?'class="active"':'' ?>>Latihan 6: Formulir POST</a></li>
            <li><a href="index.php?page=latihan7" <?= $page=='latihan7'?'class="active"':'' ?>>Latihan 7: Transaksi Barang</a></li>
            <li><a href="index.php?page=mini_project" <?= $page=='mini_project'?'class="active"':'' ?>>Mini Project: Data Mahasiswa</a></li>
        </ul>
    </sidebar>
    <content>
        <div class="card">
            <?php
            switch ($page) {
                case 'latihan1':
                    if (file_exists('latihan1.php')) include 'latihan1.php';
                    break;
                case 'latihan2':
                    if (file_exists('latihan2.php')) include 'latihan2.php';
                    break;
                case 'latihan3':
                    if (file_exists('latihan3.php')) include 'latihan3.php';
                    break;
                case 'latihan4':
                    if (file_exists('latihan4.php')) include 'latihan4.php';
                    break;
                case 'cari':
                    if (file_exists('cari.php')) include 'cari.php';
                    break;
                case 'latihan6':
                    if (file_exists('latihan6.php')) include 'latihan6.php';
                    break;
                case 'latihan7':
                    if (file_exists('latihan7.php')) include 'latihan7.php';
                    break;
                case 'mini_project':
                    if (file_exists('mini_project.php')) include 'mini_project.php';
                    break;
                default:
                    echo "<h2>Selamat Datang di Praktikum Pemrograman Web</h2>";
                    echo "<p>Silakan pilih menu praktikum di sebelah kiri untuk menjalankan latihan secara terpusat melalui file <code>index.php</code>.</p>";
                    break;
            }
            ?>
        </div>
    </content>
</body>
</html>
