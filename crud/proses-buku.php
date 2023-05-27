<?php
$isbn=$_POST['isbn'];
$judul=$_POST['judul'];
$tahun=$_POST['tahun'];
$id_penerbit=$_POST['id_penerbit'];
$id_pengarang=$_POST['id_pengarang'];
$id_katalog=$_POST['id_katalog'];
$id_suplier=$_POST['id_suplier'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];




include ('koneksi.php');

$result = mysqli_query($conn, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `id_suplier`, `stok`, `harga`) VALUES ('$isbn', '$judul', '$tahun' '$id_penerbit', '$id_pengarang', '$id_katalog', '$id_suplier', 'stok', 'harga'); ");
header("Location:buku.php");
?>