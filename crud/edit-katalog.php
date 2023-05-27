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
        $id_katalog = $_GET['id_katalog'];

        $katalog = mysqli_query($conn, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog' ");
        while ($data = mysqli_fetch_array($katalog)){
            $id_katalog = $data['id_katalog'];
            $nama = $data ['nama'];
            
           
        
    ?>
    <div class="container">
        <h3 class="fw-bold mt-4 mb-4">Edit Data</h3>
        <form action="proses-edit-katalog.php?id_katalog=<?= $id_katalog; ?>" method="POST">
    <table cellpadding="10" cellspacing="0" class="table table-striped">
        <tr>
            <td>ID_Katalog</td>
            <td><input type="number" name="id_katalog" value="<?= $id_katalog; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?= $nama; ?>"></td>
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