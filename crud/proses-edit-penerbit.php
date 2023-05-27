<?php
$id_penerbit= $_GET['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];




include ('koneksi.php');
$result = mysqli_query($conn, "UPDATE penerbit SET nama = '$nama', alamat = '$alamat', telp = '$telp' WHERE id_penerbit ='$id_penerbit'");

header("Location:penerbit.php");
?>