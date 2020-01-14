<?php
include "koneksi.php";
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $cek=mysqli_num_rows($query);
    $data=mysqli_fetch_array($query);

    if($cek > 0){
        $_SESSION['username'] = $username;

        header('location:home.php');
    }
    else {
        echo "<script>alert('Gagal masuk!');window.location='index.php';</script>";
    }
}
?>