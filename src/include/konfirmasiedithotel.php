<?php
 if(isset($_SESSION['id_hotel'])){
    $id_hotel = $_SESSION['id_hotel'];
    $hotel = $_POST['hotel'];
    $email_hotel = $_POST['email_hotel'];
    $kontak_hotel = $_POST['kontak_hotel'];
    $bintang_hotel = $_POST['bintang_hotel'];
    $jarak = $_POST['jarak'];
    $fasilitas = $_POST['fasilitas'];
    $deskripsi_hotel = $_POST['deskripsi_hotel'];
    $sql_gh = "select `gambar_hotel`, `gambar_interior1`, `gambar_interior2`, `gambar_interior3`, `gambar_interior4` from `hotel` where `id_hotel`='$id_hotel'";
    $query_gh = mysqli_query($koneksi, $sql_gh);
    while($data_gh = mysqli_fetch_row($query_gh)){
        $gambar_hotel = $data_gh[0];
        $gambar_interior1 = $data_gh[1];
        $gambar_interior2 = $data_gh[2];
        $gambar_interior3 = $data_gh[3];
        $gambar_interior4 = $data_gh[4];
    }
 }

 if(empty($hotel)){	   
    header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=hotel");
 }else if(empty($email_hotel)){
  header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=email hotel");
 }else if(empty($kontak_hotel)){	    
    header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=kontak hotel");
 }else if(empty($bintang_hotel)){
  header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=bintang hotel");
 }else if(empty($jarak)){
  header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=jarak");
 }else if(empty($fasilitas)){
  header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=fasilitas");
 }else if(empty($deskripsi_hotel)){
  header("Location:index.php?include=edit-hotel&data=".$id_hotel."&notif=editkosong&jenis=deskripsihotel");
 }else{   
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
    if(move_uploaded_file($lokasi_gambar_hotel,$direktori_gambar_hotel)){
        if(!empty($gambar_hotel)){
          unlink("assets/img/$gambar_hotel");
       }
       $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel',`gambar_hotel`='$nama_gambar_hotel' 
       where `id_hotel`='$id_hotel'";
           
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_interior1,$direktori_gambar_interior1)){
        if(!empty($gambar_interior1)){
          unlink("assets/img/$gambar_interior1");
       }
       $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel',`gambar_interior1`='$nama_gambar_interior1' 
       where `id_hotel`='$id_hotel'";
           
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_interior2,$direktori_gambar_interior2)){
        if(!empty($gambar_interior2)){
          unlink("assets/img/$gambar_interior2");
       }
       $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel',`gambar_interior2`='$nama_gambar_interior2' 
       where `id_hotel`='$id_hotel'";
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_interior3,$direktori_gambar_interior3)){
        if(!empty($gambar_interior3)){
          unlink("assets/img/$gambar_interior3");
       }
       $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel',`gambar_interior3`='$nama_gambar_interior3' 
       where `id_hotel`='$id_hotel'";
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_interior4,$direktori_gambar_interior4)){
        if(!empty($gambar_interior4)){
          unlink("assets/img/$gambar_interior4");
       }
       $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel',`gambar_interior4`='$nama_gambar_interior4' 
       where `id_hotel`='$id_hotel'";
        mysqli_query($koneksi,$sql);
    }else {
        $sql = "update `hotel` set `hotel`='$hotel', 
       `email_hotel`='$email_hotel',`kontak_hotel`='$kontak_hotel',`bintang_hotel`='$bintang_hotel', `jarak`='$jarak',`fasilitas`='$fasilitas',`deskripsi_hotel`='$deskripsi_hotel' where `id_hotel`='$id_hotel'";
        mysqli_query($koneksi,$sql);
    }
    unset($_SESSION['id_hotel']);
    header("Location:index.php?include=hotel&notif=editberhasil");
  }
?>