<?php
// $mahasiswa = [
//     [
//         "Muhamad Alfath", "223040014", "alfath.223040014@mail.unpas.ac.id", "Teknik Informatika"
//     ],
//     [
//         "Ilham Ramadhana", "223040013", "ilham.223040013@mail.unpas.ac.id", "Teknik Informatika"
//     ],

// ];

// array associative
// definisinya sama seperti array numerik , kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>