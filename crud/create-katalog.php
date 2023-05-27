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
                <a href="katalog.php" class="btn btn-primary mb-3"> << kembali</a>
                <div class="card">
                    <div class="card-body">
                        <form action="proses-katalog.php" method="POST" id="form-buku">
                        <h3 class="mb-3">Tambah Data Katalog</h3>
                        <div class="mb-3">
                            <label for="id_katalog" class="form-label">ID_katalog</label>
                            <input type="number" class="form-control" name="id_katalog" id="id_katalog" placeholder="Masukan id_katalog Buku">
                            <small id="text-error-id_katalog"></small>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Buku">
                            <small id="text-error-nama"></small>
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
        if ( $('#id_katalog').val().length == 0  || $('#nama').val().length == 0  ){
            if($('#id_katalog').val().length == 0){
                $('#id_katalog').css({"border-color" : "red"});
                $('#text-error-id_katalog').text('* Silahkan isi id_katalog terlebih dahulu');
                $('#text-error-id_katalog').css({"font-style" : "italic"});
                $('#text-error-id_katalog').css({"color" : "red"});
            }else{
                $('#id_katalog').css({"border-color" : "#dee2e6"});
                $('#text-error-id_katalog').hide();
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
        
            
           
         }else {
            $('#form-buku').submit();
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>