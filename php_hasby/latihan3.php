<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <form method="POST" action="">
        <table>
        <h3>Daftar SMK</h3>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="laki-laki">Laki-laki
            <input type="radio" name="jk" value="perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Biaya Register</td>
            <td>:</td>
            <td><input type="number" name="biaya"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan" id="">
                <option value="RPL">RPL</option>
                <option value="TKRO">TKRO</option>
                <option value="TBSM">TBSM</option>
            </select></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan" value="daftar"></td>
        </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['simpan'])){
    $nama = $_POST ['nama'];
    $tanggal = $_POST ['tanggal_lahir'];
    $jenis = $_POST ['jk'];
    $biaya = $_POST ['biaya'];
    $jurusan = $_POST ['jurusan'];
    $harga = 0;

    if($jurusan == "RPL"){
        $harga = 2500000;
    } else if ($jurusan == "TKRO"){
        $harga = 3000000;
    } else if ($jurusan == "TBSM"){
        $harga = 3500000;
    } else {
        $harga = "tidak tersedia";
    }

     $total = $harga + $biaya;
    

    echo "<br><br><br>"; 
    echo "=========>>Struk Register<<==========<br>";
    echo "<td>Nama<td> : $nama <br>";
    echo "Tanggal Lahir : $tanggal <br>";
    echo "Jenis Kelamin : $jenis <br>";
    echo "Biaya Register : $biaya <br>";
    echo "Jurusan : $jurusan <br>";
    echo "Biaya Jurusan : $harga <br>";
    echo "Total Pembayaran : $total";
}
?>