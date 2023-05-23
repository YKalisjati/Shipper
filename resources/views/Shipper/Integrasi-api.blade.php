<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrasi API</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/checkbox.css" rel="stylesheet">
    <link href="css/imageListBox.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <link href="css/min-widthBody.css" rel="stylesheet">
    <script src="js/default.js"></script>
    <script src="js/integrasi.js"></script>
    <link href="css/integrasi-api.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <style>
        #moreafter {display: none;}
    </style>
    

</head>
<body style="background-color:white;">
<header>
@include('partials.navTopDark')
</header>


    <main >

    <section>
            <div class = "col-sm-12" style="height:550px;">
                <div>
                    <div class="gambar ">
                        <img style="height:550px; width: 100%;"src="https://shipper.id/_next/image?url=https%3A%2F%2Fassets-cdn.shipper.id%2Fshipper-id-v6-web%2Fv6.0.6-alpha1%2Fassets%2Fimages%2Fapi-integration%2Fbanner-mobile.jpg&w=1920&q=75" alt="Image 1" class="imageCenter d-block " >
                    </div>
                    <div class="text_centerImg" style="top:200px;">
                            <h1>SHIPPER API</h1>
                            <p>Hubungkan situs Anda ke API Shipper dan hubungkan dengan banyak kurir seketika</p>
                            <button style="background-color:#dc3545;"onClick="document.getElementById('langganan').scrollIntoView();" type="button" class="btn btn-danger active btnImg "  onmouseover="this.style.background='#b52a38'" onmouseout="this.style.background='#dc3545'" >Dapatkan Info Berlangganan</button>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container text_ layout" >
            <div>
                <h2>Inilah Kemudahan Dengan Shipper API</h2>
                <p>Segala yang Anda butuhkan soal pengiriman, ada di Shipper API</p>
            </div>
            <div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item"> 
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button id="btn1" onclick="idbtn1()" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <div class="row">
                                <div class="col imgIntegrasiBox"><img id="img1" class="imgIntegrasi" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/api-benefits-1.svg" alt="" style="-webkit-filter: grayscale(100%);filter: grayscale(100%);"></div>
                                <div class="col"><b class="textIntegrasi">Terintegrasi banyak ekspedisi</b></div>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" >
                            <div class="accordion-body text-justify">Berbagai ekspedisi kami hadirkan sesuai dengan kebutuhan pengiriman Anda dan dapat diakses dalam satu platform. Mulai dari yang tercepat, termurah, hingga terdepan, semua tersedia dan gratis untuk Anda pilih. Pengiriman via Shipper dijamin aman
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button id="btn2" onclick="idbtn2()" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <div class="row">
                                <div class="col imgIntegrasiBox"><img id="img2" class="imgIntegrasi" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/api-benefits-6.svg" alt=""  style="-webkit-filter: grayscale(100%);filter: grayscale(100%);"></div>
                                <div class="col"><b class="textIntegrasi">Tarif Terbaik</b></div>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" >
                            <div class="accordion-body">Beragam pilihan tarif terbaik untuk segala kebutuhan pengiriman Anda. Bandingkan tarifnya secara real-time dan temukan yang sesuai untuk Anda. Lalu saatnya mulai pengiriman ke seluruh Indonesia!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button id="btn3" onclick="idbtn3()" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <div class="col imgIntegrasiBox"><img id="img3" class="imgIntegrasi" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/api-benefits-3.svg" alt=""  style="-webkit-filter: grayscale(100%);filter: grayscale(100%);"></div>
                                <div class="col"><b class="textIntegrasi">Penjemputan paket gratis</b></div>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" >
                            <div class="accordion-body">Driver kami siap menjemput berapapun paketnya ke lokasi Anda sesuai jadwal yang dipilih, gratis! Sehingga Anda bisa fokus mengerjakan hal penting lainnya.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                        <button id="btn4" onclick="idbtn4()" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                            <div class="col imgIntegrasiBox"><img id="img4" class="imgIntegrasi" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/api-benefits-2.svg" alt=""  style="-webkit-filter: grayscale(100%);filter: grayscale(100%);"></div>
                                <div class="col"><b class="textIntegrasi">Pembuatan label pengiriman secara mudah</b></div>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" >
                            <div class="accordion-body">Kemudahan membuat dan mencetak label pengiriman dengan sistem, tanpa harus tulis manual lagi. Label pengiriman tersebut bisa langsung Anda tempelkan ke setiap paket pengiriman.Lebih praktis dan menghemat waktu Anda.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                        <button id="btn5" onclick="idbtn5()"class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                            <div class="row">
                                <div class="col imgIntegrasiBox"><img id="img5" class="imgIntegrasi" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/api-benefits-1.svg" alt=""  style="-webkit-filter: grayscale(100%);filter: grayscale(100%);"></div>
                                <div class="col"><b class="textIntegrasi">Lacak dan kelola Pengiriman</b></div>
                            </div>
                        </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" >
                            <div class="accordion-body">Solusi pelacakan terupdate dan akurat dari dashboard Shipper. Ketahui posisi paket dengan mudah hanya dengan input no. resi. Adanya kemudahan pantau pengiriman secara real-time. Kami juga kirimkan notifikasi terkait status terkini paket Anda.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container layout">
            <div class= "text_">
                <h2 >Semua kurir yang Anda butuhkan</h2>
                <p>Kami terhubung dengan layanan kurir terbaik di Indonesia, dan terus bertambah</p>
            </div>
            <div>
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
            </div>
        </div>
    </section>


    <section>
        <div class="container layout">
            <div class="text_ space" id="langganan">
                <h2>Pilih Paket Berlangganan</h2>
                <p>Pilih paket berlangganan sesuai kebutuhan anda</p>
            </div>
            <div >
                <div class="row row-cols-2" >
                    <div class="col widthCard centerTable">
                        <div class="card shadow text-dark  ">
                            <div class="card-body topStarter text_ marginLR">
                                    <h2 class="space-1">Starter</h2>
                                    <p>Untuk Anda yang memiliki website / e-commerce dengan order sebanyak 500-1,500 orders per bulan</p>
                                    <br>
                                    <P>Biaya instalasi Rp 500,000</P>
                                    <h5>Biaya bulanan Rp 250,000</h5>
                            </div>
                            <div class="card-body botStarter ">
                                <div class="space-2">
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Komunikasi dengan tim API Shipper melalui e-mail</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-cross.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Komunikasi lebih cepat dengan tim API Shipper melalui WhatsApp group</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>---------------------------------------------------------------------</p>
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pengiriman regular, next day, kargo, dan internasional dengan 8+ ekspedisi</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-cross.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pengiriman same day dan instan dengan GoSend dan Grab Express</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>---------------------------------------------------------------------</p>
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pembuatan label pengiriman secara otomatis</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Dashboard pengiriman modern dan terotomasi</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Laporan order pengiriman yang komprehensif</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Cashback terbatas</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-cross.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Account manager khusus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick ="" type="button" style ="background-color:#dc3545;" class="btn text-white active btnImg "  onmouseover="this.style.background='#b52a38'" onmouseout="this.style.background='#dc3545'" >Coba Gratis Sekarang!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col widthCard centerTable">
                        <div class="card shadow text-white ">
                            <div class="card-body topPremium text_">
                                <h2 class="space-1">Premium</h2>
                                <p>Pilihan tepat untuk website / e-commerce dengan jumlah order mencapai lebih dari 1,500 orders per bulan</p>
                                <br>
                                <P>Biaya instalasi Rp 1,500,000</P>
                                <h5>Biaya bulanan Rp 500,000</h5>
                            </div>
                            <div class="card-body botPremium">
                                <div class="space-2">
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Komunikasi dengan tim API Shipper melalui e-mail</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Komunikasi lebih cepat dengan tim API Shipper melalui WhatsApp group</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>---------------------------------------------------------------------</p>
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                                <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pengiriman regular, next day, kargo, dan internasional dengan 8+ ekspedisi</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pengiriman same day dan instan dengan GoSend dan Grab Express</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>---------------------------------------------------------------------</p>
                                    <div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Pembuatan label pengiriman secara otomatis</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Dashboard pengiriman modern dan terotomasi</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Laporan order pengiriman yang komprehensif</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Cashback yang lebih banyak</p>
                                            </div>
                                        </div>
                                        <div class="row sizeTable">
                                            <div class="col-1">
                                            <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-check.svg" alt="yes">
                                            </div>
                                            <div class="col">
                                                <p>Account manager khusus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <button onclick ="" type="button" style ="background-color:#dc3545;" class="btn text-white active btnImg "  onmouseover="this.style.background='#b52a38'" onmouseout="this.style.background='#dc3545'" >Coba Gratis Dekarang!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="space-1">Coba gunakan <a href="/login">Shipper Web</a> secara gratis jika Anda belum memiliki website / e-commerce sendiri atau bila estimasi order di bawah 500 orders per bulan</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container layout">
            <div class="space text_">
                <h2>Banyak cara untuk integrasi</h2>
                <p>Kini Shipper API juga bisa diintegrasikan ke plugin WooCommerce atau Magento, semakin memudahkan urusan pengiriman Anda!</p>
            </div>
            <div >
                <div class="row">
                    <div class="col-sm-6 center" style="width:570px;">
                        <div class="card border-0">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img style="margin-top:30%;margin-bottom:30%;" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/logo-woo-commerce.png" class="img-fluid" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2">
                                        <p><b>WooCommerce Plugin</b></p>
                                        <p class="card-text text-secondary">Kini pengguna WooCommerce semakin mudah untuk integrasi dengan layanan pengiriman Shipper melalui Plug & Ship by Shipper. Klik untuk info detailnya!</p>
                                        <a href="https://tokopress.id/plug-and-ship/" style="color:#dc3545;" class="right"> Lihat Detail <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-arrow.svg" alt="ArrowRight"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 center" style="width:570px;">
                        <div>
                            <div class="card border-0">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img style="margin-top:30%;margin-bottom:30%;" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/logo-magento.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <p><b>Magento</b></p>
                                            <p class="card-text text-secondary">Saatnya hubungkan platform Magento Anda dengan fitur pengiriman dari Shipper secara otomatis tanpa harus merancangnya dari awal, lebih praktis dan cepat. Klik untuk info detailnya!</p>
                                            <a href="https://icubeonline.com/services" style="color:#dc3545;" class="right"> Lihat Detail <img  src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-arrow.svg" alt="ArrowRight"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row space">
                    <div class="col-sm-6 center" style="width:570px;">
                        <div>
                            <div class="card border-0">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <img style="margin-top:30%;margin-bottom:30%;" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/logo-shopify.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <div class="card-block px-2">
                                            <p><b>Shopify</b></p>
                                            <p class="card-text text-secondary">Hubungkan Shipper dengan toko Anda di Shopify dan nikmati fitur-fitur yang dapat membuat segala kebutuhan logistik Anda menjadi lebih mudah dan efisien. Klik untuk info detailnya!</p>
                                            <a href="https://shipper.id/api-integration/shopify" style="color:#dc3545;" class="right">  Lihat Detail <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/icon-arrow.svg" alt="ArrowRight"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </section>

    <section>
        <div class="container text_" >
            <div >
                <h5>Kenali Apa Itu API Cek Ongkir Shipper</h5>
                <div class="space  text-secondary">
                    <p>Shipper API cek ongkir adalah layanan yang diberikan untuk mempermudah bisnis Anda serta memberikan Anda kemampuan dalam mengintegrasikan fungsionalitas pengiriman langsung ke situs e-commerce bisnis Anda. API Cek ongkir Shipper juga memudahkan Anda dalam melakukan proses pembayaran dan pengiriman.</p>
                </div>
            </div>
            <div >
                <h5>Kenapa Harus Menggunakan Plugin Cek Ongkir Shipper</h5>
                <div class="space  text-secondary">
                    <p >Lebih mudah terintegrasi banyak kurir dari berbagai macam ekspedisi di Indonesia. Selain itu, Anda bisa membuat label pengiriman sendiri, bisa bebas pilih tarif ongkir serta jasa ekspedisi apa saja. Tak hanya itu saja, dengan menggunakan API Shipper, Anda juga akan mendapatkan fasilitas gratis penjemputan barang dagangan tanpa ada minimum order. API Shipper maupun API Pengiriman Barang sangat mudah dikelola dalam melakukan pesanan pengiriman dan juga pelacakan secara real time.</p>
                </div>
            </div>
            <div id="moreafter">
                <div>
                    <h5>Kemudahan Menggunakan API Plugin Ongkos Kirim Shipper</h5>
                    <div class="space  text-secondary">
                        <p >Kini, kirim barang semakin mudah dengan menggunakan API Cek Ong Kirim. Saatnya untuk Anda beralih memulai pengiriman melalui akses yang lebih cepat dan mudah. Shipper memberikan solusi kurir terbaik yang akan memudahkan Anda dalam mengintegrasikan pengiriman ke semua platform bisnis online Anda agar memiliki fleksibilitas yang lebih banyak dengan menggunakan plugin ongkos kirim atau ongkos kirim plugin dan ongkos kirim api dari Shipper di website jualan Anda. Jika Anda menggunakan plugin ongkir Shipper, nantinya semua kurir yang Anda butuhkan ada dalam 1 platform.</p>
                        <p >Dengan menggunakan API Shipper, Anda juga bisa melakukan cek ongkir dari berbagai macam jasa ekspedisi yang tersedia di platform Shipper, seperti cek ongkir J&T, cek ongkir JNE, cek tarif TIKI, cek ongkir Pos, dan lainnya. Tak hanya itu saja, dengan menggunakan API Shipper Anda juga bisa melakukan lacak paket atau cek resi/cekresi/cek no resi dari berbagai macam pilihan jasa ekspedisi yang bekerja sama dengan Shipper. Tentu saja, Anda akan bisa dengan mudah melakukan tracking J&T, tracking Anteraja, Tiki tracking, Anteraja resi, cek resi JNE, cek resi J&T, cek resi SiCepat, cek resi Tiki, cek resi AnterAja, cek resi Wahana, cek resi Indah Cargo, cek resi Lion Parcel, cek resi POS Indonesia dan juga Paxel API melalui API Shipper. Memiliki keunggulan untuk memudahkan para pebisnis online yang ada di Indonesia, seperti halnya Raja Ongkir API, Plugin Raja Ongkir, API Lalamove atau Rajaongkir API serta Ongkir API Shipper pun menawarkan kemudahan dalam melakukan cek tarif dan juga lacak paket.</p>
                    </div>
                </div>

                <div >
                    <h5>Keuntungan Menggunakan Plugin Ongkos Kirim Shipper</h5>
                    <div class="space  text-secondary">
                        <p >Berbeda dengan Plugin Ongkos Kirim gratis, ada banyak keuntungan yang akan Anda dapatkan jika bergabung dan menggunakan Cek Ongkir API atau Cek Ongkir Plugin dari Shipper. Berbeda dengan plugin ongkir gratis, plugin ongkir Shipper terintegrasi banyak kurir, bisa membuat label pengiriman sendiri, bebas pilih tarif ongkos kirim & ekspedisi apa saja, gratis penjemputan tanpa minimum order, serta mudah dalam mengelola pesanan pengiriman & lacak paket secara real time.</p>
                        <p >Kirim Barang Lebih Mudah dengan Cek Ongkir API Shipper Saatnya beralih untuk memulai pengiriman dengan akses lebih cepat dan mudah bersama Shipper. Memberikan solusi API kurir terbaik yang memudahkan Anda untuk mengintegrasi pengiriman ke semua platform bisnis online Anda agar lebih banyak memiliki fleksibilitas serta kontrol atas proses logistik Anda.</p>
                        <p >Selain itu, Anda juga bisa memilih berbagai macam jasa ekspedisi dan melakukan cek ongkir serta tracking dengan mudah melalui API Shipper. Shipper bekerja sama dengan berbagai macam jasa ekspedisi yang ada di Indonesia. Kelebihan menggunakan API Shipper, yakni memudahkan Anda dalam hal melakukan cek ongkir yang bisa Anda akses di mana saja dan kapan saja. Cukup mengisi kolom tujuan pengiriman barang nantinya akan muncul tarif ongkos kirim terbaik sesuai kebutuhan Anda.</p>
                        <p >Hasil pencarian cek tarif ongkir melalui Shipper sangat akurat dan lengkap, serta Anda bisa memilih sendiri jasa ekspedisi yang dibutuhkan dan bisa membandingkan tarif ongkos kirim dengan ekspedisi lainnya.</p>
                        <p >Tidak hanya mengetahui ongkir TIKI saja, dengan API Shipper Anda pun bisa melakukan cek ongkir J&T, cek ongkir POS, cek ongkir Indah Cargo, Cek ongkir Wahana, Cek Ongkir JNE, Cek Ongkir Lalamove, dan berbagai macam jasa ekspedisi lainnya yang sudah bekerja sama dengan Shipper. Karena Cek Tarif Pengiriman API Shipper serupa dengan API JNE Gratis, plugin ongkos kirim woocommerce, woocommerce shipping Indonesia, plugin ongkir woocommerce, plugin ongkir woocommerce gratis, plugin ongkir wordpress, Shipping Gateway Indonesia, plugin ongkos kirim wordpress, API SiCepat, ongkir, Raja Ongkir JNE, plugin Raja Ongkir, plugin woocommerce Indonesia, API tracking JNE/JNE API tracking, plugin JNE, Shopify JNE, JNE API Integration, JNE API php, woocommerce JNE, Woocommerce JNE shipping, JNE plugin, JNE shipping Woocommerce, JNE Woocommerce, JNE wordpress, Indoongkir, SiCepat API, API Gosend, AnterAja API, JNE Wordpress plugin, tracking, API JNE ongkir, Magento JNE, API J&T, J&T API, API JNT, api key rajaongkir pro gratis, API ongkir JNE, API Pos Indonesia, API Raja Ongkir, rajaongkir woocommercer, Indo Ongkir, widget ongkir dan API Ekspedisi.</p>
                    </div>
                </div>
                <div >
                    <h5>Temukan API Cek Ongkir Gratis Shipper Sesuai Kebutuhan Bisnis Anda</h5>
                    <div class="space  text-secondary">
                        <p >Sobat Shipper, apa pun bisnis Anda kini Shipper menghadirkan layanan API Cek Ongkir Gratis atau widget cek ongkir dan widget ongkos kirim sesuai kebutuhan Anda untuk mempermudah kebutuhan Anda. woo ongkir, woocommerce indonesia shipping, woocommerce shipping indonesia, API Ongkir Shipper memiliki 2 jenis layananAPI ongkir Indonesia yakni Starter dan juga Premium. Anda bisa memilih sesuai kebutuhan Anda. Shipper API juga memiliki 2 layanan, yakni Starter dan Premium. Jika Anda berlangganan Premium, tentunya juga akan mendapatkan fasilitas pengiriman Same Day dan juga Instant dengan menggunakan Gosend AP, Gojek APII atau Gosend API Integration dan juga API Grab Express yang ada di Shipper.</p>
                        <p >Menggunakan API Shipper sebagai API ongkos kirim, API cek resi, plugin cek resi, plugin resi, widget resi, widget cek resi atau API pengiriman dan API pengiriman barang merupakan pilihan yang tepat untuk website maupun e-commerce bisnis Anda dengan jumlah orderan yang lebih dari 500 hingga 1.500 per bulannya. Ada banyak keuntungan yang di dapat dengan penggunaan API shipping dan API tracking dari Shipper, selain bisa berkomunikasi langsung dengan tim API Shipper melalui email, Anda juga bisa langsung bertanya melalui WhatsApp Group tim API Shipper. Tidak hanya itu saja, keuntungan lainnya yang di dapat yakni pembuatan label pengiriman secara otomatis, mendapatkan dashboard pengiriman modern yang sudah terotomasi, laporan order pengiriman yang komprehensif, mendapatkan cashback yang lebih banyak dan disertai dengan Account Manager khusus.</p>
                        <p >Untuk saat ini, ada 14 area yang tercover oleh API Shipper yakni.</p>
                        <p >DKI Jakarta, Bekasi, Depok, Bogor, Tangerang, Tangerang Selatan, Surabaya, Medan, Bandung , Cimahi, Yogyakarta, Sleman, Bantul, Solo, Sukoharjo, Sidoarjo</p>
                    </div>
                </div>
            </div>
            <div class="space" ><h5><a style = "color:#EF4941;" onclick="clickMore()" id="more">Selengkapnya</a></h5></div>
            
        </div>
    </section>

    </main>

    <footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
</footer>

</body>
</html>