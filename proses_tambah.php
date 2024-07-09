<?php
session_start();
include 'koneksi.php'; // Asumsikan file koneksi.php sudah ada

// Periksa apakah tombol submit telah diklik
if (isset($_POST['hari'], $_POST['tanggal'], $_POST['waktu'], $_POST['keterangan'])) {
    // Ambil nilai-nilai dari formulir
    $hari = $_POST['hari'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $keterangan = $_POST['keterangan'];

    // jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO booking (hari, tanggal, waktu, keterangan) VALUES ('$hari', '$tanggal', '$waktu', '$keterangan')";
    $result = mysqli_query($koneksi, $query);

    // periksa query apakah ada error
    if (!$result) {
        die("Query ini gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        // Set sesi untuk notifikasi berhasil
        $_SESSION['berhasil'] = true;
        // redirect ke halaman daftar pemesanan
        header("Location: index.php");
        exit;
    }
} else {
    echo "Data tidak lengkap.";
}
?>