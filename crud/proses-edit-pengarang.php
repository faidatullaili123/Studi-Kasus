<?php
$id_pengarang= $_GET['id_pengarang'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];





include ('koneksi.php');
$result = mysqli_query($conn, "UPDATE pengarang SET nama = '$nama', email ='$email', telp = '$telp',  alamat = '$alamat' WHERE id_pengarang ='$id_pengarang'");

header("Location:pengarang.php");
?>