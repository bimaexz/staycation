<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_cerita = $_GET['data'];
		//hapus kategori buku
		$sql_dh = "delete from `cerita` 
		where `id_cerita` = '$id_cerita'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_POST["katakunci"])) {
  $katakunci_nama_c             = $_POST["katakunci"];
  $_SESSION['katakunci_nama_c'] = $katakunci_nama_c;
 }
 if (isset($_SESSION['katakunci_nama_c'])) {
  $katakunci_nama_c = $_SESSION['katakunci_nama_c'];
 }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-history"></i> Cerita</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Cerita</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Cerita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=cerita">
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
                    <?php if($_GET['notif']=="hapusberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Dihapus</div>
                    <?php }}?>
                </div>
                  <table class="table table-bordered">
                    <thead>                  
                      <tr style="background-color: #E9E9E9;">
                        <th width="5%">No</th>
                        <th width="15%">Nama</th>
                        <th width="15%">Pekerjaan</th>
                        <th width="50%">Cerita</th>
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
                        $sql_c="select `c`.`id_cerita`, `c`.`cerita`, `u`.`nama`, `u`.`pekerjaan` from `cerita` `c` INNER JOIN `user` `u` ON `c`.`id_user` = `u`.`id_user`";
                        if (!empty($katakunci_nama_c)){
                          $sql_c .= " where `u`.`nama` LIKE '%$katakunci_nama_c%'";
                        } 
                        $sql_c .= " ORDER BY `nama` limit $posisi, $batas";
                        $query_c = mysqli_query($koneksi, $sql_c);
                        $no = $posisi + 1;
                        while($data_c = mysqli_fetch_row($query_c)){
                          $id_cerita = $data_c[0];
                          $cerita = $data_c[1];
                          $nama = $data_c[2];
                          $pekerjaan = $data_c[3];
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $pekerjaan; ?></td>
                        <td><?php echo $cerita; ?></td>
                        <td align="center">
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $cerita; ?>?'))window.location.href = 'index.php?include=cerita&aksi=hapus&data=<?php echo $id_cerita;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              

              <?php
                //hitung jumlah semua data 
                $sql_jum = "select `c`.`id_cerita`, `c`.`cerita`, `u`.`nama`, `u`.`pekerjaan` from `cerita` `c` INNER JOIN `user` `u` ON `c`.`id_user` = `u`.`id_user` "; 
                if (!empty($katakunci_nama_c)){
                  $sql_jum .= " WHERE `u`.`nama` LIKE '%$katakunci_nama_c%'";
                } 
                $sql_jum .= " ORDER BY `u`.`nama`";
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
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=cerita&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=cerita&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=cerita&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                  }
                  if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=cerita&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=cerita&halaman=$jum_halaman'>Last</a></li>";
                  }
                              
                }?>
                </ul>

              </div>
            </div>
            <!-- /.card -->

    </section>

