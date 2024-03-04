<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
 } elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
 }
$jarakSaatIni = 0;
$jarakTarger = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarger){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "<br> Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";

$jumlahLahan = 10;
 $tanamanPerLahan = 5;
 $buahPerTanaman = 10;
 $jumlahBuah = 0;
 for    ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
 }
 echo "<br><br>Jumlah buah yang akan dipanen adalah: $jumlahBuah" ;

 $skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "<br><br>Total skor ujian adalah: $totalSkor <br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
if ($nilai < 60) {
echo "<br>Nilai: $nilai (Tidak lulus) <br>";
continue;
}
echo "Nilai: $nilai (Lulus) <br>";
}

$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);
sort($nilai_siswa);
$nilai_siswa = array_slice($nilai_siswa, 2, -2);
$total_nilai = array_sum($nilai_siswa);
$rata_rata = $total_nilai / count($nilai_siswa);

echo "<br>Total nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . $total_nilai ;
echo "<br>Rata-rata nilai setelah mengabaikan dua nilai terendah dan dua nilai tertinggi: " . $rata_rata ;

$harga_produk = 120000;
$diskon = 20; 
$batas_diskon = 100000;
if ($harga_produk > $batas_diskon) {
    $harga_setelah_diskon = $harga_produk - ($harga_produk * ($diskon / 100));
} else {
    $harga_setelah_diskon = $harga_produk;
}

echo "<br><br>Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon);

$poin = 600; 
$total_skor = $poin;
$hadiah_tambahan = ($total_skor > 500) ? "YA" : "TIDAK";

echo "<br><br>Total skor pemain adalah: $total_skor";
echo "<br>Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";
?>