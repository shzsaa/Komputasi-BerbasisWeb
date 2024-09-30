<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $birthdate = htmlspecialchars($_POST['birthdate']); // Menyimpan tanggal lahir

    // Menghitung umur
    $birthYear = date('Y', strtotime($birthdate));
    $currentYear = date('Y');
    $age = $currentYear - $birthYear;

    // Simpan data dalam sesi untuk digunakan di konfirmasi.php
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['gender'] = $gender;
    $_SESSION['birthdate'] = $birthdate; // Menyimpan tanggal lahir
    $_SESSION['age'] = $age; // Menyimpan umur

    // Arahkan ke halaman konfirmasi
    header("Location: confirm.php");
    exit();
} else {
    echo "<p>Metode pengiriman tidak valid.</p>";
}
?>
