<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ | Mitra Shipper</title>

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
        <div class="tab">
        <h3 class="mt-2 mx-3">MITRA</h3>
          <button class="tablinks" onclick="openCity(event, 'satu')" id="defaultOpen">Apa itu Agen Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'dua')">Apa saja syarat dan ketentuan menjadi Agen Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'tiga')">Apa saja tahapan menjadi Agen Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'empat')">Apa saja keuntungan menjadi Agen Shipper?</button>
          <button class="tablinks" onclick="openCity(event, 'lima')">Pengiriman apa saja yang dapat diproses oleh Agen Shipper?</button>
        </div>
        
        <div id="satu" class="tabcontent">
            <br>
          <h3>Apa itu Agen Shipper?</h3>
          <p>Agen Shipper merupakan individu maupun pelaku UMKM yang berlaku sebagai perpanjangan tangan Shipper untuk melakukan pickup kepada customer dan pemrosesan paket di sistem Shipper.</p>
        </div>
        
        <div id="dua" class="tabcontent">
            <br>
          <h3>Apa saja syarat dan ketentuan menjadi Agen Shipper?</h3>
          <p>Berikut syarat dan ketentuan untuk menjadi agen Shipper: 
            <ol>
                <li>Memiliki peralatan berikut ini:
                <ul>
                    <li>Laptop</li>
                    <li>Printer</li>
                    <li>Kendaraan untuk penjemputan</li>
                </ul>
                <li>Lokasi agen dapat diakses kendaraan roda 4</li><br>
                <li>Membayar deposit awal untuk dapat melakukan transaksi</li><br><br>
                Selanjutnya, Anda dapat melakukan registrasi menjadi agen Shipper melalui bit.ly/MitraShipper
            </ol>
          </p> 
        </div>
        
        <div id="tiga" class="tabcontent">
            <br>
          <h3>Apa saja tahapan menjadi Agen Shipper?</h3>
          <p>Berikut tahapan menjadi Agen Shipper: 
            <ol>
                <li>Mengisi formulir pendaftaran di bit.ly/MitraShipper</li>
                <li>H+5 pendaftaran, tim Shipper akan mengecek kelengkapan data dan survei lokasi calon agen.</li>
                <li>H+5, tim Shipper juga akan menghubungi calon agen untuk verifikasi lanjutan. </li>
                <li>H+8, pendaftaran calon agen disetujui. (Jika telah memenuhi ketentuan Shipper). </li>
                <li>H+10, calon agen menyelesaikan proses administrasi</li>
                <li>H+15, calon agen menghadiri sesi training (training sistem dan operasional). </li>
            </ol>
            Kemudian, Anda resmi menjadi agen Shipper dan bisa mulai memproses pick up paket.
          </p>
        </div>
        
        <div id="empat" class="tabcontent">
            <br>
            <h3>Apa saja keuntungan menjadi Agen Shipper?</h3>
            <p>Inilah keuntungan menjadi Agen Shipper: 
              <ol>
                  <li>Investasi gratis, cuan berlapis-berlapis: tidak perlu modal sama sekali dengan prospek pendapatan luas karena dapat memproses paket dari berbagai macam pilihan kurir ekspedisi/3PL</li>
                  <li>Didukung dengan sistem canggih yang dapat melakukan tracking paket dari berbagai kurir ekspedisi/3PL</li>
                  <li>Dukungan penuh dari Tim Shipper dalam menjalankan kegiatan operasional</li>
                  <li>Komunitas Agent Shipper untuk memperluas peluang bisnis</li>
              </ol>
            </p>
        </div> 

        <div id="lima" class="tabcontent">
            <br>
          <h3>Pengiriman apa saja yang dapat diproses oleh Agen Shipper?</h3>
          <p>Berikut pengiriman yang dapat diproses oleh Agen Shipper:
            <ol>
                <li>Seluruh paket melalui mitra logistik (3PL) berikut:
                <ul>
                    <li>JNE</li>
                    <li>POS Indonesia</li>
                    <li>SiCepat</li>
                    <li>Tiki</li>
                    <li>Alfatrex</li>
                    <li>J&T</li>
                    <li>Wahana</li>
                    <li>Ninja Express</li>
                    <li>Lion Parcel</li>
                    <li>DPEX</li>
                    <li>GO-SEND</li>
                    <li>Grab Express</li>
                    <li>SAP</li>
                    <li>POS Indonesia (Fushlog)</li>
                </ul>
                <li>Seluruh paket dengan jenis pengiriman berikut:
                  <ul>
                    <li>Domestik (pengiriman dalam negeri) meliputi layanan regular, <i>same day</i>, dan instan.</li>
                    <li><i>Cashless marketplace</i> (pengiriman dari <i>seller marketplace/merchant</i>)</li>
                    <li>Cargo (pengiriman barang besar dan banyak dengan truk).</li>
                  </ul>
                <li>Seluruh paket kecuali barang yang termasuk <i>dangerous goods</i>. Berikut daftar barang yang termasuk <i>dangerous goods</i>:
                  <ul>
                    <li>Barang curian</li>
                    <li>Barang yang dapat dan atau mudah meledak, menyala sendiri, atau terbakar sendiri</li>
                    <li>Narkotika dan obat-obatan terlarang</li>
                    <li>Pornografi, barang cetakan/benda yang menyinggung kesusilaan</li>
                    <li>Senjata api, pisau, dan petasan</li>
                    <li>Barang cetakan/rekaman yang isinya dapat mengganggu keamanan dan ketertiban serta stabilitas Nasiona</li>
                    <li>Alkohol, minuman keras dan makanan basah</li>
                    <li>Tanaman dan hewan</li>
                    <li>Dan barang lain yang menurut perundangan-undangan dinyatakan dilarang</li>
                  </ul>
            </ol>
          </p>
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