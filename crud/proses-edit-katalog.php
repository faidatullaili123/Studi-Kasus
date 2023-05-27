<?php
$id_katalog= $_GET['id_katalog'];
$nama = $_POST['nama'];





include ('koneksi.php');
$result = mysqli_query($conn, "UPDATE katalog SET nama = '$nama' WHERE id_katalog ='$id_katalog'");

header("Location:katalog.php");
?>