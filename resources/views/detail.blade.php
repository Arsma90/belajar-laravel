@include('layout.navbar')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <table class="table">
            <br>
        <thead>
    <tr class="table-primary">
      <br>
      <th scope="col">TGL</th>
      <th scope="col">NIK</th>
      <th scope="col">LAPORAN</th>
      <th scope="col">FOTO</th>
      <th scope="col">STATUS</th>
      <th scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
    <tr style="background: rgb(9, 120, 175);">
      <td>{{ $data->tgl_pengaduan }}</td>
      <td>{{ $data->nik }}</td>
      <td>{{ $data->isi_laporan }}</td>
      <td><img width="150px" src='{{asset("img/$data->foto")}}' /></td>
      <td>{{$data->status}}</td>
      <td> 
      <button class="btn btn-outline-info" onclick="window.print()">Print</button>
      </td>
    </tr>
  </tbody>
</table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
