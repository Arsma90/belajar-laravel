<body style="background-color: rgb(9, 120, 175);">
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(9, 120, 175);  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.40)">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="{{ url('halutama')}}">
      <img src="img/row.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      <b>LPM</b>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="nav nav-underline" style="position: relative; left: 476px;">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="{{ url('dashboard')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('about')}}">About</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('hasillaporan')}}">HasilLaporan</a>
        </li>
        <div style="position: absolute; right: -550px;">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('/logout')}}">Log-out</a>
        </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
</body>