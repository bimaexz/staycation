<?php 
if(isset($_SESSION['id_user'])){
	$id_user = $_SESSION['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pekerjaan = $_POST['pekerjaan'];
	$kontak = $_POST['kontak'];
 
    //get foto 
    $sql_f = "SELECT `foto_profil` FROM `user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
        $foto_profil = $data_f[0];
        //echo $foto;
    }
 
	if(empty($nama)){
	    header("Location:index.php?include=edit-profil&notif=editkosong&jenis=nama");
	}else if(empty($email)){
	    header("Location:index.php?include=edit-profil&notif=editkosong&jenis=email");
	}else if(empty($username)){
	    header("Location:index.php?include=edit-profil&notif=editkosong&jenis=username");
	}else if(empty($pekerjaan)){
	    header("Location:index.php?include=edit-profil&notif=editkosong&jenis=pekerjaan");
	}else if(empty($kontak)){
	    header("Location:index.php?include=edit-profil&notif=editkosong&jenis=kontak");
	}else{
        $lokasi_file = $_FILES['foto_profil']['tmp_name'];
		$nama_file = $_FILES['foto_profil']['name'];
		$direktori = 'assets/img/'.$nama_file;
		if(move_uploaded_file($lokasi_file,$direktori)){
            	   if(!empty($foto_profil)){
                     unlink("assets/img/$foto_profil");
                  }
		   $sql = "update `user` set `nama`='$nama', 
                  `email`='$email',`username`='$username', `pekerjaan`='$pekerjaan', `kontak`='$kontak', `foto_profil`='$nama_file' 
                  where `id_user`='$id_user'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}else{
		   $sql = "update `user` set `nama`='$nama', `email`='$email',`username`='$username', `pekerjaan`='$pekerjaan', `kontak`='$kontak' where `id_user`='$id_user'";
                  //echo $sql;
		   mysqli_query($koneksi,$sql);
		}
      	    header("Location:index.php?include=profil&notif=editberhasil");
	}
}
 
?>
