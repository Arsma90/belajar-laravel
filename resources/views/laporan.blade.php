@extends('layout.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="halutama.css">
      <link rel="stylesheet" href="cs/css/bootstrap.min.css">
      <title>Buat Laporan</title>
    </head>
    <body>

      <div class="container mt-5 text-white">
        <div style="position: relative; font-family: 'Roboto', sans-serif;font-size:100px; text-align: center;" >
          <h1>JANGAN TAKUT UNTUK MELAPORKAN MASALAH!!</h1>
        </div>
      </div>
      <br>
      <br>  
  <div class="container mt-3">
    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-white">Laporan Anda</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required></textarea>
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label text-white">Bukti Foto</label>
        <input class="form-control" type="file" id="formFileMultiple" name="foto" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-outline-light">Lapor</button>
      </div>  
    </form>
  </div>
@endsection

  <script src="cs/js/bootstrap.js"></script>
</body>
</html>