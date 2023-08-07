<?php
$nama        = $_POST['nama'];
$email       = $_POST['email'];
$user        = $_POST['username'];
$pass        = $_POST['password'];
$username    = mysqli_real_escape_string($koneksi, $user);
$password    = mysqli_real_escape_string($koneksi, MD5($pass));

if (empty($nama)) {
 header("Location:index.php?include=register&notif=tambahkosong&jenis=nama");
} elseif (empty($email)) {
 header("Location:index.php?include=register&notif=tambahkosong&jenis=email");
}elseif (empty($username)) {
 header("Location:index.php?include=register&notif=tambahkosong&jenis=username");
} elseif (empty($password)) {
 header("Location:index.php?include=register&notif=tambahkosong&jenis=password");
} else {
 $sql_user = "INSERT INTO `user`
(`nama`, `email`,`username`,`password`)
VALUES ('$nama','$email','$username','$password')";
 mysqli_query($koneksi, $sql_user);
 $id_user = mysqli_insert_id($koneksi);
 header("Location:index.php?include=login");
}