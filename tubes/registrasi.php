<?php
require 'functions.php';
$conn = koneksi();

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "<script>
                    alert('Enjoy Your Visit, You Are Successfully Registered!');
                    document.location.href = 'login.php';
                    </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regist Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body style="background-color:#a9a9a9">
    <section class="container">
        <div class="row content d-flex justify-content-center tengah">
            <div class="col-md-5">
                <div class="turun box shadow bg-white p-4  borius box-form">
                    <h3 class="mb-4 text-center fs-1">Registrasi</h3>
                    <form class="mb-3" action="" method="post">
                        <div class="form-floating mb-3">
                            <Input class="form-control rounded-0 px-5" type="text" name="username" id="username" placeholder="username" autocomplete="off" required autofocus>
                            <label for="username">Username</label>
                        </div>
                        <form class="mb-3" action="" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control rounded-0 px-5" type="text" name="email" id="email" placeholder="Email :" required>
                                <label for="email">Email: </label>
                            </div>
                            <form class="mb-3" action="" method="post">
                                <div class="form-floating mb-3">
                                    <input class="form-control rounded-0 px-5" type="text" name="nomor_hp" id="nomor_hp" placeholder="Phone number" required>
                                    <label for="nomor_hp">Phone Number: </label>

                                </div>
                                <div class="form-floating mb-3">
                                    <Input class="form-control rounded-0 px-5" type="password" name="password" id="password" placeholder="password" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <Input class="form-control rounded-0 px-5" type="password" name="password2" id="password2" placeholder="Konfirmasi password" required>
                                    <label for="password2">Konfirmasi Password</label>
                                </div>
                                <div class="d-grid gap-2 mb3">
                                    <button type="submit" name="register" class="btn btn-dark btn-lg border-0 rounder-0">Registrasi</button>
                                </div>
                                <div class="kembali-ke-login mb-3 mt-2">
                                    <p>Sudah memiliki akun? <a href="login.php" class="text-decoration-none">Login Disini</a> </p>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </section>






    <!-- Script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>