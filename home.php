<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Utama</title>
</head>
<body>
    <h5>Halloo.. <?php echo $_SESSION['username']; ?></h5>
    <h3>Data Resseler</h3>
    <form action="">
        <table border="1">
            <tr>
                <th>No</th><th>Nama Reseller</th><th>Alamat</th><th>No Whatsapp</th><th>Aksi</th>
            </tr>
            
            <?php
            include "koneksi.php";

            $query=mysqli_query($koneksi, "SELECT * FROM data_reseller");

            $id=1;
            while($ambil=mysqli_fetch_assoc($query)){
                echo "<tr>";
                echo "<td>".$id."</td>";
                echo "<td>".$ambil['nama_reseller']."</td>";
                echo "<td>".$ambil['alamat']."</td>";
                echo "<td>".$ambil['no_whatsapp']."</td>";
                echo "<td><a href='edit.php?id=$ambil[id]'>Edit </a>|<a href='delete.php?id=$ambil[id]'> Hapus</a></td>";
                echo "</tr>";
                $id++;
            }
            ?>
        </table>
        <a href='tambah.php'>Tambah Data</a>
    </form>
</body>
</html>