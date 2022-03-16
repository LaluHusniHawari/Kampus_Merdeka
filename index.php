<?php

$namaPegawai = 'Ahmad Sopandi';
$agama = 'Islam';
$jabatan = 'Manager';
$status = 'Menikah';
$jmlAnak = 4;
$gaji;
$tunjab;
$tunkel;
$zakat;
$gator;
$gaber;


if($jabatan == 'Manager') {
    $gaji = 20000000;
} else if($jabatan == 'Asisten') {
    $gaji = 15000000;
} else if ($jabatan == 'Kabag') {
    $gaji = 10000000;
} else if ($jabatan == 'Staff') {
    $gaji = 4000000;
} else {
    $gaji = 0;
}

// tunjangan jabatan
$tunjab = 0.2 * $gaji;


//  tunjangan keluarga
if($status == "Menikah" && $jmlAnak <= 2 ) {
    $tunkel = 0.05 * $gaji;
} else if ($status == "Menikah" && $jmlAnak >= 3 && $jmlAnak <= 5) {
    $tunkel = 0.1 * $gaji;
} else {
    $tunkel = 0;
}

// Gaji Kotor
$gator = $gaji + $tunjab + $tunkel;

// Zakat Profesi
if($agama == "Islam" && $gaji >= 6000000) {
    $zakat = 0.025 * $gator;
} else {
    $zakat = 0;
}

// Take Home Pay(Gaji Bersih)
$gaber = $gator - $zakat;

// Cetak Hasil 

echo(
    "<br>Nama : " . $namaPegawai .
    "<br>Agama : " . $agama .
    "<br>Jabatan : " .$jabatan .
    "<br>Status : " .$status .
    "<br>Jumlah Anak : " . $jmlAnak .
    "<br>Gaji : " . $gaji .
    "<br>Tunjangan Jabatan : " . $tunjab .
    "<br>Tunjangan Keluarga : " . $tunkel .
    "<br>Zakat  Profesi: " .$zakat .
    "<br>Gaji Kotor : " . $gator .
    "<br>Gaji Bersih : " . $gaber
);


?>

