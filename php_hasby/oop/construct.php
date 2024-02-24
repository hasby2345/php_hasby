<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum uhkti <br>";
    }

    public function perkenalan(){
        echo "Nama Saya Fahkri <br>";
    }
    
    public function __destruct(){
        echo "Hallo Tan";
    }
}
$cetak = new contoh();

echo $cetak->perkenalan();
?>