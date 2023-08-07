<?php
if (isset($_GET['data'])){
  $id_wisata = $_GET['data'];
  $_SESSION['id_wisata'] = $id_wisata;
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
            <h3><i class="fas fa-edit"></i> Edit Wisata</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=wisata">Wisata</a></li>
              <li class="breadcrumb-item active">Edit Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Wisata</h3>
        <div class="card-tools">
          <a href="index.php?include=wisata" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
        <?php }?>
      <?php }?>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-wisata" method="post" enctype="multipart/form-data">
        <div class="card-body">          
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info">
            <i class="fas fa-map"></i> <u>Wisata</u></span></label>
          </div>
          <div class="form-group row">
            <label for="wisata" class="col-sm-3 col-form-label">Nama Wisata</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="wisata" id="wisata" value="<?php echo $wisata; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="provinsi" id="provinsi" value="<?php echo $provinsi; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="kota" class="col-sm-3 col-form-label">Kota</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kota" id="kota" value="<?php echo $kota; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="rating_wisata" class="col-sm-3 col-form-label">Rating Wisata</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="rating_wisata" id="rating_wisata" value="<?php echo $rating_wisata; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_wisata" class="col-sm-3 col-form-label">Deksripsi Wisata</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi_wisata" rows="12"><?php echo $deskripsi_wisata; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata1" class="col-sm-3 col-form-label">Gambar Wisata 1</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata2" class="col-sm-3 col-form-label">Gambar Wisata 2</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata3" class="col-sm-3 col-form-label">Gambar Wisata 3</label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata3" id="customFile">
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

