<!DOCTYPE html>
<html lang="en">
<?php 
    include("includes_user/head.php");
?>
<link rel="stylesheet" href="assets/css/login.css" type="text/css">
<section style="height: 100vh;" class="w-100 my-auto">
    <div class="container px-5"style="padding: 4% 0;">
        <div class="kotak m-auto w-100"> 
            <div class=" close position-absolute" style="z-index: 99; margin: -25px 0 0 -30px;">
                <a href="index.php?include=home"><img src="assets/img/close.png" width="50px"alt=""></a>
            </div>
            <div class="row">
                <div class="col-md-6 gambar-login" style="border-radius: 25px 0px 0px 25px;"></div>
                <div class="col-md-6 form-sign">
                    <div class="kotak-sign m-auto ">
                        <h3 class="mb-5" style="font-weight: bold; color:#00AE52;font-size: 28px; line-height: 42px;">Sign In</h3>
                        <?php if(!empty($_GET['gagal'])){?>
                            <?php if($_GET['gagal']=="emailKosong"){?>
                                <span class="text-danger">Maaf Email Tidak Boleh Kosong</span>
                            <?php } else if($_GET['gagal']=="passKosong"){?>
                                <span class="text-danger">Maaf Password Tidak Boleh Kosong</span>
                            <?php } else {?>
                                <span class="text-danger">Maaf Email dan Password Anda Salah</span>
                            <?php }?>
                        <?php }?>
                        <form action="index.php?include=konfirmasi-login" method="post">
                            <div class="mb-3 mt-3">
                                <label for="exampleInputEmail1" class="form-label" style="font-weight:bold">Email</label>
                                <input type="text" class="form-control input-email" style="padding: 14px; background-color: #F4F4F4;" id="exampleInputEmail1" name="email" placeholder="put your email here">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label" style="font-weight:bold">Password</label>
                                <input type="password" class="form-control input-password" style="padding: 14px; background-color: #F4F4F4; margin-bottom: 70px;" id="exampleInputPassword1" placeholder="put your password here" name="password">
                            </div>
                            <button type="submit" class="btn mb-3" name="login" style="background-color: #00AE52; color: white; width: 100%; padding: 10px; font-weight: bold; border-radius: 14px; box-shadow: 0px 4px 4px rgba(255, 255, 255, 0.25);">Sign In</button>
                            <button class="btn" style="background-color: white; color: #00AE52; width: 100%; border: 1px solid #00AE52; padding: 10px; font-weight: bold; border-radius: 14px;"><a style="text-decoration: none; color:var(--green)" href="index.php?include=register">Sign Up</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    <?php 
        include("includes_user/script.php");
    ?>
</body>
</html>