<?php
    $id_user = $_SESSION['id_user'];
    $id_wisata = $_SESSION['id_wisata'];
    $cerita = $_POST['cerita'];

    if(empty($id_user)){
        header("Location:index.php?include=detail-destinasi&data=".$id_wisata."&notif=tambahidkosong");
    }else if(empty($cerita)){
        header("Location:index.php?include=detail-destinasi&data=".$id_wisata."&notif=tambahceritakosong");
    }else{
        $sql = "INSERT INTO `cerita` (`id_user`, `cerita`) VALUES ('$id_user', '$cerita')";
        $query = mysqli_query($koneksi, $sql);
        header("Location:index.php?include=detail-destinasi&data=".$id_wisata);
    }
?>