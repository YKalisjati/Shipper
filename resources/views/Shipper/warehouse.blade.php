<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/checkbox.css" rel="stylesheet">
    <link href="css/imageListBox.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <link href="css/min-widthBody.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <script src="js/default.js"></script>

    <style>
        #moreafter {display: none;}
    </style>

</head>
<body style="background-color:white;">
<header>
@include('partials.navTopDark')
</header>
    <main >
    <section >
            <div class = "col-sm-12" style="height:550px;">
                <div>
                    <div class="gambar ">
                        <img style="height:550px; width: 100%;"src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/banner-warehouse.jpg" alt="Image 1" class="imageCenter d-block " >
                    </div>
                    <div class="text_centerImg" style="top:200px;">
                            <h2>Layanan Gudang Terbaik untuk Sekala Bisnis</h2>
                            <p>Dari penyimpanan, managemen stok, pemasaran, pengiriman dan pemantauan stok semua kami tangani dengan baik</p>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container layout">
            <div>
                <div class="text_"> 
                    <h2>Inilah Perbedaan Dengan Gudang Kami</h2>
                    <div class="space">
                        <p>Fokus tingkatkan penjualan tanpa harus direpotkan urusan oprasional logistik</p>
                    </div>
                </div>
            </div>
            <div>
                <img id="warehousekami" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/warehouse-without-shipper.png" alt="Image 1" class=" d-block gambarPerbedaan">
            </div>
            <div >
                <table class = "centerTable">
                    <tbody>
                        <tr>
                            <td style=" width:150px"><h6  id = "textKami1" style="text-align: center; color:#dc3545;">Tanpa Kami</h6></td>
                            <td ><input id="kami" type="checkbox" name="checkbox" onclick="isChecked()"></td>
                            <td style=" width:150px"><h6 id = "textKami2" style="text-align: center; color:lightgray;">Dengan Kami</h6></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section>
        <div class="container layout">
            <div class="text_">
                <h2 >Mulai Simpan dan Kirim Dengan Kami</h2>
                <div class="space">
                    <p>Kami menghadirkan management pergudangan dan pengiriman yang efisien dan terintegrasi</p>
                </div>
            </div>

            <div class="card space bg-dark text-white" style="overflow-x: auto; overflow-y: hidden;">
                <div class="card-body">
                    <div class="row row-cols-5 boxItemList">
                        <div class="col boxItem">
                            <div class="card bg-dark text-white heighBox-1">
                                <div class="card-body">
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-store-icon.svg" alt="Kami Simpan" class="centerBox">
                                    </div>
                                    <div>
                                    <h3 class="text_">Kami Simpan</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">1</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-one.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami jemput barang Anda langsung dari supplier</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">2</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-two.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Barang disimpan di gudang dengan metode tepat</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">3</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-three.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami memeriksa kualitas barang yang sampai di gudang kami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">4</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-four.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami memeriksa kualitas barang yang sampai di gudang kami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card space bg-dark text-white" style="overflow-x: auto; overflow-y: hidden;">
                <div class="card-body">
                    <div class="row row-cols-5 boxItemList">
                        <div class="col boxItem">
                            <div class="card bg-dark text-white heighBox-1">
                                <div class="card-body">
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-send-icon.svg" alt="Kami Kirim" class="centerBox">
                                    </div>
                                    <div>
                                    <h3 class="text_">Kami Kirim</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">5</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-five.svg" alt="Kami Kirim">
                                    </div>
                                    <div>
                                    <p class="text_">Order-order Anda masuk ke sistem kami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">6</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-six.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami kemas paketnya dan menyiapkannya untuk dikirim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">7</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-seven.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami memastikan paket akan dikirim oleh ekspedisi pilihan Anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col boxItem">
                            <div class="card bg-white text-black heighBox-1">
                                <div class="card-body">
                                <span class="circle">8</span>
                                    <div>
                                        <img src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/process-eight.svg" alt="Kami Simpan">
                                    </div>
                                    <div>
                                    <p class="text_">Kami akan mencantumkan nomor pelacakan di dashboard untuk keperluan Anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--<section class = "text_">
        <div class="container layout">
                <h2>Jaringan Gudang Kami</h2>
                <div class="space">
                    <p >Gudang kami hadir di 10 kota dan terus bertambah, agar Anda dapat menjangkau lebih luas.</p>
                </div>
                
            <div class="space">
                *Google Maps API Here*
            </div>
        </div>
    </section>-->

    <section>
        <div class="parallax layout">
            <div class="container">
                    <h2>Mari berdiskusi lebih lanjut!</h2>
                    <div class="space">
                        <p>Tim kami akan membantu Anda menemukan solusi logistik sesuai kebutuhan Anda.</p>
                    </div>

                <a href="/contact" style="text-decoration: none"><button onclick ="" type="button" style="background-color:#dc3545" class="btn text-white active space"  onmouseover="this.style.background='#b52a38'" onmouseout="this.style.background='#dc3545'" >Kontak Kami</button></a>
            </div>
        </div>
    </section>

    <section>
        <div class="container text_">
            <div>
                <h5>Agregator Logistik & Warehouse Terpercaya</h5>
                <div class="space text-secondary">
                    <p >Shipper adalah salah satu agregator logistik & jasa gudang online di Indonesia yang menyediakan jasa pengiriman barang serta sewa gudang barang terdekat digital terdekat dan terpercaya. Memiliki tagline “Bebas Pilih Tanpa Batas” Shipper bisa dijadikan solusi pengiriman barang dan jasa pergudangan yang praktis, aman, dan nyaman untuk memenuhi kebutuhan bisnis Anda.</p>
                </div>
            </div>
            <div id="moreafter">
                <div>
                    <h5>Keuntungan Memakai Jasa Pengiriman Shipper</h5>
                    <div class="space text-secondary">
                        <p >Shipper memungkinkan Anda untuk melakukan cek ongkir berbagai jasa ekspedisi melalui website ataupun aplikasi Shipper. Hanya dengan 1 klik, Shipper akan memberikan rekomendasi ongkir penyedia jasa ekspedisi dan Anda bebas memilih sesuai dengan kebutuhan Anda.</p>
                        <p >Anda pun tidak perlu repot keluar rumah untuk kirim barang, serahkan semuanya kepada Shipper. Kurir Shipper siap jemput paket Anda gratis tanpa minimum order sehingga Anda bebas kirim paket dari mana saja tanpa biaya tambahan. Sudah terintegrasi dengan jasa ekspedisi di dalam dan luar negeri, Shipper memiliki jangkauan pengiriman yang luas di seluruh Indonesia hingga mancanegara. Warehouse Shipper juga menawarkan sewa gudang terdekat dari kota Anda. Selain itu, Shipper juga menawarkan kemudahan untuk melakukan gudang packing demi memudahkan bisnis Anda.</p>
                        <p >Salah satu keuntungan lainnya yang bisa Anda dapatkan jika menggunakan Shipper adalah mendapatkan Shipper Points di setiap transaksi yang Anda lakukan. Nantinya Shipper Points bisa ditukarkan dengan berbagai macam hadiah menarik. Dengan menggunakan Shipper ongkos kirim akan lebih hemat karena mendapatkan cashback di setiap transaksi.</p>
                    </div>
                </div>

                <div>
                    <h5>Kenapa Harus Menggunakan Warehouse Management Shipper</h5>
                    <div class="space text-secondary">
                        <p >Shipper telah memiliki pengalaman dalam layanan penyimpanan, pengemasan, hingga pengiriman produk bisnis. Warehouse Shipper memiliki lokasi strategis dan berada di pusat-pusat kota yang mudah dijangkau dari mana saja. Dengan menggunakan jasa manajemen gudang online Shipper Anda bisa memilih sendiri paket layanan yang sesuai dengan kebutuhan bisnis Anda.</p>
                        <p >Gudang online Shipper juga dilengkapi dengan 3 jenis penyimpanan yaitu gudang pendingin (cold room), gudang ber AC dan gudang standard untuk gudang fashion, gudang furniture, gudang elektronik, gudang pecah belah, gudang bahan bangunan dan gudang gudang kosmetik.</p>
                        <p >Penuhi segala kebutuhan bisnis Anda tanpa harus repot dengan menggunakan layanan Gudang Digital Shipper. Anda tinggal mengecek pesanan dan ketersedian stok tanpa ribet. Temukan dengan mudah Warehouse Jakarta dan kota lainnya bersama Shipper di pusat kota Anda, karena Shipper telah tersebar di lebih dari 35 kota di Indonesia seperti sewa gudang Bandung, sewa gudang Jogja, sewa gudang Medan, sewa gudang Makassar, sewa gudang Solo, sewa gudang Malang, sewa gudang Pasuruan, sewa gudang Manado, sewa gudang Balikpapan, sewa gudang Palembang, sewa gudang Pekanbaru, sewa gudang Batam, sewa gudang Semarang, sewa gudang Bali, sewa gudang Lampung, sewa gudang Jayapura, sewa gudang Jakarta dan masih banyak lagi.</p>
                        <p >Anda tidak perlu lagi pusing memikirkan harga sewa gudang dan biaya sewa gudang karena di Shipper sistem pembayaran adalah sewa gudang bulanan dan sesuai dengan pemakaian. Tak perlu khawatir dengan ukuran bisnis Anda, karena kami menyediakan sewa gudang besar sampai sewa gudang kecil.</p>
                    </div>
                </div>
            </div>
            <div class="space"><h5><a style = "color:#EF4941;" onclick="clickMore()" id="more">Selengkapnya</a></h5></div>
            
        </div>
    </section>

    </main>

    <footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
</footer>

</body>
</html>