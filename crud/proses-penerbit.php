<?php
$id_penerbit=$_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];




include ('koneksi.php');

$result = mysqli_query($conn, "INSERT INTO `penerbit` (`id_penerbit`, `nama`, `alamat`, `telp`) VALUES ('$id_penerbit', '$nama', '$alamat', '$telp'); ");
header("Location:penerbit.php");
?>