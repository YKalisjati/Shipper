<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ | Shipper</title>

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
<body>
<section>
        <div class="tab" style="height:auto;">
        <h3 class="mt-2 mx-3">UMUM</h3>
          <button class="tablinks" onclick="openCity(event, 'satu')" id="defaultOpen">Apa itu Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'dua')">Apa saja layanan Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'tiga')">Apa saja layanan Shipper untuk SME/UMKM/Online seller (small-medium)?</button>
          <button class="tablinks" onclick="openCity(event, 'empat')">Apa saja layanan Shipper untuk perusahaan?</button>
          <button class="tablinks" onclick="openCity(event, 'lima')">Bagaimana cara menggunakan layanan Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'enam')">Apa itu Mitra Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'tujuh')">Bagaimana cara menjadi Mitra Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'delapan')">Bagaimana cara untuk mengajukan kerja sama dengan Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'sembilan')">Bagaimana cara untuk menghubungi CS Shipper?</button>
        </div>
        
        <div id="satu" class="tabcontent">
            <br>
          <h3>Apa itu Shipper?</h3>
          <p style="font-size: 14px">Shipper merupakan perusahan startup yang bergerak di bidang agregator logistik. Kami “menghubungkan” para penjual <i>(merchant)</i> dengan penyedia jasa logistik <i>(third party logistic-3PL)</i>.</p>
        <p style="font-size: 14px">Jadi, Anda tidak perlu lagi datang ke agen logistik saat akan mengirimkan barang. Anda hanya perlu membuat order melalui Shipper.</p>
        </div>
        
        <div id="dua" class="tabcontent">
            <br>
          <h3>Apa saja layanan Shipper?</h3>
          <p style="font-size: 14px">Shipper menghadirkan berbagai layanan untuk membantu urusan logistik Anda:
            <ol style="font-size: 14px">
                <li>Shipper Shipping Service Kami menyediakan jasa pengiriman untuk Anda. Dengan berbagai keunggulan berikut:
                <ul>
                    <li>Bandingkan tarif pengiriman dari berbagai ekspedisi seperti JNE, POS, TIKI, J&T, dan lainnya cukup dari website kami.</li>
                    <li>Tersedia berbagai pilihan ekspedisi ternama di Indonesia dalam satu platform.</li>
                    <li>Gratis penjemputan paket ke lokasi Anda tanpa minimum order</li>
                    <li>Anda tidak perlu lagi mengantarkan paket ke setiap agen ekspedisi.</li>
                </ul>
                Pelajari lebih lanjut seputar jasa pengiriman Shipper dengan klik tautan berikut: (insert link FAQ Shipping/link landing page Shipping)</li><br>
                <li>Shipper Warehouse & Fulfillment Layanan gudang Shipper merupakan solusi terintegrasi untuk operasional bisnis Anda. Mulai dari penyimpanan stok barang, pengemasan barang pesanan, sampai pengiriman barang dengan ekspedisi pilihan akan kami urus semuanya. Layanan gudang Shipper juga didukung sistem manajemen gudang (WMS) yang modern dan otomatis. Pelajari lebih lanjut tentang Gudang Shipper dengan klik tautan berikut: (insert link FAQ Warehouse / link landing page Warehouse)</li><br>
                <li>Shipper Integration (API)</li>
                Shipper API mengintegrasikan layanan pengiriman dan pelacakan Shipper ke dalam website atau aplikasi milik perusahaan/pelanggan. Pelajari lebih lanjut tentang Shipper API dengan klik tautan berikut: (insert link FAQ API / link landing page API).
            </ol>
            
          </p> 
        </div>
        
        <div id="tiga" class="tabcontent">
            <br>
          <h3>Apa saja layanan Shipper untuk SME/UMKM/Online seller (small-medium)?</h3>
          <p style="font-size: 14px">Bagi para penjual online/UMKM, Anda bisa menggunakan layanan jasa pengiriman Shipper. Anda bisa kirim barang dengan multi logistik tanpa harus mendatangi agen logistiknya satu persatu. Kami juga memberikan layanan gratis penjemputan paket ke rumah Anda tanpa minimum order</p>
        </div>
        
        <div id="empat" class="tabcontent">
            <br>
          <h3>Apa saja layanan Shipper untuk perusahaan?</h3>
          <p style="font-size: 14px">Bagi perusahaan, Anda bisa menggunakan layanan Shipper-API untuk menambahkan fitur pengiriman dan pelacakan Shipper ke website perusahaan Anda.</p>
          <p style="font-size: 14px">Anda juga bisa menggunakan layanan gudang Shipper untuk urusan penyimpanan hingga distribusi barang.</p>
        </div> 

        <div id="lima" class="tabcontent">
            <br>
          <h3>Bagaimana cara menggunakan layanan Shipper?</h3>
          <p style="font-size: 14px">Ikutilah langkah berikut untuk menggunakan masing-masing layanan Shipper: </p>
          <ol style="font-size: 14px">
            <li>Cara menggunakan layanan jasa pengiriman Shipper:
            <ul>
                <li>Buka tautan https://shipper.id/bos/auth/login</li>
                <li>Klik “Daftar” untuk buat akun</li>
                <img src="https://faq.shipper.id/wp-content/uploads/2020/08/pasted-image-0-1024x595.png"  class="icon mx-auto">
                <li>Lengkapi data yang dibutuhkan</li>
                <li>Klik tombol “Daftar” untuk menyelesaikan registrasi</li>
                <li>Jika akun sudah berhasil dibuat, Anda sudah mulai bisa membuat order pengiriman barang</li>
            </ul><br>
            <li>Cara menggunakan layanan Warehouse/Fulfillment:</li>
            Bagi Anda yang berminat menggunakan layanan Warehouse/Fulfillment, silakan hubungi tim kami melalui email ke sales@shipper.id. Tim kami selalu siap membantu Anda. Pelajari lebih lanjut tentang Warehouse Shipper dengan klik tautan berikut: (insert link FAQ Warehouse / link landing page Warehouse)
            <br><br>
            <li>Cara menggunakan layanan Shipper API:</li>
            Bagi Anda yang berminat menggunakan layanan Shipper API, silakan hubungi tim kami melalui email ke partnership@shipper.id. Tim kami selalu siap membantu Anda. Pelajari lebih lanjut tentang Shipper API dengan klik tautan berikut: (insert link FAQ API / link landing page API).</ol>
        </div> 

        <div id="enam" class="tabcontent">
            <br>
          <h3>Apa itu Mitra Shipper?</h3>
          <p style="font-size: 14px">Mitra Shipper adalah individu maupun pelaku UMKM yang berlaku sebagai perpanjangan tangan Shipper untuk melakukan pickup kepada customer dan pemrosesan paket di sistem Shipper</p>
        </div> 

        <div id="tujuh" class="tabcontent">
            <br>
          <h3>Bagaimana cara menjadi Mitra Shipper?</h3>
          <p style="font-size: 14px">Berikut 3 langkah mudah menjadi Mitra Shipper: </p>
          <ol style="font-size: 14px">
            <li>Lengkapi form pendaftaran di link ini: (pendaftaran Mitra Shipper)</li>
            <li>Jika lolos verifikasi, tim kami akan menghubungi Anda</li>
            <li>Selanjutnya, kami akan memberikan pelatihan untuk Anda mitra baru.</li>
          </ol>
        </div> 

        <div id="delapan" class="tabcontent">
            <br>
          <h3>Bagaimana cara untuk mengajukan kerja sama dengan Shipper?</h3>
          <p style="font-size: 14px">Bagi Anda yang ingin mengajukan kerja sama dengan Shipper, Anda bisa kirimkan proposal melalui email ke support@shipper.id dengan Subject Email: “Permohonan Kerja Sama”.</p>
        </div> 

        <div id="sembilan" class="tabcontent">
            <br>
          <h3>Bagaimana cara untuk menghubungi CS Shipper?</h3>
          <p style="font-size: 14px">Anda dapat kontak kami melalui: </p>
          <ol style="font-size: 14px">
            <li>Email ke support@shipper.id</li>
            <li>Chat WhatsApp ke +6280332160215</li>
          </ol>
          <p style="font-size: 14px">Jam Kerja Tim CS Shipper: Senin – Jumat pukul 09.00 – 21.00 WIB dan Sabtu 09.00 – 12.00 WIB</p>
        </div> 
</section>

<!--Code-->
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

<!--Footer-->
<section>
  <div class="footer">
    <footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
  </footer>
</div>
</section>
    </body>
</html>