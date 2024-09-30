<?php
session_start();

// Periksa apakah data ada di sesi
if (isset($_SESSION['nama'])) {
    $nama = $_SESSION['nama'];
    $email = $_SESSION['email'];
    $gender = $_SESSION['gender'];
    $birthdate = $_SESSION['birthdate']; // Menyimpan tanggal lahir
    $age = $_SESSION['age']; // Menyimpan umur

    // Hapus data dari sesi setelah digunakan
    session_unset();
    session_destroy();
} else {
    echo "<p>Data tidak ditemukan.</p>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            color: #333;
        }
        h1 {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <h1>Data yang Dikirim</h1>
    <p>Nama: <?php echo $nama; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Jenis Kelamin: <?php echo $gender; ?></p>
    <p>Tanggal Lahir: <?php echo date('d-m-Y', strtotime($birthdate)); ?></p> <!-- Menampilkan tanggal lahir -->
    <p>Umur: <?php echo $age; ?> tahun</p> <!-- Menampilkan umur -->
</body>
</html>
