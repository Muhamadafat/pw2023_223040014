<?php
$nama_depan = "Muhamad";
$nama_belakang = "Alfath Septian";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $nama_depan . " " . $nama_belakang . "<br>";
    } else if ($i % 3 == 0) {
        echo $nama_depan . "<br>";
    } elseif ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}
