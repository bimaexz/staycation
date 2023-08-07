<?php
 $wisata = $_POST['wisata'];
 $provinsi = $_POST['provinsi'];
 $kota = $_POST['kota'];
 $rating_wisata = $_POST['rating_wisata'];
 $deskripsi_wisata = $_POST['deskripsi_wisata'];
 $lokasi_gambar_wisata1 = $_FILES['gambar_wisata1']['tmp_name'];
 $nama_gambar_wisata1 = $_FILES['gambar_wisata1']['name'];
 $direktori_gambar_wisata1 = 'assets/img/'.$nama_gambar_wisata1;
 $lokasi_gambar_wisata2 = $_FILES['gambar_wisata2']['tmp_name'];
 $nama_gambar_wisata2 = $_FILES['gambar_wisata2']['name'];
 $direktori_gambar_wisata2 = 'assets/img/'.$nama_gambar_wisata2;
 $lokasi_gambar_wisata3 = $_FILES['gambar_wisata3']['tmp_name'];
 $nama_gambar_wisata3 = $_FILES['gambar_wisata3']['name'];
 $direktori_gambar_wisata3 = 'assets/img/'.$nama_gambar_wisata3;

 if(empty($wisata)){	   
    header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=wisata");
 }else if(empty($provinsi)){
   header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=provinsi");
 }else if(empty($kota)){	    
   header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=kota");
 }else if(empty($rating_wisata)){
   header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=ratingwisata");
 }else if(empty($deskripsi_wisata)){
   header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=deskripsiwisata");
 }else if(!move_uploaded_file($lokasi_gambar_wisata1,$direktori_gambar_wisata1)){
    header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=gambarwisata1");
 }else if(!move_uploaded_file($lokasi_gambar_wisata2,$direktori_gambar_wisata2)){
    header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=gambarwisata2");
 }else if(!move_uploaded_file($lokasi_gambar_wisata3,$direktori_gambar_wisata3)){
    header("Location:index.php?include=tambah-wisata&notif=tambahkosong&jenis=gambarwisata3");
 }else{   
  $sql = "INSERT INTO `wisata` 
    (`wisata`,`provinsi`,`kota`,`rating_wisata`,`deskripsi_wisata`,`gambar_wisata1`,`gambar_wisata2`, `gambar_wisata3`) VALUES ('$wisata','$provinsi','$kota','$rating_wisata',
  '$deskripsi_wisata','$nama_gambar_wisata1','$nama_gambar_wisata2', '$nama_gambar_wisata3')";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    header("Location:index.php?include=wisata&notif=tambahberhasil");
  }
?>

