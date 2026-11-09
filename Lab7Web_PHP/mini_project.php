<h2>Mini Project: Formulir Data Mahasiswa</h2>
<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_GET['page']) && $_GET['page'] === 'mini_project') {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
        $error[] = "NIM harus berupa angka murni dan persis 9 digit.";
    }

    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<style>
    .form-group { margin-bottom: 12px; }
    label { display: inline-block; width: 130px; }
    .error-box { color: red; background-color: #ffe6e6; padding: 10px; border: 1px solid #ff9999; border-radius: 4px; }
    .success-box { background-color: #f0f8ff; border: 1px solid #b0c4de; padding: 15px; margin-top: 15px; border-radius: 4px; }
    .explanation { background-color: #fff8dc; border: 1px solid #deb887; padding: 12px; margin-top: 20px; border-radius: 4px; font-size: 14px; }
</style>

<?php if (!empty($error)): ?>
    <div class="error-box">
        <h4>Terjadi Kesalahan:</h4>
        <ul>
            <?php foreach ($error as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form method="POST" action="index.php?page=mini_project">
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label for="nim">NIM (9 Digit):</label>
        <input type="text" id="nim" name="nim" maxlength="9" value="<?= htmlspecialchars($_POST['nim'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label for="prodi">Program Studi:</label>
        <input type="text" id="prodi" name="prodi" value="<?= htmlspecialchars($_POST['prodi'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" min="1" max="14" value="<?= htmlspecialchars($_POST['semester'] ?? '') ?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
    </div>
    <div>
        <button type="submit">Kirim Data</button>
        <button type="reset">Reset Form</button>
    </div>
</form>

<?php if ($data): ?>
    <div class="success-box">
        <h3>Ringkasan Data Mahasiswa</h3>
        <p><strong>Nama:</strong> <?= htmlspecialchars($data['nama']) ?></p>
        <p><strong>NIM:</strong> <?= htmlspecialchars($data['nim']) ?></p>
        <p><strong>Program Studi:</strong> <?= htmlspecialchars($data['prodi']) ?></p>
        <p><strong>Semester:</strong> <?= htmlspecialchars($data['semester']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($data['email']) ?></p>
    </div>
<?php endif; ?>

<div class="explanation">
    <h4>Penjelasan Tombol Reset vs Pemrosesan Server:</h4>
    <ul>
        <li><strong>Tombol Reset (`type="reset"`):</strong> Bekerja di sisi <em>client-side</em> (browser) untuk mengembalikan input form ke kondisi semula tanpa mengirim request ke server.</li>
        <li><strong>Pemrosesan Server (`POST`/`GET`):</strong> Bekerja di sisi <em>server-side</em> (PHP) untuk memproses logika, validasi, dan merespons kembali dengan pesan error atau sukses.</li>
    </ul>
</div>
