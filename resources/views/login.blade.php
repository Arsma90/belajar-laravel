@if(session("Error"))
    <div class="alert alert-danger">{{session("Error")}}</div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pengaduan masyarakat</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgb(9, 120, 175);">
    
        <div class="login">
            <h1 class="judul">LOGIN</h1>
            <form action="" method="POST">
                @csrf
                <input type="text" class="border-box" placeholder="Username" name="username" required>
                <input type="password" class="border-box" placeholder="Password" name="password" required>
                <button type="submit" name="submit" class="login-btn">LOGIN</button>
                <p>Belum buat akun?<a href="{{url('/register')}}" class="daftar">Buat dulu</a></p>
            </form>
        </div>
</body>
</html>