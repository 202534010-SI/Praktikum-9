<?php
$nama = "Caca";
$umur = 18;

if ($umur >= 17) {
    $status = "Sudah memenuhi batas usia";
} else {
    $status = "Belum memenuhi batas usia";
}
$kata = $_GET["kata"] ?? "Belum ada pencarian";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 9 - PHP</title>
</head>
<body>
    <h1>Belajar PHP</h1>

    <h2>Data Pengguna</h2>
    <p>Nama: <?= htmlspecialchars($nama) ?></p>
    <p>Umur: <?= $umur ?></p>
    <p>Status: <?= $status ?></p>

    <h2>HTTP GET</h2>
    <p>Kata pencarian: <?= htmlspecialchars($kata) ?></p>


<h2>Form Pendaftaran</h2>

<form method="POST" action="proses.php">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit">Daftar</button>
</form>

    <form method="GET" action="">
        <input type="text" name="kata" placeholder="Masukkan kata">
        <button type="submit">Cari</button>
    </form>
</body>
</html>
