<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="cssjs/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   <!--  <h1>Halaman register</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
                <p>{{ $error }}</p>
              </div>
        @endforeach
    @endif
    @if (Session::has("message"))
    <div class="alert alert-success" role="alert">
        <p>{{ Session::get('message') }}</p>
      </div>
    @endif
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" id="name">
        <br>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Register</button>
        <a href="/login">sudah punya akun?</a>
    </form> -->

    

    <section>
        <div class="login-container">
            <p class="title">PENDAFTARAN</p>
            <div class="separator"></div>
            <p class="welcome-message">Silahkan isi form data di bawah untuk mendafatar. <br>Ingatkan email dan password anda yang sudah terdaftar!</p>

            <!-- ___________________________________________________________ -->

            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                <p class="welcome-message">{{ $error }}</p>
            </div>
            @endforeach
            @endif

            @if (Session::has("message"))
            <div class="alert alert-success" role="alert">
                <p class="welcome-message">{{ Session::get('message') }}</p>
            </div>
            @endif

            <!-- ___________________________________________________________ -->

            <form class="login-form" action="/register" method="POST">
                @csrf
                <div class="form-control">
                    <input type="text" placeholder="Username/email" name="name" id="name">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password/sandi" name="password" id="password">
                    <i class="fas fa-lock"></i>
                </div>
                <a href="/login">Sudah punya akun?</a>
                <button class="submit" type="submit">DAFTAR</button>
            </form>
        </div>
    </section>
</body>
</html>
