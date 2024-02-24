<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center><img src="asalam.png" alt="" ></center>
    <div class="mt-5">
    <h4><center>PENGGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM</center></h4>
    </div>
    <!-- content -->
    <div class="card mt-5 mr-5 ml-5 border-dark bg-light">
  <div class="card-header">
    <h5>Data Penggajihan</h5>
  </div>
  <div class="card-body">
  <form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputNo">No</label>
    <input type="text" name="no" class="form-control" id="exampleInputNo"  placeholder="No">
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputNama" placeholder="Nama" >
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Unit Pendidikan</label>
    <select type="checkbox" name="unit_pendidikan" class="form-control" id="exampleInputNama" >
    <option value="">Unit Pendidikan</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        </select>
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Tanggal Gaji</label>
    <input type="date" name="tanggal_gaji" class="form-control" id="exampleInputNama">
  </div>
  <div class="mt-5">
    <h4>Gaji</h4>
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Jabatan</label>
    <select type="checkbox" name="jabatan" class="form-control" id="exampleInputNama">
    <option value="">Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
        <option value="Staff">Staff</option>
        </select>
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Lama Kerja</label>
    <input type="text" name="lama_kerja" class="form-control" id="exampleInputNama" placeholder="Lama Kerja">
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Status Kerja</label>
    <select type="checkbox" name="status_kerja" class="form-control" id="exampleInputNama">
    <option value="">Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
        </select>
  </div>
  <div class="mt-5">
    <h4>Potongan</h4>
  </div>
  <div class="form-group">
    <label for="exampleInputNama">BPJS</label>
    <input type="text" name="bpjs" class="form-control" id="exampleInputNama" placeholder="" >
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Pinjaman</label>
    <input type="number" name="pinjaman" class="form-control" id="exampleInputNama" placeholder="Pinjaman">
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Tabungan</label>
    <input type="number" name="tabungan" class="form-control" id="exampleInputNama" placeholder="Tabungan">
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Lainnya</label>
    <input type="number" name="lainnya" class="form-control" id="exampleInputNama" placeholder="Lainnya">
  </div>
  <button type="proses" class="btn btn-primary" name="proses">Proses</button>
</form>
  </div>
</div>

    <!-- /content -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>



<?php
if(isset($_POST['proses'])){
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit_pendidikan = $_POST['unit_pendidikan'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    $gaji = 0;
    $bonus = 0;

    if ($jabatan == "Kepala Sekolah"){
        $gaji = 5000000;
    }else if ($jabatan == "Wakasek"){
        $gaji = 4000000;
    } else if ($jabatan == "Guru"){
        $gaji = 3000000;
    } else if ($jabatan == "Karyawan"){
        $gaji = 2000000;
    } else {
         $gaji = 0;
    }

    if ($status_kerja == "Tetap") {
      $bonus = 1000000;
    } else {
      $bonus = 0;
    }

    $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

    class hasil{

        public function gaji($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gaji_bersih2){

    ?>
 <center>
    <div class="card bg-light border-dark mb-3 mt-5" style="max-width: 40rem;" >
  <div class="card-header"><h3>Muhammad Hasby Rifansyah</h3></div>
  <div class="card-body text-dark">
    <h3 class="card-title">Struk Gaji</h3>
    <table>
        <tr>
            <td>No</td>
            <td>:</td>
            <td><?php echo $no2 ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama2 ?></td>
        </tr>
        <tr>
            <td>Unit Pendidikan</td>
            <td>:</td>
            <td><?php echo $unit_pendidikan2 ?></td>
        </tr>
        <tr>
            <td>Tanggal Gaji</td>
            <td>:</td>
            <td><?php echo $tanggal_gaji2 ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?php echo $jabatan2 ?></td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td><?php echo $gaji2 ?></td>
        </tr>
        <tr>
            <td>Lama Kerja</td>
            <td>:</td>
            <td><?php echo $lama_kerja2 ?></td>
        </tr>
        <tr>
            <td>Status Kerja</td>
            <td>:</td>
            <td><?php echo $status_kerja2 ?></td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td>:</td>
            <td><?php echo $bonus2 ?></td>
        </tr>
        <tr>
            <td>BPJS</td>
            <td>:</td>
            <td><?php echo $bpjs2 ?></td>
        </tr>
        <tr>
            <td>Pinjaman</td>
            <td>:</td>
            <td><?php echo $pinjaman2 ?></td>
        </tr>
        <tr>
            <td>Tabungan</td>
            <td>:</td>
            <td><?php echo $tabungan2 ?></td>
        </tr>
        <tr>
            <td>Lainnya</td>
            <td>:</td>
            <td><?php echo $lainnya2 ?></td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?php echo $gaji_bersih2 ?></td>
        </tr>
    </table>
  </div>
  </center>
        <?php
     }
        
 }
 $cetak = new hasil();

 echo $cetak->gaji($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
}


?>