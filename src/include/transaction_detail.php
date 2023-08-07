<?php
  if(isset($_GET['data'])){
    $id_transaksi = $_GET['data'];
    $_SESSION['id_transaksi'] = $id_transaksi;
    $sql = "SELECT `t`.`tgl_checkin`, `t`.`tgl_checkout`,`h`.`hotel`, `j`.`jenis_kamar`, `u`.`nama`, `u`.`email`, `u`.`foto_profil` FROM `transaksi` `t` INNER JOIN  `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` INNER JOIN `jenis_kamar` `j` ON `t`.`id_jenis_kamar` = `j`.`id_jenis_kamar` INNER JOIN `user` `u` ON `t`.`id_user` = `u`.`id_user` WHERE `t`.`id_transaksi`='$id_transaksi'";
    $query = mysqli_query($koneksi, $sql);
    while($data = mysqli_fetch_row($query)){
        $tgl_checkin = $data[0];
        $tgl_checkout = $data[1];
        $hotel = $data[2];
        $jenis_kamar = $data[3];
        $nama = $data[4];
        $email = $data[5];
        $foto_profil = $data[6];
    }
  }
?>

<link rel="stylesheet" href="assets/css/transaction.css" type="text/css">
    <section id="transaction-detail">
        <div class="container w-100">
        <h1><span class="sub-title">Transaction </span>Detail</h1>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                <form>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Name</label>
                        <h6 style="text-transform: capitalize;"><?php echo $nama ; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Email</label>
                        <h6><?php echo $email ; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Hotel name</label>
                        <h6 style="text-transform: capitalize;"><?php echo $hotel ; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Room Type</label>
                        <h6 style="text-transform: capitalize;"><?php echo $jenis_kamar ; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Check In</label>
                        <h6><?php echo $tgl_checkin ; ?></h6>
                    </div>
                    <div class="mb-3 form-profile">
                        <label for="exampleInputEmail1" class="form-label label-profile">Check out</label>
                        <h6><?php echo $tgl_checkout ; ?></h6>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-lg-6 d-flex flex-row justify-content-center">
                    <div class="img-edit px-5">
                    <?php if(!empty($foto_profil)){?>
                            <img style="width: 440px;" src="assets/img/<?php echo $foto_profil; ?>" alt="">
                        <?php } else { ?>
                            <img style="width: 440px;" src="assets/img/guest.svg" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>