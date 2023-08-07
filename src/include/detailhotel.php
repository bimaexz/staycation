<?php
  if(isset($_GET['data'])){
    $id_hotel = $_GET['data'];
    $_SESSION['id_hotel'] = $id_hotel;
    $sql = "SELECT `hotel`,`bintang_hotel`, `jarak`, `fasilitas`,`deskripsi_hotel`,`email_hotel`, `kontak_hotel`,`gambar_hotel`,`gambar_interior1`,`gambar_interior2`,`gambar_interior3`,`gambar_interior4` FROM `hotel` WHERE `id_hotel` ='$id_hotel'";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
      $hotel = $data[0];
      $bintang_hotel = $data[1];
      $jarak = $data[2];
      $fasilitas = $data[3];
      $deskripsi_hotel = $data[4];
      $email_hotel = $data[5];
      $kontak_hotel = $data[6];
      $gambar_hotel = $data[7];
      $gambar_interior1 = $data[8];
      $gambar_interior2 = $data[9];
      $gambar_interior3 = $data[10];
      $gambar_interior4 = $data[11];
    }
  }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-building"></i> Detail Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=hotel">Hotel</a></li>
              <li class="breadcrumb-item active">Detail Hotel</li>
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
                  <a href="index.php?include=hotel" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>                      
                    <tr>
                        <td width="20%"><strong>Gambar Hotel<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $gambar_hotel; ?>" class="img-fluid" width="200px;"></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Nama Hotel<strong></td>
                        <td width="80%"><?php echo $hotel; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Bintang<strong></td>
                        <td width="80%"><?php echo $bintang_hotel; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Jarak<strong></td>
                        <td width="80%"><?php echo $jarak; ?> km</td>
                      </tr>                               
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email_hotel; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Kontak<strong></td>
                        <td width="80%"><?php echo $kontak_hotel; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Fasilitas<strong></td>
                        <td width="80%"><?php echo $fasilitas; ?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Deskripsi<strong></td>
                        <td width="80%"><?php echo $deskripsi_hotel; ?></td>
                      </tr> 
                      <tr>
                        <td width="20%"><strong>Interior 1<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $gambar_interior1; ?>" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 2<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $gambar_interior2; ?>" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 3<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $gambar_interior3; ?>" class="img-fluid" width="200px;"></td>
                      </tr>   
                      <tr>
                        <td width="20%"><strong>Interior 4<strong></td>
                        <td width="80%"><img src="assets/img/<?php echo $gambar_interior4; ?>" class="img-fluid" width="200px;"></td>
                      </tr>   
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
