<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_hotel = $_GET['data'];
		//hapus kategori buku
		$sql_dh = "delete from `hotel` 
		where `id_hotel` = '$id_hotel'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_POST["katakunci"])) {
  $katakunci_hotel             = $_POST["katakunci"];
  $_SESSION['katakunci_hotel'] = $katakunci_hotel;
 }
 if (isset($_SESSION['katakunci_hotel'])) {
  $katakunci_hotel = $_SESSION['katakunci_hotel'];
 }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-building"></i> Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Hotel</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-hotel" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Hotel</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=hotel">
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
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Diubah</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Dihapus</div>
                    <?php }?>
                      <?php }?>
                </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr style="background-color: #E9E9E9;">
                        <th width="5%">No</th>
                        <th width="15%">Nama Hotel</th>
                        <th width="15%">Wisata</th>
                        <th width="50%">Deskripsi Hotel</th>
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
                        $sql_h="SELECT `h`.`id_hotel`,`h`.`hotel`,`h`.`deskripsi_hotel`, `w`.`wisata` FROM `hotel` `h` INNER JOIN `wisata` `w` ON `h`.`id_wisata` = `w`.`id_wisata` ";
                        //echo $sql;
                        if(!empty($katakunci_hotel)){
                          $sql_h .= " WHERE `h`.`hotel` LIKE '%$katakunci_hotel%'";
                          }
                          $sql_h .= " ORDER BY `h`.`hotel` limit $posisi, $batas";
                       $query_h = mysqli_query($koneksi, $sql_h);
                       $no = $posisi + 1;
                       while($data_h = mysqli_fetch_row($query_h)){
                         $id_hotel = $data_h[0];
                         $hotel = $data_h[1];
                         $deskripsi_hotel = $data_h[2];
                         $wisata = $data_h[3];
                         $_SESSION['id_hotel']=$id_hotel;
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $hotel; ?></td>
                        <td><?php echo $wisata; ?></td>
                        <td><?php echo $deskripsi_hotel; ?></td>
                        <td align="center">
                          <a href="index.php?include=edit-hotel&data=<?php echo $id_hotel; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="index.php?include=detail-hotel&data=<?php echo $id_hotel; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $hotel; ?>?'))window.location.href = 'index.php?include=hotel&aksi=hapus&data=<?php echo $id_hotel;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data 
                $sql_jum = "SELECT `h`.`id_hotel`,`h`.`hotel`,`h`.`deskripsi_hotel`, `w`.`wisata` FROM `hotel` `h` INNER JOIN `wisata` `w` ON `h`.`id_wisata` = `w`.`id_wisata` "; 
                if (!empty($katakunci_hotel)){
                  $sql_jum .= " WHERE `h`.`hotel` LIKE '%$katakunci_hotel%'";
                } 
                $sql_jum .= " ORDER BY `h`.`hotel`";
                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
                ?>
              <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <?php 
                if($jum_halaman==0){
                  //tidak ada halaman
                }else if($jum_halaman==1){
                  echo "<li class='page-item'><a class='page-link'>1</a></li>";
                }else{
                  $sebelum = $halaman-1;
                  $setelah = $halaman+1;
                  if($halaman!=1){
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=hotel&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=hotel&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=hotel&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                  }
                  if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=hotel&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=hotel&halaman=$jum_halaman'>Last</a></li>";
                  }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>

