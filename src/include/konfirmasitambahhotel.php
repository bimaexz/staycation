<?php
 $hotel = $_POST['hotel'];
 $id_user = $_POST['user'];
 $id_wisata = $_POST['wisata'];
 $bintang_hotel = $_POST['bintang_hotel'];
 $jarak = $_POST['jarak'];
 $email = $_POST['email'];
 $kontak = $_POST['kontak'];
 $fasilitas = $_POST['fasilitas'];
 $deskripsi_hotel = $_POST['deskripsi_hotel'];
 $lokasi_gambar_hotel = $_FILES['gambar_hotel']['tmp_name'];
 $nama_gambar_hotel = $_FILES['gambar_hotel']['name'];
 $direktori_gambar_hotel = 'assets/img/'.$nama_gambar_hotel;

 $lokasi_gambar_interior1 = $_FILES['gambar_interior1']['tmp_name'];
 $nama_gambar_interior1 = $_FILES['gambar_interior1']['name'];
 $direktori_gambar_interior1 = 'assets/img/'.$nama_gambar_interior1;
 $lokasi_gambar_interior2 = $_FILES['gambar_interior2']['tmp_name'];
 $nama_gambar_interior2 = $_FILES['gambar_interior2']['name'];
 $direktori_gambar_interior2 = 'assets/img/'.$nama_gambar_interior2;
 $lokasi_gambar_interior3 = $_FILES['gambar_interior3']['tmp_name'];
 $nama_gambar_interior3 = $_FILES['gambar_interior3']['name'];
 $direktori_gambar_interior3 = 'assets/img/'.$nama_gambar_interior3;
 $lokasi_gambar_interior4 = $_FILES['gambar_interior4']['tmp_name'];
 $nama_gambar_interior4 = $_FILES['gambar_interior4']['name'];
 $direktori_gambar_interior4 = 'assets/img/'.$nama_gambar_interior4;
 if(empty($hotel)){	   
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=hotel");
 }else if(empty($id_user)){
  header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=admin");
 }else if(empty($id_wisata)){	    
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=wisata");
 }else if(empty($bintang_hotel)){
  header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=bintang");
 }else if(empty($jarak)){
  header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=jarak");
 }else if(empty($email)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=email");
 }else if(empty($kontak)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=kontak");
 }else if(empty($fasilitas)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=fasilitas");
 }else if(empty($deskripsi_hotel)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=deskripsihotel");
 }else if(!move_uploaded_file($lokasi_gambar_hotel,$direktori_gambar_hotel)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=gambarhotel");
 }else if(!move_uploaded_file($lokasi_gambar_interior1,$direktori_gambar_interior1)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=gambarinterior1");
 }else if(!move_uploaded_file($lokasi_gambar_interior2,$direktori_gambar_interior2)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=gambarinterior2");
 }else if(!move_uploaded_file($lokasi_gambar_interior3,$direktori_gambar_interior3)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=gambarinterior3");
 }else if(!move_uploaded_file($lokasi_gambar_interior4,$direktori_gambar_interior4)){
    header("Location:index.php?include=tambah-hotel&notif=tambahkosong&jenis=gambarinterior4");
 }else{   
  $sql = "INSERT INTO `hotel` (`id_user`,`id_wisata`,`hotel`,`bintang_hotel`, `jarak`, `fasilitas`,`deskripsi_hotel`,`email_hotel`, `kontak_hotel`,`gambar_hotel`,`gambar_interior1`,`gambar_interior2`,`gambar_interior3`,`gambar_interior4`) VALUES ('$id_user','$id_wisata','$hotel','$bintang_hotel', '$jarak', '$fasilitas', '$deskripsi_hotel',
  '$email','$kontak','$nama_gambar_hotel','$nama_gambar_interior1', '$nama_gambar_interior2', '$nama_gambar_interior3', '$nama_gambar_interior4')";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    header("Location:index.php?include=hotel&notif=tambahberhasil");
  }
?>