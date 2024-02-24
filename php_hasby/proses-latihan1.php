<?php
$nama = @$_REQUEST['nama'];
$jenis = @$_REQUEST['jenis'];
$tanggal = @$_REQUEST['tanggal'];
$kategori = @$_REQUEST['kategori'];
$kelas = @$_REQUEST['kelas'];
$kemampuan = @$_REQUEST['kemampuan'];
$metode = @$_REQUEST['metode'];
$diskon = 0;
$harga = 0;

if ($kategori == "Sepak Bola") {
    $harga = 0;
    foreach ($kelas as $kelass) {
        if ($kelass == "Pemula") {
            $harga += 200000;
        } elseif ($kelass == "Menengah") {
            $harga += 250000;
        } elseif ($kelass == "Lanjutan") {
            $harga += 300000;
        }
    }
} else if ($kategori == "Bulu Tangkis") {
    $harga = 0;
    foreach ($kelas as $kelass) {
        if ($kelass == "Pemula") {
            $harga += 150000;
            if ($jenis == "Wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelass == "Menengah") {
            $harga += 200000;
            if ($jenis == "Wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelass == "Lanjutan") {
            $harga += 250000;
            if ($jenis == "Wanita") {
                $diskon += $harga * 0.1;
            }
        }
    }
} else if ($kategori == "Renang") {
    $harga = 0;
    foreach ($kelas as $kelass) {
        if ($kelass == "Pemula") {
            $harga += 180000;
        } elseif ($kelass == "Menengah") {
            $harga += 220000;
        } elseif ($kelass == "Lanjutan") {
            $harga += 270000;
        }
    }
}

$total = $harga - $diskon;

if ($total > 500000) {
    $keputusan = "Selamat anda mendapat diskon";
} else {
    $keputusan = "Sayang sekali tidak mendapat diskon";
}
echo "<h1>Form Pendaftaran</h1>";
echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Tanggal Lahir : $tanggal<br>";
echo "Kategori : $kategori<br>";
echo "Kelas : " . implode(", ", $kelas) . "<br>";
echo "Kemampuan Fisik : $kemampuan<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $keputusan;

?>