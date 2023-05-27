<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="css-crud/style-crud.css">


    
    
</head>
<body>
    <section>
        <nav>
            <div class="logo">
                <img src="img-crud/logo2.png">
            </div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
            <!-- Navbar End -->
        </nav>
    </section>

    <div class="container" ">
        
        <table  id="mytable" class="display" cellpadding="10" cellspacing="0" class="table table-striped">
        <a href="create-pengarang.php" class="btn btn-primary mt-4 mb-4">Tambah data</a>
        <thead>
            <tr>
                <th widht="200px" class="text-center">ID_Pengarang</th>
                <th widht="200px" class="text-center">Nama</th>
                <th widht="300px" class="text-center">Email</th>
                <th widht="300px" class="text-center">Telp</th>
                <th widht="200px" class="text-center">Alamat</th>
                <th widht="250px" class="text-center">Aksi</th>
                
            </tr>  
        </thead>  
        
        <?php
            include ('koneksi.php');
            $data_pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
            while($pengarang = mysqli_fetch_array($data_pengarang)){
        ?>
        <tr>
            <td class="text-center"><?php echo $pengarang['id_pengarang'] ?></td>
            <td class="text-center"><?php echo $pengarang['nama'] ?></td>
            <td class="text-center"><?php echo $pengarang['email'] ?></td>
            <td class="text-center"><?php echo $pengarang['telp'] ?></td>
            <td class="text-center"><?php echo $pengarang['alamat'] ?></td>
            
            <td class="text-center">
            <a  class="btn btn-warning" href="edit-pengarang.php?id_pengarang=<?= $pengarang['id_pengarang']; ?>">Edit</a>
            <a  class="btn btn-danger" href="delete-pengarang.php?id_pengarang=<?= $pengarang['id_pengarang']; ?> " onclick="return confirm('Yakin dihapus')">Delete</a>
        </tr>
        <?php 
            } 
        ?>
    </table>
    </div>
    <footer>
        <div class="footer">
            <div class="tag">
                <img src="img-crud/logo2.png">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                </p>
            </div>
            <div class="tag">
                <h1>Quick Link</h1>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
            </div>
            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twiter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#mytable').DataTable();

    });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

