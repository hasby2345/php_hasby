<?php

class manusia{

    public $nama = "Balmon Cakeup";

    private function tampilkan_nama(){
        echo "Nama saya malasngoding <br/>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }

}

$cetak = new manusia();
//manggila method
echo $cetak->keluarkan();
//manggila property
echo $cetak->nama;

?>