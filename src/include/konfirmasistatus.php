<?php 
if(isset($_SESSION['id_transaksi'])){
    $id_transaksi = $_SESSION['id_transaksi'];
    $sql = "UPDATE `transaksi` SET `status`='booked' WHERE `id_transaksi`='$id_transaksi'";
    $query = mysqli_query($koneksi, $sql);
    header("Location:index.php?include=transaksi&notif=validasiberhasil");
}
?>