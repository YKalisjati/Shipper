<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaturan</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/setting.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">

    <style>
      /* Dropdown Button */
    .dropbtn {
      background-color: #ffffff;
      color: rgb(0, 0, 0);
      padding: 2px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }
    
    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd}
    
    /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
    .show {display:block;}
      </style>
    
    <script>
      /* When the user clicks on the button, 
      toggle between hiding and showing the dropdown content */
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      
      // Close the dropdown if the user clicks outside of it
      window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
          var dropdowns = document.getElementsByClassName("dropdown-content");
          var i;
          for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
            }
          }
        }
      }

      function tambahAlamat(){
        document.getElementById("S_id").value="";
        document.getElementById("S_namaAlamat").value="";
        document.getElementById("S_alamatLengkap").value="";
        document.getElementById("S_provinsi").value="";
        document.getElementById("S_kota").value="";
        document.getElementById("S_kodepos").value="";
        document.getElementById("S_catatan").value="";
        document.querySelector('#S_kota').setAttribute('readonly', true);
        document.querySelector('#S_kota').value="";
        document.querySelector('#S_kota').style.backgroundColor = "#D3D3D3";
        document.querySelector('#S_kodepos').setAttribute('readonly', true);
        document.querySelector('#S_kodepos').value="";
        document.querySelector('#S_kodepos').style.backgroundColor = "#D3D3D3";
      }

      function tambahAlamatPenerima(){
        document.getElementById("S_idP").value="";
        document.getElementById("S_namaPenerima").value="";
        document.getElementById("S_noHpPenerima").value="";
        
        document.getElementById("S_namaAlamatP").value="";
        document.getElementById("S_alamatLengkapP").value="";
        document.getElementById("S_provinsiP").value="";
        document.getElementById("S_kotaP").value="";
        document.getElementById("S_kodeposP").value="";
        document.getElementById("S_catatanP").value="";
      }

      function batalPassword(){
        document.getElementById("passwordLama").value="";
        document.getElementById("passwordBaru").value="";
        document.getElementById("konfirmasiPassword").value="";
      }

      

      function ubahAlamat(noNameButton){
        var no = 0;
        var data = 0;
        var options;
        @foreach($dataAlamat as $alamatUsr)
         if(no==noNameButton){
          
            document.getElementById("S_id").value ="{{ $alamatUsr->id }}";
            document.getElementById("S_namaAlamat").value ="{{$alamatUsr->nama_alamat}}";
            document.getElementById("S_alamatLengkap").value ="{{ $alamatUsr->alamat_lengkap }}";
            document.getElementById("S_provinsi").value ="{{ $alamatUsr->province_name }}";
            document.getElementById("hidenProvinceId").value ="{{ $alamatUsr->province_id }}";
            data= {{$alamatUsr->province_id}};
            @foreach ($cities as $city)         
              if({{$city->province_id}} == data ){
                options += '<option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">';

              }
            @endforeach
            document.getElementById("S_kota").value ="{{ $alamatUsr->city_name }}";
            document.getElementById("hidenCityId").value ="{{ $alamatUsr->city_id }}";
            document.getElementById("S_kodepos").value ="{{ $alamatUsr->kodepos }}";
            document.getElementById("S_catatan").value ="{{ $alamatUsr->note }}";
            document.querySelector('#S_kota').removeAttribute('readonly');
            document.querySelector('#S_kota').style.removeProperty("background-color")
            document.querySelector('#S_kodepos').removeAttribute('readonly');
            document.querySelector('#S_kodepos').style.removeProperty("background-color")
         }
         no++;
        @endforeach
        document.getElementById('cityList').innerHTML = options;
      }

      function ubahAlamatPenerima(noNameButton){
        var no = 0;
        var data = 0;
        var options;
        @foreach($alamatPenerima as $alamatP)
         if(no==noNameButton){
            document.getElementById("S_idP").value ="{{ $alamatP->id }}";
            document.getElementById("S_namaPenerima").value="{{ $alamatP->nama_penerima }}";
            document.getElementById("S_noHpPenerima").value="{{ $alamatP->nohp_penerima }}";
            document.getElementById("S_namaAlamatP").value ="{{$alamatP->nama_alamat}}";
            document.getElementById("S_alamatLengkapP").value ="{{ $alamatP->alamat_lengkap }}";
            document.getElementById("S_provinsiP").value ="{{ $alamatP->province_name }}";
            document.getElementById("hidenProvinceIdP").value ="{{ $alamatP->province_id }}";
            data= {{$alamatP->province_id}};
            @foreach ($cities as $city)         
              if({{$city->province_id}} == data ){
                options += '<option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">';
              }
            @endforeach
            document.getElementById("S_kotaP").value ="{{ $alamatP->city_name }}";
            document.getElementById("hidenCityIdP").value ="{{ $alamatP->city_id }}";
            document.getElementById("S_kodeposP").value ="{{ $alamatP->kodepos }}";
            document.getElementById("S_catatanP").value ="{{ $alamatP->note }}";
            document.querySelector('#S_kotaP').removeAttribute('readonly');
            document.querySelector('#S_kotaP').style.removeProperty("background-color")
            document.querySelector('#S_kodeposP').removeAttribute('readonly');
            document.querySelector('#S_kodeposP').style.removeProperty("background-color")
         }
         no++;
        @endforeach
        document.getElementById('cityListP').innerHTML = options;
      }

      function hapusAlamat(noNameButton){
        if (confirm("Apa anda yakin ingin menghapus alamat ini ?") == true) {
          document.getElementById("hapusAlamat"+noNameButton).submit();
        }
      }

      function hapusAlamatPenerima(noNameButton){
        if (confirm("Apa anda yakin ingin menghapus alamat ini ?") == true) {
          document.getElementById("hapusAlamatP"+noNameButton).submit();
        }
      }
      

      function windowConfirmAkun() {
        if (confirm("Apa anda yakin ingin menyimpan perubahan ini ?") == true) {
          document.getElementById("SimpanAkun").submit();
        }
      }

      function windowConfirmHapusImage() {
        if (confirm("Apa anda yakin ingin menghapus foto profil anda?") == true) {
          document.getElementById("hapusImage").submit();
        }
      }

      function windowConfirmPassword() {
        if (confirm("Apa anda yakin ingin menyimpan perubahan ini ?") == true) {
          document.getElementById("ubahPassword").submit();
        }
      }

      function windowConfirmAlamat() {
        if (confirm("Apa anda yakin ingin menyimpan alamat ini ?") == true) {
          document.getElementById("simpanAlamat").submit();
        }
      }

      function windowConfirmAlamatP() {
        if (confirm("Apa anda yakin ingin menyimpan alamat ini ?") == true) {
          document.getElementById("simpanAlamatP").submit();
        }
      }

      function notifikasi() {
        @if(Session::has('success'))
          alert("{{Session::get('success')}}");
        @elseif(Session::has('fail'))
          alert("{{Session::get('fail')}}");
        @endif
      }
      function deleteInputPengaturanAkun(){
        var imageD = document.getElementById('image');
        imageD.value = "";
        const imagePrev = document.querySelector('.img-preview');
        imagePrev.style.display = 'none';
        const textImg = document.querySelector('#namePreview');
        textImg.innerHTML ="preview img";

        var nama = document.getElementById('nama');
        nama.value = "{{ $data->name }}";
        var perusahaan = document.getElementById('perusahaan');
        perusahaan.value = "{{ $data->perusahaan }}";
      }

      function previewImage(){
        const img = document.querySelector('#image');
        const imagePrev = document.querySelector('.img-preview');
        const textImg = document.querySelector('#namePreview');
        var typeFile = [ "image/jpg", "image/jpeg"];
        
        for(let i = 0; i < typeFile.length; i++){
          if(img.files[0].type.toLowerCase() == typeFile[i] || img.files[0].type.toLowerCase() == "image/png" ){
            textImg.innerHTML ="";
            imagePrev.style.display = 'block';
            const oFReader = new FileReader();

            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent){
            imagePrev.src = oFREvent.target.result;
            }
          }else{
            textImg.innerHTML ="Error to Preview";
            imagePrev.removeAttribute('src');
          }
        }
      }

      
      </script>

</head>
  <body onload="notifikasi()">
  <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
      @include('partials.userHamburgerMenu')
          
          <div class="col ">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="mt-2"><b>Pengaturan</b><p class="h6 text-secondary mt-2">Kelola informasi akun dan alamat Anda.</p> </h1>
            <div class="dropdown">
              <p>Hello,
              <button onclick="myFunction()" class="dropbtn"> {{ $data->name }}</button>
                @if($gambar)
                <img class="rounded-circle " style="height:35px;width:35px;" src="{{asset('storage/images/' . $gambar->name)}}">
                @else
                <img  src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-user-default.svg">
                @endif
                </p>
              <div id="myDropdown" class="dropdown-content">
                <a href="logout">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <main class="ms-sm-auto mt-2">

        <div class="row">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Order1')" id="defaultOpen"><span  class="bgClr">Pengaturan Akun</span></button>
                <button class="tablinks" onclick="openTab(event, 'Order2')" ><span  class="bgClr">Email dan Nomor HP</span></button>
                <button class="tablinks" onclick="openTab(event, 'Order3')"><span class="bgClr">Kata Sandi</span></button>
                <button class="tablinks" onclick="openTab(event, 'Order4')"><span  class="bgClr">Pengaturan Alamat</span></button>
            </div>
        </div>

        <div id="Order1" class="tabcontent"><br>
            <div class="row">
                <div class="col-sm-6">
                  <div class="card card-body">
                    <label for="#">Foto Profil</label>
                    <div class="card card-body">
                      <!-- @if(session('status'))
                        <div class="alert alert-success">
                          {{ session('status') }}
                        </div>
                      @endif -->
                      <form id="uploadImage" method="post" action="{{route('upload')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                          <div class="col-sm-4 gambarProfil"style="text-align:center;">
                            <div class="rounded-circle border" style="height:120px;width:120px;">
                            <img class="img-preview rounded-circle" style="height:120px;width:120px;display: none;" >
                            <p id="namePreview" style="margin-top:40%;">preview img</p>
                          </div>
                          
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                            <!-- <form> -->
                              <input type="file" accept=".png, .jpg, .jpeg" id="image" name="image" onchange="previewImage()" class="@error('image') is-invalid @enderror form-control">
                              @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                              <p class="teks_info">Maksimum 5 MB.
                                <br>
                                Ekstensi file .JPG .JPEG .PNG
                              </p>
                              <div class="row">
                                <div class="col btn-unggah">
                                  <button type="submit" class="btn btn-unggah btn-dark">Unggah</button>
                                </div>
                              </form>
                                <div class="col btn-hapus">
                                  <form id="hapusImage" method="post" action="{{route('hapusImage')}}">
                                  @csrf
                                
                                    <button type="button" onclick="windowConfirmHapusImage();" class="btn btn-outline-dark">Hapus</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                            <!-- </form>
                            <script type="text/javascript">
                              var tm_pilih = document.getElementById('pilih');
                              var image = document.getElementById('image');
                              tm_pilih.addEventListener('click', function () {
                                  image.click();
                              })
                              image.addEventListener('change', function () {
                                  gambar(this);
                              })
                              function gambar(a) {
                                  if (a.files && a.files[0]) {     
                                      var reader = new FileReader();    
                                      reader.onload = function (e) {
                                          document.getElementById('gambar').src=e.target.result;
                                      }    
                                      reader.readAsDataURL(a.files[0]);
                                  }

                              }
                            </script> -->
                          </div>
                          
                        </div>
                      <br>
                    </div><br>
                    <form id="SimpanAkun" action="{{route('editUser')}}" method="post">
                    @csrf
                      <div>
                        <label for="#">Nama Lengkap</label>
                        <input type="text" name="name" id="nama" value="{{ $data->name }}" placeholder="Masukkan Nama Lengkap">
                      </div><br>
                      <div>
                        <label for="#">Nama Perusahaan</label>
                        <input type="text" name="perusahaan" id="perusahaan" value="{{ $data->perusahaan }}" placeholder="Masukkan Nama Perusahaan">
                      </div><br><br>
                      <div class="row">
                        <div class="col">
                          <button type="button" class="btn batal-btn"  name="bSubmit" onclick="deleteInputPengaturanAkun();" id="batal" value="Batal">Batal</buton>
                        </div>
                        <div class="col">
                        <button type="button" class="btn btn-dangerTest" name="bSubmit" onclick="windowConfirmAkun();"  id="simpan"  value="Simpan">Simpan</buton>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>

        <div id="Order2" class="tabcontent"><br>
            <div class="row">
                <div class="col-sm-6">
                  <div class="card card-body">
                    <div>
                      <label for="email">Alamat Email</label>
                      <input type="text" name="email" value="{{ $data->email }}" readonly>
                    </div><br>
                    <div>
                      <label for="nomor">Nomor HP</label>
                      <input type="text" name="handphone"  value="{{ $data->handphone }}"  readonly>
                    </div><br>
                    <div>
                      <p class="text-secondary">**Untuk merubah Alamat Email dan Nomor HP akun anda,
                        Silahkan menghubungi kami <a href="">disini</a>.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div id="Order3" class="tabcontent"><br>
            <div class="row">
                <div class="col-sm-6">
                <form id="ubahPassword" action="{{route('editPassword')}}" method="post">
                      @csrf
                      <div class="card card-body">
                          <div>
                            <label for="oldPassword">Kata Sandi Lama</label>
                            <input type="password" id="passwordLama" name="oldPassword" placeholder="Masukkan Kata Sandi Lama Anda">
                            <span class="text-danger">@error('oldPassword'){{$message}}@enderror</span>
                          </div><br>
                          <div>
                            <label for="newPassword">Kata Sandi Baru</label>
                            <input id="passwordBaru" type="password" name="newPassword" placeholder="Masukkan Kata Sandi Baru Anda">
                            <span class="text-danger">@error('newPassword'){{$message}}@enderror</span>
                          </div><br>
                          <div>
                              <label for="confirmPassword">Ulangi Kata Sandi Baru</label>
                              <input id="konfirmasiPassword" type="password" name="newPassword_confirmation" placeholder="Masukkan Kembali Kata Sandi Baru Anda">
                              <span class="text-danger">@error('newPassword_confirmation'){{$message}}@enderror</span>
                          </div><br><br>
                          <div class="row">
                              <div class="col">
                                <input class="btn batal-btn" name="batal" id="batal" type="button" onclick="batalPassword()" value="Batal">
                              </div>
                              <div class="col">
                                <button type="button" class="btn btn-dangerTest" name="bSubmit" onclick="windowConfirmPassword();"  id="simpan"  value="Simpan">Simpan</buton>
                              </div>
                          </div>
                      </div>
                    </form>

                </div>
            </div>
        </div>

        <div id="Order4" class="tabcontent"><br>
            

                    <div class="tab1">
                        <div class="row">
                            <div class="col-sm-2">
                                <button class="tablinks2" onclick="openTab2(event, 'Order5')" id="defaultOpen2">Alamat Pengirim</button>
                            </div>
                            <div class="col-sm-2">
                                <button class="tablinks2" onclick="openTab2(event, 'Order6')">Alamat Penerima</button>
                            </div>
                        </div>
                    </div>

                    
                      <div id="Order5" class="tabcontent2"><br>
                        <div class="row">
                        <div class="col-sm-5">
                        <div class="scroll">

                          <?php $countUbahAlamat=0; 
                                $countHapusAlamat=0  ?>
                            @foreach ($dataAlamat as $AlamatUser)
                              <div class="card card-body " style="margin-bottom: 15px;">
                                  <h6>{{ $AlamatUser->nama_alamat }}</h6>
                                  <p>{{ $AlamatUser->alamat_lengkap }}, {{ $AlamatUser->city_name }}, {{ $AlamatUser->province_name }},<br>kode pos : {{ $AlamatUser->kodepos }}</p>
                                  <a onclick="ubahAlamat(this.name)" id="btnUbahAlamat" name="<?php print $countUbahAlamat++?>" class="text-bottom">Ubah</a>
                                  @if( $countUbahAlamat>1)
                                  <form id="hapusAlamat<?php print $countHapusAlamat?>" action="{{route('hapusAlamat')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="idAlamat" value="{{ $AlamatUser->id }}">
                                  <a onclick="hapusAlamat(this.name)" id="btnHapusAlamat" name="<?php print $countHapusAlamat++ ?>" class="text-bottom">Hapus</a>
                                  </form>
                                  @endif
                                </div>
                              @endforeach
                        </div>
                              <input name="tambah" id="tambah" href="#" onclick="tambahAlamat()" class="btn btn-dark" type="button" value="+ Alamat Baru">
                        
                        </div>

                        <div class="col-sm-6">
                          <div class="card card-body pertama">
                          <h2 class="text-center mb-4">Alamat Pengirim</h2>
                              <div class="row">
                              <form id="simpanAlamat" action="{{route('editAlamat')}}" method="post">
                                @csrf
                                  <div class="card card-body kedua">
                                      Data alamat yang anda ubah tidak akan merubah alamat pada order yang telah dibuat
                                  </div>
                                  <div class="row">
                                      <input id="S_id" type="hidden" name="idAlamat" value="">
                                  </div>
                                  <div class="row">
                                      <label for="#">Nama Alamat</label>
                                      <input id="S_namaAlamat" type="text" name="namaAlamat" style="resize:none;width:610px;" value="" class="mx-2" placeholder="Contoh: Alamat rumah / kantor / ruko">
                                  </div>
                                  <div class="row">
                                    <label for="#">Alamat Lengkap</label>
                                    <textarea id="S_alamatLengkap" style="resize:none;width:610px;height:100px;border-radius:3px;" class="mx-2" name="alamatLengkap" placeholder="Jl. Sana Sini No.66"></textarea>
                                  </div>
                                  <div class="row">
                                    <label for="#">Provinsi</label>
                                    <input id="S_provinsi" list="provinceList" autocomplete="off"  onChange="getIdProvince();" style="resize:none;width:610px;" class="mx-2" name="provinsi" placeholder="Masukkan Provinsi"></input>
                                    <datalist id="provinceList" >
                                      @foreach ($province as $provinsi => $value)
                                      <option data-value="{{$value}}"  value="{{ $provinsi }}">
                                      @endforeach
                                    </datalist>
                                    <input type="hidden" name="idProvinsi" id="hidenProvinceId">
                                  </div>
                                <div class="row">
                                  <div class="col">
                                    <label for="#">Kabupaten/Kota</label>
                                    <input type="text" id="S_kota" onChange="getIdCity()"  list="cityList" autocomplete="off"  style="background-color:#D3D3D3;" name="kota" value="" placeholder="Masukkan Kabupaten/Kota" readonly>
                                    <datalist id="cityList" ></datalist>
                                    
                                    <input type="hidden" name="idCity" id="hidenCityId">
                                  </div>
                                  <div class="col">
                                    <label for="#">Kode Pos</label>
                                    <input  type="text" autocomplete="off" id="S_kodepos" onkeypress='return event.charCode >= 48 && event.charCode <= 57' style="background-color:#D3D3D3;" name="kodePos" value="" placeholder="Masukkan Kode Pos" readonly>
                                  </div>
                                </div>
                                <div class="row">
                                  <label for="#">Catatan Tambahan</label>
                                  <textarea id="S_catatan" name="catatan" style="resize:none;width:610px;height:100px;border-radius:3px;" class="mx-2" placeholder="Tulis nama gedung, lantai, atau detail alamat lainnya. Contoh: Tower Melati lantai 5."></textarea>
                                </div>
                                <div class="row">
                                  <div class="col mt-4">
                                    <input class="btn batal-btn" name="batal" id="batal" type="button" onclick="tambahAlamat()" value="Batal">
                                  </div>
                                  <div class="col mt-4">
                                    <button type="button" class="btn btn-dangerTest" name="bSubmit" onclick="windowConfirmAlamat();"  id="simpan"  value="Simpan">Simpan Alamat</buton>
                                  </div>
                                </div>
                                </form>
                              </div>
                          </div>
                        </div>
                        </div>
                      </div>

                      <div id="Order6" class="tabcontent2"><br>
                      
                        <div class="row">
                          <div class="col-sm-5">
                            <div class="scroll">

                              @if($alamatPenerima->isEmpty())
                              <div class="card card-body">
                                <h6>Anda Belum Memiliki Alamat</h6>
                                <p>Silahkan tambah alamat anda disini, agar mepermudah pada saat membuat pesanan.</p>
                              </div>
                              @else
                              <?php $countHapusAlamatPenerima=0;
                                    $countUbahAlamatPenerima=0?>
                              @foreach ($alamatPenerima as $AlamatPenerimaU)
                              <div class="card card-body " style="margin-bottom: 15px;">
                              
                                  <h6>{{ $AlamatPenerimaU->nama_alamat }}</h6>
                                  <p>{{ $AlamatPenerimaU->nama_penerima }} / {{ $AlamatPenerimaU->nohp_penerima }}</p>
                                  <p>{{ $AlamatPenerimaU->alamat_lengkap }},{{ $AlamatPenerimaU->province_name }}, {{ $AlamatPenerimaU->city_name }},<br>kode pos : {{ $AlamatPenerimaU->kodepos }}</p>
                                  <a onclick="ubahAlamatPenerima(this.name)" id="btnUbahAlamatP" name="<?php print $countUbahAlamatPenerima++?>" class="text-bottom">Ubah</a>
                                  <form id="hapusAlamatP<?php print $countHapusAlamatPenerima?>" action="{{route('hapusAlamatPenerima')}}" method="post">
                                  @csrf
                                  <input type="hidden" name="idAlamat" value="{{ $AlamatPenerimaU->id }}">
                                  <a onclick="hapusAlamatPenerima(this.name)" id="btnHapusAlamatP" name="<?php print $countHapusAlamatPenerima++ ?>" class="text-bottom">Hapus</a>
                                  </form>
                                </div>
                              @endforeach
                              @endif
                            </div>
                              <input name="tambah" id="tambah" href="#" onclick="tambahAlamatPenerima()" class="btn btn-dark" type="button" value="+ Alamat Baru">
                          </div>

                          <div class="col-sm-6">
                            <div class="card card-body pertama">
                            <h2 class="text-center mb-4">Alamat Penerima</h2>
                                <div class="row">
                                <form id="simpanAlamatP" action="{{route('editAlamatPenerima')}}" method="post">
                                  @csrf
                                    <div class="card card-body kedua">
                                        Pengubahan alamat tidak akan berpengaruh pada alamat yang telah digunakan pada pesanan
                                    </div>
                                    <div class="row">
                                        <input id="S_idP" type="hidden" name="idAlamat" value="">
                                    </div>
                                    <div class="row">
                                      <div class="col">
                                        <label class="mx-1">Nama Penerima</label>
                                        <input type="text" id="S_namaPenerima" onkeyup="getnamaPenerima()" name="namaPenerima" value="" class="mx-1" placeholder="Masukkan Nama Penerima">
                                      </div>
                                      <div class="col">
                                        <label>Nomor HP</label>
                                        <input type="text" id="S_noHpPenerima" name="nomorHandphone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Masukkan nomor HP">
                                      </div>
                                    </div>
                                    <div class="row">
                                        <label class="mx-1">Nama Alamat</label>

                                        <input id="S_namaAlamatP" type="text" name="namaAlamat" style="width:600px;" class="mx-3" value="" placeholder="Contoh: Alamat rumah / kantor / ruko">
                                    </div>
                                    <div class="row">
                                      <label class="mx-1">Alamat Lengkap</label>
                                      <textarea id="S_alamatLengkapP"style="width:600px;height:100px;" class="mx-3" name="alamatLengkap" placeholder="Jl. Sana Sini No.66"></textarea>
                                    </div>
                                    <div class="row">
                                    <label for="#">Provinsi</label>
                                    <input id="S_provinsiP" list="provinceListP" autocomplete="off"  onChange="getIdProvinceP();" autocomplete="off"  style="resize:none;width:610px;" class="mx-2" name="provinsiP" placeholder="Masukkan Provinsi"></input>
                                    <datalist id="provinceListP" >
                                      @foreach ($province as $provinsi => $value)
                                      <option data-value="{{$value}}"  value="{{ $provinsi }}">
                                      @endforeach
                                    </datalist>
                                    <input type="hidden" name="idProvinsiP" id="hidenProvinceIdP">
                                  </div>
                                    
                                  <div class="row">
                                    <div class="col">
                                      <label class="mx-1">Kabupaten/Kota</label>

                                      <input type="text" id="S_kotaP" list="cityListP" name="kota" class="mx-1" value="" onChange="getIdCityP();" autocomplete="off"  placeholder="Masukkan Kota" style="background-color:#D3D3D3;" readonly>
                                      <datalist id="cityListP" >
                                      </datalist>
                                      <input type="hidden" name="idCityP" id="hidenCityIdP">
                                    </div>
                                    <div class="col">
                                      <label for="#">Kode Pos</label>

                                      <input class="" type="text" id="S_kodeposP" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="kodePos" value="" placeholder="Masukkan Kode Pos" autocomplete="off" style="background-color:#D3D3D3;" readonly>

                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="mx-1">Catatan Tambahan</label>

                                    <textarea id="S_catatanP" name="catatan" style="width:600px;height:100px;border-radius:3px;" class="mx-3" placeholder="Tulis nama gedung, lantai, atau detail alamat lainnya. Contoh: Tower Melati lantai 5."></textarea>

                                  </div>
                                  <div class="row">
                                    <div class="col mt-4">
                                      <input class="btn batal-btn" name="batal" id="batal" type="button" onclick="tambahAlamatPenerima()" value="Batal">
                                    </div>
                                    <div class="col mt-4">
                                      <button type="button" class="btn btn-dangerTest" name="bSubmit" onclick="windowConfirmAlamatP();"  id="simpan"  value="Simpan">Simpan Alamat</buton>
                                    </div>
                                  </div>
                                  </form>
                                </div>
                            </div>
                          </div>
                        </div>
                      </d iv>
            </div>

            <script>
                function openTab2(evt2, tabName2) {
                  var j, tabcontent2, tablinks2;
                  tabcontent2 = document.getElementsByClassName("tabcontent2");
                  for (j = 0; j < tabcontent2.length; j++) {
                    tabcontent2[j].style.display = "none";
                  }
                  tablinks2 = document.getElementsByClassName("tablinks2");
                  for (j = 0; j < tablinks2.length; j++) {
                    tablinks2[j].className = tablinks2[j].className.replace(" active", "");
                  }
                  document.getElementById(tabName2).style.display = "block";
                  evt2.currentTarget.className += " active";
                }
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen2").click();
            </script>

            <script>
                function openTab(evt, tabName) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(tabName).style.display = "block";
                  evt.currentTarget.className += " active";
                }
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>

<script>
  function getIdProvince(){
  const name = document.querySelector('#S_provinsi').value;
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
    document.querySelector('#S_kota').removeAttribute('readonly');
    document.querySelector('#S_kota').style.removeProperty("background-color")
  }else{
    document.querySelector('#S_kota').setAttribute('readonly', true);
    document.querySelector('#S_kota').value="";
    document.querySelector('#S_kota').style.backgroundColor = "#D3D3D3";
    document.querySelector('#S_kodepos').setAttribute('readonly', true);
    document.querySelector('#S_kodepos').value="";
    document.querySelector('#S_kodepos').style.backgroundColor = "#D3D3D3";
  }
  document.getElementById('cityList').innerHTML = options;
  }

  function getIdCity(){
  const name = document.querySelector('#S_kota').value;
  const id = document.querySelector('#hidenCityId');
  const list = document.querySelector('#cityList');
  var con = true;
  for (i = 0; i < list.options.length; i++) {
    if (list.options[i].value.toLowerCase()==name.toLowerCase()){
      id.value = list.options[i].getAttribute('data-value');
      document.querySelector('#S_kodepos').removeAttribute('readonly');
      document.querySelector('#S_kodepos').style.removeProperty("background-color")
      con=false;
    }
  }
  if(con){
      document.querySelector('#S_kodepos').setAttribute('readonly', true);
      document.querySelector('#S_kodepos').value="";
      document.querySelector('#S_kodepos').style.backgroundColor = "#D3D3D3";
    }
  }

  function getIdProvinceP(){
  const name = document.querySelector('#S_provinsiP').value;
  const id = document.querySelector('#hidenProvinceIdP');
  const list = document.querySelector('#provinceListP');
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
    document.querySelector('#S_kotaP').removeAttribute('readonly');
    document.querySelector('#S_kotaP').style.removeProperty("background-color")
  }else{
    document.querySelector('#S_kotaP').setAttribute('readonly', true);
    document.querySelector('#S_kotaP').value="";
    document.querySelector('#S_kotaP').style.backgroundColor = "#D3D3D3";
    document.querySelector('#S_kodeposP').setAttribute('readonly', true);
    document.querySelector('#S_kodeposP').value="";
    document.querySelector('#S_kodeposP').style.backgroundColor = "#D3D3D3";
  }
  document.getElementById('cityListP').innerHTML = options;
  }

  function getIdCityP(){
  const name = document.querySelector('#S_kotaP').value;
  const id = document.querySelector('#hidenCityIdP');
  const list = document.querySelector('#cityListP');
  var con = true;
  for (i = 0; i < list.options.length; i++) {
    if (list.options[i].value.toLowerCase()==name.toLowerCase()){
      id.value = list.options[i].getAttribute('data-value');
      document.querySelector('#S_kodeposP').removeAttribute('readonly');
      document.querySelector('#S_kodeposP').style.removeProperty("background-color")
      con=false;
    }
  }
  if(con){
      document.querySelector('#S_kodeposP').setAttribute('readonly', true);
      document.querySelector('#S_kodeposP').value="";
      document.querySelector('#S_kodeposP').style.backgroundColor = "#D3D3D3";
    }
  }

  function getnamaPenerima(){
    var name = document.getElementById('S_namaPenerima');
    var nama = name.value;
    name.value = nama.toLowerCase();
  }
</script>
</body>
</html>