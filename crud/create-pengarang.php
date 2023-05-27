<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Tambah Data</title>
    

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col">
                <a href="pengarang.php" class="btn btn-primary mb-3"> << kembali</a>
                <div class="card">
                    <div class="card-body">
                        <form action="proses-pengarang.php" method="POST" id="form-buku">
                        <h3 class="mb-3">Tambah Data Pengarang</h3>
                        <div class="mb-3">
                            <label for="id_pengarang" class="form-label">ID_pengarang</label>
                            <input type="number" class="form-control" name="id_pengarang" id="id_pengarang" placeholder="Masukan id_pengarang Buku">
                            <small id="text-error-id_pengarang"></small>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama ">
                            <small id="text-error-nama"></small>
                        </div>
                         <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Masukan email ">
                            <small id="text-error-email"></small>
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">Telp</label>
                            <input type="number" class="form-control" name="telp" id="telp" placeholder="Masukan telp">
                            <small id="text-error-telp"></small>
                            
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan alamat">
                            <small id="text-error-alamat"></small>
                            
                        </div>
                        
                        
                        <div class="mb-3">
                            <button id="my-button" type="button" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <script type="text/javascript">
    $('#my-button').click(function() {
        if ( $('#id_pengarang').val().length == 0  ||$('#nama').val().length == 0  || $('#alamat').val().length == 0|| $('#telp').val().length == 0  ) {
             if($('#id_pengarang').val().length == 0){
                $('#id_pengarang').css({"border-color" : "red"});
                $('#text-error-id_pengarang').text('* Silahkan isi id_pengarang terlebih dahulu');
                $('#text-error-id_pengarang').css({"font-style" : "italic"});
                $('#text-error-id_pengarang').css({"color" : "red"});
            }else{
                $('#id_pengarang').css({"border-color" : "#dee2e6"});
                $('#text-error-id_pengarang').hide();
            }
           
            if($('#nama').val().length == 0){
                $('#nama').css({"border-color" : "red"});
                $('#text-error-nama').text('* Silahkan isi nama terlebih dahulu');
                $('#text-error-nama').css({"font-style" : "italic"});
                $('#text-error-nama').css({"color" : "red"});
            }else{
                $('#nama').css({"border-color" : "#dee2e6"});
                $('#text-error-nama').hide();
            }
             if($('#email').val().length == 0){
                $('#email').css({"border-color" : "red"});
                $('#text-error-email').text('* Silahkan isi email terlebih dahulu');
                $('#text-error-email').css({"font-style" : "italic"});
                $('#text-error-email').css({"color" : "red"});
            }else{
                $('#email').css({"border-color" : "#dee2e6"});
                $('#text-error-email').hide();
            }
            if($('#telp').val().length == 0){
                $('#telp').css({"border-color" : "red"});
                $('#text-error-telp').text('* Silahkan isi telp terlebih dahulu');
                $('#text-error-telp').css({"font-style" : "italic"});
                $('#text-error-telp').css({"color" : "red"});
            }else{
                $('#telp').css({"border-color" : "#dee2e6"});
                $('#text-error-telp').hide();
            }
            if($('#alamat').val().length == 0){
                $('#alamat').css({"border-color" : "red"});
                $('#text-error-alamat').text('* Silahkan isi alamat terlebih dahulu');
                $('#text-error-alamat').css({"font-style" : "italic"});
                $('#text-error-alamat').css({"color" : "red"});
            }else{
                $('#alamat').css({"border-color" : "#dee2e6"});
                $('#text-error-alamat').hide();
            }
            
            
           
        } else {
            $('#form-buku').submit();
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>