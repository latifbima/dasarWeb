<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "umur saya adalah". hitungUmur(1988, 2024). "tahun"
?>