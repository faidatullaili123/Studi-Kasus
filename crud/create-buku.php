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
                <a href="buku.php" class="btn btn-primary mb-3"> << kembali</a>
                <div class="card">
                    <div class="card-body">
                        <form action="proses-buku.php" method="POST" id="form-buku">
                        <h3 class="mb-3">Tambah Data </h3>
                         <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="number" class="form-control" name="isbn" id="isbn" placeholder="Masukan isbn Buku">
                            <small id="text-error-isbn"></small>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan judul ">
                            <small id="text-error-judul"></small>
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">tahun</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukan tahun ">
                            <small id="text-error-tahun"></small>
                        </div>
                        <div class="mb-3">
                            <label for="id_penerbit" class="form-label">ID_Penerbit</label>
                            <input type="number" class="form-control" name="id_penerbit" id="id_penerbit" placeholder="Masukan id_penerbit Buku">
                            <small id="text-error-id_penerbit"></small>
                        </div>
                        <div class="mb-3">
                            <label for="id_pengarang" class="form-label">ID_pengarang</label>
                            <input type="number" class="form-control" name="id_pengarang" id="id_pengarang" placeholder="Masukan id_pengarang Buku">
                            <small id="text-error-id_pengarang"></small>
                        </div>
                        <div class="mb-3">
                            <label for="id_katalog" class="form-label">id_katalog</label>
                            <input type="number" class="form-control" name="id_katalog" id="id_katalog" placeholder="Masukan id_katalog Buku">
                            <small id="text-error-id_katalog"></small>
                        </div>
                        <div class="mb-3">
                            <label for="id_suplier" class="form-label">id_suplier</label>
                            <input type="number" class="form-control" name="id_suplier" id="id_suplier" placeholder="Masukan id_suplier ">
                            <small id="text-error-id_suplier"></small>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">stok</label>
                            <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukan stok Buku">
                            <small id="text-error-stok"></small>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukan harga Buku">
                            <small id="text-error-harga"></small>
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
        if ( $('#isbn').val().length == 0  ||   $('#judul').val().length == 0  ||  $('#tahun').val().length == 0  ||  $('#id_penerbit').val().length == 0  || $('#id_pengarang').val().length == 0  ||  $('#id_katalog').val().length == 0  ||  $('#id_suplier').val().length == 0  ||  $('#stok').val().length == 0  || $('#harga').val().length == 0) {
             if($('#isbn').val().length == 0){
                $('#isbn').css({"border-color" : "red"});
                $('#text-error-isbn').text('* Silahkan isi isbn terlebih dahulu');
                $('#text-error-isbn').css({"font-style" : "italic"});
                $('#text-error-isbn').css({"color" : "red"});
            }else{
                $('#isbn').css({"border-color" : "#dee2e6"});
                $('#text-error-isbn').hide();
            }
             if($('#judul').val().length == 0){
                $('#judul').css({"border-color" : "red"});
                $('#text-error-judul').text('* Silahkan isi judul terlebih dahulu');
                $('#text-error-judul').css({"font-style" : "italic"});
                $('#text-error-judul').css({"color" : "red"});
            }else{
                $('#judul').css({"border-color" : "#dee2e6"});
                $('#text-error-judul').hide();
            }
             if($('#tahun').val().length == 0){
                $('#tahun').css({"border-color" : "red"});
                $('#text-error-tahun').text('* Silahkan isi tahun terlebih dahulu');
                $('#text-error-tahun').css({"font-style" : "italic"});
                $('#text-error-tahun').css({"color" : "red"});
            }else{
                $('#tahun').css({"border-color" : "#dee2e6"});
                $('#text-error-tahun').hide();
            }
             if($('#id_penerbit').val().length == 0){
                $('#id_penerbit').css({"border-color" : "red"});
                $('#text-error-id_penerbit').text('* Silahkan isi id_penerbit terlebih dahulu');
                $('#text-error-id_penerbit').css({"font-style" : "italic"});
                $('#text-error-id_penerbit').css({"color" : "red"});
            }else{
                $('#id_penerbit').css({"border-color" : "#dee2e6"});
                $('#text-error-id_penerbit').hide();
            }

             if($('#id_pengarang').val().length == 0){
                $('#id_pengarang').css({"border-color" : "red"});
                $('#text-error-id_pengarang').text('* Silahkan isi id_pengarang terlebih dahulu');
                $('#text-error-id_pengarang').css({"font-style" : "italic"});
                $('#text-error-id_pengarang').css({"color" : "red"});
            }else{
                $('#id_pengarang').css({"border-color" : "#dee2e6"});
                $('#text-error-id_pengarang').hide();
            }
           
            if($('#id_katalog').val().length == 0){
                $('#id_katalog').css({"border-color" : "red"});
                $('#text-error-id_katalog').text('* Silahkan isi id_katalog terlebih dahulu');
                $('#text-error-id_katalog').css({"font-style" : "italic"});
                $('#text-error-id_katalog').css({"color" : "red"});
            }else{
                $('#id_katalog').css({"border-color" : "#dee2e6"});
                $('#text-error-id_katalog').hide();
            }
             if($('#id_suplier').val().length == 0){
                $('#id_suplier').css({"border-color" : "red"});
                $('#text-error-id_suplier').text('* Silahkan isi id_suplier terlebih dahulu');
                $('#text-error-id_suplier').css({"font-style" : "italic"});
                $('#text-error-id_suplier').css({"color" : "red"});
            }else{
                $('#id_suplier').css({"border-color" : "#dee2e6"});
                $('#text-error-id_suplier').hide();
            }
             if($('#stok').val().length == 0){
                $('#stok').css({"border-color" : "red"});
                $('#text-error-stok').text('* Silahkan isi stok terlebih dahulu');
                $('#text-error-stok').css({"font-style" : "italic"});
                $('#text-error-stok').css({"color" : "red"});
            }else{
                $('#stok').css({"border-color" : "#dee2e6"});
                $('#text-error-stok').hide();
            }
            if($('#harga').val().length == 0){
                $('#harga').css({"border-color" : "red"});
                $('#text-error-harga').text('* Silahkan isi harga terlebih dahulu');
                $('#text-error-harga').css({"font-style" : "italic"});
                $('#text-error-harga').css({"color" : "red"});
            }else{
                $('#harga').css({"border-color" : "#dee2e6"});
                $('#text-error-harga').hide();
           
            }
            
            
           
        } else {
            $('#form-buku').submit();
        }
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>