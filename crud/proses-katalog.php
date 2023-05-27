<?php
$id_katalog=$_POST['id_katalog'];
$nama = $_POST['nama'];





include ('koneksi.php');

$result = mysqli_query($conn, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama'); ");
header("Location:katalog.php");
?>