<?php

if (isset($_GET['data'])){
  $id_jenis_kamar = $_GET['data'];
  $_SESSION['id_jenis_kamar'] = $id_jenis_kamar;
  $sql= "SELECT `jenis_kamar`, `harga_kamar`, `jumlah_kamar` FROM `jenis_kamar` WHERE `id_jenis_kamar` = '$id_jenis_kamar'";
  $query = mysqli_query($koneksi, $sql);
  while($data = mysqli_fetch_row($query)){
    $jenis_kamar = $data[0];
    $harga_kamar = $data[1];
    $jumlah_kamar = $data[2];
  }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Jenis Kamar</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=jenis-kamar">Jenis Kamar</a></li>
              <li class="breadcrumb-item active">Edit Jenis Kamar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Jenis Kamar</h3>
        <div class="card-tools">
          <a href="index.php?include=jenis-kamar" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> tidak boleh kosong</div>
        <?php }?>
      <?php }?>
      <form class="form-horizontal" action="index.php?include=konfirmasi-edit-jenis-kamar" method="post" enctype="multipart/form-data">
        <div class="card-body">          
          <div class="form-group row">
            <label for="foto" class="col-sm-12 col-form-label"><span class="text-info">
            <i class="fas fa-bed"></i> <u>Jenis Kamar</u></span></label>
          </div>
          <div class="form-group row">
            <label for="jenis_kamar" class="col-sm-3 col-form-label">Jenis Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jenis_kamar" id="jenis_kamar" value="<?php echo $jenis_kamar; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_kamar" class="col-sm-3 col-form-label">Harga Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="harga_kamar" id="harga_kamar" value="<?php echo $harga_kamar; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah_kamar" class="col-sm-3 col-form-label">Jumlah Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" value="<?php echo $jumlah_kamar; ?>">
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