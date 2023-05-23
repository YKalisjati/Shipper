<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Password Baru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{asset('css/resetpassword.css')}}" rel="stylesheet">
  </head>

<header>
  <br><br><br>
    <nav class="navbar navbar-expand-lg bg-white navbar-white fixed-top" >
        <div class="container">
            <a class="navbar-brand" href="/Shipper/home"><i><b>SHIPPER</b></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <ul class="nav navbar-nav">
                <div class ="d-flex">
                  <p class = "text-right"><br>Belum punya akun? <a href="#!">Daftar Sekarang</a></p>
                </div>            
            </ul>
        </div>
    </nav>
</header>

<body>
  <div class="container container-width" >
    <div class="card card-size" >
        <div class="card-body">
        <h2>Buat Password Baru</h2>
        <p class=""><small>Masukkan password yang mudah anda ingat tetapi sulit ditebak oleh orang lain.</p></small>
        
          <form method="post" action="{{route('new-password')}}">
          @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
            <input type="hidden" name="token"  value="{{$token}}" />
            <input type="hidden" name="email"  value="{{$email}}"/>
            <hr>
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}.</div>
              <label class="form-label" for="form1Example13"></label>
              <input type="hidden" id="form1Example13"  name="password" class="form-control form-control-lg" />
              @else
              <label class="form-label" for="form1Example13">Password Baru</label>
              <input type="password" id="form1Example13"  name="password" class="form-control form-control-lg" />
              @endif
              <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
                                                                                                                                                                                                                                                          
            <!-- Submit button -->
            <div class="row justify-content-center">
            @if(Session::has('fail'))
            <a class="btn btn-light btn-lg btn-outline-secondary button-size"href="/lupa-sandi" role="button">
              <i class="fab fa-facebook-f me-2"></i>Kembali
            </a>
            @else
            <button type="submit" class="btn btn-danger btn-lg btn-block mb-3 button-size">simpan</button>
            @endif
            </div>
          </form>
          </div>
    </div>
  </div>
</body>