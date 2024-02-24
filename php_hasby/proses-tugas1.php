<?php
$nama = @$_REQUEST['nama'];
$tanggal_lahir = @$_REQUEST['tanggalLahir'];

if ($tanggal_lahir >= 1944 && $tanggal_lahir <= 1964) {
    $generasi = "Baby Boomer"; 
} else if ($tanggal_lahir >= 1965 && $tanggal_lahir <= 1979) {
    $generasi = "Generasi X";
} else if ($tanggal_lahir >= 1980 && $tanggal_lahir <= 1994) {
    $generasi = "Generasi Y (Milenials)";
} else if ($tanggal_lahir >= 1995 && $tanggal_lahir <= 2015) {
    $generasi = "Generasi Z";
} else {
    $generasi = "Generasi tidak tersedia";
}


echo "$nama, berdasarkan tahun lahir anda tergolong $generasi <br>";
?> 