<?php


function luasPersegi(){
    $sisi = 5;
    $luas = $sisi * $sisi;
    echo "<h4>Menghitung Luas Persegi</h4> <br>";
    echo "Rumus : sisi x sisi <br>";
    echo "Sisi : $sisi <br>";
    echo "Luasnya : $luas <br>";
}
function luasPersegiPanjang(){
    $panjang = 5;
    $lebar = 4;
    $luas = $panjang * $lebar;
    echo "<h4>Menghitung Luas Persegi Panjang</h4> <br>";
    echo "Rumus : panjang x lebar <br>";
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $luas <br>";
}
function luasSegitiga(){
    $alas = 5;
    $tinggi = 10;
    $pie = 0.5;
    $luas = $pie * $alas * $tinggi;
    echo "<h4>Luas Segitiga</h4> <br>";
    echo "Rumus : 1/2 x alas x tinggi <br>";
    echo "Pi : $pie <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luas : $luas <br>";
}
function luasLingkaran(){
    $r = 10;
    $luas = 3.14 * $r * $r;
    echo "<h4>Luas Lingkaran</h4> <br>";
    echo "Rumus : π x r x r <br>";
    echo "π : 3.14 <br>";
    echo "Jari-jari : $r <br>";
    echo "Jari-jari : $r <br>";
    echo "Luasnya : $luas <br>";
}

luasPersegi();
echo "<hr>";
luasPersegiPanjang();
echo "<hr>";
luasSegitiga();
echo "<hr>";
luasLingkaran();

?>