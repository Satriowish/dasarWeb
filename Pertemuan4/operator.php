<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan Hasil 
echo "Hasil Tambah = $a + $b = $hasilTambah<br>";
echo "Hasil Kurang = $a - $b = $hasilKurang<br>";
echo "Hasil Kali = $a * $b = $hasilKali<br>";
echo "Hasil Bagi = $a / $b = $hasilBagi<br>";
echo "Hasil sisaBagi = $a % $b = $sisaBagi<br>";
echo "Hasil pangkat = $a ** $b = $pangkat<br><br>";

//Langkah 5
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama (a == b): " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil Tidak Sama (a != b): " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil (a < b): " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar (a > b): " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Kecil Sama (a <= b): " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil Lebih Besar Sama (a >= b): " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br><br>";

?>