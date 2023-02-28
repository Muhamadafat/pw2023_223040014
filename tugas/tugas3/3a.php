<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluasLingkaran($r)
{
    //menghitung luas lingkaran rumusnya pi x r x r
    $luas = 3.14 * $r * $r;
    return $luas . " cm<sup>2</sup>";
    //menambahkan sup agar angka 2 menjadi kecil diatas
}
echo "jari-jari = 10 cm. <br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran(10) . " <br>";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran </h4>";
function hitungKelilingLingkaran($r)
{
    //menghitung keliling Lingkaran rumusnya 2 x pi x r
    $keliling = 2 * 3.14 * $r;
    return $keliling . "cm";
    //menambahkan string CM di return agar mempunyai output dengan CM diakhirnya
}

echo "jari-jari = 20 cm. <br> ";
echo "Luas Lingkaran = " . hitungKelilingLingkaran(20) . "<br>";

echo "<hr>";
