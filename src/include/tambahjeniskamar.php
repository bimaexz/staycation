


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Jenis Kamar</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=jenis-kamar">Jenis Kamar</a></li>
              <li class="breadcrumb-item active">Tambah Jenis Kamar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Jenis Kamar</h3>
        <div class="card-tools">
          <a href="index.php?include=jenis-kamar" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
        <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
        <?php }?>
      <?php }?>
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-tambah-jenis-kamar">
        <div class="card-body">
        <!-- <div class="form-group row">
            <label for="hotel" class="col-sm-3 col-form-label">Hotel</label>
            <div class="col-sm-7">
              <select class="form-control" id="hotel" name="hotel">
                <option value="0">Pilih Hotel</option>
                <?php 
                  $sql_u = "SELECT `id_hotel`, `hotel` FROM `hotel`";
                  $query_u = mysqli_query($koneksi, $sql_u);
                  while($data_u = mysqli_fetch_row($query_u)){
                    $id_hotel = $data_u[0];
                    $hotel = $data_u[1];
                    ?>
                    <option value="<?php echo $id_hotel; ?>"><?php echo $hotel; ?></option>
                  <?php }
                ?>
              </select>
            </div>
            </div> -->
          <div class="form-group row">
            <label for="jenis_kamar" class="col-sm-3 col-form-label">Jenis Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jenis_kamar" id="jenis_kamar" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="harga_kamar" id="harga" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah_kamar" class="col-sm-3 col-form-label">Jumlah Kamar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" value="">
            </div>
          </div>
          </div>
        </div>
      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->

