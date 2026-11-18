<?php
$kata = $_GET["kata"] ?? "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 9 - Pendaftaran Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Pendaftaran Mahasiswa</h1>

    <h2>Pencarian Data (GET)</h2>

    <form method="GET" action="">
        <input type="text" name="kata"
            placeholder="Cari nama mahasiswa"
            value="<?= htmlspecialchars($kata) ?>">

        <button type="submit">Cari</button>
    </form>

    <p>Kata pencarian:
        <?= htmlspecialchars($kata !== "" ? $kata : "Belum ada pencarian") ?>
    </p>

    <hr>

    <h2>Formulir Pendaftaran (POST)</h2>

    <form method="POST" action="proses.php">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Program Studi</label>
        <select name="prodi" required>
            <option value="">Pilih Program Studi</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
        </select>

        <button type="submit">Daftar</button>
    </form>

</body>
</html>
