<?php
    if(isset($_SESSION['id_user'])){
      $id_user = $_SESSION['id_user'];
      $sql = "SELECT `id_hotel` FROM `hotel` WHERE `id_user` = '$id_user'";
      $query = mysqli_query($koneksi, $sql);
      while($data = mysqli_fetch_row($query)){
        $id_hotel = $data[0];
        $_SESSION['id_hotel'] = $id_hotel;
      }
    }
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
        if($_GET['aksi']=='hapus'){
            $id_transaksi = $_GET['data'];
            //hapus kategori buku
            $sql_dh = "delete from `transaksi` 
            where `id_transaksi` = '$id_transaksi'";
            mysqli_query($koneksi,$sql_dh);
        }
    }
    if (isset($_POST["katakunci"])) {
      $katakunci_nama             = $_POST["katakunci"];
      $_SESSION['katakunci_nama'] = $katakunci_nama;
     }
     if (isset($_SESSION['katakunci_nama'])) {
      $katakunci_nama = $_SESSION['katakunci_nama'];
     }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-receipt"></i> Transaksi</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Transaksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=transaksi">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="validasiberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Divalidasi</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Dihapus</div>
                    <?php }?>
                      <?php }?>
                </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="20%">Nama</th>
                        <th width="20%">Hotel</th>
                        <th width="20%">Jenis Kamar</th>
                        <th width="20%">Status</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $batas = 5;
                        if(!isset($_GET['halaman'])){
                             $posisi = 0;
                             $halaman = 1;
                        }else{
                             $halaman = $_GET['halaman'];
                             $posisi = ($halaman-1) * $batas;
                        }
                        $sql_t = "SELECT `t`.`id_transaksi`, `t`.`status`, `u`.`nama`, `h`.`hotel`, `j`.`jenis_kamar` FROM `transaksi` `t` INNER JOIN `user` `u` ON `t`.`id_user` = `u`.`id_user` INNER JOIN `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` INNER JOIN `jenis_kamar` `j` ON `t`.`id_jenis_kamar` = `j`.`id_jenis_kamar` WHERE `t`.`id_hotel` = '$id_hotel'";
                        if(!empty($katakunci_nama)){
                            $sql_t .= " AND `u`.`nama` LIKE '%$katakunci_nama%'";
                            }
                            $sql_t .= " ORDER BY `u`.`nama` limit $posisi, $batas";
                        $query_t = mysqli_query($koneksi, $sql_t);
                        $no =$posisi + 1;
                        while($data_t = mysqli_fetch_row($query_t)){
                            $id_transaksi = $data_t[0];
                            $status = $data_t[1];
                            $nama = $data_t[2];
                            $hotel = $data_t[3];
                            $jenis_kamar = $data_t[4];
                            ?>
                             <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $nama; ?></td>
                                <td><?php echo $hotel; ?></td>
                                <td><?php echo $jenis_kamar; ?></td>
                                <td><?php echo $status; ?></td>
                                <td align="center">
                                <a href="index.php?include=detail-transaksi&data=<?php echo $id_transaksi;?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?'))window.location.href = 'index.php?include=transaksi&aksi=hapus&data=<?php echo $id_transaksi;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                           
                                </td>
                            </tr>
                        <?php $no++;}
                        ?>
                     
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data 
                $sql_jum = "SELECT `t`.`id_transaksi`, `t`.`status`, `u`.`nama`, `h`.`hotel`, `j`.`jenis_kamar` FROM `transaksi` `t` INNER JOIN `user` `u` ON `t`.`id_user` = `u`.`id_user` INNER JOIN `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` INNER JOIN `jenis_kamar` `j` ON `t`.`id_jenis_kamar` = `j`.`id_jenis_kamar` "; 
                if (!empty($katakunci_nama)){
                  $sql_jum .= " WHERE `u`.`nama` LIKE '%$katakunci_nama%'";
                } 
                $sql_jum .= " ORDER BY `u`.`nama`";
                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
                ?>
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
        <?php if ($jum_halaman == 0) {
 //tidak ada halaman
} elseif ($jum_halaman == 1) {
 echo "<li class='page-item'><a class='page-link'>1</a></li>";
} else {
 $sebelum = $halaman - 1;
 $setelah = $halaman + 1;
 if ($halaman != 1) {
  echo "<li class='page-item'>
                        <a class='page-link'
                        href='index.php?include=transaksi&halaman=1'>First</a></li>";
  echo "<li class='page-item'><a class='page-link'
                        href='index.php?include=transaksi&
                        halaman=$sebelum'>
                        «</a></li>";
 }
 for ($i = 1; $i <= $jum_halaman; $i++) {
  if ($i > $halaman - 5 and $i < $halaman + 5) {
   if ($i != $halaman) {
    echo "<li class='page-item'><a class='page-link'
                          href='index.php?include=transaksi&halaman=$i'>
                          $i</a></li>";
   } else {
    echo "<li class='page-item'>
                          <a class='page-link'>$i</a></li>";
   }
  }
 }
 if ($halaman != $jum_halaman) {
  echo "<li class='page-item'>
                        <a class='page-link'
                        href='index.php?include=transaksi
                        &halaman=$setelah'>»</a></li>";
  echo "<li class='page-item'><a class='page-link'
                        href='index.php?include=transaksi&halaman=$jum_halaman'>
                        Last</a></li>";
 }
} ?>
      </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>

