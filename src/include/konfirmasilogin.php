<?php
    //akses file koneksi database
    include('../koneksi/koneksi.php');
    if (isset($_POST['login'])) {
        $user = $_POST['email'];
        $pass = $_POST['password'];
        $email = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        //cek email dan password
        $sql="select `id_user`, `level` from `user` 
                where `email`='$email' and
               `password`='$password'";
        $query = mysqli_query($koneksi, $sql);
        $jumlah = mysqli_num_rows($query);
        if(empty($user)){
            header("Location:index.php?include=login&gagal=emailKosong");
        }else if(empty($pass)){
            header("Location:index.php?include=login&gagal=passKosong");
        }else if($jumlah==0){
            header("Location:index.php?include=login&gagal=userpassSalah");
        }else{
            session_start();
            //get data
            while($data = mysqli_fetch_row($query)){
                $id_user = $data[0]; //1
                $level = $data[1]; //speradmin
                $_SESSION['id_user']=$id_user;
                $_SESSION['level']=$level;
                if($_SESSION['level']=="konsumen"){
                    header("Location:index.php?include=home");
                }else{
                    header("Location:index.php?include=profil");
                }
            }           
        }
    }
?>