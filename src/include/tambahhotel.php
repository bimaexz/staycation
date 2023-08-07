

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Hotel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=hotel">Hotel</a></li>
              <li class="breadcrumb-item active">Tambah Hotel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Hotel</h3>
        <div class="card-tools">
          <a href="index.php?include=hotel" class="btn btn-sm btn-warning float-right">
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
      <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-hotel" method="post" enctype="multipart/form-data">
        <div class="card-body">
          
          <div class="form-group row">
            <label for="hotel" class="col-sm-3 col-form-label">Nama Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="hotel" id="hotel" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="id_user" class="col-sm-3 col-form-label">Admin</label>
            <div class="col-sm-7">
              <select class="form-control" id="user" name="user">
                <option value="0">Pilih Admin</option>
                <?php 
                  $sql_u = "SELECT `id_user`, `nama` FROM `user` WHERE `level`= 'admin'";
                  $query_u = mysqli_query($koneksi, $sql_u);
                  while($data_u = mysqli_fetch_row($query_u)){
                    $id_user = $data_u[0];
                    $nama = $data_u[1];
                    ?>
                    <option value="<?php echo $id_user; ?>"><?php echo $nama; ?></option>
                  <?php }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="wisata" class="col-sm-3 col-form-label">Wisata</label>
            <div class="col-sm-7">
            <select class="form-control" id="wisata" name="wisata">
                <option value="0">Pilih Wisata</option>
                <?php 
                  $sql_w = "SELECT `id_wisata`, `wisata` FROM `wisata`";
                  $query_w = mysqli_query($koneksi, $sql_w);
                  while($data_w = mysqli_fetch_row($query_w)){
                    $id_wisata = $data_w[0];
                    $wisata = $data_w[1];
                    ?>
                    <option value="<?php echo $id_wisata; ?>"><?php echo $wisata; ?></option>
                  <?php }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="bintang_hotel" class="col-sm-3 col-form-label">Bintang</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="bintang_hotel" id="bintang_hotel" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="jarak" class="col-sm-3 col-form-label">Jarak</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="jarak" id="jarak" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="email" id="email" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kontak" class="col-sm-3 col-form-label">Kontak Hotel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kontak" id="kontak" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="fasilitas" class="col-sm-3 col-form-label">Fasilitas</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="fasilitas" id="" rows="12"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_hotel" class="col-sm-3 col-form-label">Deksripsi Hotel</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi_hotel" id="" rows="12"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_hotel" class="col-sm-3 col-form-label">Gambar Hotel </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_hotel" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior1" class="col-sm-3 col-form-label">Gambar Interior 1 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior2" class="col-sm-3 col-form-label">Gambar Interior 2 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior3" class="col-sm-3 col-form-label">Gambar Interior 3 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior3" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_interior4" class="col-sm-3 col-form-label">Gambar Interior 4 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_interior4" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
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
