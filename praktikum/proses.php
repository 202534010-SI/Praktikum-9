<?php
$nama = "";
$email = "";
$errorNama = "";
$errorEmail = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    if ($nama === "") {
        $errorNama = "Nama wajib diisi!";
    }
    if ($email === "") {
        $errorEmail = "Email wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "Format email tidak valid!";
    }
    if ($errorNama === "" && $errorEmail === "") {
        session_start();
        $_SESSION["nama"] = $nama;
        $_SESSION["email"] = $email;
        header("Location: hasil.php", true, 303);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <h1>Form Pendaftaran</h1>

    <form method="POST" action="proses.php">
        <label>Nama:</label>
        <input type="text" name="nama"
            value="<?= htmlspecialchars($nama) ?>">
        <p><?= htmlspecialchars($errorNama) ?></p>

        <label>Email:</label>
        <input type="text" name="email"
            value="<?= htmlspecialchars($email) ?>">
        <p><?= htmlspecialchars($errorEmail) ?></p>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
