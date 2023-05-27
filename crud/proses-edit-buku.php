<?php
    $isbn = $_GET['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $id_suplier = $_POST['id_suplier'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    
    include ('koneksi.php');

    $result = mysqli_query($conn, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog',  id_suplier = '$id_suplier', stok = '$stok', harga = '$harga' WHERE isbn = '$isbn'");
    header("Location: buku.php");

?>