<?php
$angka = 5;
// menambahkan , pada parameter jika dibutuhkan
// bisa menggunakan variabel bisa juga tidak apa apa
function cek_ganjil_genap($angka) // () parameter tempat untuk menyimpan bahan baku
{
    // memeriksa apakah $angka itu bilangan ganjil
    // ganjil adalah jika bilangan yang dibagi 2 sisanya 1
    // % merupakan modul
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan GANJIL!";
    } else {
        return "$angka adalah bilangan GENAP";
    }
}


echo cek_ganjil_genap($angka); //argument "nilai sebenarnya"
echo "<br>";
echo cek_ganjil_genap(10);
echo "<br>";
echo cek_ganjil_genap(101);
