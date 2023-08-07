<?php
  if(isset($_SESSION['id_user'])){
    $id_user = $_SESSION['id_user'];
    $sql = "SELECT `hotel`,`bintang_hotel`, `jarak`, `fasilitas`,`deskripsi_hotel`,`email_hotel`, `kontak_hotel` FROM `hotel` WHERE `id_user` ='$id_user'";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
      $hotel = $data[0];
      $bintang_hotel = $data[1];
      $jarak = $data[2];
      $fasilitas = $data[3];
      $deskripsi_hotel = $data[4];
      $email_hotel = $data[5];
      $kontak_hotel = $data[6];
    }
  }
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Profil Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="profilhotel.php">Profil Hotel</a></li>
              <li class="breadcrumb-item active">Edit Profil Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Profil</h3>
        <div class="card-tools">
          <a href="index.php?include=profil-hotel" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if ((!empty($_GET['notif'])) && (!empty($_GET['jenis']))) { ?>
      <?php if ($_GET['notif'] == "editkosong") { ?>
      <div class="alert alert-danger" role="alert">Maaf data
        <?php echo $_GET['jenis']; ?> wajib di isi</div>
      <?php } ?>
      <?php } ?>
    </div>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-profil-hotel" method="post" enctype="multipart/form-data">
        <div class="card-body">          
          <div class="form-group row">
            <label for="gambar_hotel" class="col-sm-3 col-form-label">Gambar Hotel</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_hotel" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="hotel" class="col-sm-3 col-form-label">Nama Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="hotel" id="hotel" value="<?php echo $hotel; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="email_hotel" class="col-sm-3 col-form-label">Email Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email_hotel" id="email_hotel" value="<?php echo $email_hotel; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak_hotel" class="col-sm-3 col-form-label">Kontak Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kontak_hotel" id="kontak_hotel" value="<?php echo $kontak_hotel; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="bintang_hotel" class="col-sm-3 col-form-label">Bintang</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="bintang_hotel" id="bintang_hotel" value="<?php echo $bintang_hotel; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="jarak" class="col-sm-3 col-form-label">Jarak</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jarak" id="jarak" value="<?php echo $jarak; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="fasilitas" class="col-sm-3 col-form-label">Fasilitas</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="fasilitas" rows="12"><?php echo $fasilitas; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_hotel" class="col-sm-3 col-form-label">Deksripsi Hotel</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi_hotel" id="editor1" rows="12"><?php echo $deskripsi_hotel; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior1" class="col-sm-3 col-form-label">Gambar Interior 1</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior2" class="col-sm-3 col-form-label">Gambar Interior 2</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior3" class="col-sm-3 col-form-label">Gambar Interior 3</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior3" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior4" class="col-sm-3 col-form-label">Gambar Interior 4</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior4" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
