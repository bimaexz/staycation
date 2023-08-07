

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah Wisata</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=wisata">Wisata</a></li>
              <li class="breadcrumb-item active">Tambah Wisata</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Wisata</h3>
        <div class="card-tools">
          <a href="index.php?include=wisata" class="btn btn-sm btn-warning float-right">
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
      <form class="form-horizontal" method="post" action="index.php?include=konfirmasi-tambah-wisata" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group row">
            <label for="wisata" class="col-sm-3 col-form-label">Wisata</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="wisata" id="wisata" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="provinsi" id="provinsi" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="kota" class="col-sm-3 col-form-label">Kota</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="kota" id="kota" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="rating_wisata" class="col-sm-3 col-form-label">Rating Wisata</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="rating_wisata" id="rating_wisata" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="deskripsi_wisata" class="col-sm-3 col-form-label">Deksripsi Wisata</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="deskripsi_wisata" rows="12"></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata1" class="col-sm-3 col-form-label">Gambar Wisata 1 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata1" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata2" class="col-sm-3 col-form-label">Gambar Wisata 2 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata2" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar_wisata3" class="col-sm-3 col-form-label">Gambar Wisata 3 </label>
            <div class="col-sm-7">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="gambar_wisata3" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
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

