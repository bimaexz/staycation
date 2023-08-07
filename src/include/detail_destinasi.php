<?php
if(isset($_GET['data'])){
    $id_wisata = $_GET['data'];
    $sql_dw = "select `wisata`, `provinsi`, `kota`, `rating_wisata`, `deskripsi_wisata`, `gambar_wisata1`, `gambar_wisata2`, `gambar_wisata3` from `wisata` where `id_wisata`='$id_wisata'";
    $query_dw = mysqli_query($koneksi, $sql_dw);
    while($data_dw = mysqli_fetch_row($query_dw)){
        $wisata = $data_dw[0];
        $provinsi = $data_dw[1];
        $kota = $data_dw[2];
        $rating_wisata = $data_dw[3];
        $deskripsi_wisata = $data_dw[4];
        $gambar_wisata1 = $data_dw[5];
        $gambar_wisata2 = $data_dw[6];
        $gambar_wisata3 = $data_dw[7];
    }
}
?>

<link rel="stylesheet" href="assets/css/detail_destinasi.css" type="text/css">

    <nav aria-label="breadcrumb" id="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?include=home">Home</a></li>
                <li class="breadcrumb-item active-item" aria-current="page">Detail Destinasi</li>
            </ol>
        </div>
    </nav>
    <section id="hero">
        <div class="container">
            <div class="title text-center">
                <h1><?php echo $wisata;?></h1>
                <p><span><?php echo $provinsi;?></span>, <span><?php echo $kota;?></span></p>
            </div>
            <div class="row h-100" >
                <div class="col-12 col-md-6 col-lg-6 col-sm-12 m-md-4 m-lg-4">
                    <div class="image-big px-lg-4 px-md-4">
                        <img src="assets/img/<?php echo $gambar_wisata1;?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-5 col-sm-12 m-lg-4 m-md-4">
                    <div class="image-sm px-lg-4 px-md-4 d-flex flex-column">
                        <img src="assets/img/<?php echo $gambar_wisata2;?>" alt="">
                        <img class="mt-md-3 mt-lg-3" src="assets/img/<?php echo $gambar_wisata3;?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="destination-desc">
        <div class="container">
            <h1>About <span class="sub-title">Place</span></h1>
            <div class="detail-desc mx-auto">
                <p style="text-transform: capitalize;"><?php echo $deskripsi_wisata;?></p>
            </div>
        </div>
    </section>
    <section id="nearest-hotels">
        <div class="container">
            <h1>Nearest <span class="sub-title">Hotels</span></h1>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-des owl-theme">
                        <?php
                            $id_wisata = $_GET['data'];
                            $_SESSION['id_wisata'] = $id_wisata;
                            $sql_h = "SELECT `id_hotel`, `hotel`, `jarak`, `gambar_hotel` FROM `hotel` WHERE `id_wisata` = '$id_wisata' ORDER BY `jarak` ASC";
                            $query_h = mysqli_query($koneksi, $sql_h);
                            while($data_h = mysqli_fetch_row($query_h)){
                                $id_hotel = $data_h[0];
                                $hotel = $data_h[1];
                                $jarak = $data_h[2];
                                $gambar_hotel = $data_h[3];
                                $_SESSION['id_hotel'] = $id_hotel;
                        ?>
                        <div class="item">
                            <div class="card">
                                <div class="flip">
                                    <div class="card-front">
                                    <img src="assets/img/<?php echo $gambar_hotel; ?>" alt="" class="card-img-top">
                                    </div>
                                    <div class="card-back d-flex justify-content-center align-items-center">
                                        <div class="btn-scd"><a href="index.php?include=detail-hotels&hotel=<?php echo $id_hotel; ?>&data=<?php echo $id_wisata; ?>">See More</a></div>
                                    </div>
                                </div>
                                <div class="card-title">
                                    <h4><?php echo $hotel; ?></h4>
                                    <p><?php echo $jarak; ?><span> km</span></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                       
                        
    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="add-story">
        <div class="container">
        <h1><span class="sub-title">Share </span> Story</h1>
        <p>Add your story here</p>
        <?php if((!empty($_GET['notif']))){?>
            <?php if($_GET['notif']=="tambahidkosong"){?>
                <div class="alert alert-danger mx-4" role="alert">SignIn terlebih dahulu untuk menambahkan cerita</div>
            <?php }else if($_GET['notif']=="tambahceritakosong"){?>
                <div class="alert alert-danger mx-4" role="alert">Ketikkan ceritamu untuk dikirim</div>
            <?php }?>
        <?php }?>
        <form action="index.php?include=konfirmasi-tambah-cerita-user" method="post" enctype="multipart/form">
            <textarea name="cerita" id="" cols="30" rows="10" placeholder="put your story here"></textarea>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
        </div>
    </section>
