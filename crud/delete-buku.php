<?php
        include('koneksi.php');
        $isbn = $_GET ['isbn'];

        $result = mysqli_query($conn, "DELETE FROM buku WHERE isbn='$isbn'");
        header("Location: buku.php");
?>