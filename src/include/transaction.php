
<link rel="stylesheet" href="assets/css/transaction.css" type="text/css">
    <section id="transaction">
        <div class="container">
        <h1><span class="sub-title">Transaction</span></h1>
        <div class="row">
            <?php 
                    $id_user = $_SESSION['id_user'];
                    $sql_t = "SELECT `t`.`id_transaksi`, `t`.`status`, `t`.`tgl_pemesanan`, `h`.`hotel` FROM `transaksi` `t` INNER JOIN `hotel` `h` ON `t`.`id_hotel` = `h`.`id_hotel` WHERE `t`.`id_user`='$id_user'";
                    $query_t = mysqli_query($koneksi, $sql_t);
                    while($data_t = mysqli_fetch_row($query_t)){
                        $id_transaksi = $data_t[0];
                        $status = $data_t[1];
                        $tgl_pemesanan = $data_t[2];
                        $hotel = $data_t[3];
                        ?>
                        <?php if($status == "booked"){?>
                            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                            <div class="card m-4">
                            <div class="card-body">
                                <h2 style="text-transform: capitalize"><?php echo $hotel;?></h2>
                                <p><?php echo $tgl_pemesanan;?></p>
                                <div class="btn-green">
                                    <a href="index.php?include=transaction-detail&data=<?php echo $id_transaksi;?>">Show More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    <?php }
                ?>
                
                
        </div>
        </div>
    </section>
