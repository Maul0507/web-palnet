<?php
session_start();
include 'koneksi.php'; // Asumsikan file koneksi.php sudah ada

if ($_SESSION['status'] != "login") {
    header("location:login.php");
    exit();
}

// $level = $_SESSION['level'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <a href="boking.php" class="btn btn-dark">Kembali</a>
    <div class="container mt-2">
        <div class="card">
            <div class="header text-center bg-body-secondary">
                <h4>INFORMASI LAPANGAN</h4>
            </div>
            <div class="row mt-4">
                <div class="col-xxl mx-auto">
                    <table class="table table-bordered aligns-item-center">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM booking";
                            $result = mysqli_query($koneksi, $query);

                            if ($result) {
                                while ($d = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($d['hari']); ?></td>
                                        <td><?php echo htmlspecialchars($d['tanggal']); ?></td>
                                        <td><?php echo htmlspecialchars($d['waktu']); ?></td>
                                        <td><?php echo htmlspecialchars($d['keterangan']); ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $d['id_waktu']; ?>" class="btn btn-info">Edit</a>
                                            <a href="hapus.php?id=<?php echo $d['id_waktu']; ?>" class="btn btn-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='5'>Tidak ada data ditemukan</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="tambah.php" class="btn btn-primary">Tambah Pemesanan</a>
                </div>
            </div>
        </div>
    </div>

    <!-- alert -->
    <?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Data berhasil disimpan',
            })
        </script>
        <?php unset($_SESSION['berhasil']);
    } ?>
    <?php if (@$_SESSION['update']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses',
                text: 'Data berhasil diubah',
            })
        </script>
        <?php unset($_SESSION['update']);
    } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>