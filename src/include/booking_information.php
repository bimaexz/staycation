<?php

    $id_hotel = $_GET['hotel'];
    $SESSION['id_hotel'] = $id_hotel;
    $malam = $_GET['malam'];
    $id_jenis_kamar = $_GET['data'];
    $_SESSION['id_jenis_kamar'] = $id_jenis_kamar;
    $sql_harga = "SELECT `harga_kamar` FROM `jenis_kamar` WHERE `id_jenis_kamar`='$id_jenis_kamar'";
    $query_harga = mysqli_query($koneksi, $sql_harga);
    while($data_harga = mysqli_fetch_row($query_harga)){
        $harga_kamar = $data_harga[0];
    }
    $total = $malam * $harga_kamar;

    $sql_h = "SELECT `hotel`, `gambar_hotel` FROM `hotel` WHERE `id_hotel`='$id_hotel'";
    $query_h = mysqli_query($koneksi, $sql_h);
    while($data_h = mysqli_fetch_row($query_h)){
        $hotel = $data_h[0];
        $gambar_hotel = $data_h[1];
    }
?>

<link rel="stylesheet" href="assets/css/booking.css" type="text/css">
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    

    <section id="booking-information">
        <div class="container w-100">
        <h1><span class="sub-title">Booking </span>Information</h1>
        <p>Please fill up the black</p>
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12 col-lg-6">
                    <div class="img-book">
                        <img src="assets/img/<?php echo $gambar_hotel; ?>" alt="">
                    </div>

                    <h2><?php echo $hotel; ?></h2>
                    <h3>Total : Rp. <span class="total"><?php echo $total; ?></span> for <span class="total"><?php echo $malam; ?></span> night</h3>
                    <div class="img-bank">
                        <img src="assets/img/payment.svg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-sm-12 col-lg-6 px-5">
                <form action="index.php?include=konfirmasi-booking" method="post" enctype="multipart/form-data">
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Check In Date</label>
                        <input type="text" class="form-control" id="check-in" placeholder="how long you will stay" name="check-in">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Check Out Date</label>
                        <input type="text" class="form-control" id="check-out" placeholder="how long you will stay" name="check-out">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Transfer Receipt</label>
                        <input type="file" class="form-control" name="bukti_transfer">
                    </div>
                    <div class="mb-3 form-book">
                        <label for="exampleInputEmail1" class="form-label label-book">Sender Name</label>
                        <input type="text" class="form-control" name="nama_pengirim" >
                    </div>
                    <button type="submit" class="btn btn-primary">Continue</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
