<?php
session_start();

if (!isset($_SESSION["submit"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$conn = koneksi();
$id = $_GET["id"];
$tampil = query("SELECT * FROM artis WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Detail artis</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");

        .navbar-brand {
            font-size: 25px !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-dark p-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <i class="fa-solid fa-arrow-left text-light"></i>
            </a>
        </div>
    </nav>


    <div class="container d-flex justify-content-center mt-5">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/<?= $tampil['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $tampil['nama']; ?></h5>
                        <br>
                        <p class="card-text">Birth date : <?= $tampil['tanggal_lahir']; ?></p>
                        <p class="card-text">Gender : <?= $tampil['jenis_kelamin']; ?></p>
                        <br>
                        <p class="card-text"><?= $tampil['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/49181759c3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>