<?php
if (isset($_GET['data'])) {
 $id_user             = $_GET['data'];
 $_SESSION['id_user'] = $id_user;
 $sql_user            = "SELECT `nama`,`email`,`username`,`password`, `pekerjaan`, `kontak`, `level`,`foto_profil`
  FROM `user` WHERE `id_user` = $id_user";
 $query_user = mysqli_query($koneksi, $sql_user);
 while ($data_user = mysqli_fetch_row($query_user)) {
  $nama     = $data_user[0];
  $email    = $data_user[1];
  $username = $data_user[2];
  $password = $data_user[3];
  $pekerjaan = $data_user[4];
  $kontak   = $data_user[5];
  $level = $data_user[6];
  $foto_profil = $data_user[7];
 }
}
?>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user"></i> Detail User</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=pengaturan-user">User</a></li>
              <li class="breadcrumb-item active">Detail User</li>
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
                  <a href="index.php?include=pengaturan-user" class="btn btn-sm btn-warning float-right">
                  <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data User<strong></td>
                    </tr>
                    <tr>
                        <td><strong>Foto User<strong></td>
                        <td><img src="assets/img/<?php echo $foto_profil; ?>" class="img-fluid" width="200px;"></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Level<strong></td>
                        <td width="80%"><?php echo $level; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Username<strong></td>
                        <td width="80%"><?php echo $username; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Pekerjaan<strong></td>
                        <td width="80%"><?php echo $pekerjaan; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Kontak<strong></td>
                        <td width="80%"><?php echo $kontak; ?></td>
                    </tr>
                    </tbody>
                </table>
                </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
            </div>
            <!-- /.card -->

    </section>
