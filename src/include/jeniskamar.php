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
		$id_jenis_kamar = $_GET['data'];
		//hapus jenis_kamar buku
		$sql_dh = "delete from `jenis_kamar` 
		where `id_jenis_kamar` = '$id_jenis_kamar'";
		mysqli_query($koneksi,$sql_dh);
	}
}
if(isset($_POST["katakunci"])){
  $katakunci_jenis_kamar = $_POST["katakunci"];
  $_SESSION['katakunci_jenis_kamar'] = $katakunci_jenis_kamar;
}
if(isset($_SESSION['katakunci_jenis_kamar'])){
  $katakunci_jenis_kamar = $_SESSION['katakunci_jenis_kamar'];
}


?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-bed"></i> Jenis Kamar</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Jenis Kamar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Jenis Kamar</h3>
                <div class="card-tools">
                  <a href="index.php?include=tambah-jenis-kamar" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Jenis Kamar</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=jenis-kamar">
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
                        <th width="30%">Jenis Kamar</th>
                        <th width="25%">Harga</th>
                        <th width="25%">Jumlah Kamar</th>
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
                          
                      $id_user = $_SESSION['id_user'];
                      $sql = "SELECT `id_jenis_kamar`, `jenis_kamar`, `harga_kamar`, `jumlah_kamar` FROM `jenis_kamar`  WHERE `id_user` = '$id_user'";
                      if(!empty($katakunci_jenis_kamar)){
                        $sql .= " AND `jenis_kamar` LIKE '%$katakunci_jenis_kamar%'";
                        }
                        $sql .= " ORDER BY `jenis_kamar` limit $posisi, $batas ";
                      $query = mysqli_query($koneksi, $sql);
                      $no = $posisi + 1;
                      while($data = mysqli_fetch_row($query)){
                        $id_jenis_kamar = $data[0];
                        $jenis_kamar = $data[1];
                        $harga_kamar = $data[2];
                        $jumlah_kamar = $data[3];
                        $_SESSION['id_jenis_kamar'] = $jenis_kamar;
                        ?>
                        <?php
                        //hitung jumlah semua data 
                        $sql_jum = "SELECT `id_jenis_kamar`, `jenis_kamar`, `harga_kamar`, `jumlah_kamar` FROM `jenis_kamar`  WHERE `id_user` = '$id_user' "; 
                        if (!empty($katakunci_jenis_kamar)){
                          $sql_jum .= " AND `jenis_kamar` LIKE '%$katakunci_jenis_kamar%'";
                        } 
                        $sql_jum .= " ORDER BY `jenis_kamar`";
                        $query_jum = mysqli_query($koneksi,$sql_jum);
                        $jum_data = mysqli_num_rows($query_jum);
                        $jum_halaman = ceil($jum_data/$batas);
                        
                        ?>
                        <tr>
                        <td><?php echo $no ; ?></td>
                        <td><?php echo $jenis_kamar ; ?></td>
                        <td><?php echo $harga_kamar ; ?></td>
                        <td><?php echo $jumlah_kamar ; ?></td>
                        <td align="center">
                        <a href="index.php?include=edit-jenis-kamar&data=<?php echo $id_jenis_kamar; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $jenis_kamar; ?>?'))window.location.href = 'index.php?include=jenis-kamar&aksi=hapus&data=<?php echo $id_jenis_kamar;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++; }?>
                      
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              
                
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
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-kamar&halaman=1'>First</a></li>";
                    echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-kamar&halaman=$sebelum'>«</a></li>";
                  }
                  for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                            echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-kamar&halaman=$i'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                  }
                  if($halaman!=$jum_halaman){
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-kamar&halaman=$setelah'>»</a></li>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-kamar&halaman=$jum_halaman'>Last</a></li>";
                  }
                              
                }?>
                </ul>


              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->

