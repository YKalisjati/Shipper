<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Membuat Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('css/resetpassword.css')}}" rel="stylesheet">
  </head>

<header>
  <br><br><br>
    <nav class="navbar navbar-expand-lg bg-white navbar-white fixed-top" >
        <div class="container">
            <a class="navbar-brand" href="/home"><i><b>SHIPPER</b></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<body>
  <div class="container .container-width">
    <div class="card card-size" >
        <div class="card-body">
          <h2>Silahkan Lakukan Aktifasi Akun</h2>
          @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          <p class=""><small>Cek email yang kami kirimkan ke-Anda untuk melakukan aktifasi.</p></small>
          <hr>
          <div class="row justify-content-center ">
            <a class="btn btn-light btn-lg btn-outline-secondary button-size"href="/login" role="button">
              <i class="fab fa-facebook-f me-2"></i>Kembali ke Halaman Login
            </a>
          </div>
        </div>
    </div>
  </div>
</body>