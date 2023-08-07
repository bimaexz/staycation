<?php
    if(isset($_SESSION["id_jenis_kamar"])){
        $id_jenis_kamar = $_SESSION["id_jenis_kamar"];
        $jenis_kamar = $_POST['jenis_kamar'];
        $harga_kamar = $_POST['harga_kamar'];
        $jumlah_kamar = $_POST['jumlah_kamar'];
    }
    if(empty($jenis_kamar)){
        header("Location:index.php?include=edit-jenis-kamar&data=".$id_jenis_kamar."&notif=editkosong&jenis=jenis kamar");
    }else if(empty($harga_kamar)){
        header("Location:index.php?include=edit-jenis-kamar&data=".$id_jenis_kamar."&notif=editkosong&jenis=harga kamar");
    }else if(empty($harga_kamar)){
        header("Location:index.php?include=edit-jenis-kamar&data=".$id_jenis_kamar."&notif=editkosong&jenis=jumlah kamar");
    }else{
        $sql = "UPDATE `jenis_kamar` SET `jenis_kamar`='$jenis_kamar', `harga_kamar`='$harga_kamar', `jumlah_kamar`='$jumlah_kamar' WHERE `id_jenis_kamar` = '$id_jenis_kamar'";
        mysqli_query($koneksi,$sql);
        // unset($_SESSION['id_jenis_kamar']);
        header("Location:index.php?include=jenis-kamar&notif=tambahberhasil");
    }
?>