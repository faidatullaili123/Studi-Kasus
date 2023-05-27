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
        $isbn = $_GET['isbn'];

        $buku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn = '$isbn' ");
        while ($data = mysqli_fetch_array($buku)){
            $isbn = $data['isbn'];
            $judul = $data ['judul'];
            $tahun = $data ['tahun'];
            $id_penerbit = $data ['id_penerbit'];
            $id_pengarang = $data ['id_pengarang'];
            $id_katalog = $data ['id_katalog'];
            $id_suplier = $data ['id_suplier'];
            $stok = $data ['stok'];
            $harga = $data ['harga'];
        }
    ?>
    <div class="container">
        <h3 class="fw-bold mt-4 mb-4">Edit Data</h3>
        <form action="proses-edit-buku.php?isbn=<?= $isbn; ?>" method="POST">
    <table cellpadding="10" cellspacing="0" class="table table-striped">
        <tr>
            <td>ISBN</td>
            <td><input type="text" name="isbn" value="<?= $isbn; ?>"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value="<?= $judul; ?>"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td><input type="number" name="tahun" value="<?= $tahun; ?>"></td>
        </tr>
        <tr>
            <td>ID_Penerbit</td>
            <td><input type="number" name="id_penerbit" value="<?= $id_penerbit; ?>"></td>
        </tr>
        <tr>
            <td>ID_Pengarang</td>
            <td><input type="number" name="id_pengarang" value="<?= $id_pengarang; ?>"></td>
        </tr>
        <tr>
            <td>ID_Katalog</td>
            <td><input type="number" name="id_katalog" value="<?= $id_katalog; ?>"></td>
        </tr>
        <tr>
            <td>ID_Supplier</td>
            <td><input type="number" name="id_suplier" value="<?= $id_suplier; ?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" value="<?= $stok; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?= $harga; ?>"></td>
        </tr>
        <td> 
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </td>
        
            </table>
            </form>
        </div>





    
</body>
</html>