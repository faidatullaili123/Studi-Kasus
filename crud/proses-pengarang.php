<?php
$id_pengarang=$_POST['id_pengarang'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];





include ('koneksi.php');

$result = mysqli_query($conn, "INSERT INTO `pengarang` (`id_pengarang`, `nama`,  `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama', '$email', '$telp', '$alamat'); ");
header("Location:pengarang.php");
?>