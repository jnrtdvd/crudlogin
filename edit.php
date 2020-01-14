<?php
include "koneksi.php";

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nowa=$_POST['nowa'];

    $update=mysqli_query($koneksi, "UPDATE data_reseller SET nama_reseller='$nama', alamat='$alamat', no_whatsapp='$nowa' WHERE id='$id'");

    header('location:home.php');
}

$id=$_GET['id'];

$query=mysqli_query($koneksi, "SELECT * FROM data_reseller WHERE id='$id'");
while($ambil=mysqli_fetch_assoc($query)){
?>

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
                <td><input type="text" name="nama" value="<?php echo $ambil['nama_reseller'] ?>"></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $ambil['alamat'] ?>"></td>
            </tr>
            <tr>
                <th>No Whatsapp</th>
                <td>:</td>
                <td><input type="text" name="nowa" value="<?php echo $ambil['no_whatsapp'] ?>"></td>
            </tr>
        </table><br>
        <input type="hidden" name="id" value="<?php echo $ambil['id'] ?>">
        <input type="submit" name="update" value="Edit">
    </form>
<?php } ?>
</body>
</html>