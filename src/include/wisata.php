<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_wisata = $_GET['data'];
		//hapus kategori buku
		$sql_dh = "delete from `wisata` 
		where `id_wisata` = '$id_wisata'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if (isset($_POST["katakunci"])) {
  $katakunci_wisata             = $_POST["katakunci"];
  $_SESSION['katakunci_wisata'] = $katakunci_wisata;
 }
 if (isset($_SESSION['katakunci_wisata'])) {
  $katakunci_wisata = $_SESSION['katakunci_wisata'];
 }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-map"></i> Wisata</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Wisata</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-wisata" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah  Wisata</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=wisata">
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
                        <th width="15%">Wisata</th>
                        <th width="15%">Provinsi</th>
                        <th width="15%">Kota</th>
                        <th width="30%">Deskripsi_Wisata</th>
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
                        $sql_w="select `id_wisata`, `wisata`,`provinsi`, `kota`, `deskripsi_wisata` from `wisata` ";
                        if (!empty($katakunci_wisata)){
                          $sql_w .= " where `wisata` LIKE '%$katakunci_wisata%'";
                          }
                          $sql_w .= " ORDER BY `wisata` limit $posisi, $batas";
                       $query_w = mysqli_query($koneksi, $sql_w);
                       $no = $posisi + 1;
                       while($data_w = mysqli_fetch_row($query_w)){
                         $id_wisata = $data_w[0];
                         $wisata = $data_w[1];
                         $provinsi = $data_w[2];
                         $kota = $data_w[3];
                         $deskripsi_wisata = $data_w[4];
                         $_SESSION['id_wisata']=$id_wisata;
                        ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $wisata; ?></td>
                        <td><?php echo $provinsi; ?></td>
                        <td><?php echo $kota; ?></td>
                        <td><?php echo $deskripsi_wisata; ?></td>
                        <td align="center">
                          <a href="index.php?include=edit-wisata&data=<?php echo $id_wisata;?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="index.php?include=detail-wisata&data=<?php echo $id_wisata;?></php>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $wisata; ?>?'))window.location.href = 'index.php?include=wisata&aksi=hapus&data=<?php echo $id_wisata;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++;}?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data 
                $sql_jum = "select `id_wisata`, `wisata`,`provinsi`, `kota`, `deskripsi_wisata` from `wisata` "; 
                if (!empty($katakunci_wisata)){
                  $sql_jum .= " where `wisata` LIKE '%$katakunci_wisata%'";
                } 
                $sql_jum .= " ORDER BY `wisata`";
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
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=wisata&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=wisata&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=wisata&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                  }
                  if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=wisata&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=wisata&halaman=$jum_halaman'>Last</a></li>";
                  }
                              
                }?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>

