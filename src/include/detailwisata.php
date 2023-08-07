<?php
if (isset($_GET['data'])){
  $id_wisata = $_GET['data'];
  $sql= "select `wisata`, `provinsi`, `kota`, `rating_wisata`, `deskripsi_wisata`, `gambar_wisata1`, `gambar_wisata2`, `gambar_wisata3` from `wisata` where `id_wisata`='$id_wisata'";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
    $wisata = $data[0];
    $provinsi = $data[1];
    $kota = $data[2];
    $rating_wisata = $data[3];
    $deskripsi_wisata = $data[4];
    $gambar_wisata1 = $data[5];
    $gambar_wisata2 = $data[6];
    $gambar_wisata3 = $data[7];
  }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-map"></i> Detail Wisata</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=wisata">Wisata</a></li>
              <li class="breadcrumb-item active">Detail Wisata</li>
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
                  <a href="index.php?include=wisata" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                                 
                      <tr>
                        <td width="20%"><strong>Nama Wisata<strong></td>
                        <td width="80%"><?php echo $wisata; ?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Provinsi<strong></td>
                        <td width="80%"><?php echo $provinsi; ?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Kota<strong></td>
                        <td width="80%"><?php echo $kota; ?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Rating Wisata<strong></td>
                        <td width="80%"><?php echo $rating_wisata; ?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Deskripsi Wisata<strong></td>
                        <td width="80%"><?php echo $deskripsi_wisata; ?></td>
                      </tr> 
                      <tr>
                        <td><strong>Gambar Wisata 1<strong></td>
                        <td><img src="assets/img/<?php echo $gambar_wisata1; ?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td><strong>Gambar Wisata 2<strong></td>
                        <td><img src="assets/img/<?php echo $gambar_wisata2; ?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td><strong>Gambar Wisata 3<strong></td>
                        <td><img src="assets/img/<?php echo $gambar_wisata3; ?>" class="img-fluid" width="200px;"></td>
                      </tr>    
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>

