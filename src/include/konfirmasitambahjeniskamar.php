<?php
 $id_user = $_SESSION['id_user'];
 $id_hotel = $_SESSION['id_hotel'];
 $jenis_kamar = $_POST['jenis_kamar'];
 $harga_kamar = $_POST['harga_kamar'];
 $jumlah_kamar = $_POST['jumlah_kamar'];
 

 if(empty($jenis_kamar)){	   
    header("Location:index.php?include=tambah-jenis-kamar&notif=tambahkosong&jenis=jenis kamar");
 }else if(empty($harga_kamar)){
  header("Location:index.php?include=tambah-jenis-kamar&notif=tambahkosong&jenis=harga kamar");
}else if(empty($jumlah_kamar)){	    
   header("Location:index.php?include=tambah-jenis-kamar&notif=tambahkosong&jenis=jumlah kamar");
 }else{   
  $sql = "INSERT INTO `jenis_kamar` 
    (`id_user`,`id_hotel`,`jenis_kamar`,`harga_kamar`,`jumlah_kamar`) VALUES ('$id_user','$id_hotel','$jenis_kamar','$harga_kamar','$jumlah_kamar')";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    header("Location:index.php?include=jenis-kamar&notif=tambahberhasil");
  }
?>