<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pembokingan Lapangan Futsal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .aksi {
            margin-top: 10px;
        }

        .aksi button {
            background-color: #3E6B84;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            margin-right: 5px;
        }
        footer {
            background-color: #0D6EFD;
            color: white;
            /* Pastikan teks terlihat dengan baik di atas latar belakang biru */
            padding: 10px;
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-primary fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">PLANET FUTSAL</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="beranda.php">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">BOOKING</a>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="navbar-brand ms-auto" href="#">PLANET FUTSAL</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="lapangan">
            <h2>Daftar Lapangan</h2>
            <div class="lapangan-grid">
                <div class="lapangan-card">
                    <h3>Lapangan 1</h3>
                    <div class="aksi">
                        <a href="waktu.php"><button class="edit">Edit Stok Lapangan</button></a>
                    </div>
                </div>
                <div class="lapangan-card">
                    <h3>Lapangan 2</h3>
                    <div class="aksi">
                        <a href="waktu2.php"><button class="edit">Edit Stok Lapangan</button></a>
                    </div>
                </div>
                <!-- Tambahkan kartu lapangan lainnya di sini -->
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Pembokingan Lapangan Futsal</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>