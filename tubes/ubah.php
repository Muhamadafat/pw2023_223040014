<?php
session_start();

if (!isset($_SESSION["submit"]) || $_SESSION["role"] !== "admin") {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$conn = koneksi();

// Ambil data dari URL
$id = $_GET["id"];

// Query data artis berdasarkan ID
$art = query("SELECT * FROM artis WHERE id = $id")[0];
$pekerjaan = query("SELECT * FROM pekerjaan");

if (isset($_POST["submit"])) {

    // Cek data apakah berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
                <script>
                alert('Upgrade Data Success!');
                document.location.href = 'admin.php';
                </script>
                ";
    } else {
        echo "
                <script>
                alert('Upgrade Data Declined!');
                document.location.href = 'admin.php';
                </script>
                ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Change Artist Data</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:wght@100;700&display=swap");

        h1 {
            font-size: 30px;
            font-family: 'poppins';
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        body {
            background-color: #adabab;
        }

        .row {
            justify-content: center;
        }

        .btn {
            margin-left: 600px;
        }

        .btn2 {
            margin-left: 350px;
            border-radius: 30px;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Change Artist Data</h1>
        <a href="admin.php" class="btn btn-dark">Go Back</a>

        <div class="row mt-3">
            <div class="col-8">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $art["id"]; ?>">
                    <input type="hidden" name="gambarLama" value="<?= $art["gambar"]; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold; ">Full Name: </label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?= $art['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold;">Gender:</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="Man" <?= ($art["jenis_kelamin"] == "Man") ? "selected" : ""; ?>>Man</option>
                            <option value="Women" <?= ($art["jenis_kelamin"] == "Women") ? "selected" : ""; ?>>Women</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold; ">Date of Birth: </label>
                        <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $art["tanggal_lahir"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold; ">Profession: </label>
                        <select name="pekerjaan_id" id="pekerjaan_id" class="form-control">
                            <?php foreach ($pekerjaan as $row) : ?>
                                <?php if ($row['id'] == $art['pekerjaan_id']) : ?>
                                    <option value="<?= $row['id'] ?>" selected><?= $row['pekerjaan'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['pekerjaan'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold; ">Picture: </label>
                        <img src="img/<?= $art["gambar"]; ?>" width="40"> <br>
                        <input type="file" class="form-control" name="gambar" id="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label" style="color:black; font-family:'poppins'; font-weight: bold; ">Deskripsi: </label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $art["deskripsi"]; ?>">
                    </div>
                    <button type="submit" class="btn2 btn-dark" name="submit">Change Artist Data</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>