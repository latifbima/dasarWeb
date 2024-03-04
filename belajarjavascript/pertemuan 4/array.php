<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " .implode(',',$nilaiLulus);

$daftarKaryawan = [
['Alice', 7],
['Bob', 3],
['Charlie', 9],
['David', 5],
['Eva', 6],
];
$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[]= $karyawan[0];
    }
}
echo "<br><br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: "
. implode(', ', $karyawanPengalamanLimaTahun);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br><br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ";
echo "<ul>"; 
foreach ($karyawanPengalamanLimaTahun as $karyawan) {
    echo "<li>$karyawan</li>"; 
}
echo "</ul>"; 

$daftarNilai = [
    'Matematika' => [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ],
    'Fisika' => [
    ['Alice', 90],
    ['Bob', 88],
    ['Charlie', 75],
    ],
    'Kimia' => [
    ['Alice', 92],
    ['Bob', 80],
    ['Charlie', 85],
    ],
];
    $mataKuliah = 'Fisika';
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    foreach ($daftarNilai [$mataKuliah] as $nilai) {
    echo "Nama: ($nilai[0]), Nilai: {($nilai[1]} <br>";
    }


    $daftarSiswa = [
        ['nama' => 'Alice', 'nilai' => 85],
        ['nama' => 'Bob', 'nilai' => 92],
        ['nama' => 'Charlie', 'nilai' => 78],
        ['nama' => 'David', 'nilai' => 64],
        ['nama' => 'Eva', 'nilai' => 90],
    ];
    $totalNilai = 0;
    $jumlahSiswa = count($daftarSiswa);
    foreach ($daftarSiswa as $siswa) {
        $totalNilai += $siswa['nilai'];
    }
    $rataRataKelas = $totalNilai / $jumlahSiswa;
    
    echo "<br><br>Daftar siswa dengan nilai di atas rata-rata kelas ($rataRataKelas): ";
    foreach ($daftarSiswa as $siswa) {
        if ($siswa['nilai'] > $rataRataKelas) {
            echo "<br>{$siswa['nama']} dengan nilai {$siswa['nilai']}";
        }
    }
?>