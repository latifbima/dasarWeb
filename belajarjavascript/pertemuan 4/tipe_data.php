<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaindonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaindonesia)/3;

echo "Matematika {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa indonesia {$nilaiBahasaindonesia} <br>";
echo "Rata-rata :{$rataRata} <br>";

var_dump($rataRata);


$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

$namaDepan = "ibnu";
$namaBelakang = 'jakaria';

$namaLengkap ="{$namaDepan} {$namaBelakang}";
$namaLengkap2 =$namaDepan . ''. $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo 'Nama belakang ' . $namaBelakang. '<br>';

echo $namaLengkap;

$listMahasiswa =["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>