<?php

$mahasiswa = [
    [
        "nama" => "Muhamad Alfath Septian",
        "npm" => "223040014",
        "email" => "muhamadafattt@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/afatt.jpg"
    ],

    [
        "nama" => "Aldi Pradana Hakim",
        "npm" => "223040035",
        "email" => "aldi.pradan.hakim26@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/aldiprdn.jpg"
    ],

    [
        "nama" => "Moch Zuhdi Maulana Nabilah",
        "npm" => "223040101",
        "email" => "zuhdimaulana11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/mzuhdi.jpg"
    ],

    [
        "nama" => "Arley Prajaya Gunawan",
        "npm" => "223040106",
        "email" => "arleyprajaya11@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/arleyprjy.jpg"
    ],

    [
        "nama" => "M. Daffa Musyafa",
        "npm" => "223040048",
        "email" => "daffamusyafa19@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/daffasus.jpg"
    ],

    [
        "nama" => "Dzikri Setiawan",
        "npm" => "223040072",
        "email" => "dzikrisetiawannn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/masjo.jpg"
    ],

    [
        "nama" => "Kaka Paraditha",
        "npm" => "223040087",
        "email" => "kakaparaditha87@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/kakaprdth.jpg"
    ],

    [
        "nama" => "Ji'ta bilhaq",
        "npm" => "223040055",
        "email" => "Ji'tabilhaq55@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/ji'tablhq.jpg"
    ],

    [
        "nama" => "Angga Nugraha",
        "npm" => "223040056",
        "email" => "anggans56@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/anggaewok.jpg"
    ],

    [
        "nama" => "m rafly izudin ",
        "npm" => "223040158",
        "email" => "rafly.2230400158@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "img/raflyacil.jpg"
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>

    <!-- LINK BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <div class="row p-3">
                <div class="card mb-2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $mhs["gambar"]; ?>" class=" img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">Nama : <?= $mhs["nama"]; ?></p>
                                <p class="card-text">NRP : <?= $mhs["npm"]; ?></p>
                                <p class="card-text">Jurusan : <?= $mhs["jurusan"]; ?></p>
                                <p class="card-text">Email : <?= $mhs["email"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

</body>

</html>