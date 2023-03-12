<?php
//array
// membuat array
$hari = array('senin', 'selasa', 'rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Alfath', '20', 'false'];
$binatang = ['🐱', '🐰', '🐵', '🐼', '🐨', '🐮'];

// mencetak array
echo $hari[1]; // satu elemen menggunakan indexnya
echo "<hr>";
var_dump($hari);
echo "<hr>";
print_r($bulan);
echo "<hr>";
var_dump($myArray);
echo "<hr>";



// manipulasi Array
// menambah elemen di akhir menggunakan index 
$hari[] = 'kamis';
$hari[] = "jumát";
print_r($hari);
echo "<hr>";
// menambah elemen di akhir menggunakan array_push()
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<hr>";
// menambahkan elemen di awal menggunakan array_unshift()
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";
// menghapus elemen di akhir menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<hr>";
// menghapus elemen diawal menggunakan array_shift()
array_shift($hari);
print_r($hari);
