
<?php

$katakunci = $_GET['katakunci'];
?>

<link rel="stylesheet" href="assets/css/home.css" type="text/css">

    <section id="card-destination" style="height:100vh;">
        <div class="container">
            <h1 class="search-title">Result, <span class="sub-title"><?php echo $katakunci; ?></span></h1>
            <div class="row">
                <div class="col-12 m-auto">
                <div class="owl-carousel owl-one owl-theme">
                <?php
                            $sql_w = "SELECT `id_wisata`, `wisata`, `provinsi`, `kota`, `rating_wisata`, `gambar_wisata1` FROM `wisata` WHERE `kota`='$katakunci' ORDER BY `rating_wisata` DESC";
                            $query_w = mysqli_query($koneksi, $sql_w);
                            while($data_w = mysqli_fetch_row($query_w)){
                                    $id_wisata = $data_w[0];
                                    $wisata = $data_w[1];
                                    $provinsi = $data_w[2];
                                    $kota = $data_w[3];
                                    $rating_wisata = $data_w[4];
                                    $gambar_wisata1 = $data_w[5];
                                ?>
                                <div class="item">
                                <div class="card">
                                    <img src="assets/img/<?php echo $gambar_wisata1; ?>" alt="" class="card-img-top">
                                    <div class="card-body">
                                        <h4><?php echo $wisata; ?></h4>
                                        <div class="text d-flex flex-row justify-content-between align-items-center w-100">
                                            <h2><?php echo $provinsi; ?>, <span><?php echo $kota; ?></span></h2>
                                            <div class="rate d-flex flex-row gap-2 ">
                                                <img src="assets/img/star.svg" alt="">
                                                <h6><?php echo $rating_wisata; ?></h6>
                                            </div>
                                        </div>
                                        <div class="btn-green">
                                            <a href="index.php?include=detail-destinasi&data=<?php echo $id_wisata;?>">Click here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php }?>
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
