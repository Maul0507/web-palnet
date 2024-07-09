<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .login-card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #88B4CC;
        }

        .btn-primary {
            background-color: #3E6B84;
            border-color: #000000;
        }

        body {
            background-color: #C5E3F4;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card mt-5 login-card">
            <div class="card-header text-center">
                <strong>PLANET FUTSAL</strong>
            </div>
            <div class="card-body">
                <form method="post" action="cek_login.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required>
                        <small class="form-text text-muted">Silahkan masukkan username anda.</small>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    session_start();
    if (isset($_SESSION['message'])) {
        if ($_SESSION['message'] == 'success') {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: 'Anda berhasil masuk!'
                });
            </script>";
        } elseif ($_SESSION['message'] == 'error') {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Login Gagal',
                    text: 'Username atau password salah!'
                });
            </script>";
        }
        unset($_SESSION['message']);
    }
    ?>
</body>

</html>