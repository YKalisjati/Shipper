<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ | Jasa Pengiriman Shipper</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/faq.css">
</head>

<!-- Header -->
<section style="background-color:white;">
    <header>
    @include('partials.navTopWhite')
    </header>
</section>

<!-- Back and Search -->
<section style="background-color:rgb(238, 238, 238);">
    <div class="container">
        <div class="row">
          <div class="col-3 mt-3">
            <a href="/faq" class="text-decoration-none text-dark">
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                  </svg>
                  <b style="font-size:15px">Kembali</b>
              </p>
            </a>
          </div>
            <div class="col text-center">
              <div class="card card-body">
                <h6 class="align-middle">Jika tidak menemukan solusi anda, silahkan menuju halaman <a href="/contact" class="text-decoration-none text-danger">Kontak Kami</a></h6>
              </div>
            </div>
        </div>
    </div>
</section>
    
<!-- Main Body -->
<section>
    <div class="tab" style="height:auto;">
    <h3 class="mt-2 mx-3">Jasa Pengiriman</h3>
      <button class="tablinks" onclick="openCity(event, 'satu')" id="defaultOpen">Tentang Jasa Pengiriman Shipper</button>
      <button class="tablinks" onclick="openCity(event, 'dua')">Akun Shipper</button>
      <button class="tablinks" onclick="openCity(event, 'tiga')">Pengiriman Paket</button>
      <button class="tablinks" onclick="openCity(event, 'empat')">Harga Pengiriman dan Metode Pembayaran</button>
      <button class="tablinks" onclick="openCity(event, 'lima')">Penjemputan Paket</button>
      <button class="tablinks" onclick="openCity(event, 'enam')">Status Pengiriman Paket dan Pelacakan</button>
      <button class="tablinks" onclick="openCity(event, 'tujuh')">Kerusakan / Kehilangan Paket</button>
      <button class="tablinks" onclick="openCity(event, 'delapan')">Ketentuan Pelaksanaan Jasa GoSend dan GrabExpress</button>
      <button class="tablinks" onclick="openCity(event, 'sembilan')">Ketentuan Kategori Barang Setiap Ekspedisi</button>
      <button class="tablinks" onclick="openCity(event, 'sepuluh')">Standard Packing</button>
    </div>
    
    <div id="satu" class="tabcontent">
        <br>
        <h3>Tentang Jasa Pengiriman</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Apa itu jasa pengiriman Shipper
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p style="font-size:14px">Jasa pengiriman Shipper merupakan layanan pengiriman dari Shipper yang menghubungkan merchant/pebisnis online dengan berbagai agen logistik. </p>
                    <p style="font-size:14px">Jasa pengiriman Shipper memudahkan segala urusan logistik Anda. </p>
                    <p style="font-size:14px">Mulai dari layanan perbandingan ongkos kirim, penjemputan barang, pengiriman barang multi ekspedisi, lacak pesanan, hingga dukungan tim CS untuk klaim barang hilang, semua tersedia di jasa pengiriman Shipper.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Berapa minimal volume atau jumlah paket untuk dapat dijemput gratis oleh Shipper?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p style="font-size:14px">Tidak ada ketentuan volume atau jumlah paket untuk dapat dijemput gratis oleh Shipper. Berapapun paketnya, kami siap jemput!</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Siapa saja mitra logistik Shipper?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p style="font-size:14px">Shipper bermitra dengan agen logistik terpercaya dan terkemuka di Indonesia seperti:</p>
                    <ul style="font-size:14px">
                        <li>JNE</li>
                        <li>POS Indonesia</li>
                        <li>SiCepat</li>
                        <li>Tiki</li>
                        <li>Alfatrex</li>
                        <li>J&T</li>
                        <li>Wahana</li>
                        <li>Ninja Xpress</li>
                        <li>Lion Parcel</li>
                        <li>DPEX</li>
                        <li>GO-SEND</li>
                        <li>Grab Express</li>
                        <li>SAP</li>
                        <li>POS Indonesia (Fushlog)</li>
                    </ul>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Mana saja area jangkauan jasa pengiriman Shipper?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p style="font-size:14px">Jasa pengiriman Shipper melayani pengiriman untuk seluruh wilayah Indonesia dengan layanan domestik dan pengiriman luar negeri dengan layanan internasional.</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Apa saja jenis pengiriman yang ditawarkan oleh jasa pengiriman Shipper?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p style="font-size:14px">Jasa pengiriman Shipper melayani berbagai jenis pengiriman berikut ini: </p>
                    <ol style="font-size:14px">
                        <li>Pengiriman domestik: pengiriman dengan tujuan wilayah di seluruh Indonesia. Layanan yang tersedia yakni: reguler (estimasi kirim 1-7 hari kerja),  same day (estimasi kirim 6-8 jam), instant (estimasi kirim 1-3 jam).</li>
                        <li>Pengiriman cashless marketplace: pengiriman praktis bagi Anda para merchant/pebisnis online. Anda bisa membuat banyak order pengiriman sekaligus. </li>
                        <li>Pengiriman internasional: pengiriman dengan tujuan daerah di luar negeri. </li>
                        <li>Pengiriman kargo: pengiriman barang besar dan jumlah banyak menggunakan truk. Tersedia berbagai jenis ukuran dan kapasitas truk sesuai kebutuhan Anda, seperti  truk pick up, engkel, CDD, container, hingga trailer.</li>
                    </ol>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Apa yang membedakan jasa pengiriman Shipper dengan jasa pengiriman kurir tradisional?
                  </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <ol style="font-size:14px">
                        <li>Jasa pengiriman Shipper memudahkan Anda dalam mengirimkan banyak paket dengan multi ekspedisi sekaligus.</li>
                        <li>Anda cukup buat order, kami yang akan jemput paketnya. GRATIS Sehingga Anda tidak perlu mendatangi satu-persatu agen logistik. </li>
                        <li>Dengan jasa pengiriman Shipper, Anda juga bisa bandingkan berbagai tarif pengiriman dan lacak semua pesanan dalam satu platform saja. </li>
                        <li>Kami juga didukung dengan tim CS yang selalu siap siaga membantu Anda. </li>
                        <li>Laporan pesanan Anda tersimpan dengan baik dan sistematis</li>
                    </ol>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                   Apa saja keuntungan menggunakan jasa pengiriman Shipper?
                  </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <p style="font-size:14px">Keuntungan menggunakan jasa pengiriman Shipper adalah berikut ini: </p>
                    <ol style="font-size:14px">
                        <li>Hemat biaya dan waktu, tak perlu datang ke agen logistik</li>
                        <li>Gratis biaya penjemputan paket ke alamat Anda </li>
                        <li>Tanpa batas minimal atau maksimal. Berapapun jumlah paket Anda,  pasti kami jemput</li>
                        <li>Beragam pilihan jasa logistik terbaik di Indonesia</li>
                        <li>Melayani pengiriman seluruh Indonesia dan luar negeri</li>
                        <li>Lacak semua pesanan bisa di 1 platform saja</li>
                    </ol>
                  </div>
                </div>
            </div>

        </div>

    </div>
    
    <div id="dua" class="tabcontent">
        <br>
        <h3>Akun Shipper</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_1">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_1" aria-expanded="false" aria-controls="flush-collapseOne_1">
                    Bagaimana cara membuat akun Shipper?
                </button>
              </h2>
              <div id="flush-collapseOne_1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_1" data-bs-parent="#accordionFlushExample_1">
                <div class="accordion-body">
                    <p style="font-size:14px">Jasa pengiriman Shipper merupakan layanan pengiriman dari Shipper yang menghubungkan merchant/pebisnis online dengan berbagai agen logistik. </p>
                    <ol style="font-size:14px">
                        <li>Silakan akses https://shipper.id/bos/auth/login</li>
                        <li>Pilih tab “Daftar”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed.png"  class="icon mx-auto">
                        <li>Isi formulir pendaftaran dengan benar dan lengkap</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1.png"  class="icon mx-auto">
                        <li>Klik “Daftar”</li>
                        <li>Masukkan kode verifikasi yang dikirim ke email dan nomor telepon Anda</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-2.png"  class="icon mx-auto">
                        <li>Lalu klik “Kirim” untuk verifikasi. 
                            <b>*Jika Anda tidak mendapatkan kode unik, silakan klik “Kirim Ulang Kode”</b></li>
                        <li>Akun berhasil dibuat dan Anda bisa membuat order pengiriman</li>
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_1" aria-expanded="false" aria-controls="flush-collapseTwo_1">
                    Bagaimana cara login/masuk ke akun Shipper?
                </button>
              </h2>
              <div id="flush-collapseTwo_1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_1" data-bs-parent="#accordionFlushExample_1">
                <div class="accordion-body">
                    <p style="font-size:14px">Berikut cara untuk membuat akun Shipper:</p>
                    <ol style="font-size:14px">
                        <li>Silakan akses https://shipper.id/bos/auth/login</li>
                        <li>Pilih tab “Masuk”</li>
                        <li>Masukkan email/no hp yang terdaftar dan kata sandi akun Shipper Anda</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-5.png"  class="icon mx-auto">
                        <li>Klik “Masuk” untuk masuk ke akun Shipper Anda</li>
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree_1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree_1" aria-expanded="false" aria-controls="flush-collapseThree_1">
                    Bagaimana cara mengganti kata sandi akun Shipper?
                </button>
              </h2>
              <div id="flush-collapseThree_1" class="accordion-collapse collapse" aria-labelledby="flush-headingThree_1" data-bs-parent="#accordionFlushExample_1">
                <div class="accordion-body">
                    <p style="font-size:14px">Berikut cara untuk mengganti kata sandi akun Shipper:</p>
                    <ol style="font-size:14px">
                        <li>Silakan masuk ke akun Shipper Anda melalui tautan berikut: https://shipper.id/bos/auth/login</li>
                        <li>Pilih menu “Akun Saya” lalu klik “Pengaturan Akun” </li>
                        <li>Masukkan kata sandi baru Anda di kolom Password</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-4.png"  class="icon mx-auto">
                        <li>Masukkan ulang kata sandi baru di kolom Password Confirmation</li>
                        <li>Klik “Perbarui Profile” untuk menyelesaikan ubah kata sandi</li>
                        <li>Kata sandi Anda berhasil diubah</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-3.png"  class="icon mx-auto">
                    </ol>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour_1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour_1" aria-expanded="false" aria-controls="flush-collapseFour_1">
                    Apa yang harus saya lakukan jika lupa kata sandi akun Shipper?
                  </button>
                </h2>
                <div id="flush-collapseFour_1" class="accordion-collapse collapse" aria-labelledby="flush-headingFour_1" data-bs-parent="#accordionFlushExample_1">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut cara mengatasi lupa kata sandi akun Shipper:</p>
                    <ol style="font-size:14px">
                        <li>Silakan akses https://shipper.id/bos/auth/login</li>
                        <li>Pilih tab “Masuk”</li>
                        <li>Klik “Lupa Kata Sandi” di bawah kolom kata sandi</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-5.png"  class="icon mx-auto">
                        <li>Di halaman reset kata sandi, masukkan no. HP/email yang terdaftar akun Shipper</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/pasted-image-0.png"  class="icon mx-auto">
                        <li>Klik “Reset Kata Sandi” </li>
                        <li>Ikuti panduan ubah kata sandi yang kami kirimkan ke email Anda</li>
                        <li>Selanjutnya, Anda bisa membuat kata sandi baru untuk akun Anda</li>
                    </ol>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive_1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive_1" aria-expanded="false" aria-controls="flush-collapseFive_1">
                    Bagaimana cara edit profil akun Shipper?
                  </button>
                </h2>
                <div id="flush-collapseFive_1" class="accordion-collapse collapse" aria-labelledby="flush-headingFive_1" data-bs-parent="#accordionFlushExample_1">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut cara mengedit profil akun Shipper:</p>
                    <ol style="font-size:14px">
                        <li>Silakan masuk ke akun Shipper Anda melalui tautan berikut: https://shipper.id/bos/auth/login</li>
                        <li>Pilih menu “Akun Saya” lalu klik “Pengaturan Akun” </li>
                        <li>Edit data profil Anda</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-4.png"  class="icon mx-auto">
                        <li>Klik “Perbarui Profile” untuk menyelesaikan</li>
                        <li>Profil berhasil diperbarui. </li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-6.png"  class="icon mx-auto">
                    </ol>
                  </div>
                </div>
            </div>

        </div>

    </div>

    <div id="tiga" class="tabcontent">
        <br>
        <h3>Pengiriman Paket</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_2">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_2" aria-expanded="false" aria-controls="flush-collapseOne_2">
                    Bagaimana cara mengirimkan barang lewat Shipper?
                </button>
              </h2>
              <div id="flush-collapseOne_2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_2" data-bs-parent="#accordionFlushExample_2">
                <div class="accordion-body">
                    <p style="font-size:14px">Tersedia berbagai layanan pengiriman dari Shipper untuk beragam kebutuhan Anda:</p>
                    <ul style="font-size:14px">
                        <li>Pengiriman Domestik: pengiriman barang dengan tujuan wilayah di dalam negeri. 
                            <br><br><b>Tiga layanan yang tersedia: 
                                <li>Reguler (estimasi waktu kirim 1-7 hari kerja)
                                <li>Same Day (estimasi waktu kirim 6-8 jam)
                                <li>Instant (estimasi waktu kirim 1-3 jam)</b></li>
                    </ul>
                    <p style="font-size:14px"> Cara membuat order domestik (secara manual):</p>
                    <ol style="font-size:14px">
                        <li>Di menu Pesanan Domestik, pilih submenu “Buat Pesanan Baru”</li>
                        <li>Pilih alamat penjemputan</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-8.png"  class="icon mx-auto">
                        <li>Lengkapi data tujuan (area, kota, kecamatan, kelurahan, dan kode pos), detail informasi paket (ukuran, berat, harga, nama item, jumlah, dan jenis paket), dan asuransi barang</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-7.png"  class="icon mx-auto">
                        <li>Pilih jasa pengiriman</li>
                        <li>Lengkapi data pengirim (nama dan nomor telepon) dan penerima (nama, nomor telepon, dan alamat)</li>
                        <li>Klik “Simpan” untuk menyelesaikan buat order. Klik “Simpan dan Buat Baru” untuk membuat order baru lainnya</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-6-1.png"  class="icon mx-auto">
                        <li>Lanjut ke proses penjemputan dengan klik menu “Ajukan Penjemputan”</li>
                        <li>Klik order yang telah dibuat</li>
                        <li>Tandai semua paket yang ingin dijemput kemudian klik “Ajukan Penjemputan”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-5-1.png"  class="icon mx-auto">
                        <li>Pilih agen, hari & jam penjemputan, armada penjemput, dan lengkapi data dengan benar</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-4-1.png"  class="icon mx-auto">
                        <li>Selesaikan order dengan klik “Minta Sekarang Juga” dan permintaan penjemputan berhasil dibuat</li>
                    </ol>
                    <p style="font-size:14px"> Upload CSV dengan langkah-langkah berikut ini:</p>
                    <ol style="font-size:14px">
                        <li>Di menu Pesanan Domestik, pilih submenu “Impor Pemesanan”</li>
                        <li>Pilih alamat penjemputan</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-8.png"  class="icon mx-auto">
                        <li>Pilih Template input file: SHIPPER_ORDER_TEMPLATE.xlsx</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-9.png"  class="icon mx-auto">
                        <li>Upload file excel template order yang sudah diisi lengkap dan benar</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1-1.png"  class="icon mx-auto">
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-9.png"  class="icon mx-auto">
                        <li>Kemudian “Ajukan Penjemputan”</li>
                    </ol>
                    <ul style="font-size:14px"><br>
                        <li>Pengiriman Internasional: pengiriman barang dengan tujuan wilayah di luar negeri.</li>
                    </ul>
                    <p style="font-size:14px"> Cara membuat order internasional (secara manual):</p>
                    <ol style="font-size:14px">
                        <li>Di menu Pesanan Internasional, pilih submenu “Buat Pesanan Baru”</li>
                        <li>Pilih alamat penjemputan</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-3-1.png"  class="icon mx-auto">
                        <li>Lengkapi data negara tujuan, data paket, dan pilih tarif pengiriman</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-7-1.png"  class="icon mx-auto">
                        <li>Lengkapi data pengirim, penerima, dan alamat</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-6-2.png"  class="icon mx-auto">
                        <li>Klik “Simpan” untuk menyelesaikan buat order. Klik “Simpan dan Buat Baru” untuk membuat order baru lainnya</li>
                        <li>Lanjut ke proses penjemputan dengan klik menu “Ajukan Penjemputan”</li>
                        <li>Klik order yang telah dibuat</li>
                        <li>Tandai semua paket yang ingin dijemput kemudian klik “Ajukan Penjemputan”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-5-2.png"  class="icon mx-auto">
                        <li>Pilih agen, hari & jam penjemputan, armada penjemput, dan lengkapi data dengan benar</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-4-2.png"  class="icon mx-auto">
                        <li>Selesaikan order dengan klik “Minta Sekarang Juga” dan permintaan penjemputan berhasil dibuat</li>
                    </ol>
                    <p style="font-size:14px"> Upload CSV dengan langkah-langkah berikut ini:</p>
                    <ol style="font-size:14px">
                        <li>Di menu Pesanan Internasional, pilih submenu “Impor Pemesanan”</li>
                        <li>Pilih alamat penjemputan dengan klik “Pakai Alamat Ini”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-8.png"  class="icon mx-auto">
                        <li>Pilih Template input file: SHIPPER_ORDER_TEMPLATE.xlsx</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-2-2.png"  class="icon mx-auto">
                        <li>Upload file excel template order yang sudah diisi lengkap dan benar</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1-2.png"  class="icon mx-auto">
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-9.png"  class="icon mx-auto">
                        <li>Kemudian “Ajukan Penjemputan”</li>
                    </ol>
                    <ul style="font-size:14px"><br>
                        <li>Pengiriman paket <i>cashless marketplace</i> pengiriman dengan buat order banyak sekaligus bagi para <i>seller online marketplace</i>   .</li>
                    </ul>
                    <p style="font-size:14px"> Cara membuat order <i>cashless marketplace</i> (secara manual):</p>
                    <ol style="font-size:14px">
                        <li>Klik “Impor Pemesanan”</li>
                        <li>Pilih alamat penjemputan dengan klik “Pakai Alamat Ini”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-3-2.png"  class="icon mx-auto">
                        <li>Pilih “Template input file cashles: SHIPPER_ORDER_CASHLESS_TEMPLATE.xlsx”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-2-2.png"  class="icon mx-auto">
                        <li>Upload file excel template Cashless yang sudah diisi lengkap dan benar</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1-2.png"  class="icon mx-auto">
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-9.png"  class="icon mx-auto">
                        <li>Kemudian “Ajukan Penjemputan”</li>
                        <li>Untuk order cashless, Anda tidak perlu membayar ongkir ke Driver Shipper. Ongkir telah Anda bayarkan ke pihak marketplace (seperti Tokopedia, Bukalapak, Shopee, dll)</li>
                    </ol>
                    <ul style="font-size:14px"><br>
                        <li>Pengiriman paket dengan kargo: Pengiriman dalam jumlah banyak dan barang berukuran besar menggunakan truk berbagai jenis dan ukuran.</li>
                    </ul>
                    <p style="font-size:14px">Untuk melakukan pengiriman dengan kargo, silakan hubungi tim Partnership melalui email ke partnership@shipper.id</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_2" aria-expanded="false" aria-controls="flush-collapseTwo_2">
                    Bagaimana cara cetak label/resi?
                </button>
              </h2>
              <div id="flush-collapseTwo_2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_2" data-bs-parent="#accordionFlushExample_2">
                <div class="accordion-body">
                    <p style="font-size:14px">Untuk mencetak label/resi, silakan ikuti langkah berikut: </p>
                    <ol style="font-size:14px">
                        <li>Setelah membuat pesanan, silakan pilih menu “Pesanan Tertunda”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-5-3.png"  class="icon mx-auto"> 
                        <li>Klik “1 Order” pada order yang ingin dicetak resinya</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-3-3.png"  class="icon mx-auto">
                        <li>Klik ikon segitiga terbalik di tombol cetak </li>
                        <li>Pilih “Cetak Resi” untuk mencetak resi atau pilih “Cetak Label” untuk mencetak label.</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1-3.png"  class="icon mx-auto">
                        <li>Anda wajib menempelkan label Shipper di kemasan kiriman</li>
                        <br>Contoh resi Shipper<br>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-2-3.png">
                        <br><br>Contoh label Shipper<br>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-11.png">
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree_2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree_2" aria-expanded="false" aria-controls="flush-collapseThree_2">
                    Apa yang harus saya lakukan saat cek tarif tidak muncul?
                </button>
              </h2>
              <div id="flush-collapseThree_2" class="accordion-collapse collapse" aria-labelledby="flush-headingThree_2" data-bs-parent="#accordionFlushExample_2">
                <div class="accordion-body">
                    <p style="font-size:14px">Apabila cek tarif tidak muncul, mohon jangan panik. Silakan langsung hubungi tim CS kami melalui email cs@shipper.id atau chat WhatsApp ke +6281289476415 untuk ditangani.</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour_2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour_2" aria-expanded="false" aria-controls="flush-collapseFour_2">
                    Apa saja barang yang tidak diperbolehkan untuk dikirim?
                  </button>
                </h2>
                <div id="flush-collapseFour_2" class="accordion-collapse collapse" aria-labelledby="flush-headingFour_2" data-bs-parent="#accordionFlushExample_2">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut jenis barang yang tidak dapat dikirim: </p>
                    <ol style="font-size:14px">
                        <li>Barang curian</li>
                        <li>Barang yang dapat dan atau mudah meledak, menyala sendiri, atau terbakar sendiri</li>
                        <li>Narkotika dan obat-obatan terlarang</li>
                        <li>Pornografi, barang cetakan/benda yang menyinggung kesusilaan</li>
                        <li>Senjata api, pisau, dan petasan</li>
                        <li>Barang cetakan/rekaman yang isinya dapat mengganggu keamanan dan ketertiban serta stabilitas Nasional</li>
                        <li>Alkohol, minuman keras dan makanan basah</li>
                        <li>Tanaman dan hewan</li>
                        <li>Barang lain yang menurut perundangan-undangan dinyatakan dilarang</li>
                    </ol>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive_2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive_2" aria-expanded="false" aria-controls="flush-collapseFive_2">
                    Apakah boleh mengirim paket berisi cairan?
                  </button>
                </h2>
                <div id="flush-collapseFive_2" class="accordion-collapse collapse" aria-labelledby="flush-headingFive_2" data-bs-parent="#accordionFlushExample_2">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut ketentuan untuk pengiriman cairan: </p>
                    <ol style="font-size:14px">
                        <li>Apabila volume cairan di bawah 200 ml, maka memungkinkan untuk menggunakan pengiriman reguler</li>
                        <li>Apabila volume cairan lebih dari 200 ml, mohon gunakan layanan trucking atau van. Silakan hubungi tim CS kami untuk info lebih lengkap</li>
                    </ol>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix_2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix_2" aria-expanded="false" aria-controls="flush-collapseSix_2">
                    Apakah boleh mengirim alat elektronik/listrik seperti powerbank dan kabel?
                  </button>
                </h2>
                <div id="flush-collapseSix_2" class="accordion-collapse collapse" aria-labelledby="flush-headingSix_2" data-bs-parent="#accordionFlushExample_2">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut ketentuan untuk pengiriman peralatan elektronik/listrik:</p>
                    <ol style="font-size:14px">
                        <li>Apabila berkapasitas maksimal 10.000 mAh, maka memungkinkan untuk menggunakan pengiriman reguler</li>
                        <li>Jika kapasitas listrik barang kiriman lebih dari 10.000 mAh, mohon gunakan layanan trucking atau van.  Silakan hubungi tim CS kami untuk info lebih lengkap</li>
                    </ol>
                    <p style="font-size:14px">Untuk pengiriman peralatan elektronik/listrik, harap melakukan pengemasan khusus (seperti dilapisi bubble wrap/kemasan kayu). Hal ini bertujuan untuk mengurangi resiko benturan, gesekan dan terjadinya korsleting</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven_2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven_2" aria-expanded="false" aria-controls="flush-collapseSeven_2">
                    Bagaimana cara membatalkan pesanan?
                  </button>
                </h2>
                <div id="flush-collapseSeven_2" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven_2" data-bs-parent="#accordionFlushExample_2">
                  <div class="accordion-body">
                    <p style="font-size:14px">Berikut cara untuk membuat akun Shipper:</p>
                    <ol style="font-size:14px">
                        <li>Silakan akses https://shipper.id/bos/auth/login</li>
                        <li>Pilih menu “Pesanan Tertunda”</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-2-4.png" class="icon mx-auto">
                        <li>Klik “1 Order” pada order yang ingin dibatalkan</li>
                        <li>Lalu klik “Batal” untuk membatalkan pesanan</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-1-4.png" class="icon mx-auto">
                        <li>Pilih “OK” pada pop up konfirmasi</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/unnamed-12.png" class="icon mx-auto">
                        <li>Pesanan Anda berhasil dibatalkan</li>
                        <img src="https://faq.shipper.id/wp-content/uploads/2020/09/pasted-image-0-1.png" class="icon mx-auto">
                    </ol>
                  </div>
                </div>
            </div> 

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight_2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight_2" aria-expanded="false" aria-controls="flush-collapseEight_2">
                    Bagaimana cara mengubah data pesanan?
                  </button>
                </h2>
                <div id="flush-collapseEight_2" class="accordion-collapse collapse" aria-labelledby="flush-headingEight_2" data-bs-parent="#accordionFlushExample_2">
                  <div class="accordion-body">
                    <p style="font-size:14px">Untuk saat ini, Anda dapat mengubah data pesanan dengan cara: </p>
                    <ol style="font-size:14px">
                        <li>Batalkan terlebih dahulu pesanan tersebut dengan klik menu “Pesanan Tertunda”. Lihat cara batalkan pesanan di sini (insert link)</li>
                        <li>Lalu buat pesanan baru, bisa melalui tautan berikut: https://shipper.id/bos/order/select_address_book/1</li>
                        <li>Isi kembali data yang benar dan lengkap</li>
                    </ol>
                  </div>
                </div>
            </div> 

        </div>

    </div>

    <div id="empat" class="tabcontent">
        <br>
        <h3>Harga Pengiriman dan Metode Pembayaran</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_3">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_3" aria-expanded="false" aria-controls="flush-collapseOne_3">
                    Berapa biaya penjemputan paket oleh Shipper?
                </button>
              </h2>
              <div id="flush-collapseOne_3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_3" data-bs-parent="#accordionFlushExample_3">
                <div class="accordion-body">
                    <p style="font-size:14px">Untuk saat ini, Anda dapat mengubah data pesanan dengan cara: </p>
                    <ol style="font-size:14px">
                        <li>Batalkan terlebih dahulu pesanan tersebut dengan klik menu “Pesanan Tertunda”. Lihat cara batalkan pesanan di sini (insert link)</li>
                        <li>Lalu buat pesanan baru, bisa melalui tautan berikut: https://shipper.id/bos/order/select_address_book/1</li>
                        <li>Isi kembali data yang benar dan lengkap</li>
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_3" aria-expanded="false" aria-controls="flush-collapseTwo_3">
                    Berapa tarif pengiriman paket melalui Shipper?
                </button>
              </h2>
              <div id="flush-collapseTwo_3" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_3" data-bs-parent="#accordionFlushExample_3">
                <div class="accordion-body">
                    <p style="font-size:14px">Tarif pengiriman ditentukan berdasarkan kota asal dan kota tujuan pengiriman, agen pengiriman dan layanan yang dipilih, serta berat paket. Untuk mengeceknya, Anda bisa klik tautan berikut: https://shipper.id/shipping</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree_3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree_3" aria-expanded="false" aria-controls="flush-collapseThree_3">
                    Bagaimana cara melakukan pembayaran saat menggunakan jasa pengiriman Shipper?
                </button>
              </h2>
              <div id="flush-collapseThree_3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree_3" data-bs-parent="#accordionFlushExample_3">
                <div class="accordion-body">
                    <p style="font-size:14px">Jasa pengiriman Shipper didukung oleh dua metode pembayaran yang bisa Anda pilih, yakni: </p>
                    <ol style="font-size:14px">
                        <li>Metode Pembayaran Cash/Tunai: 
                            <br>Anda membayarkan ongkos kirim langsung kepada Driver yang menjemput paket</li>
                        <li>Metode pembayaran Pospay: 
                            <br>Merchant/pebisnis online menghubungi tim CS Shipper untuk bergabung sebagai Merchant Pospay</li>
                    </ol>
                    <p style="font-size:14px">Selanjutnya, pembayaran akan ditagih setiap bulan dengan mengirimkan <i>invoice</i> ke Anda</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour_3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour_3" aria-expanded="false" aria-controls="flush-collapseFour_3">
                    Bagaimana cara melakukan pembayaran untuk paket cashless marketplace?
                  </button>
                </h2>
                <div id="flush-collapseFour_3" class="accordion-collapse collapse" aria-labelledby="flush-headingFour_3" data-bs-parent="#accordionFlushExample_3">
                  <div class="accordion-body">
                    <p style="font-size:14px">Untuk order cashless, merchant tidak perlu melakukan pembayaran ke Driver Shipper. Karena Anda telah membayarkan biaya pengiriman ke pihak marketplace (seperti Tokopedia, Bukalapak, Shopee, dll)</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive_3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive_3" aria-expanded="false" aria-controls="flush-collapseFive_3">
                    Apakah ada diskon pengiriman oleh Shipper?
                  </button>
                </h2>
                <div id="flush-collapseFive_3" class="accordion-collapse collapse" aria-labelledby="flush-headingFive_3" data-bs-parent="#accordionFlushExample_3">
                  <div class="accordion-body">
                    <p style="font-size:14px">Untuk diskon pengiriman akan otomatis terpasang saat mengecek ongkir untuk buat pesanan</p>
                    <p style="font-size:14px">Contoh diskon yang terpasang:</p>
                    <img src="https://faq.shipper.id/wp-content/uploads/2020/08/pasted-image-0-768x446.png" class="icon mx-auto">
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div id="lima" class="tabcontent">
        <br>
        <h3>Penjemputan Paket</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_4">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_4" aria-expanded="false" aria-controls="flush-collapseOne_4">
                    Berapa minimal volume atau jumlah paket untuk dapat dijemput gratis oleh Shipper?
                </button>
              </h2>
              <div id="flush-collapseOne_4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_4" data-bs-parent="#accordionFlushExample_4">
                <div class="accordion-body">
                    <p style="font-size:14px">Tidak ada minimal volume atau jumlah paket untuk dapat dijemput gratis oleh Shipper. Berapapun order Anda, pasti kami jemput</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_4" aria-expanded="false" aria-controls="flush-collapseTwo_4">
                    Kapan barang saya akan dijemput Driver Shipper?
                </button>
              </h2>
              <div id="flush-collapseTwo_4" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_4" data-bs-parent="#accordionFlushExample_4">
                <div class="accordion-body">
                    <p style="font-size:14px">Paket Anda akan dijemput Driver Shipper dengan ketentuan berikut ini: </p>
                    <ol style="font-size:14px">
                        <li>Jika permintaan penjemputan dibuat sebelum pukul 15.00, maka paket akan dijemput  pada hari yang sama (hari ini)</li>
                        <li>Jika permintaan penjemputan dibuat setelah pukul 15.00, maka paket akan dijemput keesokan harinya</li>
                    </ol>
                    <p style="font-size:14px">Hari operasional penjemputan paket oleh Shipper adalah Senin-Sabtu, Minggu libur</p>
                    <p style="font-size:14px">Dengan jadwal penjemputan paket yang bisa Anda pilih adalah sebagai berikut: </p>
                    <ul style="font-size:14px">
                        <li>Pukul 09.00-12.00</li>
                        <li>Pukul 12.00-15.00</li>
                        <li>Pukul 15.00-18.00</li>
                        <li>Pukul 18.00-21.00</li>
                    </ul>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree_4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree_4" aria-expanded="false" aria-controls="flush-collapseThree_4">
                    Apa saja jenis armada yang digunakan untuk menjemput paket?
                </button>
              </h2>
              <div id="flush-collapseThree_4" class="accordion-collapse collapse" aria-labelledby="flush-headingThree_4" data-bs-parent="#accordionFlushExample_4">
                <div class="accordion-body">
                    <p style="font-size:14px">Layanan penjemputan paket oleh Shipper menggunakan armada mobil atau motor</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour_4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour_4" aria-expanded="false" aria-controls="flush-collapseFour_4">
                    Kapan Driver Shipper akan tiba untuk menjemput paket?
                  </button>
                </h2>
                <div id="flush-collapseFour_4" class="accordion-collapse collapse" aria-labelledby="flush-headingFour_4" data-bs-parent="#accordionFlushExample_4">
                  <div class="accordion-body">
                    <p style="font-size:14px">Driver Shipper akan menuju lokasi Anda sesuai jadwal penjemputan. Untuk estimasi waktu tibanya, bergantung pada kondisi jalanan saat itu dan antrean paket yang harus dijemput</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive_4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive_4" aria-expanded="false" aria-controls="flush-collapseFive_4">
                    Apakah saya akan dapat informasi nama dan plat nomor driver yang menjemput paket?
                  </button>
                </h2>
                <div id="flush-collapseFive_4" class="accordion-collapse collapse" aria-labelledby="flush-headingFive_4" data-bs-parent="#accordionFlushExample_4">
                  <div class="accordion-body">
                    <p style="font-size:14px">Shipper akan menginfokan nama dan plat nomor driver melalui SMS ke nomor Anda</p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix_4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix_4" aria-expanded="false" aria-controls="flush-collapseSix_4">
                    Apa saja ketentuan untuk paket yang bisa dijemput Shipper?
                  </button>
                </h2>
                <div id="flush-collapseSix_4" class="accordion-collapse collapse" aria-labelledby="flush-headingSix_4" data-bs-parent="#accordionFlushExample_4">
                  <div class="accordion-body">
                    <p style="font-size:14px">Merchant wajib mengemas paket dengan baik dan menempelkan label Shipper di paket. Jangan lupa mencantumkan informasi pengirim dan penerima di kemasan kiriman dengan lengkap dan benar (nama, alamat, kota, kecamatan, kode pos, dan nomor telepon)</p>
                    <p style="font-size:14px"><b>Selain itu, paket bukan kategori barang berbahaya dan dilarang Undang-Undang</b></p>
                  </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven_4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven_4" aria-expanded="false" aria-controls="flush-collapseSeven_4">
                    Berapa batas penjemputan paket dalam 1 hari?
                  </button>
                </h2>
                <div id="flush-collapseSeven_4" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven_4" data-bs-parent="#accordionFlushExample_4">
                  <div class="accordion-body">
                    <p style="font-size:14px">Tidak ada batas penjemputan paket dalam 1 hari, selama masih dalam jam operasional penjemputan paket</p>
                  </div>
                </div>
            </div> 

        </div>

    </div>

    <div id="enam" class="tabcontent">
        <br>
        <h3>Status Pengiriman Paket dan Pelacakkan</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_5">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_5" aria-expanded="false" aria-controls="flush-collapseOne_5">
                    Bagaimana cara melacak status pengiriman paket?
                </button>
              </h2>
              <div id="flush-collapseOne_5" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_5" data-bs-parent="#accordionFlushExample_5">
                <div class="accordion-body">
                    <p style="font-size:14px">Cara melacak status pengiriman paket adalah sebagai berikut:</p>
                    <ol style="font-size:14px">
                        <li>Pilih menu “Lacak Pesanan” di website Shipper.id atau langsung klik tautan ini: https://shipper.id/tracking</li>
                        <li>Masukkan nomor resi dari paket yang akan Anda lacak. Anda bisa masukkan hingga 10 nomor resi, dengan koma sebagai pemisah</li>
                        <li>Klik “Lacak” </li>
                        <li>Status pengiriman paket Anda akan muncul</li>
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_5" aria-expanded="false" aria-controls="flush-collapseTwo_5">
                    Bagaimana cara melihat riwayat pengiriman?
                </button>
              </h2>
              <div id="flush-collapseTwo_5" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_5" data-bs-parent="#accordionFlushExample_5">
                <div class="accordion-body">
                    <p style="font-size:14px">Anda bisa cek riwayat pengiriman yang pernah dibuat dengan cara berikut: </p>
                    <ol style="font-size:14px">
                        <li>Masuk ke akun Shipper Anda melalui tautan ini: https://shipper.id/bos/auth/login</li>
                        <li>Pilih menu “Lihat Pesanan” di dashboard Shipper BOS</li>
                        <li>Selanjutnya akan tampil seluruh order pengiriman yang pernah Anda buat </li>
                    </ol>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree_5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree_5" aria-expanded="false" aria-controls="flush-collapseThree_5">
                    Bagaimana jika paket gagal dikirim?
                </button>
              </h2>
              <div id="flush-collapseThree_5" class="accordion-collapse collapse" aria-labelledby="flush-headingThree_5" data-bs-parent="#accordionFlushExample_5">
                <div class="accordion-body">
                    <p style="font-size:14px">Menurut ketentuan layanan dari Shipper, paket yang gagal dikirim akan dikembalikan ke HUB Shipper asal paket</p>
                    <p style="font-size:14px">Biasanya paket gagal dikirim karena alamat yang kurang jelas, penerima tidak bisa dihubungi, atau kiriman berisi barang terlarang</p>
                    <p style="font-size:14px">Selanjutnya kami akan menghubungi Anda tentang hal ini. Termasuk menanyakan, apakah paket akan Anda ambil atau tidak</p>
                </div>
              </div>
            </div>

        </div>

    </div>

    <div id="tujuh" class="tabcontent">
        <br>
        <h3>Kerusakan / Kehilangan Paket</h3>
        <br>

        <div class="accordion accordion-flush" id="accordionFlushExample_6">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne_6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_6" aria-expanded="false" aria-controls="flush-collapseOne_6">
                    Bagaimana cara mengajukan komplain atas kerusakan/kehilangan paket yang terjadi dalam proses pengiriman?
                </button>
              </h2>
              <div id="flush-collapseOne_6" class="accordion-collapse collapse" aria-labelledby="flush-headingOne_6" data-bs-parent="#accordionFlushExample_6">
                <div class="accordion-body">
                    <p style="font-size:14px">Apabila paket hilang atau mengalami kerusakan selama proses pengiriman, Anda bisa melaporkannya kepada kami melalui claim.shipper.id atau chat WhatsApp ke +6280332160215</p>
                    <p style="font-size:14px">Dalam laporan Anda, mohon lampirkan juga dokumen pendukung berikut ini: </p>
                    <ol style="font-size:14px">
                        <li>Bukti pembelian barang atau <i>invoice</i></li>
                        <li>Bukti pengiriman</li>
                        <li>Foto atau video yang menunjukkan kerusakan barang tersebut</li>
                    </ol>
                    <p style="font-size:14px">Klaim akan diproses dalam waktu maksimal 14 hari kerja setelah dokumen pendukung lengkap dan diterima oleh pihak logistik yang bersangkutan</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo_6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo_6" aria-expanded="false" aria-controls="flush-collapseTwo_6">
                    Apa kompensasi yang akan Shipper berikan ke pelanggan jika terjadi kerusakan atau kehilangan barang selama proses pengiriman?
                </button>
              </h2>
              <div id="flush-collapseTwo_6" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo_6" data-bs-parent="#accordionFlushExample_6">
                <div class="accordion-body">
                    <p style="font-size:14px">Apabila terjadi kehilangan/kerusakan barang, maka: </p>
                    <ol style="font-size:14px">
                        <li>Jika menggunakan asuransi, maka kompensasi atas kerusakan dan kehilangan barang akan diganti seharga nilai barang yang disebutkan saat buat order</li>
                        <li>Jika tidak menggunakan asuransi, maka Shipper memberikan ganti rugi sebesar 10 kali dari ongkos kirim atau harga paket. Dipilih harga yang terkecil</li>
                    </ol>
                    <p style="font-size:14px">Contoh: Jika ongkir Rp. 10.000 dan harga barang Rp. 20.000, maka biaya penggantiannya adalah Rp. 10.000 x 10 = Rp. 100.000,00</p>
                    <p style="font-size:14px"><b>PENTING: </b></p>
                    <ul style="font-size:14px">
                        <li>Saat membuat order, pastikan Anda mengisi nilai barang sesuai dengan harga yang sebenarnya</li>
                        <li>Wajib gunakan asuransi apabila paket yang Anda kirim adalah barang mudah rusak/pecah (fragile) dan barang penting</li>
                    </ul>
                </div>
              </div>
            </div>

        </div>

    </div>

    <div id="delapan" class="tabcontent">
        <br>
        <h3>Ketentuan Pelaksanaan Jasa Go-Send & Grabexpress</h3><br>
        <p><b>GO-SEND</b></p><br>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20%"></th>
                    <th style="width:40%">Instant Delivery</th>
                    <th style="width:40%">Same Day Delivery</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Waktu Pelaksanaan Jasa</th>
                    <th>Weekdays dan Weekend termasuk tanggal merah : 24 jam</th>
                    <th>Weekdays dan Weekend : 08:00 – 17:00 WIB</th>
                </tr>
                <tr>
                    <th>Area pengiriman</th>
                    <th>Seluruh Indonesia dengan detail area terlampir</th>
                    <th>Jabodetabek</th>
                </tr>
                <tr>
                    <th>Waktu Pengambilan</th>
                    <th>Langsung</th>
                    <th>Pada hari yang sama – paling lama 4 (empat) jam</th>
                </tr>
                <tr>
                    <th>Batasan Jarak</th>
                    <th>40 km</th>
                    <th>40 km</th>
                </tr>
                <tr>
                    <th>Batasan Berat</th>
                    <th>
                        <ul>
                            <li>Berat aktual : 20 kg</li>
                            <li>Berat volumetric : Panjang x lebar x tinggi : 70 x 50 x 50 cm</li>
                        </ul>
                    </th>
                    <th>
                        <ul>
                            <li>Berat aktual : 5 kg</li>
                            <li>Berat volumetric : Panjang x lebar x tinggi : 40 x 40 x 17 cm</li>
                        </ul>
                    </th>
                </tr>
                <tr>
                    <th>Asuransi</th>
                    <th>Tersedia</th>
                    <th>Tersedia</th>
                </tr>
                <tr>
                    <th>Investigasi terhadap klaim</th>
                    <th>3x24 jam sejak dilakukan klaim</th>
                    <th>3x24 jam sejak dilakukan klaim</th>
                </tr>
                <tr>
                    <th>Nilai Klaim</th>
                    <th>Sesuai nilai barang maksimal Rp 10.000.000,00</th>
                    <th>Sesuai nilai barang maksimal Rp 10.000.000,00</th>
                </tr>
            </tbody>
        </table>
        <br><p><b>GRABEXPRESS</b></p><br>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20%"></th>
                    <th style="width:40%">Instant Delivery</th>
                    <th style="width:40%">Same Day Delivery</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Waktu Pelaksanaan Jasa</th>
                    <th>
                        <ul>
                            <li>Weekdays : 09:00 – 18:00 WIB</li>
                            <li>Weekend : 09:00 – 18:00 WIB</li>
                        </ul>
                        Dengan ketentuan waktu pemesanan : 09:00 – 16:00 WIB
                    </th>
                    <th>
                        <ul>
                            <li>Weekdays : 09:00 – 16:00 WIB</li>
                            <li>Weekend : 09:00 – 16:00 WIB</li>
                        </ul>
                        Dengan ketentuan:
                        <ul>
                            <li>Estimasi waktu pemesanan : 09:00 – 16:00</li>
                            <li>Estimasi waktu penerimaan: di hari yang sama sampai batas waktu pelaksanaan jasa.</li>
                        </ul>
                    </th>
                </tr>
                <tr>
                    <th>Area pengiriman</th>
                    <th>Jabodetabek</th>
                    <th>Jabodetabek</th>
                </tr>
                <tr>
                    <th>Waktu Pengambilan</th>
                    <th>Langsung</th>
                    <th>Pada hari yang sama – paling lama 4 (empat) jam</th>
                </tr>
                <tr>
                    <th>Waktu Pengiriman</th>
                    <th>Paling lama 4 (empat) jam</th>
                    <th>Pada hari yang sama – paling lama 8 (delapan) jam setelah pengambilan</th>
                </tr>
                <tr>
                    <th>Batasan Jarak</th>
                    <th>30 km</th>
                    <th>40 km</th>
                </tr>
                <tr>
                    <th>Batasan Berat</th>
                    <th>
                        <ul>
                            <li>Berat aktual : 7 kg</li>
                            <li>Berat volumetric : Panjang x lebar x tinggi : 40 x 40 x 20 cm</li>
                        </ul>
                    </th>
                    <th>
                        <ul>
                            <li>Berat aktual : 7 kg</li>
                            <li>Berat volumetric : Panjang x lebar x tinggi : 40 x 40 x 20 cm</li>
                        </ul>
                    </th>
                </tr>
                <tr>
                    <th>Asuransi</th>
                    <th>Tersedia</th>
                    <th>Tersedia</th>
                </tr>
                <tr>
                    <th>Investigasi terhadap klaim</th>
                    <th>3x24 jam sejak dilakukan klaim</th>
                    <th>7x24 jam sejak dilakukan klaim</th>
                </tr>
                <tr>
                    <th>Nilai Klaim</th>
                    <th>
                        Maksimal Rp 10.000.000,00
                        <br>
                        Dengan ketentuan kecuali barang berikut yang tidak dapat diasuransikan:
                        <ol>
                            <li>Makanan dan/ atau minuman yang mudah rusak atau membutuhkan penanganan khusus;</li>
                            <li>Obat-obatan terlarang, alcohol, dan narkotika;</li>
                            <li>Surat-surat berharga;</li>
                            <li>Barang-barang yang termasuk dalam kategori tidak dapat dijemput pihak Grab;</li>
                            <li>Barang-barang berupa cairan.</li>
                        </ol>
                        <br>
                        Pengajuan klaim harus menyertakan:
                        <ol>
                            <li>Surat pernyataan hilang berikut
                                rincian barang yang rusak atau hilang dengan menyebutkan nomor AWB;</li>
                            <li>Fotokopi KTP pengirim (jika penegiriman atas nama pribadi);</li>
                            <li>Foto barang yang rusak.</li>
                        </ol>
                    </th>
                    <th>Maksimal 10x biaya kirim</th>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="sembilan" class="tabcontent">
        <br>
        <h3>Ketentuan Kategori Barang Setiap Ekspedisi</h3><br>
        <p style="font-size: 14px"><b>Keterangan:</b></p><br>
        <p style="font-size: 14px">✓ - Dapat diproses</p>
        <p style="font-size: 14px">✘ - Tidak dapat diproses</p><br>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:10%">Kategori Barang</th>
                    <th style="width:5%">JNE</th>
                    <th style="width:5%">J&T</th>
                    <th style="width:5%">TIKI</th>
                    <th style="width:5%">SICEPAT</th>
                    <th style="width:5%">LION</th>
                    <th style="width:5%">NINJA EXPRESS</th>
                    <th style="width:5%">SAP</th>
                    <th style="width:5%">RPX</th>
                    <th style="width:5%">ANTERAJA</th>
                    <th style="width:5%">INDAH CARGO</th>
                    <th style="width:5%">GRAB Express</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Binatang Hidup / Binatang yang Dilindungi</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                </tr>
                <tr>
                    <th>Asbes</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Emas/ Perak Dalam Jumlah Banyak</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Mata Uang (dollar, koin dll)</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang Berbahaya / Mudah Terbakar (DG)</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Bahan Peledak</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Senjata Api /Amunisi /Senjata Tajam</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                </tr>
                <tr>
                    <th>Petasan</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang-Barang Bernilai Budaya (Seni) / Barang Antik</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Organ Tubuh Manusia /Abu Manusia</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Perhiasan / LM</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Narkotika / Ganja dll</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                </tr>
                <tr>
                    <th>Minuman Keras Berakohol</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Hasil Dari Hewan</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Mesin Fotocopy Berwarna dan Bagiannya</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Obat-Obatan Termasuk JAMU</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Tanaman dan Bibit Tanaman (Tumbuhan)</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Alat-Alat Telekomunikasi</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Makanan yang Tidak Terdaftar BPOM/ Dept Kesehatan</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Limbah</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang Rekaman/ Barang Lainnya yang Bertentangan Kesusilaan</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang yang Waktu Hidup-nya Kurang Dari Transit Time Pengiriman yang Diperkirakan</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Kiriman Dalam Bentuk Cairan (kecuali dikemas dengan baik dan benar dengan melampirkan MSDS)</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Peralatan Judi dan Tiket Lotere</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang yang di Kategorikan Dalam Pengawasan Pemerintah</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Barang yang Terbuat Dari Bahan Gelas, Keramik dan Pecah Belah</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Surat-Surat Berharga (dokumen, STNK, ijazah, akte rumah, sertifikat, BPKB, KTP, passport, dll)</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✘</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Produk Makanan/ Barang Mudah Rusak dan Basi (Frozen Food)</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Produk Elektronik Dengan Berat Sampai 50kg</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
                <tr>
                    <th>Prangko, Materaicukai Pajak, Materai Pajak dan Voucher</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✓</th>
                    <th>✘</th>
                    <th>✓</th>
                    <th>✓</th>
                </tr>
            </tbody>
        </table>

        <br>
        <h3 style="font-size: 20px"><b>List barang yang dilarang dikirim</b></h3><br>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20%">3PL</th>
                    <th style="width:80%">Barang yang Dilarang Dikirim</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>ANTAREJA</th>
                    <th>
                        <ol>
                            <li>Makhluk hidup (hewan dan tumbuhan), uang, surat berharga (cek, giro, obligasi, saham, sertifikat, KTP, Kartu Keluarga, BPKB, SIM, akte lahir, dll), barang yang mudah meledak, senjata dan bagian-bagiannya, peralatan perjudian dan tiket lotere, narkoba dan obat-obatan atau barang terlarang lainnya</li>
                            <li>Barang yang bertentangan dengan hukum, nilai kesusilaan dan dapat mengganggu stabilitas keamanan dan ketertiban umum, barang yang dikategorikan dalam pengawasan pemerintah, barang-barang yang terbuat dari bahan gelas, acrylic, dan batuan marmer</li>
                            <li>Barang dalam kategori berbahaya, beracun dan barang-barang kimia yang mudah meledak atau terbakar, kecuali dikemas dengan baik dan benar (dengan melampirkan Material Safety Data Sheet dan surat pernyataan barang berbahaya dari Pelanggan), alkohol dan minuman beralkohol</li>
                            <li>Barang seni, termasuk hasil karya dari keahlian, bakat atau talenta untuk diperjualbelikan, dipamerkan atau pun untuk dikoleksi seperti lukisan, gambar, jambangan, hiasan dinding dari permadani</li>
                            <li>Barang antik, segala jenis komoditi yang memperlihatkan ciri-ciri masa lampau dan memiliki nilai tersendiri karena sejarah, usia dan kelangkaannya, seperti furniture, peralatan makan, barang pecah belah dan barang-barang koleksi seperti koin dan perangko</li>
                            <li>Perhiasan, termasuk diantaranya adalah barang perhiasan dari permata yang tidak asli, jam tangan dan bagian-bagian dari jam tangan tersebut, permata asli atau batu permata (batu mulia atau semi mulia), berlian hasil kerajinan (sudah diasah dan dibentuk) dan perhiasan terbuat dari logam mulia</li>
                            <li>Logam mulia, termasuk diantaranya, emas dan perak, platina (kecuali sebagai bagian tak terpisahkan dari peralatan elektronik)</li>
                            <li>Produk elektronik dengan berat sampai dengan 50kg seperti notebook, kamera digital, dan lain sebagainya</li>
                            <li>Perangko, materai cukai minuman keras, materai pajak dan voucher</li>
                            <li>Komoditi yang bernilai tinggi, seperti sarang burung walet, bulu binatang, dan sutra</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>JNE</th>
                    <th>
                        <ol>
                            <li>JNE tidak menerima kiriman yang dilarang sebagaimana diatur dalam SSP ini, kecuali diatur secara khusus dan terpisah dari SSP ini.</li>
                            <li>JNE tidak menerima dan berhak menolak untuk melakukan pengiriman atas Kiriman yang dilarang berdasarkan ketentuan JNE dan perundangan yang berlaku di  Republik Indonesia, seperti: Barang berbahaya yang mudah meledak atau terbakar, narkotika, psikotropika, senjata api, senjata tajam, emas, perangko, barang curian, cek, bilyet, giro, uang tunai, money order, traveller’s cheque, benda yang melanggar kesusilaan dan/atau barang lainnya yang menurut perundang-undangan dinyatakan sebagai barang terlarang.</li>
                            <li>Pengirim membebaskan JNE apabila terjadi kerugian dan/atau biaya yang timbul termasuk tuntutan hukum, yang diakibatkan karena kelalaian dan kesalahan Pengirim yang timbul akibat tidak mematuhi ketentuan pada poin 1 dan 2.</li>
                            <li>JNE berhak untuk mengambil langkah yang dianggap perlu, segera setelah mengetahui adanya pelanggaran terhadap poin ini.</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>SICEPAT</th>
                    <th>
                        <ol>
                            <li>Uang (koin, uang tunai dalam rupiah dan/atau mata uang asing lainnya), surat berharga (cek, giro, obligasi, saham, sertifikat).</li>
                            <li>Narkotika ganja, morphin dan obat-obat atau zat-zat yang dianggap sebagai benda terlarang lainnya.</li>
                            <li>Barang, cetakan, rekaman atau barang-barang lainnya yang bertentangan dengan nilai kesusilaan dan dapat mengganggu stabilitas keamanan dan ketertiban umum</li>
                            <li>Barang yang waktu hidupnya kurang dari transit time pengiriman yang diperkirakan</li>
                            <li>Makhluk hidup (binatang dan tumbuhan)</li>
                            <li>Barang dalam kategori berbahaya, beracun dan barang-barang kimia yang mudah meledak atau terbakar</li>
                            <li>Alkohol dan minuman beralkohol</li>
                            <li>Kiriman dalam bentuk cairan</li>
                            <li>Barang yang mudah meledak, senjata dan bagian-bagiannya</li>
                            <li>Peralatan judi dan tiket lotre</li>
                            <li>Barang-barang yang dikategorikan dalam pengawasan pemerintah</li>
                            <li>Barang-barang yang terbuat dari bahan gelas, keramik, dan pecah belah</li>
                            <li>Produk makanan/barang mudah rusak/basi</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>LION PARCEL</th>
                    <th>
                        <ol>
                            <li>Lion Parcel tidak menerima pengiriman paket untuk kategori barang-barang berbahaya, barang mudah meledak, mudah terbakar, beracun, barang curian, obat-obatan terlarang (narkotika, ganja, morfin atau zat psikotropika lainnya) atau yang dapat merusak barang lainnya yang dapat membahayakan keselamatan dan keamanan penerbangan sipil dan atau moda transportasi lainnya yang dipergunakan Lion Parcel.</li>
                            <li>Lion Parcel tidak menerima pengiriman paket yang berisi emas, perak, uang logam, perhiasan, binatang atau tanaman hidup, barang antik dan dokumen berharga atau barang berharga lainnya kecuali bila diatur dalam perjanjian lain antara Lion Parcel dan Pelanggan.</li>
                            <li>Lion Parcel tidak bertanggung jawab atau seluruh biaya, klaim yang mungkin timbul atas kerusakan, kehilangan, dan/atau tuntutan dari pihak manapun terhadap pengiriman paket yang dilarang sebagaimana diatur pada poin (1) dan (2).</li>
                            <li>Lion Parcel berhak namun tidak wajib untuk memeriksa paket pelanggan untuk memastikan kelayakan pengiriman paket sesuai dengan ketentuan operasional kargo, pengurusan Bea Cukai dan instansi terkait serta Standar Operasi Lion Parcel.</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>INDAH CARGO</th>
                    <th>
                        <ol>
                            <li>TITIPAN BERHARGA adalah jenis kiriman yang memiliki kriteria sebagai berikut:
                                <ol>
                                    <li>Menurut pengakuan PENGIRIMAN memiliki harga yang tinggi</li>
                                    <li>Memiliki bentuk dan penanganan yang khusus</li>
                                    <li>Merupakan barang yang memiliki arti khusus bagi PENGIRIM dan PENERIMA</li>
                                </ol>
                            </li>
                            <li>Barang-barang berbahaya adalah TITIPAN yang mudah meledak atau terbakar, mudah pecah, kebocoran pada barang cair, obat-obatan terlarang menurut ketentuan hukum dan perundang-undangan yang berlaku dilarang diproduksi dan diedarkan.</li>
                            <li>Barang-barang berharga dan surat-surat berharga adalah TITIPAN sesuai jenis dan kriteria berupa: Emas, Perak, Perhiasan, Uang Tunai, Sianida, Platinum dan Batu atau Metal Berharga, Cek Tunai, Bilyet Giro, Money Order atau Traveller’s Cheque, Barang Antik, BPKB, STNK, Mutasi Kendaraan, Kier Kendaraan, Ijazah, Passport, Sertifikat Tanah / Rumah, Akte Kelahiran, Dokumen Asuransi, Kartu Tanda Penduduk (KTP), Surat Izin Mengemudi (SIM), Raport, Kartu  Keluarga (KK), Dokumen Notaris, Surat Kuasa, Sertifikat HGB, Buku Nikah, Akta/Surat Kematian, Sertifikat Produk (ISO, Lisensi), SK Pensiun dan Surat Keterangan  Pindah (Domisili), dll.</li>
                            <li>Barang yang dilarang oleh pemerintah adalah TITIPAN yang di dalamnya mengandung kriteria seperti: Obat-obatan terlarang, Ganja, Narkotika (Narkoba), Senjata Api, Binatang Langka, Binatang yang Dilindungi, termasuk di dalamnya organ tubuh hewan/binatang.</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>TIKI</th>
                    <th>
                        <ol>
                            <li><i>Animals: </i>Binatang</li>
                            <li><i>Asbestos: </i>Asbes</li>
                            <li><i>Bullion: </i>Emas/Perak dalam jumlah yang banyak</li>
                            <li><i>Currency: </i>Mata uang</li>
                            <li><i>Dangerous goods, combustible, and hazardous materials: </i>Barang-barang berbahaya dan barang yang mudah terbakar</li>
                            <li><i>Explosive materials: </i>Bahan peledak</li>
                            <li><i>Firearms; pars thereof and ammunition: </i>Senjata api dan amunisi</li>
                            <li><i>Fireworks or firecrackers: </i>Petasan</li>
                            <li><i>Goods of cultural value: </i>Barang-barang yang bernilai budaya</li>
                            <li><i>Human remains, including ashes: </i>Organ tubuh manusia/abu manusia</li>
                            <li><i>Jewellery, precious metals and stones: </i>Perhiasan, logam mulia dan batu berharga</li>
                            <li><i>Narcotics: </i>Narkotika</li>
                            <li><i>Alcoholic beverages: </i>Minuman keras dan beralkohol</li>
                            <li><i>Animal products: </i>Hasil dari hewan</li>
                            <li><i>Color photo copy and parts: </i>Mesin fotocopy berwarna dan bagiannya</li>
                            <li><i>Medicine: </i>Obat-obatan, termasuk jamu</li>
                            <li><i>Plants and plant seeding: </i>Tanaman dan bibit tanaman</li>
                            <li><i>Telecommunication equipments: </i>Alat-alat telekomunikasi</li>
                            <li><i>Unregistered food and beverages at the Department of Health: </i>Makanan dan minuman yang tidak terdaftar pada Departemen Kesehatan RI</li>
                            <li><i>Waste: </i>Limbah</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>SAP</th>
                    <th>
                        <ol>
                            <li>Pihak Kedua wajib memberitahu Pihak  Pertama terlebih dahulu mengenai pengiriman Barang Berbahaya dan menyampaikan dokumen yang disebut sebagai Material Safety Data Sheet (MSDS) yang dibuat/dikeluarkan oleh produsen/pembuat Barang Berbahaya atau Pihak Kedua yang berisi deskripsi atau penjelasan mengenai macam barang, jenis bahan (misalnya padat, cairan, gas, racun, radioaktif dan sebagainya) beserta tanda-tanda (remarks) dan label yang jelas dari Barang Berbahaya tersebut.</li>
                            <li>Pihak Pertama menyerahkan Barang Berbahaya tersebut kepada pihak yang mempunyai keahlian/kemampuan khusus dan ijin untuk mengemas kembali barang Barang Berbahaya (“Agen DG”) sesuai dan untuk memenuhi syarat dan standar keamanan dan keselamatan penerbangan yang ditetapkan oleh pemerintah Indonesia dan ICAO atau IATA.</li>
                            <li>Setelah Barang Berbahaya dikemas kembali, Agen DG akan menerbitkan dokumen berupa “Shipper Declaration” untuk selanjutnya diberikan kepada pihak pengangkut.</li>
                            <li>Berhubung pelaksanaan langkah-langkah 1, 2, dan 3 tersebut di atas memerlukan waktu, maka Pihak Kedua harus memberitahu Pihak Pertama mengenai pengiriman Barang Berbahaya beberapa hari sebelum tanggal pengiriman yang diinginkan.</li>
                            <li>Semua biaya atau ongkos berkenaan atau yang berkaitan dengan pengiriman Barang Berbahaya tersebut di atas ditanggung dan dibayar oleh Pihak Kedua.</li>
                            <li>Untuk jasa pengiriman Barang Berbahaya berlaku tarif khusu yang disepakati bersama oleh Para Pihak yang terpisah dari tarif pengiriman umum yang tercantum dalam Lampiran 3 Perjanjian ini.</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>NINJA XPRESS</th>
                    <th>
                        <ol>
                            <li>Uang (koin, uang tunai dalam rupiah dan/atau mata uang asing lainnya), surat berharga (cek, giro, obligasi, saham sertifikat).</li>
                            <li>Narkotika, ganja, morphin dan obat-obat atau zat-zat yang dianggap sebagai benda terlarang lainnya.</li>
                            <li>Barang cetakan, rekaman atau barang-barang lainnya yang bertentangan dengan nilai kesusilaan dan dapat mengganggu stabilitas keamanan dan ketertiban umum.</li>
                            <li>Barang yang waktu hidupnya kurang dari transit time pengiriman yang diperkirakan.</li>
                            <li>Makhluk hidup (binatang dan tumbuhan).</li>
                            <li>Barang dalam kategori berbahaya, beracun dan barang-barang kimia yang mudah meledak atau terbakar.</li>
                            <li>Alkohol dan minuman beralkohol.</li>
                            <li>Kiriman dalam bentuk cair lainnya kecuali dikemas dengan baik dan benar (dengan melampirkan MSDS <i>(Material Safety Data Sheet)</i> dan surat pernyataan barang berbahaya dari pelanggan).</li>
                            <li>Barang yang mudah meledak, senjata dan bagian-bagiannya.</li>
                            <li>Peralatan judi dan tiket lotre.</li>
                            <li>Barang-barang yang dikategorikan dalam pengawasan pemerintah.</li>
                            <li>Barang-barang yang terbuat dari bahan gelas, keramik, dan pecah belah.</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>J&T</th>
                    <th>Barang yang dikategorikan:
                        <ol>
                            <li>Dangerous goods</li>
                            <li>Emas</li>
                            <li>Logam mulia</li>
                            <li>Surat berharga</li>
                            <li>Organ tubuh</li>
                            <li>Obat-obat terlarang</li>
                            <li>Barang seni bernilai tinggi</li>
                            <li>Tanaman dan binatang hidup</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>RPX</th>
                    <th>
                        <ol>
                            <li>Uang (koin, uang tunai dalam rupiah dan/atau mata uang asing lainnya), surat berharga (<i>cheque</i>, giro, obligasi, saham, sertifikat)</li>
                            <li>Narkotika, ganja, morphin dan obat-obat atau zat-zat yang dianggap sebagai benda terlarang lainnya</li>
                            <li>Paket cetakan, rekaman atau paket-paket lainnya yang bertentangan dengan nilai kesusilaan dan dapat mengganggu stabilitas keamanan dan ketertiban umum</li>
                            <li>Paket yang waktu hidupnya kurang dari transit time pengiriman yang diperkirakan</li>
                            <li>Makhluk hidup (binatang dan tumbuhan)</li>
                            <li>Paket dalam kategori berbahaya, beracun dan paket-paket kimia yang mudah meledak atau terbakar</li>
                            <li>Alkohol dan minuman beralkohol</li>
                            <li>Kiriman dalam bentuk cair lainnya kecuali dikemas dengan baik dan benar (dengan melampirkan MSDS (Material Safety Data Sheet) dan surat pernyataan paket berbahaya dari pelanggan)</li>
                            <li>Paket yang mudah meledak, senjata dan bagian-bagiannya</li>
                            <li>Peralatan judi dan tiket lotre</li>
                            <li>Paket-paket yang dikategorikan dalam pengawasan pemerintah</li>
                            <li>Paket-paket yang terbuat dari bahan gelas</li>
                        </ol>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="sepuluh" class="tabcontent">
        <br>
        <h3>Standard Packing</h3><br>
        <ol style="font-size:14px">
            <li>Menggunakan kemasan luar dengan ketentuan:
                <ul>
                    <li>Memiliki ketebalan/kekuatan/ketahanan yang baik (dapat melindungi isi paket)</li>
                    <li>Memiliki ukuran lebih besar dari label, sehingga label Shipper atau label 3PL bisa ditempel dengan mudah.</li>
                    <li>Memiliki bentuk yang beraturan (kubus/balok/tabung/bola)</li>
                    <li>Jika kemasan luar yang digunakan berupa kardus/box bekas, maka wajib tidak ada sobekan, tidak bolong, tidak penyok, tidak ada bekas stiker/label lainnya. </li>
                </ul>
                    <br>Contoh:<br><br>
                    <img src="https://faq.shipper.id/wp-content/uploads/2022/06/unnamed.png" class="icon mx-auto">
                    <img src="https://faq.shipper.id/wp-content/uploads/2022/06/unnamed-1.png" class="icon mx-auto"><br>
                    <img src="https://faq.shipper.id/wp-content/uploads/2022/06/check.png" class="yes">
                    <img src="https://faq.shipper.id/wp-content/uploads/2022/06/cross.png" class="no"><br>
                    <br><div class="yes"><i>Gambar contoh kemasan luar yang benar dan salah.</i></div><br>
            </li>
            <li>Apabila paket sudah menggunakan kemasan (kardus/box) komersil (terdapat logo /brand) sebagai kemasan luar paket, maka paket dapat dikirimkan langsung tanpa dikemas ulang, namun pada kemasan komersial <b>wajib dilapisi bubble wrap minimal 3 lapis</b>. Tujuan penggunaan bubble wrap untuk melapisi agar menghindari kerusakan pada kemasan komersial paket tersebut.
                <br>
                <br>Contoh:<br><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Bubble-wrap-benar-300x186.png" class="icon mx-auto">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Bubble-wrap-salah.png" class="icon mx-auto"><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/check.png" class="yes">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/cross.png" class="no"><br>
                <br><div class="yes"><i>Gambar contoh penggunaan bubble wrap pada kemasan komersial.</i></div><br>
            </li>
            <li>Tambahkan Lapisan peredam (<i>bubble wrap / p-foam / sealed-air</i> / koran, dsb) untuk meredam goncangan yang dapat menyebabkan kerusakan pada isi paket selama proses pengiriman. Jika menggunakan bubble wrap, <b>gunakan 3 lapis pengemasan</b>.</li>
            <br>Contoh:<br><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Lapisan-peredam-1-300x207.png" class=" mx-auto">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Lapisan-peredam-2-300x200.png" class=" mx-auto">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Lapisan-peredam-3-300x188.png" class=" mx-auto"><br>
                <br><div class="yes"><i>Gambar contoh lapisan peredam.</i></div><br>
            <li>Selalu menggunakan kemasan luar (Kardus/<i>box</i>/paralon), jangan gunakan <i>bubble wrap</i>/ plastik langsung sebagai kemasan luar (<i>bubble wrap</i> tidak berfungsi sebagai kemasan luar , tetapi sebagai lapisan peredam). <b>Kecuali sudah ada kemasan kardus komersil seperti di poin 2.</b>
            <br>Contoh:<br><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Bubble-wrap-paket-benar.png" class="yes-img">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Bubble-wrap-paket-salah.png" class="no-img"><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/check.png" class="yes">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/cross.png" class="no"><br>
                <br><div class="yes"><i>Gambar penggunaan bubble wrap pada paket yang benar dan salah.</i></div><br>
            </li>
            <li>Apabila mengharuskan menggunakan packing kayu, maka:
                <ul>
                    <li>Sudut luar <i>packaging</i> kayu harus dilapisi <i>p-foam/bubble</i> kemudian <i>wrap</i> keseluruhan <i>packaging</i> dengan plastik <i>wrap</i> agar tidak ada sudut tajam yang memungkinkan merusak paket lainnya.</li>
                    <li>Bagian kemasan dalamnya (sisi atas, bawah, samping) terlindungi oleh kayu</li>
                </ul>
                <br>Contoh:<br><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Packing-kayu-benar-190x300.png" class="yes-img">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Packing-kayu-salah.png" class="no-img"><br>
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/check.png" class="yes">
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/cross.png" class="no"><br>
                <br><div class="yes"><i>Gambar contoh packing kayu yang benar dan salah.</i></div><br>
            </li>
            <li>Jika paket yang dikirimkan berupa cairan/bubuk/pasta yang dikemas menggunakan wadah bertutup sehingga memungkinkan timbulnya kebocoran atau tumpah, maka barang tersebut harus di:
                <ul>
                    <li>Bagian tutup barang wajib di lakban/isolasi</li>
                    <li>Kemudian membungkus wadah dengan plastik</li>
                    <li>Lalu lapisi dengan <i>bubble wrap</i></li>
                </ul>
            </li><br>
            <li>Setelah melakukan <i>packing</i>, pengirim wajib menyertakan detail alamat tujuan atau menempel label <i>marketplace</i> pada paket.
                <img src="https://faq.shipper.id/wp-content/uploads/2022/06/Detail-alamat.png" class="icon no">
                <ul>Catatan:
                    <li>Jika ada informasi yang kurang, paket akan diproses H+1 setelah <i>pickup</i>. Mohon untuk  memperhatikan detail informasi agar pengiriman bisa berjalan dengan tepat waktu</li>
                    <li>Shipper berhak untuk menolak pengambilan paket <i>cashless</i> yang tidak memiliki <i>label</i> dan memiliki <i>bad label</i> (tintanya buram, sobek, basah, atau tertutup <i>packaging</i>).</li>
                    <li>Shipper berhak untuk mengembalikan paket cashless yang tidak memiliki label, paket yang tidak memiliki keterangan 3PL, dan paket yang memiliki bad label.</li>
                </ul>
            </li><br>
            <li>Saat <i>handover</i> paket dengan tim driver Shipper, pastikan kemasan paket tidak rusak, penyok, berbau, bocor, bergerak/bergetar. Hal ini demi keamanan pada saat proses pengiriman</li><br>
        </ol>
        <h3>Detail Informasi Metode Packaging</h3>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:10%">Kategori</th>
                    <th style="width:15%">Jenis Paket</th>
                    <th style="width:10%">Bubble Wrap</th>
                    <th style="width:10%">Kemasan/Lapisan Dalam</th>
                    <th style="width:10%">Kemasan Luar</th>
                    <th style="width:10%">Packing Kayu</th>
                    <th style="width:40%">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="4">General Komoditi</th>
                    <th>Pakaian, Tas, Sepatu, Topi, Aksesoris, Jenis Tekstil Lainnya</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>
                        <ol>
                            <li>Tidak wajib menggunakan packing kayu</li>
                            <li>Kemasan dalam dapat menggunakan plastic seal/klip</li>
                            <li>Sebelum memasukkan barang kiriman ke dalam kotak, gunakan pengisi seperti koran, <i>loosefill</i> peanuts (kacang-kacangan dari busa), atau bahan bantalan udara seperti Bubble Warp</li>
                            <li>Kemasan luar dapat menggunakan plastik/kardus tergantung jumlah</li>
                            <li>Gunakan H <i>Taping Method</i> untuk menyegel paket</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Dokumen</th>
                    <th>Tidak</th>
                    <th>Opsional</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>
                        <ol>
                            <li>Bungkus dokumen dengan amplop dokumen</li>
                            <li>Masukkan dokumen kedalam kardus dengan ukuran 30cm x20cm x10cm</li>
                            <li>Tutup kardus dan rapatkan dengan menggunakan <i>tape band</i> atau lakban.</li>
                            <li>Bungkus kembali kardus dengan plastik <i>wrapping</i></li>
                            <li>Kemudian pasang lakban <i>regpack / onepack / landpack</i> dengan cara</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Makanan basah, makanan kering</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>
                        <ol>
                            <li>Perhatikan ketahanan makanan</li>
                            <li>Tidak membutuhkan kemasan dalam dan packing kayu</li>
                            <li>Kemasan luar dapat menggunakan plastik/kardus tergantung jumlah</li>
                            <li>Untuk makanan kering wajib menggunakan kardus dan bubble wrap 5 lapis</li>
                            <li>Khusus untuk <i>frozen food</i>, sayur mayur, makanan siap saji, diwajibkan untuk memilih pengiriman <i>via instant delivery</i></li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Bibit tanaman, Sarang burung walet</th>
                    <th>Tidak</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        <ol>
                            <li>Kemasan dalam untuk tanaman dapat menggunakan plastik/ kertas/ koran</li>
                            <li>Kemasan dalam untuk sarang burung walet dapat menggunakan kotak plastik</li>
                            <li>Kemasan luar dapat menggunakan kardus/kayu</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th rowspan="8">Special Komoditi</th>
                    <th>Handphone dan laptop, TV, elektronik lainnya /barang pecah-belah, dll</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>Mengikuti ketentuan 3PL. Jika 3PL yang digunakan di luar 3PL dibawah ini maka cara packaging dapat menyesuaikan ke Sicepat.
                        <br><br><b>TIKI:</b><br><br>
                        <ol>
                            <li>Lapisi kotak bawaan pabrik dengan busa kacang</li>
                            <li>Gunakan lapisan Kotak luar</li>
                        </ol>
                        <br><br><b>SiCepat:</b><br><br>
                        <ol>
                            <li>Lapisi bagian dalam dengan plastik pada bungkus elektronik bawaan pabrik lalu bubble wrap minimal 3 lapis untuk ketebalannya</li>
                            <li>Gunakan kardus untuk lapisan luar atau kayu</li>
                        </ol>
                        <br><br><b>J&T:</b><br><br>
                        <ol>
                            <li>Gunakan Kardus atau Kotak Kayu untuk lapisan luar</li>
                            <li>Lapisi produk dengan Bubble Wrap/Kantong Udara/Bubble Bag</li>
                        </ol>
                        <br><br><b>RPX:</b><br><br>
                        <ol>
                            <li>Menggunakan box original bawaan pabrik</li>
                            <li>Lapisi box original dengan bubble wrap minimal 5 cm</li>
                            <li>Masukkan ke box karton eksternal lalu segel dan labeli dengan label fragile</li>
                            <li>Penggunaan kayu adalah opsional</li>
                        </ol>
                        <br><br><b>Lion Parcel:</b><br><br>
                        <ol>Panduan umum <i>packing</i> barang Elektronik:
                            <li>Elektronik dan perangkatnya di semua sisi harus dilapisi dengan plastik <i>bubble</i>/plastik gelembung</li>
                            <li>Tempatkan barang yang sudah dilapisi dengan plastik <i>bubble</i>/plastik gelembung pada kotak luar yang kuat</li>
                            <li>Aksesoris yang juga sudah dilapisi dengan plastik <i>bubble</i>/gelembung bisa juga ditempatkan di ruang kosong kotak</li>
                            <li>Isi semua ruang yang masih kosong dengan plastik <i>bubble</i>/gelembung untuk memadatkan sisi ruang yang kosong dalam kotak agar tidak goyang/guncang selama dalam perjalanan</li>
                            <li>Tutup dan segel di kedua bagian atas dan bawah pada box dengan menggunakan <i>tape</i>/lakban, minimal 2 cm lebar dari lakban tersebut</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Makanan cair atau cairan yang dapat dikirimkan</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        <ol>
                            <li>Bagian tutup harus di isolasi / lakban</li>
                            <li>Kemasan dalam dapat menggunakan plastik</li>
                            <li>Untuk cairan gunakan bubble wrap minimal 3 lapis untuk setiap produknya</li>
                            <li>Untuk cairan dengan jumlah banyak, wajib packing kayu</li>
                            <li>Kemasan luar dapat menggunakan kardus</li>
                            <li>Ruang kosong di dalam kardus wajib dipadatkan dengan foam, sealed air, atau koran, dll</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Obat-obatan yang dapat dikirimkan</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        Mengikuti ketentuan 3PL. Jika 3PL yang digunakan di luar 3PL dibawah ini maka cara packaging dapat menyesuaikan ke Sicepat.
                        <br><br><b>J&T</b>
                        <ol>
                            <li>Jika dalam bentuk cairan, bagian tutup barang harus di isolasi / lakban</li>
                            <li>Lapisi bagian bungkus produk dengan <i>bubble wrap</i> minimal 3 lapis</li>
                            <li>Untuk obat cairan  lapisi dengan <i>bubble wrap</i> minimal 3 lapis untuk setiap produknya</li>
                            <li>Untuk obat cairan dengan jumlah banyak wajib <i>packing</i> kayu</li>
                            <li>Kemasan luar dapat menggunakan kardus</li>
                            <li>Ruang kosong di dalam kardus wajib dipadatkan dengan <i>foam, sealed air,</i> atau koran, dll</li>
                        </ol>
                        <b>Sicepat</b>
                        <ol>
                            <li>Lapisi bagian bungkus produk dengan <i>bubble wrap</i> minimal 3cm untuk ketebalannya</li>
                            <li>Pastikan tidak ada <i>space</i> kosong, jika masih ada <i>space</i> kosong, tambahkan lapisan damper seperti foam</li>
                            <li>Gunakan kardus untuk lapisan luar atau kayu</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Paket Berukuran kecil (< 24 cm x 15cm)</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>
                        <ol>
                            <li>Lapisi produk dengan <i>bubble wrap</i></li>
                            <li>Masukan ke dalam <i>container</i> (kardus atau kayu menyesuaikan tipe produk)</li>
                            <li>Lapisi ruang kosong dengan <i>foam, sealed air,</i> atau koran, dll</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Helm/ Paket Bentuk Bulat /Tak beraturan</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>Wajib</th>
                    <th>Tidak</th>
                    <th>
                        <ol>
                            <li>Kemasan luar dapat menggunakan kardus</li>
                            <li>Tutupi ruang kosong dengan <i>foam, sealed air,</i> atau koran, dll</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Pecah Belah (piring, gelas, kaca, keramik,plat, blok, barang kerajinan, produk gipsum, batu giok)</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        <ol>
                            <li>Lapisi bagian bungkus produk dengan <i>bubble wrap, sterofoam,</i> kantong udara, minimal 3 lapis untuk ketebalannya</li>
                            <li>Pastikan tidak ada space kosong, jika masih ada <i>space</i> kosong, tambahkan lapisan <i>damper</i> seperti <i>foam</i>, bola kapas, koran</li>
                            <li>Gunakan kardus untuk lapisan luar atau kayu</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Furniture</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>
                        <ol>
                            <li>Lapisi keseluruhan bagian barang dengan <i>bubble wrap</i></li>
                            <li>Kemudian lapisi kembali dengan plastik <i>wrapping</i></li>
                            <li>Pastikan bagian kerangka yang dapat membahayakan barang lainnya telah dilapisi dengan plastik <i>bubble wrap</i> dan kardus</li>
                            <li>Masukkan barang yang sudah dilapisi dengan <i>bubble wrap</i> ke dalam kardus atau buat kemasan kardus sesuai dengan ukuran barang yang akan dikirim serta tambahkan <i>styrofoam</i> kecil atau bantalan busa untuk memadatkan dalam kardus agar tidak terguncang selama dalam proses pengiriman</li>
                            <li>Tutup dus box dan rapatkan dengan mempergunakan tape band/lakban</li>
                            <li>Lalu lapisi bagian luar kardus dengan plastik <i>wrapping</i> dan packing kayu</li>
                            <li>Kemudian pasang lakban <i>regpack / onepack / landpack</i> dengan cara melingkar dari samping secara horizontal pada 3 sisi barang, tempelkan SMU dan label <i>handling</i> pada <i>packingan</i> luar barang (Konsolidator)</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th>Barang High Value (Jam tangan, perhiasan)</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        <ol>
                            <li>Lapisi produk dengan menggunakan <i>bubble wrap</i> atau bisa dalam bentuk kemasan dari perusahaan</li>
                            <li>Masukan barang ke dalam dus box dan padatkan isi didalamnya, agar barang tidak terguncang dan rusak pada saat proses pengiriman</li>
                            <li>Tutup dus box dan rapatkan menggunakan tap band/lakban</li>
                            <li>Kemudian lapisi kembali bagian dus box menggunakan plastik <i>wrapping</i></li>
                            <li>Kemudian pasang lakban <i>regpack / onepack / landpack</i> dengan cara melingkar dari samping secara horizontal pada 3 sisi barang, tempelkan SMU dan label handling pada packingan luar barang (Konsolidator)</li>
                        </ol>
                    </th>
                </tr>
                <tr>
                    <th><i>Dangerous Goods</i></th>
                    <th>Cat tembok, kutek, kosmetik beralkohol,cairan pembersih kebutuhan rumah tangga, aerosol</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Wajib</th>
                    <th>Opsional</th>
                    <th>
                        <ol>
                            <li>Bagian tutup barang harus di isolasi / lakban</li>
                            <li>Kemasan dalam dapat menggunakan plastik</li>
                            <li>Jumlah banyak wajib <i>packing</i> kayu</li>
                            <li>Kemasan luar dapat menggunakan kardus</li>
                            <li>Stiker <i>Fragile</i></li>
                            <li>Melampirkan MSDS (jika ada)</li>
                            <li>Hanya bisa dikirimkan via darat</li>
                        </ol>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- Code -->
<script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<!-- Footer -->
<section>
  <div class="footer">
    <footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
    </footer>
</div>
</section>
    </body>
</html>