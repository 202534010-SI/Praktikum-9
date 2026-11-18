<?php
$nama = "";
$email = "";
$prodi = "";

$errorNama = "";
$errorEmail = "";
$errorProdi = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $prodi = $_POST["prodi"] ?? "";
    if ($nama === "") {
        $errorNama = "Nama wajib diisi!";
    }
    if ($email === "") {
        $errorEmail = "Email wajib diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorEmail = "Format email tidak valid!";
    }
    if ($prodi === "") {
        $errorProdi = "Program studi wajib dipilih!";
    }
    if (
        $errorNama === "" &&
        $errorEmail === "" &&
        $errorProdi === ""
    ) {
        session_start();
        $_SESSION["nama"] = $nama;
        $_SESSION["email"] = $email;
        $_SESSION["prodi"] = $prodi;

        header("Location: hasil.php", true, 303);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Validasi Pendaftaran</h1>

    <form method="POST" action="proses.php" novalidate>

        <label>Nama Lengkap</label>
        <input type="text" name="nama"
            value="<?= htmlspecialchars($nama) ?>">
        <p class="error"><?= htmlspecialchars($errorNama) ?></p>

        <label>Email</label>
        <input type="text" name="email"
            value="<?= htmlspecialchars($email) ?>">
        <p class="error"><?= htmlspecialchars($errorEmail) ?></p>

        <label>Program Studi</label>
        <select name="prodi">
            <option value="">Pilih Program Studi</option>
            <option value="Sistem Informasi"
                <?= $prodi === "Sistem Informasi" ? "selected" : "" ?>>
                Sistem Informasi
            </option>
            <option value="Teknik Sipil"
                <?= $prodi === "Teknik Sipil" ? "selected" : "" ?>>
                Teknik Sipil
            </option>
            <option value="Teknik Mesin"
                <?= $prodi === "Teknik Mesin" ? "selected" : "" ?>>
                Teknik Mesin
            </option>
        </select>
        <p class="error"><?= htmlspecialchars($errorProdi) ?></p>

        <button type="submit">Kirim Ulang</button>

    </form>

    <a href="index.php">Kembali</a>

</body>
</html>
