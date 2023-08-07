<?php
 include("../koneksi/koneksi.php");
 session_start();
 if(isset($_GET["include"])){
    $include = $_GET["include"];
    if($include=="konfirmasi-login"){
      include("include/konfirmasilogin.php");
    }else if($include=="konfirmasi-edit-jenis-kamar"){
        include("include/konfirmasieditjeniskamar.php");
    }else if($include=="konfirmasi-tambah-jenis-kamar"){
        include("include/konfirmasitambahjeniskamar.php");
    }else if($include=="konfirmasi-tambah-wisata"){
        include("include/konfirmasitambahwisata.php");
    }else if($include=="konfirmasi-edit-wisata"){
        include("include/konfirmasieditwisata.php");
    }else if($include=="konfirmasi-edit-hotel"){
        include("include/konfirmasiedithotel.php");
    }else if($include=="konfirmasi-tambah-hotel"){
        include("include/konfirmasitambahhotel.php");
    }else if($include=="konfirmasi-tambah-user"){
        include("include/konfirmasitambahuser.php");
    }else if($include=="konfirmasi-edit-user"){
        include("include/konfirmasiedituser.php");
    }else if($include=="konfirmasi-edit-profil"){
        include("include/konfirmasieditprofil.php");
    }else if($include=="konfirmasi-edit-profil-hotel"){
        include("include/konfirmasieditprofilhotel.php");
    }else if($include=="konfirmasi-status"){
        include("include/konfirmasistatus.php");
    }else if($include=="continue-booking"){
        include("include/continuebooking.php");
    }else if($include=="konfirmasi-booking"){
        include("include/konfirmasibooking.php");
    }else if($include=="konfirmasi-edit-profile-user"){
        include("include/konfirmasieditprofileuser.php");
    }else if($include=="konfirmasi-tambah-cerita-user"){
        include("include/konfirmasitambahceritauser.php");
    }else if($include=="konfirmasi-search-user-page"){
        include("include/konfirmasisearchuserpage.php");
    }else if($include=="konfirmasi-ubah-password"){
        include("include/konfirmasiubahpassword.php");
    }else if($include=="konfirmasi-registrasi"){
        include("include/konfirmasiregistrasi.php");
    }else if($include=="sign-out"){
        include("include/signout.php");
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<?php
//cek ada get include
if(isset($_GET["include"])){
  	$include = $_GET["include"];
  	//cek apakah ada session id admin
  	if(isset($_SESSION['id_user'])){
    //pemanggilan ke halaman-halaman menu admin
      if($_SESSION['level'] == "konsumen"){?>
      <body>
      <?php include("includes_user/head.php") ?>
            <?php include("includes_user/navbar.php") ?>
            <?php 
            if($include=="home"){
                include("include/home.php");
            }else if($include=="about"){
                include("include/about.php");
            }else if($include=="booking-information"){
                include("include/booking_information.php");
            }else if($include=="detail-destinasi"){
                include("include/detail_destinasi.php");
            }else if($include=="detail-hotels"){
                include("include/detail_hotels.php");
            }else if($include=="edit-profile"){
                include("include/edit_profile.php");
            }else if($include=="waiting-validation"){
                include("include/waiting_validation.php");
            }else if($include=="profile"){
                include("include/profile.php");
            }else if($include=="search"){
                include("include/search.php");
            }else if($include=="transaction"){
                include("include/transaction.php");
            }else if($include=="transaction-detail"){
                include("include/transaction_detail.php");
            }
            ?>
            <?php include("includes_user/footer.php") ?>
            <?php include("includes_user/script.php") ?>
            <script>
            $('#check-in').datepicker();
            $('#check-out').datepicker();
            </script>
      </body>
      <?php } else { ?>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include("includes/head.php") ?>
            <?php include("includes/header.php") ?>
            <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
            <?php 
            if($include=="wisata"){
                include("include/wisata.php");
            }else if($include=="edit-wisata"){
                include("include/editwisata.php");
            }else if($include=="detail-wisata"){
                include("include/detailwisata.php");
            }else if($include=="tambah-wisata"){
                include("include/tambahwisata.php");
            }else if($include=="hotel"){
                include("include/hotel.php");
            }else if($include=="tambah-hotel"){
                include("include/tambahhotel.php");
            }else if($include=="edit-hotel"){
                include("include/edithotel.php");
            }else if($include=="detail-hotel"){
                include("include/detailhotel.php");
            }else if($include=="pengaturan-user"){
                include("include/pengaturanuser.php");
            }else if($include=="edit-user"){
                include("include/edituser.php");
            }else if($include=="tambah-user"){
                include("include/tambahuser.php");
            }else if($include=="detail-user"){
                include("include/detailuser.php");
            }else if($include=="jenis-kamar"){
                include("include/jeniskamar.php");
            }else if($include=="tambah-jenis-kamar"){
                include("include/tambahjeniskamar.php");
            }else if($include=="edit-jenis-kamar"){
                include("include/editjeniskamar.php");
            }else if($include=="edit-profil"){
                include("include/editprofil.php");
            }else if($include=="profil-hotel"){
                include("include/profilhotel.php");
            }else if($include=="edit-profil-hotel"){
                include("include/editprofilhotel.php");
            }else if($include=="detail-transaksi"){
                include("include/detailtransaksi.php");
            }else if($include=="transaksi"){
                include("include/transaksi.php");
            }else if($include=="cerita"){
                include("include/cerita.php");
            }else if($include=="ubah-password"){
                include("include/ubahpassword.php");
            }else{
                include("include/profil.php");
            }  
            ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
        </body>
        <?php


      }
  	}else{
    //pemanggilan halaman form login
    $include = $_GET["include"];
    include("includes_user/head.php") ;
    if($include=="login"){
        include("include/login.php");
    }else if($include=="register"){
        include("include/register.php");
    }else if($include=="search"){
        include("includes_user/navbar.php");
        include("include/search.php");
        include("includes_user/footer.php");
    }else if($include=="about"){
        include("includes_user/navbar.php");
        include("include/about.php");
        include("includes_user/footer.php");
    }else if($include=="detail-destinasi"){
        include("includes_user/navbar.php");
        include("include/detail_destinasi.php");
        include("includes_user/footer.php");
    }else if($include=="detail-hotels"){
        include("includes_user/navbar.php");
        include("include/detail_hotels.php");
        include("includes_user/footer.php");
    }else {
        include("includes_user/navbar.php");
        include("include/home.php");
        include("includes_user/footer.php");
    }
    include("includes_user/script.php");
  	}  
}else{
  if(isset($_SESSION['id_user'])){
    if($_SESSION['level'] == "konsumen"){?>
        <?php include("includes_user/head.php") ?>
            <?php include("includes_user/navbar.php") ?>
            <?php 
                include("include/home.php");
            ?>
            <?php include("includes_user/footer.php") ?>
        <?php include("includes_user/script.php") ?>
      <?php } else { ?>
      <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <?php include("includes/head.php") ?>
            <?php include("includes/header.php") ?>
            <?php include("includes/sidebar.php") ?>
            <div class="content-wrapper">
            <?php 
                include("include/profil.php");
            ?>
            </div>
            <!-- /.content-wrapper -->
            <?php include("includes/footer.php") ?>
        </div>
        <!-- ./wrapper -->
        <?php include("includes/script.php") ?>
        </body>
        <?php


      }
  }else{
  //pemanggilan halaman form login
            include("includes_user/head.php") ;
            include("includes_user/navbar.php");
            include("include/home.php");
            include("includes_user/footer.php");
            include("includes_user/script.php");
  } 
}
?>


</body>
</html>