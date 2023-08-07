<?php
if(isset($_GET['data']) && isset($_GET['hotel'])){
    $id_wisata = $_GET['data'];
    $id_hotel = $_GET['hotel'];
    $_SESSION['id_hotel'] = $id_hotel;
    $_SESSION['id_wisata'] = $id_wisata;
    $sql_h = "SELECT `hotel`, `bintang_hotel`, `jarak`, `fasilitas`, `deskripsi_hotel`, `email_hotel`, `kontak_hotel`, `gambar_hotel`, `gambar_interior1`, `gambar_interior2`, `gambar_interior3`, `gambar_interior4` FROM `hotel` WHERE `id_hotel` ='$id_hotel'";
    $query_h = mysqli_query($koneksi, $sql_h);
    while($data_h = mysqli_fetch_row($query_h)){
        $hotel = $data_h[0];
        $bintang_hotel = $data_h[1];
        $jarak = $data_h[2];
        $fasilitas = $data_h[3];
        $deskripsi_hotel = $data_h[4];
        $email_hotel = $data_h[5];
        $kontak_hotel = $data_h[6];
        $gambar_hotel = $data_h[7];
        $gambar_interior1 = $data_h[8];
        $gambar_interior2 = $data_h[9];
        $gambar_interior3 = $data_h[10];
        $gambar_interior4 = $data_h[11];
    }
}
?>

<link rel="stylesheet" href="assets/css/detail_hotel.css" type="text/css">
    <nav aria-label="breadcrumb" id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?include=home">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php?include=detail-destinasi&data=<?php echo $id_wisata; ?>">Detail Destinasi</a></li>
                <li class="breadcrumb-item active-item" aria-current="page">Detail Hotels
            </ol>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="title text-center">
                <h1><?php echo $hotel; ?></h1>
            </div>
            <div class="row h-100" >
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 m-md-4 m-lg-4">
                    <div class="image-big px-lg-4 px-md-4">
                        <img src="assets/img/<?php echo $gambar_hotel; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-sm-12 m-lg-4 m-md-4">
                    <div class="image-sm px-lg-4 px-md-4 d-flex flex-column">
                        <div class="picts-small d-flex flex-row gap-4">
                            <img src="assets/img/<?php echo $gambar_interior1; ?>" alt="">
                            <img src="assets/img/<?php echo $gambar_interior2; ?>" alt="">
                        </div>
                        <div class="picts-small d-flex flex-row mt-md-5 mt-lg-3 gap-4">
                            <img src="assets/img/<?php echo $gambar_interior3; ?>" alt="">
                            <img src="assets/img/<?php echo $gambar_interior4; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="hotel-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 px-5">
                    <div class="sub-section">
                        <h1>About <span class="sub-title">Place</span></h1>
                        <h5 style="text-align: justify"><?php echo $deskripsi_hotel; ?></h5>
                    </div>
                    <div class="sub-section">
                        <h1>Facilities <span class="sub-title"></span></h1>
                        <h5 style="text-align: justify"><?php echo $fasilitas; ?></h5>
                    </div>
                    <div class="sub-section">
                        <h1>Contact <span class="sub-title"></span></h1>
                        <h4><?php echo $email_hotel; ?></h4>
                        <h6><?php echo $kontak_hotel; ?></h6>
                    </div>
                </div>
                <div class="col-lg-6 px-5">
                    <div class="card w-100">
                        <div class="card-body">
                            <h1 style="margin-bottom: 40px;">Start <span class="sub-title">Booking</span></h1>
                                <?php if(!empty($_GET['notif'])){?>
                                    <?php if($_GET['notif']=="belumsignin"){?>
                                        <div class="alert alert-danger" role="alert">
                                        Sign In terlebih dulu untuk booking</div>
                                    <?php } else if(!empty($_GET['notif']) && !empty($_GET['jenis'])){?>
                                        <?php if($_GET['notif']=="datakosong"){?>
                                            <div class="alert alert-danger" role="alert">Maaf data 
                                            <?php echo $_GET['jenis'];?> wajib di isi</div>
                                        <?php } ?>                                        
                                    <?php }?>
                                <?php }?>
                            <form action="index.php?include=continue-booking" method="post">
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Night</label>
                                    <input type="int" class="form-control" id="exampleInputEmail1" name="night" aria-describedby="emailHelp" placeholder="how long you will stay">
                                </div>
                                <div class="mb-3 form-profile">
                                    <label for="exampleInputEmail1" class="form-label label-profile">Room Type</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_jenis_kamar">
                                        <option selected>Select room type</option>
                                        <?php 
                                            $sql_r = "SELECT `id_jenis_kamar`, `jenis_kamar` FROM `jenis_kamar` WHERE `id_hotel`='$id_hotel'";
                                            $query_r = mysqli_query($koneksi, $sql_r);
                                            while($data_r = mysqli_fetch_row($query_r)){
                                                $id_jenis_kamar = $data_r[0];
                                                $jenis_kamar = $data_r[1];
                                                // $_SESSION['id_jenis_kamar'] = $id_jenis_kamar;
                                                ?>
                                                <option value="<?php echo $id_jenis_kamar; ?>"><?php echo $jenis_kamar; ?></option>
                                            <?php }                                        ?>
                                        
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
