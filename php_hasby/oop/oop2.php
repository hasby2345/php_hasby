<?php
class Bangun{

    public $persegi = "Menghitung Luas Persegi";
    public $lingkaran = "Menghitung Luas Lingkaran";
    public $persegiPanjang = "Menghitung Luas Persegi Panjang";
    public $segitiga = "Menghitung Luas Segitiga";

    //method
    public function persegi(){
        $sisi = 5;
        $luas = $sisi * $sisi;
        echo "<h4>$this->persegi</h4> <br>";
        echo "Rumus : sisi x sisi <br>";
        echo "Sisi : $sisi <br>";
        echo "Luasnya : $luas <br>";
    }
    public function lingkaran(){
        $r = 10;
        $luas = 3.14 * $r * $r;
        echo "<h4>$this->lingkaran</h4> <br>";
        echo "Rumus : π x r x r <br>";
        echo "π : 3.14 <br>";
        echo "Jari-jari : $r <br>";
        echo "Jari-jari : $r <br>";
        echo "Luasnya : $luas <br>";
    }
    public function persegiPanjang(){
        $panjang = 5;
        $lebar = 4;
        $luas = $panjang * $lebar;
        echo "<h4>$this->persegiPanjang</h4> <br>";
        echo "Rumus : panjang x lebar <br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luasnya : $luas <br>";
    }
    public function segitiga(){
        $alas = 5;
        $tinggi = 10;
        $pie = 0.5;
        $luas = $pie * $alas * $tinggi;
        echo "<h4>$this->segitiga</h4> <br>";
        echo "Rumus : 1/2 x alas x tinggi <br>";
        echo "Pi : $pie <br>";
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luasnya : $luas <br>";
    }
}

//object
$cetak = new Bangun();

echo $cetak->persegi();
echo "<br><hr>";
echo $cetak->lingkaran();
echo "<br><hr>";
echo $cetak->persegiPanjang();
echo "<br><hr>";
echo $cetak->segitiga();


?>