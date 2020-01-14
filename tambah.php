<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
<h3>Tambah Data Reseller</h3>

    <form action="" method="post">
        <table border="1">
            <tr>
                <th>Nama Reseller</th>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <th>No Whatsapp</th>
                <td>:</td>
                <td><input type="text" name="nowa"></td>
            </tr>
        </table><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
    <?php
    include "koneksi.php";

    if(isset($_POST['tambah'])){
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $nowa=$_POST['nowa'];

        $query=mysqli_query($koneksi, "INSERT INTO data_reseller(nama_reseller, alamat, no_whatsapp) VALUES('$nama', '$alamat', '$nowa')");

        header('location:home.php');
    }
    ?>
</body>
</html>