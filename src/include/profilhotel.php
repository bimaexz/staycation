<?php

  if(isset($_SESSION['id_user'])){
    $id_user = $_SESSION['id_user'];
    $sql = "SELECT `hotel`,`bintang_hotel`, `jarak`, `fasilitas`,`deskripsi_hotel`,`email_hotel`, `kontak_hotel`,`gambar_hotel`,`gambar_interior1`,`gambar_interior2`,`gambar_interior3`,`gambar_interior4` FROM `hotel` WHERE `id_user` ='$id_user'";
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
            <h3><i class="fas fa-user-tie"></i> Profil Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Profil Hotel</li>
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
                  <a href="index.php?include=edit-profil-hotel" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil Hotel</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="editberhasil"){?>
                          <div class="alert alert-success" role="alert">
                          Data Berhasil Diedit</div>
                    <?php }?>
                      <?php }?>
                </div>
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>PROFIL<strong></td>
                      </tr> 
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

