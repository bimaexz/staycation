<?php
 if(isset($_SESSION['id_wisata'])){
    $id_wisata = $_SESSION['id_wisata'];
    $wisata = $_POST['wisata'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $rating_wisata = $_POST['rating_wisata'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];
    $sql_gh = "select `gambar_wisata1`, `gambar_wisata2`, `gambar_wisata3` from `wisata` where `id_wisata`='$id_wisata'";
    $query_gh = mysqli_query($koneksi, $sql_gh);
    while($data_gh = mysqli_fetch_row($query_gh)){
        $gambar_wisata1 = $data_gh[0];
        $gambar_wisata2 = $data_gh[1];
        $gambar_wisata3 = $data_gh[2];
    }
 }

 if(empty($wisata)){	   
    header("Location:index.php?include=edit-wisata&data=".$id_wisata."&notif=editkosong&jenis=wisata");
 }else if(empty($provinsi)){
  header("Location:index.php?include=edit-wisata&data=".$id_wisata."&notif=editkosong&jenis=provinsi");
 }else if(empty($kota)){	    
    header("Location:index.php?include=edit-wisata&data=".$id_wisata."&notif=editkosong&jenis=kota");
 }else if(empty($rating_wisata)){
  header("Location:index.php?include=edit-wisata&data=".$id_wisata."&notif=editkosong&jenis=ratingwisata");
 }else if(empty($deskripsi_wisata)){
  header("Location:index.php?include=edit-wisata&data=".$id_wisata."&notif=editkosong&jenis=deskripsiwisata");
 }else{   
    $lokasi_gambar_wisata1 = $_FILES['gambar_wisata1']['tmp_name'];
    $nama_gambar_wisata1 = $_FILES['gambar_wisata1']['name'];
    $direktori_gambar_wisata1 = 'assets/img/'.$nama_gambar_wisata1;
    $lokasi_gambar_wisata2 = $_FILES['gambar_wisata2']['tmp_name'];
    $nama_gambar_wisata2 = $_FILES['gambar_wisata2']['name'];
    $direktori_gambar_wisata2 = 'assets/img/'.$nama_gambar_wisata2;
    $lokasi_gambar_wisata3 = $_FILES['gambar_wisata3']['tmp_name'];
    $nama_gambar_wisata3 = $_FILES['gambar_wisata3']['name'];
    $direktori_gambar_wisata3 = 'assets/img/'.$nama_gambar_wisata3;
    if(move_uploaded_file($lokasi_gambar_wisata1,$direktori_gambar_wisata1)){
        if(!empty($gambar_wisata1)){
          unlink("assets/img/$gambar_wisata1");
       }
        $sql = "update `wisata` set `wisata`='$wisata', 
            `provinsi`='$provinsi',`kota`='$kota',`rating_wisata`='$rating_wisata', `deskripsi_wisata`='$deskripsi_wisata',`gambar_wisata1`='$nama_gambar_wisata1' 
            where `id_wisata`='$id_wisata'";
            //echo $sql;
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_wisata2,$direktori_gambar_wisata2)){
        if(!empty($gambar_wisata2)){
          unlink("assets/img/$gambar_wisata2");
       }
        $sql = "update `wisata` set `wisata`='$wisata', 
            `provinsi`='$provinsi',`kota`='$kota',`rating_wisata`='$rating_wisata', `deskripsi_wisata`='$deskripsi_wisata',`gambar_wisata2`='$nama_gambar_wisata2' 
            where `id_wisata`='$id_wisata'";
            //echo $sql;
        mysqli_query($koneksi,$sql);
    }else if(move_uploaded_file($lokasi_gambar_wisata3,$direktori_gambar_wisata3)){
        if(!empty($gambar_wisata3)){
          unlink("assets/img/$gambar_wisata3");
       }
        $sql = "update `wisata` set `wisata`='$wisata', 
            `provinsi`='$provinsi',`kota`='$kota',`rating_wisata`='$rating_wisata', `deskripsi_wisata`='$deskripsi_wisata',`gambar_wisata3`='$nama_gambar_wisata3' 
            where `id_wisata`='$id_wisata'";
            //echo $sql;
        mysqli_query($koneksi,$sql);
    }else {
        $sql = "update `wisata` set `wisata`='$wisata', 
            `provinsi`='$provinsi',`kota`='$kota',`rating_wisata`='$rating_wisata', `deskripsi_wisata`='$deskripsi_wisata' 
            where `id_wisata`='$id_wisata'";
            //echo $sql;
        mysqli_query($koneksi,$sql);
    }
    unset($_SESSION['id_wisata']);
    header("Location:index.php?include=wisata&notif=editberhasil");
  }
?>