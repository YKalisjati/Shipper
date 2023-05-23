<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="css/min-widthBody.css" rel="stylesheet">
  <link rel="stylesheet" href="css/register.css">
</head>
<body onload="check()">
  <main>
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 px-0 d-none d-xl-block ">
          <!-- Top content -->
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
    <div class="col-sm-9 px-0  container " >
      <div class="multisteps-form">
        <div class="row "  >
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress" style="width :600px;">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info" disabled>Lengkapi Data Diri</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address" disabled>Lengkap Alamat</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info" disabled>Verifikasi Data</button>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-sm-12 col-lg-8 m-auto">
            <div style="width :600px;">
              <form class="multisteps-form__form" id="formContoh" action="{{route('register-user')}}" method="post">
                @csrf
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  @if(Session::has('fail'))
                  <div class="alert alert-danger ">{{Session::get('fail')}}</div>
                  @endif
                  <h3 class="multisteps-form__title ">Mulai Membuat Akun Shipper Anda</h3>
                  <p>Lengkapi form dibawah ini untuk membuat akun.</p>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6"><a>Nama Lengkap</a>
                        <input class="multisteps-form__input form-control" type="text" placeholder="Masukkan Nama Lengkap" name="name" autocomplete="off" value="{{old('name')}}">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0"><a>Nama Perusahaan</a>
                        <input class="multisteps-form__input form-control" type="text" placeholder="Masukkan Nama Perusahaan" name="perusahaan" autocomplete="off" value="{{old('perusahaan')}}">
                        <span class="text-danger">@error('perusahaan'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6"><a>Email</a>
                        <input class="multisteps-form__input form-control" type="email" placeholder="Masukkan Email" name ="email" autocomplete="off" value="{{old('email')}}">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0"><a>Nomor HP</a>
                        <input class="multisteps-form__input form-control" type="number" placeholder="Masukkan Nomor HP" name="handphone" autocomplete="off" value="{{old('handphone')}}">
                        <span class="text-danger">@error('handphone'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6"><a>Buat Kata Sandi</a>
                        <input class="multisteps-form__input form-control" type="password" name="password" placeholder="Buat Kata Sandi Baru"/>
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                      </div>
                      <div class="col-12 col-sm-6 mt-sm-0 text-secondary">
                        <p style="font-size:14px"><b>Perhatian</b></p>
                        <p style="font-size:12px">Email dan Nomor HP tidak dapat diubah (edit), silahkan menghubungi CS untuk mengubah Email dan Nomor HP</p>
                      </div>
                      <!--
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0"><a>Ulangi Kata Sandi</a>
                        <input class="multisteps-form__input form-control" type="password" placeholder="Ulangi Kata Sandi"/>
                        <span class="text-danger">@error('password'){{$message}}@enderror</span>
                      </div>
                      -->
                    </div>
                    <div class="button-row d-flex mt-4">
                      <!--<button><a class="btn btn-danger js-btn-prev" type="button" title="google" href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?redirect_uri=storagerelay%3A%2F%2Fhttps%2Fdashboard.shipper.id%3Fid%3Dauth345680&response_type=permission%20id_token&scope=email%20profile%20openid&openid.realm&include_granted_scopes=true&client_id=233332491370-76bqr30rdn6flg4tpu85phork3vhs411.apps.googleusercontent.com&ss_domain=https%3A%2F%2Fdashboard.shipper.id&prompt&fetch_basic_profile=true&gsiwebsdk=2&flowName=GeneralOAuthFlow"><img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-google.svg">
                      Daftar Dengan Google</a></button>-->
                      <a class="btn btn-outline-secondary" type="button" href="/home">
                      Home</a>
                      <button class="btn btn-danger ml-auto js-btn-next" type="button" title="Next">Langkah Selanjutnya</button>
                    </div>
                  </div>
                </div>
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Kami Membutuhkan Alamat Anda</h3>
                  <p>Jangan khawatir, ini bagian dari pembuatan akun.</p>
                  <div class="multisteps-form__content">
                    <!--<div class="form-row mt-4">
                      <div class="col"><a>Pilih Koordinat (Untuk Pengiriman Instan)</a>
                        <input class="multisteps-form__input form-control" type="text" placeholder="Lok"/>
                      </div>
                    </div>-->
                    <div class="form-row mt-4">
                      <div class="col"><a>Alamat Lengkap</a>
                        <input class="multisteps-form__input form-control" type="text" placeholder="Contoh : Jl.Ampera Raya No.22" name="alamat" autocomplete="off" value="{{old('alamat')}}">
                        <span class="text-danger">@error('alamat'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6"><a>Provinsi</a>
                        <input class="multisteps-form__input  form-control" onChange="getIdProvince();"  list="provinceList" type="text" placeholder="Masukkan Provinsi" name="provinsi" id="provinceName" autocomplete="off" value="{{old('provinsi')}}">
                        <span class="text-danger">@error('provinsi'){{$message}}@enderror</span>
                        <datalist id="provinceList" >
                          @foreach ($province as $provinsi => $value)
                          <option data-value="{{$value}}"  value="{{ $provinsi }}">
                          @endforeach
                        </datalist>
                        <input type="hidden" name="idProvinsi" id="hidenProvinceId" value="{{old('idProvinsi')}}">
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6"><a>Kabupaten/Kota</a>
                        <input class="multisteps-form__input form-control" onChange="getIdCity()"  list="cityList" type="text" placeholder="Masukkan Kabupaten/Kota" id="nameCity" name="kota" autocomplete="off" value="{{old('kota')}}" readonly>
                        <span class="text-danger">@error('kota'){{$message}}@enderror</span>
                        <datalist id="cityList"></datalist>
                        <input type="hidden" name="idCity" id="hidenCityId" value="{{old('idCity')}}">
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0"><a>Kode Pos</a>
                        <input class="multisteps-form__input form-control" type="text" placeholder="Masukkan Kode Pos" name="kodepos" id="posCode" onkeypress='return event.charCode >= 48 && event.charCode <= 57' autocomplete="off" value="{{old('kodepos')}}" readonly>
                        <span class="text-danger">@error('kodepos'){{$message}}@enderror</span>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-outline-secondary js-btn-prev" type="button" title="Prev">Kembali</button>
                      <button class="btn btn-danger ml-auto js-btn-next" type="button" title="Next">Langkah Selanjutnya</button>
                    </div>
                  </div>
                </div><div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <p class="btn-masuk">Sudah Punya Akun? <a class="text-reset"><a href="/login" class="daftar-sekarang-link"><u>Masuk</u></a></p>
                  <h3 class="multisteps-form__title">Anda Sudah Yakin?</h3>
                  <p class="card-text">Jika anda sudah yakin mengisi data dengan benar, silahkan tekan daftar</p>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-outline-secondary js-btn-prev" type="button" title="Prev">Kembali</button>
                    <button class="btn btn-danger ml-auto" type="submit" onclick="getIdCity();">Daftar</button>
                  </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
<script type ="text/javascript" src="/js/register.js"></script>
<script>

  function getIdProvince(){
  const name = document.querySelector('#provinceName').value;
  const id = document.querySelector('#hidenProvinceId');
  const list = document.querySelector('#provinceList');
  var valueOption = 0; 
  var cond = 0; 
  for (i = 0; i < list.options.length; i++) {
     if (list.options[i].value.toLowerCase()==name.toLowerCase()){
        valueOption = list.options[i].getAttribute('data-value');
        id.value = valueOption;
     }
  }
  var options;
  @foreach ($cities as $city)         
    if({{$city->province_id}} == valueOption){
      options += '<option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">';
      cond = true;
    }
  @endforeach
  if(cond){
    document.querySelector('#nameCity').removeAttribute('readonly');
  }else{
    document.querySelector('#nameCity').setAttribute('readonly', true);
    document.querySelector('#posCode').setAttribute('readonly', true);
    document.querySelector('#nameCity').value="";
    document.querySelector('#posCode').value="";
  }
  document.getElementById('cityList').innerHTML = options;
  
}

function getIdCity(){
  const name = document.querySelector('#nameCity').value;
  const id = document.querySelector('#hidenCityId');
  const list = document.querySelector('#cityList');
  var cond = 0; 
  for (i = 0; i < list.options.length; i++) {
     if (list.options[i].value.toLowerCase()==name.toLowerCase()){
        id.value = list.options[i].getAttribute('data-value');
        cond = true;
     }
  }

  if(cond){
    document.querySelector('#posCode').removeAttribute('readonly');
  }else{
    document.querySelector('#posCode').setAttribute('readonly', true);
    document.querySelector('#posCode').value="";
  }
}
</script>
</body>
</html>
