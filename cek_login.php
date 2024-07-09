<?php
session_start();
include 'koneksi.php'; // Asumsikan file koneksi.php sudah ada

// Menangkap data yang dikirim dari form
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = mysqli_real_escape_string($koneksi, $_POST['password']);

// Memilih data admin dengan username yang sesuai
$query = "SELECT * FROM admin WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

// Cek apakah username ditemukan pada database
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $passwordFromDB = $row['password'];

    // Verifikasi password (jika password disimpan dalam teks biasa)
    if ($password === $passwordFromDB) {
        // Login berhasil
        $_SESSION['Username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['message'] = 'success';
        header("Location: beranda.php");
        exit();
    } else {
        // Password salah
        $_SESSION['message'] = 'error';
        header("Location: login.php");
        exit();
    }
} else {
    // Username tidak ditemukan
    $_SESSION['message'] = 'error';
    header("Location: login.php");
    exit();
}
?>