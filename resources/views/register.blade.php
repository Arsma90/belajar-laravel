<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign-Up Pengaduan Masyarakat</title>
    <link rel="stylesheet" href="sign_up.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="login">
      <div class="sign-up">
        <h1 class="judul">REGISTER</h1>

        <form action="" method="post">

            @method('POST')
            @csrf
          <input type="text" name="nik" class="border-box" placeholder="NIK" required autocomplete="off">
          <input type="text" name="nama"  class="border-box" placeholder="Nama" required autocomplete="off">
          <input type="text" name="username"  class="border-box" placeholder="Username" required autocomplete="off">
          <input type="password" name="password"  class="border-box" placeholder="Password" id="password" required autocomplete="off">
          <input type="text" name="telp"  class="border-box" placeholder="Telfon" required autocomplete="off">
          <button type="submit" class="signup-btn">REGISTER</button>
        </form>
      </div>
    </div>
  </body>
</html>