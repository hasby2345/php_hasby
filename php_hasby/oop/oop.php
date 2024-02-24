<?php
//buat class
class Manusia{
    
    //buat property/atribut
    public $nama = "Bintang";
    public $nama2 = "Reza";

    //buat method/function
    public function makan(){
        echo "$this->nama suka makan ayam";
    }
    public function minum(){
        echo "$this->nama2 suka minum powerF";
    }
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>