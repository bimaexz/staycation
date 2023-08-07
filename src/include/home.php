

<link rel="stylesheet" href="assets/css/home.css" type="text/css">
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header d-flex flex-column align-items-center justify-content-center text-center">
                        <h1>Forget Your Work Let’s <span class="sub-text-hero">Holiday</span> With Us</h1>
                        <p>We provide what you need to enjoy your holiday with family. Time to make another memorable moments.</p>
                        <a href="#card-destination">Discover</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="card-destination">
        <div class="container">
            <h1><span class="sub-title">Popular </span>place by</h1>
            <h1>staycation</h1>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-one owl-theme">
                        <?php
                            $sql_w = "SELECT `id_wisata`, `wisata`, `provinsi`, `kota`, `rating_wisata`, `gambar_wisata1` FROM `wisata` ORDER BY `rating_wisata` DESC";
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
    <section id="traveller-says">
        <div class="container">
            <div class="row w-100 text-center">
                <h1>Travellers <span class="sub-title">Says</span></h1>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-two owl-theme">
                    <?php
                        $sql_c="select `c`.`id_cerita`, `c`.`cerita`, `u`.`nama`, `u`.`pekerjaan`, `u`.`foto_profil` from `cerita` `c` INNER JOIN `user` `u` ON `c`.`id_user` = `u`.`id_user`";
                        $query_c = mysqli_query($koneksi, $sql_c);
                        while($data_c = mysqli_fetch_row($query_c)){
                          $id_cerita = $data_c[0];
                          $cerita = $data_c[1];
                          $nama = $data_c[2];
                          $pekerjaan = $data_c[3];
                          $foto_profil = $data_c[4];
                      ?>
                        <div class="item">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-center justify-content-center">
                                    <div class="card-img " style="width: 40%;">
                                        <img src="assets/img/<?php echo $foto_profil;?>" alt="profil" style="width: 450px;" class="">
                                    </div>
                                    <div class="card-text"  style="width: 60%;">
                                        <p><?php echo $cerita;?></p>
                                        <h4><?php echo $nama;?></h4>
                                        <h5><?php echo $pekerjaan;?></h5>
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
