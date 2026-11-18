<?php
session_start();

$nama = $_SESSION["nama"] ?? "";
$email = $_SESSION["email"] ?? "";

if ($nama === "" || $email === "") {
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
    <title>Pendaftaran Berhasil</title>
</head>
<body>
    <h1>Pendaftaran Berhasil!</h1>

    <p>Nama: <?= htmlspecialchars($nama) ?></p>
    <p>Email: <?= htmlspecialchars($email) ?></p>

    <a href="index.php">Kembali</a>
</body>
</html>
