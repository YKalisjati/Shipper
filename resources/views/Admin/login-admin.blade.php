<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="css/min-widthBody.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        
          <div class="col-sm-3 px-0 d-none d-xl-block">
            <div class="top-content">
              <!-- Carousel -->
              <div id="carousel-example" class="carousel slide" data-ride="carousel">

                  <ol class="carousel-indicators">
                      <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-example" data-slide-to="1"></li>
                      <li data-target="#carousel-example" data-slide-to="2"></li>
                      <li data-target="#carousel-example" data-slide-to="3"></li>
                  </ol>

                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="https://media.shipper.id/602202/merchant/Banners_21dc0139-10a4-483b-afdf-1d2bdca4e55b.png" class="d-block w-100" alt="slide1">
                      </div>
                      <div class="carousel-item">
                          <img src="https://media.shipper.id/602202/merchant/Banners_7a6a5cf6-de0c-46ad-93c6-cde6df31d17a.png" class="d-block w-100" alt="slide2">
                      </div>
                      <div class="carousel-item">
                          <img src="https://media.shipper.id/111202/merchant/Banners_74c1c5b2-119a-4f47-a964-8fa64b22b337.jpg" class="d-block w-100" alt="slide3">
                      </div>
                      <div class="carousel-item">
                          <img src="https://media.shipper.id/111202/merchant/Banners_1c25d729-763e-4f92-b3f8-4eeeb85b3901.jpg" class="d-block w-100" alt="slide4">
                      </div>
                  </div>
                  
              </div>
              <!-- End carousel -->
          </div>
          </div>


          <div style="min-width:600px;" class="col-sm-6 container" >
            <div class="login-wrapper my-auto mx-auto ">
              
              @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
              <h1 class="login-title bg-danger rounded p-2"><b class="text-white">Masuk ke dalam akun Admin Anda</b></h1>
              <form action="{{route('goDashbordAdmin')}}" method="post">
                @csrf
                <div class="form-group ">
                  <label for="email">Email</label>
                  <input autocomplete="off" type="email" name="email" id="email" class="form-control border rounded-lg" placeholder="Masukkan Email" value="{{old('email')}}">
                  <span class="text-danger">@error('email'){{$message}}@enderror</span>
                </div>
                <div class="form-group mb-4">
                  <label for="password">Kata Sandi</label>
                  <input type="password" name="password" id="password" class="form-control border rounded-lg" placeholder="Masukkan Kata Sandi">
                  <span class="text-danger">@error('password'){{$message}}@enderror</span>
                </div>
                <div>
                <input name="login" id="login" href="#g-plus" class="btn btn-block login-btn btn-white text-danger border-danger" type="submit" value="Masuk">
                </div>
              </form>
            </div>
            
            
          </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
