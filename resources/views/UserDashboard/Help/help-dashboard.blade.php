<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HELP | Shipper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/help.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <script src="js/dashboard.js"></script>

</head>
  <body>
    <div class="container-fluid min-vh-0 py-2">
        <div class="row border-bottom">
          @include('partials.userHamburgerMenu')

        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="mt-2" style="font-color:black;"><b>Pusat Bantuan</b><p class="h6 text-secondary mt-2">Temukan jawaban terkait masalah Anda</p> </h1>
            
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

      @if(Session::has('success'))
      <div class="alert alert-success mt-2">
      {{ Session::get('success') }}
      </div>
      @endif      

            <div class="row">
                <div class="col-sm-8">
                    <div class="card card-body text-center">
                            <!--<input class="search" type="text" name="search" placeholder="Ketik topik disini..">-->
                            <h2><b>Bagaimana kami dapat membantu Anda?</b></h2>
                    </div></br>

                    <div class="card card-body text-center">
                        <h5>Menggunakan Shipper</h5>

                        <div class="bantuan">
                            <div class="card shadow up" style="width: 190px;" style="width: 8rem;">
                            <a href="/help/create-order" style="text-decoration: none"> 
                                <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-box-black.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Cara Buat Order Baru</p>
                                </div>
                            </a>
                            </div>

                            <div class="card shadow up" style="width: 190px;" style="width: 8rem;">
                            <a href="/help/create-pickup" style="text-decoration: none"> 
                                <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-delivery-no-box.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Cara Ajukan Penjemputan</p>
                                </div>
                            </a>
                            </div>
                            
                            <div class="card shadow up" style="width: 190px;" style="width: 8rem;">
                            <a href="/help/report" style="text-decoration: none">
                                <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-user-report.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Cara Melihat Laporan</p>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                    </br>
                
                    <div class="card card-body text-center">
                        <h5>Topik dan Produk</h5>
                        <div class="bantuan2">
                            <div class="card shadow up"  style="width: 140px;" style="width: 6rem;">
                            <a href="/faq-umum" style="text-decoration: none">    
                            <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/help-general-icon.svg" class="card-img-2" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Umum</p>
                                </div>
                            </a>
                            </div>

                            <div class="card shadow up"  style="width: 140px;" style="width: 6rem;">
                            <a href="/faq-jasa-pengiriman" style="text-decoration: none">     
                            <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/help-courier-icon.svg" class="card-img-2" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Jasa Pengiriman</p>
                                </div>
                            </a>
                            </div>
                            
                            <div class="card shadow up"  style="width: 140px;" style="width: 6rem;">
                            <a href="/faq-mitra" style="text-decoration: none">     
                            <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/help-mitra-icon.svg" class="card-img-2" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">MItra</p>
                                </div>
                            </a>
                            </div>

                            <div class="card shadow up"  style="width: 140px;" style="width: 6rem;">
                            <a href="/faq-api" style="text-decoration: none">     
                            <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/help-api-icon.svg" class="card-img-2" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-dark">Api</p>
                                </div>
                            </a>
                            </div>

                    </div>

                    
                    </div></br>

<section>
        <div class="text-center">
            <br><h5>Yang Sering Ditanyakan</h5><br>
        </div>    

        <div class="accordion" id="accordionPanelsStayOpenExample">

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOneQ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOneQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseOneQ">
                  Apa itu Shipper?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOneQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOneQ">
                <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Shipper merupakan perusahan startup yang bergerak di bidang agregator logistik. Kami “menghubungkan” para penjual (merchant) dengan penyedia jasa logistik (third party logistic-3PL). Jadi, Anda tidak perlu lagi datang ke agen logistik saat akan mengirimkan barang. Anda hanya perlu membuat order melalui Shipper.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwoQ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwoQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwoQ">
                  Apa itu agen Shipper?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwoQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwoQ">
                <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Agen Shipper merupakan individu maupun pelaku UMKM yang berlaku sebagai perpanjangan tangan Shipper untuk melakukan pickup kepada customer dan pemrosesan paket di sistem Shipper.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThreeQ">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThreeQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseThreeQ">
                  Bagaimana cara cetak label/resi?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThreeQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThreeQ">
                <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Setelah membuat pesanan, silakan pilih menu “Pesanan Tertunda” Klik “1 Order” pada order yang ingin dicetak resinya Klik ikon segitiga terbalik di tombol cetak Pilih “Cetak Resi” untuk mencetak resi atau pilih “Cetak Label” untuk mencetak label.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFourQ">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFourQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseFourQ">
                    Apa itu jasa pengiriman Shipper?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFourQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFourQ">
                  <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Jasa pengiriman Shipper merupakan layanan pengiriman dari Shipper yang menghubungkan merchant/pebisnis online dengan berbagai agen logistik. Jasa pengiriman Shipper memudahkan segala urusan logistik Anda. Mulai dari layanan perbandingan ongkos kirim, penjemputan barang, pengiriman barang multi ekspedisi, lacak pesanan, hingga dukungan tim CS untuk klaim barang hilang, semua tersedia di jasa pengiriman Shipper.</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFiveQ">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFiveQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseFiveQ">
                    Bagaimana cara menjadi Mitra Shipper?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseFiveQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFiveQ">
                  <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Lengkapi form pendaftaran di link ini: (pendaftaran Mitra Shipper) Jika lolos verifikasi, tim kami akan menghubungi Anda Selanjutnya, kami akan memberikan pelatihan untuk Anda mitra baru.<p>
                  </div>
                </div>
            </div>

			<div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSixQ">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSixQ" aria-expanded="false" aria-controls="panelsStayOpen-collapseSixQ">
                    Apa saja keuntungan menjadi Agen Shipper?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseSixQ" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSixQ">
                  <div class="accordion-body text-secondary">
                    <p style="font-size:14px">Investasi gratis, cuan berlapis-berlapis: tidak perlu modal sama sekali dengan prospek pendapatan luas karena dapat memproses paket dari berbagai macam pilihan kurir ekspedisi/3PL. Didukung dengan sistem canggih yang dapat melakukan tracking paket dari berbagai kurir ekspedisi/3PL Dukungan penuh dari Tim Shipper dalam menjalankan kegiatan operasional Komunitas Agent Shipper untuk memperluas peluang bisnis</p>
                  </div>
                </div>
            </div>
			  
        </div>
</section>

                    <div class="card card-body text-center">
                        <h5>Hubungi Kami</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card card-body text-center">

                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="logo-email">
                                                <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-mail.svg" class="card-img-logo" alt="...">
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="wa">
                                                <p class="h6 text-secondary">Kirim pesan melalui Email</p>
                                            </div>
                                        </div>

                                        <div class="col-sm mt-2">
                                            <b><p style="font-size: 15px"><a href="#" style="text-decoration: none">Kirim</a></p></b>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card card-body text-center">

                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="logo-email">
                                                <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-whatsapp.svg" class="card-img-logo" alt="...">
                                            </div>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="wa">
                                                <p class="h6 text-secondary">Kirim pesan melalui Whatsapp</p>
                                            </div>

                                        </div>

                                        <div class="col-sm mt-2">
                                            <b><p style="font-size: 15px"><a href="#" style="text-decoration: none">Kirim</a></p></b>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div></br>

                </div>

              

                <div class="col-sm-4">
                  <div class="card card-body">
                    <h3 class = "text-center">Sampaikan pertanyaan Anda</h3>
                    <p class = "text-center">Kami selalu siap memberikan jawaban & bantuan</p>
                    <form method="post" action="contact">
                      @csrf
                      <label class="mt-4">Nama Lengkap</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama lengkap anda" name="name" value="{{ $data->name }}">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label class="mt-4">Nomor Ponsel Anda</label>
                      <input type="number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Contoh : 08xxxx" name="phone_number" value="{{ $data->handphone }}">
                      @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label class="mt-4">Email Anda</label>
                      <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Contoh : abc@xxx.com" name="email" value="{{ $data->email }}">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <label class="mt-4">Pesan/Pertanyaan</label>
                      <textarea class="form-control textarea @error('message') is-invalid @enderror" style="height: 100px" placeholder="Contoh : Apakah saya ganteng?" name="message"></textarea>
                      @error('message')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                      <!-- Submit button -->
                      <div class="row justify-content-center">
                      <button style="width:auto"; type="submit" class="btn btn-danger btn-lg btn-block mt-4">Kirim</button>
                      </div>
                    </form>
                  </div>

                  <div class="card card-body mt-4">
                    <h1><b><i>SHIPPER</b></i></h1>
                    <h6 class="mt-5">&copy; 2022 Magang, Project. All rights reserved.</h6>
                  </div>

                </div>

                
                <!--
                <div class="col-sm-4">
                    <div class="card card-body text-center">
                        <h6>Tiket Saya</h6>
                        <p class="h6 text-secondary">Anda tidak memiliki tiket aktif</p></br>
                    </div></br>
                    <div class="card card-body text-center">
                        <h6>Buat Tiket Baru</h6>
                        <div class="card card-body text-center">
                            <p class="h6 text-secondary">Apakah anda memiliki order yang bermasalah</p>
                            <div class="row">
                            
                                <div class="col-auto">
                                <input type="radio"  name="aorb" onClick="showAB()" checked> Ya
                                </div>

                                <div class="col">
                                <input type="radio"  name="aorb" onClick="hideAB()"> Tidak
                                </div>
                    
                            </div>
                        </div></br>
                        
                        <form class="tabtiket">
                            <label id="A" class="tik-1" for="pilorder">Pilih Order</label>
                            <input id="B" class="tiket" type="text" name="fname" placeholder="Pilih Order Bermasalah">
                            <label class="tik-1" for="toptiket">Topik Tiket</label>
                            <input class="tiket" type="text" id="toppaket" name="" placeholder="Ketik Topik Tiket Disini">
                            <label class="tik-1" for="lname">Detail Tiket</label>
                            <input class="tiket" type="text" id="dettiket" name="lname" placeholder="Ketik Masalah yang Anda Alami secara detail disini">
                        </form>

                            <div class="upload">
                                <p>Upload File<p>
                                <form>
                                    <input type="file" name="upload_gambar">
                                </form></br>

                                <div class="card bg-light" style="width: 100%" style="width: 6rem;">
                                        <ul>
                                            <li >Format foto .jpg .jpeg .png ukuran maks. 10MB</li>
                                            <li>Format video .mp4 .mkv .mov ukuran maks. 10MB</li>
                                        </ul>
                                </div>

                            </div>
                        </div>

                    </div>-->
                </div>
            </div>
        </main>
    </div>

    <script language="Javascript">
        function hideAB()
        {
            document.getElementById("A").style.color="gray"; 
            document.getElementById("B").disabled=true; 
        }

        function showAB()
        {
            document.getElementById("A").style.color="black"; 
            document.getElementById("B").disabled=false;  
        }
    </script>

</body>
</html>