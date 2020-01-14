<?php
include "koneksi.php";

$id=$_GET['id'];

$delete=mysqli_query($koneksi, "DELETE FROM data_reseller WHERE id='$id'");

header('location:home.php');
?>