<?php
session_start();

$nama = $_SESSION["nama"] ?? "";
$email = $_SESSION["email"] ?? "";
$prodi = $_SESSION["prodi"] ?? "";

if ($nama === "" || $email === "" || $prodi === "") {
    header("Location: index.php", true, 303);
    exit;
}

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Pendaftaran Berhasil!</h1>

    <p>Terima kasih sudah mengisi formulir pendaftaran.</p>

    <h2>Data Mahasiswa</h2>

    <p>Nama: <?= htmlspecialchars($nama) ?></p>
    <p>Email: <?= htmlspecialchars($email) ?></p>
    <p>Program Studi: <?= htmlspecialchars($prodi) ?></p>

    <a href="index.php">Kembali ke Formulir</a>

</body>
</html>
