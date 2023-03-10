<?php

// Buat Function (Fungsi)
function hitungUmur($thn_lahir) {
    // Code function (Fungsi)
    $thn_sekarang = 2023;
    // Hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // Kembaliin umur
    return $umur;
}

// Panggil 
echo "Umur saya adalah " . hitungUmur(2004);
 ?> 