<?php
  if(isset($_GET['data'])){
    $id_transaksi = $_GET['data'];
    $_SESSION['id_transaksi'] = $id_transaksi;
    $sql = "SELECT `t`.`nama_pengirim`, `t`.`tgl_checkin`, `t`.`tgl_checkout`, `t`.`status`, `t`.`tgl_pemesanan`, `t`.`bukti_transfer`, `h`.`hotel`, `j`.`jenis_kamar`, `u`.`nama` FROM `transaksi` `t` INNER JOIN  `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` INNER JOIN `jenis_kamar` `j` ON `t`.`id_jenis_kamar` = `j`.`id_jenis_kamar` INNER JOIN `user` `u` ON `t`.`id_user` = `u`.`id_user` WHERE `t`.`id_transaksi`='$id_transaksi'";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
        $nama_pengirim = $data[0];
        $tgl_checkin = $data[1];
        $tgl_checkout = $data[2];
        $status = $data[3];
        $tgl_pemesanan = $data[4];
        $bukti_transfer = $data[5];
        $hotel = $data[6];
        $jenis_kamar = $data[7];
        $nama = $data[8];
    }
  }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-receipt"></i> Detail Transaksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=transaksi">Transaksi</a></li>
              <li class="breadcrumb-item active">Detail Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="index.php?include=transaksi" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                      
                    <tr>
                        <td width="20%"><strong>Bukti Transfer<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $bukti_transfer; ?>" class="img-fluid" width="200px;"></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama Pengirim<strong></td>
                        <td width="80%"><?php echo $nama_pengirim; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama Pemesan<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Nama Hotel<strong></td>
                        <td width="80%"><?php echo $hotel; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Jenis Kamar<strong></td>
                        <td width="80%"><?php echo $jenis_kamar; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Status<strong></td>
                        <td width="80%"><?php echo $status; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Tanggal Check In<strong></td>
                        <td width="80%"><?php echo $tgl_checkin; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Tanggal Check Out<strong></td>
                        <td width="80%"><?php echo $tgl_checkout; ?></td>
                      </tr>                                               
                      <tr>
                        <td width="20%"><strong>Tanggal Pemesanan<strong></td>
                        <td width="80%"><?php echo $tgl_pemesanan; ?></td>
                      </tr>                                               
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <form action="index.php?include=konfirmasi-status" method="post">
                  <div class="card-footer">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Konfirmasi</button>
                        </div>
                    </div>
              </form>
              <!-- <div class="card-footer clearfix">&nbsp;</div> -->
            </div>
            <!-- /.card -->

    </section>

