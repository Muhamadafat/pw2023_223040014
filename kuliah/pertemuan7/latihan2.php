<?php
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative
// $_GET
$mahasiswa = [
    [
        "nama" => "Muhamad Alfath",
        "nrp" => "223040014",
        "email" => "alfath.223040014@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jw1.jpg"
    ],
    [
        "nama" => "Ilham Ramadhana",
        "nrp" => "223040013",
        "email" => "Ilham.223040013@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" =>  "jw2.jpg"
    ]

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nrp= 
                <?= $mhs["nrp"]; ?>&email<?= $mhs["email"]; ?>
                &jurusan= <?= $mhs["jurusan"]; ?> &gambar= <?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>
            </li></a>
        <?php endforeach; ?>
    </ul>
</body>

</html>