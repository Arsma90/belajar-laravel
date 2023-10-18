@extends('layout.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <title>Update Laporan</title>
    </head>
    <body>

      <div class="container mt-5 text-white">
        <div style="position: relative; font-family: 'Roboto', sans-serif;font-size:100px; text-align: center;" >
          <h1>UPDATE LAPORAN MU!!</h1>
        </div>
      </div>

  <div class="container mt-3">
    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-white">Update laporan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required></textarea>
      </div>
      <div class="mb-3">
        <label for="formFileMultiple" class="form-label text-white">Bukti Foto</label>
        <input class="form-control" type="file" id="formFileMultiple" name="foto" required>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-outline-light">Update</button>
      </div>
    </form>
  </div>
@endsection

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>