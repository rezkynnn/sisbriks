<?php
date_default_timezone_set('Asia/Makassar');
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style type="text/css">
      .kotak {
        border-radius: 15px;
      }
    </style>

    <title>CEKLIST KEBERSIHAN NASABAH</title>
  </head>
  <body>
    <br>
    <div class="container">
      <img src="img/briks.png" style="width: 15rem;">
      <h2>Nama Petugas : M. RIZKY </h2>
<div class="card bg-primary text-white kotak">
  <div class="card-body">
    <h3 class="card-title"><i class="bi bi-clipboard-check"></i> CEKLIST HARIAN RUANGAN NASABAH</h3>
    <div class="container">
    <table class="table text-white">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Kerjaan</th>
    <th scope="col">Jam</th>
    <th scope="col">Keterangan</th>
    <th scope="col">Check</th>
    </tr>
  </thead>
  <tbody>
    <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM pekerjaan_nasabah_halaman ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data 
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $row['job']; ?></td>
      <td><input type="<?php echo date('H:i:s:a'); ?>" name="jam" class="form-control" readonly="readonly" value="<?php echo date('H:i:s:a');?>"></td>
      <td><input type="text" name="keterangan" class="form-control"></td>
      <td><input type="checkbox" name="pekerjaan[]" value="<?php echo $row['job']; ?>"></td>
    </tr>
         <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
  </tbody>
</table>
  </div>
</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

