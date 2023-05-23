<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!--Bootstrap5.css Bentrok sama JQuerry.js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap5.css Bentrok sama JQuerry.js-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />


    <link  rel="stylesheet" href="{{asset('css/imageListBox.css')}}" type="text/css">
    <link  rel="stylesheet" href="{{asset('css/default.css')}}" type="text/css" >
    <link  rel="stylesheet" href="{{asset('css/min-widthBody.css')}}" type="text/css">
    <link  rel="stylesheet" href="{{asset('css/hideText.css')}}" type="text/css">
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/path/to/autocomplete.js"></script>

    <script src="{{asset('js/scrollAnimation.js')}}"></script>
<link  rel="stylesheet" href="{{asset('css/scrollAnimation.css')}}" type="text/css">
    <title>Home</title>
</head>
<body style="background-color:white;">

<!--Header-->
<header>
    @include('partials.navTopDark')
</header>
<main style="background-color:white;" >
<!--Carousell (Gambar Gerak)-->
<section>
        <div>
            <div id="slide_img" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slide_img" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#slide_img" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#slide_img" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#slide_img" data-bs-slide-to="3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="gambar brightness">
                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/home-banner-1.webp" alt="Image 1" class="d-block gambar center " >
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <h3>Bebas kirim tanpa batas</h3>
                        <p>Bebas pilih jasa exspedisi dan bebas biaya penjemputan paket tanpa minimum order.</p>
                        <a href="https://play.google.com/store/apps/details?id=id.shipper.bos" target="_blank">
                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/badge-shipper-app-id.png" alt="shipper app badge" class="playstoreImg">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gambar brightness">
                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/home-banner-3.webp" alt="Image 2" class="d-block gambar center " >
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <h3>Jemput paket GRATIS tanpa harus minimum order</h3>
                        <p>Bebas kirim paket dari mana saja, Shipper akan selalu siap menjemput paket anda tanpa tambahan biaya.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="gambar brightness">
                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/home-banner-4.webp" alt="Image 2" class="d-block gambar center" >
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <h3>Menghubungkan Anda dengan jasa ekspedisi terbaik</h3>
                        <p>Bebas pilih jasa ekspedisi favorit dan dapatkan rekomendasi ongkir terbaik sesuai kebutuhan Anda.</p>
                    </div> 
                </div>
                <div class="carousel-item" >
                    <div class=" brightness">
                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/home-banner-2.webp" alt="Image 3" class="d-block gambar center" >
                    </div>
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <h3>Hidup lebih bebas dengan Shipper</h3>
                        <p>Shipper memberikan kebebasan untuk melakukan hal yang Anda sukai.</p>
                    </div>  
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#slide_img" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slide_img" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            </div>
        </div>
</section>

<!--Cari Pengiriman & Logo-->
<section>
    <div class="container size layout" >
        <div class="card shadow">
            <div class="card-body">
                   <form action="/tarif-pengiriman" method="post" >
                    @csrf
                   <div class="row">
                        <div class="col-sm">
                            <label>Asal Pengiriman</label>
                            <input required="required"  class="form-control kota-asal" list="datalistOptions" placeholder="Masukkan Nama Kota" name="city_origin">
                            <datalist id="datalistOptions" >
                                @foreach ($cities as $city => $value)
                                <option  value="{{ $city }}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col-sm">
                            <label>Tujuan Pengiriman</label>
                            <input required="required"  class="form-control kota-tujuan" list="datalistOptions1"  placeholder="Masukkan Nama Kota" name="city_destination">
                                <datalist id="datalistOptions1" >
                                    @foreach ($cities as $city => $value)
                                    <option  value="{{$city}}" >
                                    @endforeach
                                </datalist>
                        </div>
                        <div class="col-sm">
                            <label>Berat (Gram)</label>
                            <input required="required"  type="number" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="1000" name="weight">
                        </div>
                        <div class="col">
                        <label></label>
                        <button type="submit" id="cekOngkirBtn"  class="form-control btn-danger" style="color:white;"  >Cari</button>
                        </div>
                    </div>
                   </form>
            </div>
        </div>
    </div>

    
        <div class ="container layout" style="background-color:white;">
            <div id="slide_img2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators" style="margin-bottom:0;">
                    <button style = "background-color:gray;" type="button" data-bs-target="#slide_img2" data-bs-slide-to="0" class="active"></button>
                    <button style = "background-color:gray" type="button" data-bs-target="#slide_img2" data-bs-slide-to="1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="gambar2">
                            <div class="row row-cols-5 ">
                                <div class="col ">
                                     <img src="https://global-cdn.shipper.id/images/png/logistic/gosend.240x90.png" alt="Image 1" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/lion-parcel.240x90.png" alt="Image 2" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/jnt.240x90.png" alt="Image 3" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/sicepat.240x90.png" alt="Image 4" class="d-block center gambarkurir">
                                 </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/dpex.240x90.png" alt="Image 5" class="d-block center gambarkurir">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="gambar2">
                            <div class="row row-cols-5 ">
                                <div class="col ">
                                     <img src="https://global-cdn.shipper.id/images/png/logistic/grab.240x90.png" alt="Image 1" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/indah-cargo.240x90.png" alt="Image 2" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/sap-express.240x90.png" alt="Image 3" class="d-block center gambarkurir">
                                </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/alfatrex.240x90.png" alt="Image 4" class="d-block center gambarkurir">
                                 </div>
                                <div class="col">
                                    <img src="https://global-cdn.shipper.id/images/png/logistic/tiki.240x90.png" alt="Image 5" class="d-block center gambarkurir">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>

<!--Keuntungan-->
<section      >
        <div class="text_">
            <h2>Keuntungan Menggunakan Kami</h2>
            <p class="space">Nikmati kemudahan bebas kirim barang tanpa batas</p>
            <div class="container">
                <div class="text-container" style="  align-items: center;">
                    <div class="text-box boxSmall reveal fade-bottom" >
                        <div class="up">
                            <img class= "gambar3 " src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-best-price.svg" alt="image 1">
                        </div>
                        <div>
                            <h4>Tarif Terbaik</h4>
                            <p class="space">Temukan Tarif ekspedisi terbaik dan otomatis cashback ongkir</p>
                        </div>
                    </div>
                    <div class="text-box boxSmall reveal fade-bottom" >
                        <div class="up">    
                                <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-free-cost.svg" alt="image 2">
                            </div>
                            <div>
                                <h4>Gratis Jemput Paket</h4>
                                <p class="space">Berapapun kiriman paketnya, kami jemput tanpa dipungut biaya</p>
                            </div>
                    </div>
                    <div class="text-box boxSmall reveal fade-bottom" >
                        <div class="up">
                                <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-wide-area.svg" alt="image 3">
                            </div>
                            <div>
                                <h4>Jangkauan Luas</h4>
                                <p class="space">Kirim barang ke manapun di Indonesia & seluruh dunia</p>
                            </div>
                    </div>
                    <div class="text-box boxSmall reveal fade-bottom" >
                    <div class="up">
                                <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-efficient-dashboard.svg" alt="image 4">
                            </div>
                            <div>
                                <h4>Dashboard efisien</h4>
                                <p class="space">Cek tarif, lacak pengiriman, dan buat order baru, semua dalam satu platform</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!--Jadwalkan Pengiriman & Button Mulai Pengiriman-->
<section>
        <div style="background-color:lightgray;" >
            <div class="text_ layout">
                <h2 >Jadwalkan Pengiriman Sendiri</h2>
                <p >Proses pengiriman barang anda sendiri dan beragam pilihan ekspedisi terpercaya dengan tarif terbaik</p>
                <div class="container">
                    <div class="text-container" style="  align-items: center;">
                        <div class="text-box boxBig reveal fade-left  shadow up" >
                                <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-process-login.svg" alt="image 1">
                                <div>
                                    <h4>Buat/Masuk ke Akun Anda</h4>
                                    <p>Buat/Masuk ke akun Anda untuk memulai Pengiriman.</p>
                                </div>
                            <span class="circle2">1</span>
                        </div>
                        <div class="text-box boxBig reveal fade-left  shadow up" >
                            <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-process-check-price.svg" alt="image 2">
                            <div>
                                <h4>Temukan Tarif Terbaik</h4>
                                <p>Cek dan pilih ekspedisi terbaik sesuai kebutuhan Anda.</p>
                            </div>    
                            <span class="circle2">2</span>
                        </div>
                        <div class="text-box boxBig reveal fade-left  shadow up" >
                            <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-process-pickup.svg" alt="image 3">
                            <div>
                                <h4>Jadwalkan Penjemputan</h4>
                                <p>Kurir Shipper akan mengambil paket sesuai jadwal yang dipilih.</p>
                            </div>
                            <span class="circle2">3</span>
                        </div>
                    </div>
                </div>
                <div class="space">
                    <p style="font-size:22px">Tenang saja kami yang urus pengirimannya</p>
                    <a href="/login" ><button onclick ="" type="button" style="background-color:#dc3545" class="btn text-white active space"  onmouseover="this.style.background='#b52a38'" onmouseout="this.style.background='#dc3545'" >Mulai Mengirim</button></a>
                </div>
            </div>
        </div>
</section>

<!--Berbagai Solusi-->
<section>
        <div style="background-color:white;">
            <div class="text_">
                <h2>Berbagai solusi untuk berbagai kebutuhan</h2>
                <p>Kami memiliki berbagai solusi sesuai kebutuhan logistik perusahaan Anda</p>
                <div class="container " >
                <div class="text-container" style="align-items: center;">
                    <div class="text-box boxMedium reveal fade-right shadow up" >
                        <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-shipping.svg" alt="image 1">
                        <div>
                            <h4>Pengiriman</h4>
                            <p>Layanan pengiriman mudah dengan penjemputan gratis</p>
                        </div>
                    </div>
                    <div class="text-box boxMedium reveal fade-right shadow up" >
                        <img class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-managing-storage.svg" alt="image 2">
                        <div>
                            <h4>Manajemen gudang</h4>
                            <p>Solusi manajemen inventaris pergudangan, dan operasional logistik</p>
                        </div>
                    </div>
                    <div class="text-box boxMedium reveal fade-right shadow up" >
                        <img  class= "gambar3" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-api-integration.svg" alt="image 3">
                        <div>
                            <h4>Integrasi API</h4>
                            <p>Mengintegrasikan platform Anda dengan layanan Shipper</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container layout">
                <div class="text_ space">
                    <h4>Agregator Logistik & Warehouse Terpercaya</h4>
                    <div class="text-secondary">
                        <p>Shipper adalah salah satu agregator logistik & warehouse di Indonesia yang menyediakan jasa pengiriman barang serta sewa gudang terpercaya. Memiliki tagline “Bebas Pilih Tanpa Batas” Shipper bisa dijadikan solusi pengiriman barang dan jasa pergudangan yang praktis, aman, dan nyaman untuk memenuhi kebutuhan bisnis Anda.</p>
                    </div>
                </div>
                <div class="text_ space">
                    <h4>Keuntungan Memakai Jasa Pengiriman Shipper</h4>
                    <div class="text-secondary">
                        <p>Shipper sebagai jasa pengiriman barang memungkinkan Anda untuk melakukan cek ongkir berbagai jasa ekspedisi melalui website ataupun aplikasi Shipper. Hanya dengan 1 klik, Shipper akan memberikan rekomendasi ongkir penyedia jasa ekspedisi dan Anda bebas memilih sesuai dengan kebutuhan Anda.</p>
                        <p>Anda pun tidak perlu repot keluar rumah untuk kirim paket, serahkan semuanya kepada Shipper yang merupakan jasa pengiriman terpercaya. Kurir Shipper siap jemput paket Anda gratis tanpa minimum order sehingga Anda bebas kirim paket dari mana saja tanpa biaya tambahan. Selain itu, Anda juga bisa memilih berbagai macam jasa ekspedisi murah yang tersedia di Shipper untuk pengiriman paket dan pengiriman barang Anda, mulai dari JNE, SiCepat, Anteraja, J&T, Pos Indonesia, Lion Parcel, TIKI, Indah Cargo, Wahana, Pahala Express atau Pahala Kencana, Pandu Logistic, SAP Express hingga Ninja Express. Pengiriman paket jadi mudah karena melalui Shipper Anda bisa melakukan pengiriman JNE atau kirim paket JNE, pengiriman J&T atau kirim paket J&T, pengiriman SiCepat atau kirim paket SiCepat, pengiriman AnterAja atau kirim paket AnterAja, pengiriman Pos Indonesia atau kirim paket Pos Indonesia, pengiriman Lion Parcel atau kirim paket Lion Parcel, pengiriman TIKI atau kirim paket TIKI, pengiriman Indah Cargo atau kirim paket Indah Cargo, pengiriman Wahana atau kirim paket Wahana, pengiriman Pahala Express atau kirim paket Pahala Express, pengiriman Pahala Kencana atau kirim paket Pahala Kencana, pengiriman Pandu Logistic atau kirim paket Pandu Logistic, pengiriman SAP Express atau kirim paket SAP Express, pengiriman Ninja Express atau kirim paket Ninja Express. Kirim paket dan kirim barang jadi beragam pilihan, lebih mudah bagi Anda dalam menentukan jasa ekspedisi terbaik dan jasa ekspedisi termurah di Indonesia.</p>
                        <p>Selain itu, Shipper juga sudah terintegrasi dengan jasa ekspedisi di dalam dan ekspedisi luar negeri, Shipper yang merupakan jasa ekspedisi Indonesia dan jasa kirim paket atau jasa kirim barang memiliki jangkauan pengiriman yang luas di seluruh Indonesia hingga mancanegara untuk kirim paket atau kirim barang ke luar negeri atau hanya sekedar cek ongkir ke luar negeri. Melalui Shipper yan merupakan jasa pengiriman luar negeri, Anda bisa menemukan ekspedisi luar negeri termurah atau sekedar mengetahui biaya kirim paket ke luar neger dan cek ongkir ke luar negeri. Pengiriman barang ke luar negeri atau pengiriman paket ke luar negeri jadi lebih mudah karena Anda dapat melakukan pengiriman paket ke luar negeri, kirim dokumen ke luar negeri, kirim surat ke luar negeri.</p>
                        <p>Selain itu, Shipper juga menyediakan berbagai macam pilihan pengiriman yang lengkap, mulai dari pengiriman reguler hingga cashless dari marketplace. Hal ini menjadikan Shipper sebagai jasa ekspedisi terbaik & ekspedisi termurah di Indonesia yang membuat cara kirim paket jadi mudah serta pengiriman paket dan pengiriman barang jadi lebih murah.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
</main>
<!--Footer-->
<footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
</footer>


</body>
</html>