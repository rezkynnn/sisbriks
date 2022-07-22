<?php
include 'header.php';
?>

<section class="content">
	<div class="container-fluid">
		<div class="row">
          <div class="col-12">
          	<div class="mb-3">
          		<label for="pet" class="form-label">Petugas CS</label>
          		<input type="text" name="nama_cs" class="form-control col-sm-4" value="test" disabled="disabled">
          	</div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="bi bi-card-checklist"></i> CEK LIST HARIAN RUANGAN NASABAH & HALAMAN</h3>
                <div class="card-tools">
                  <form method="post" action="">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  
                   <input type="text" name="tgl" class="form-control" disabled="disabled" value="<?php echo date('d-m-y'); ?>">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Kerjaan</th>
                      <th>Jam</th>
                      <th>Keterangan</th>
                      <th>Check</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Halaman Parkir</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Teras / Loby</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Pintu Masuk</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Lantai Ruangan Nasabah</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Meja CS</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Kaset Kaki</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Tempat Sampah</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>Meja Teller</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>Kursi Nasabah</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>Lantai Tangga</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>Tanaman Hias</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>12</td>
                      <td>Tempat Slip</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                    <tr>
                      <td>13</td>
                      <td>Meja Tulis</td>
                      <td><?php 
                      date_default_timezone_set('Asia/makassar');
                       echo date('H:i:s a');
                       ?>
                       </td>
                       <td><input type="text" name="keterangan" class="form-control"></td>
                       <td><button class="btn btn-success"><i class="bi bi-check-lg"></i></button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <input type="submit" name="submit" class="btn btn-outline-primary" value="Simpan">
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </form>
        <!-- /.row -->
        <div class="col-md-7">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="bi bi-person-badge"></i> Penampilan Pekerja</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CEKLIST MONITOR PEKERJAAN CLEANING SERVICES</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Uraian Pengecekan</th>
                      <th>Baik</th>
                      <th>Tidak</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Penampilan Pekerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Seragam Kerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sepatu Kerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Tanda Pengenal/Name Tag</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Tata Rambut</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Prokes/Masker</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-7">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="bi bi-archive"></i> Kondisi Ruangan & Halaman</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">CEKLIST MONITOR PEKERJAAN CLEANING SERVICES</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Uraian Pengecekan</th>
                      <th>Bersih</th>
                      <th>Kotor</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Penampilan Pekerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Seragam Kerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sepatu Kerja</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Tanda Pengenal/Name Tag</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Tata Rambut</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Prokes/Masker</td>
                      <td><input type="checkbox" name="baik"></td>
                      <td><input type="checkbox" name="tidak"></td>
                      <td><input type="text" name="keteranga" class="form-control col-sm-5"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
	</div>
</section>

<?php
include 'footer.php';
?>