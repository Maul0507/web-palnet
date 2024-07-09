<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pembokingan Lapangan Futsal</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        footer {
            background-color: #0D6EFD;
            color: white;
            /* Pastikan teks terlihat dengan baik di atas latar belakang biru */
            padding: 10px;
            text-align: center;
        }
    </style>


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
                                <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="boking.php">BOOKING</a>
                            </li>
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
        <section class="dashboard">
            <h2>Selamat Datang Di Planet Futsal</h2>
            <div class="lapangan-info">
                <img src="img/LapanganFutsal.jpg" alt="Lapangan Futsal">
                <div class="lapangan-detail">
                    <h3>Profil Planet Futsal</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, neque perspiciatis illo
                        harum, laborum aperiam dolores obcaecati aut aliquam itaque facere, dolore fuga consequatur
                        repellat cum cumque eligendi atque consectetur laudantium possimus! Aut natus voluptatum
                        explicabo fugiat eveniet possimus maxime omnis autem maiores aperiam sed debitis quaerat
                        architecto ut, porro assumenda sapiente sequi? Molestias veritatis cum aut neque ullam iste
                        eveniet blanditiis repellendus quidem accusamus corporis cupiditate sed id laboriosam tenetur,
                        vero architecto nostrum alias ex nihil veniam consequatur rerum dolorem temporibus. Harum dicta
                        numquam maxime asperiores temporibus aut, a repellendus veniam ipsum adipisci, beatae placeat
                        voluptate velit eum suscipit excepturi dolor, aspernatur quidem itaque amet accusantium. Iste
                        eaque magni et sint veritatis enim, tenetur delectus iusto fugit alias quos commodi provident
                        aperiam maiores suscipit sit, yang nemo non. Nesciunt excepturi accusantium reiciendis quia
                        sequi eum delectus iure, veritatis consequatur officiis facilis molestias aspernatur. Quas
                        numquam a ab consequatur harum tenetur deserunt ex dicta distinctio laborum reprehenderit,
                        quisquam quae aspernatur quam atque tempore minus laudantium enim vero nobis accusamus quaerat
                        nostrum hic. Veritatis excepturi, expedita impedit eum delectus yang. Natus, molestiae. Neque
                        dolorum veniam architecto optio distinctio hic quisquam sint quas odit. Quisquam neque
                        architecto earum ea esse unde minus.</p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Planet Futsal</p>
    </footer>

    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default anchor behavior
            Swal.fire({
                title: 'Yakin mau logout?',
                text: "Anda akan keluar dari sesi ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, logout!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.php'; // Redirect to the logout page
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>