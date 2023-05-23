<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Sandi</title>

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
            
            <ul class="nav navbar-nav">
                <div class ="d-flex">
                  <p class = "text-right"><br>Belum punya akun? <a href="/register">Daftar Sekarang</a></p>
                </div>            
            </ul>
        </div>
    </nav>
</header>

<body>
  <div class="container .container-width">
    <div class="card card-size" >
        <div class="card-body">
          <h2>Lupa Kata Sandi?</h2>
          <p class=""><small>Kami akan membantu Anda untuk membuat yang baru.</p></small>
          <hr>
          <form method="post" action="/lupa-sandi">
          <!-- Email input -->
          @csrf
          @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @elseif(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          <div class="form-outline mb-4 ">
            @if(Session::has('success'))
            <input type="hidden" id="form1Example13" name="email" value="{{Session::get('email')}}" class="form-control form-control-lg" />
            @else
            <label class="form-label" for="form1Example13">Email</label>
            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            @endif
          </div>
          <!-- Submit button -->
          <div class="row justify-content-center ">
            <button type="submit"  class="btn btn-danger btn-lg btn-block mb-3 button-size" >
              @if(Session::has('bName'))
              {{Session::get('bName')}}
              @else
              Kirim Alamat Reset ke Email
              @endif
            </button>
          </div>
          </form>
          <div class="row justify-content-center ">
            <a class="btn btn-light btn-lg btn-outline-secondary button-size"href="/login" role="button">
              <i class="fab fa-facebook-f me-2"></i>Kembali ke Halaman Login
            </a>
          </div>
        </div>
    </div>
  </div>
</body>