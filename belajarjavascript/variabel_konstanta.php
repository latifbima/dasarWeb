<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "hasil penjumlahan $angka1 dan $angka2 adalah $hasil.";

$benar = true;
$salah = false;
echo "variabel benar : $benar, variabel salah : $salah";
// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2003);

echo "selamat datang di" . NAMA_SITUS. ",situs yang didirikan pada tahun " .TAHUN_PENDIRIAN. ".";
?>