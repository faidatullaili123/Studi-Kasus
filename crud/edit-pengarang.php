<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>edit data</title>
</head>
<body>
    <?php
      include ('koneksi.php');
        $id_pengarang = $_GET['id_pengarang'];

        $pengarang = mysqli_query($conn, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang' ");
        while ($data_pengarang= mysqli_fetch_array($pengarang)){
            $id_pengarang = $data_pengarang['id_pengarang'];
            $nama = $data_pengarang['nama'];
            $email = $data_pengarang['email'];
            $telp = $data_pengarang['telp'];
            $alamat = $data_pengarang['alamat'];      
        
    ?>
    <div class="container">
        <h3 class="fw-bold mt-4 mb-4">Edit Data</h3>
        <form action="proses-edit-pengarang.php?id_pengarang=<?= $id_pengarang; ?>" method="POST">
    <table cellpadding="10" cellspacing="0" class="table table-striped">
        <tr>
            <td>ID_Pengarang</td>
            <td><input type="number" name="id_penerbit" value="<?= $id_pengarang; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $nama; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?= $email; ?>"></td>
        </tr>
         <tr>
            <td>telp</td>
            <td><input type="number" name="telp" value="<?= $telp; ?>"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" value="<?= $alamat; ?>"></td>
        </tr>
       
        <td> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </td>
        
            </table>
            </form>
        </div>


<?php 
}
 ?>


    
</body>
</html>