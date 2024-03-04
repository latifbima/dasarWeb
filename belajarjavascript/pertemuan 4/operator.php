<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasil tambah : {$hasilTambah} <br>";
echo "hasil kurang : {$hasilKurang} <br>";
echo "hasil Kali : {$hasilKali} <br>";
echo "hasil bagi : {$hasilBagi}<br> ";
echo "sisa bagi : {$sisaBagi}<br> ";
echo "pangkat : {$pangkat}<br>";

$hasilSama = $a == $b;
$hasilTidaksama =$a != $b;
$hasilLebihkecil = $a < $b;
$hasilLebihbesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "perbandingan <br>";
echo "hasil Sama : {$hasilSama} <br>";
echo "hasil Tidak sama : {$hasilTidaksama} <br>";
echo "hasil Lebih kecil :{$hasilLebihkecil} <br.";
echo "hasil Lebih Besar : {$hasilLebihbesar} <br>";
echo "hasil Lebih kecil sama : {$hasilLebihKecilSama} <br>";
echo "hasil Lebih Besar sama : {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasil logika operator <br>";
echo "Hasil And adalah : {$hasilAnd} <br>";
echo "Hasil Or adalah : {$hasilOr} <br>";
echo "Hasil Not A adalah : {$hasilNotA} <br>";
echo "Hasil Not B adalah : {$hasilNotB} <br>";

$soal1 = $a += $b;
$soal2 = $a -= $b;
$soal3 = $a *= $b;
$soal4 = $a /= $b;
$soal5 = $a %= $b;

echo "Hasil pertanyaan <br>";
echo "Hasil dari soal no 1 adalah {$soal1} <br>";
echo "Hasil dari soal no 2 adalah {$soal2} <br>";
echo "Hasil dari soal no 3 adalah {$soal3} <br>";
echo "Hasil dari soal no 4 adalah {$soal4} <br>";
echo "Hasil dari soal no 5 adalah {$soal5} <br>";

?>

