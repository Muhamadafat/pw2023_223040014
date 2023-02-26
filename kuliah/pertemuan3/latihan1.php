<?php
echo "Mulai. <br>";
echo "Hello, World! <br>";
echo "Hello, World! <br>";
echo "Hello, World! <br>";
echo "Hello, World! <br>";
echo "Hello, World! <br>";
echo "Selesai. <br>";

echo "<hr>";

while (false) {
    echo "Hello World! <br>";
}

// pengulangan while
// 1. Inisialisasi / Nilai awal
// 2. kondisi terminasi / kapan pengulangannya berhenti
// 3. increment / decrement (penambahan nilai atau pengurangan nilai)

$nilai_awal = 1;
while ($nilai_awal <= 10) {
    echo $nilai_awal;
    echo '<br>';
    $nilai_awal = $nilai_awal + 2;
}
echo "<hr>";
$nilai_awal = 1; //inisialisasi
while ($nilai_awal <= 10) { //kondisi terminasi
    echo "Angkot no.$nilai_awal beroperasi dengan baik<br>";
    $nilai_awal++;
}
echo "<hr>";

$nilai_awal = 10;
while ($nilai_awal >= 3) {
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal--;
}
echo "<hr>";
// for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $nilai_awal x<br>";
}

echo "<hr>";

for ($nilai_awal = 10; $nilai_awal >= 1; $nilai_awal--) {
    echo "Hello World $nilai_awal x<br>";
}
