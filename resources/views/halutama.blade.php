<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="halutama.css">
    <link rel="stylesheet" href="cs/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>halutama</title>
</head>
<body style="background-color: rgb(9, 120, 175)">
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(9, 120, 175); box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.40)">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{ url('halutama')}}">
            <img src="img/row.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <b>LPM</b>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="nav nav-underline" style="position: relative; left: 456px;">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="{{ url('dashboard')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('about')}}">About</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link text-white" href="{{ url('hasillaporan')}}">HasilLaporan</a>
              </li>
            </ul>
            <div style="position: absolute; right: 20px" class="underline">
              <ul class="nav nav-underline">
              <li class="nav-item">
                <a href="login" class="nav-link text-white">Login</a>
              </li>
              <li class="nav-item">
                <a href="register" class="nav-link text-white">Register</a>
              </li>
            </ul>
            </div>
            
          </div>
        </div>
      </nav>
      <div class="container mt-5 text-white">
        <div style="position: relative; top: 50px; font-family: 'Roboto', sans-serif; font-size: 20px;" >
          <h1>LAYANAN DAN PENGADUAN MASYARAKAT</h1>
          <p>Ayooo Laporkan Kepada Kami Keluh Kesah Anda!!</p>
        </div>
        <img src="img/amp.png" class="rounded float-start" style="margin-top: 5px; width: 450px;" alt="">
      </div>
      <div class="container d-grid gap-2 col-2 mx-auto" style="margin-top: 300px;">
        <a href="laporan"><button class="btn btn-outline-light" type="button">Buat Laporan <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></button></a>
      </div>
    <script src="cs/js/bootstrap.js"></script>
</body>
</html>