<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ | API Shipper</title>

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

<!--Main-->
<section>
    <div class="tab" style="height:auto;">
    <h3 class="mt-2 mx-3">UMUM</h3>
      <button class="tablinks" onclick="openCity(event, 'satu')" id="defaultOpen">Tentang Produk API Shipper</button>
      <button class="tablinks" onclick="openCity(event, 'dua')">Troubleshooting API</button>
      <button class="tablinks" onclick="openCity(event, 'tiga')">Ketentuan Asuransi Barang</button>
      <button class="tablinks" onclick="openCity(event, 'empat')">Pembuatan Order</button>
      <button class="tablinks" onclick="openCity(event, 'lima')">Penjemputan Paket</button>
      <button class="tablinks" onclick="openCity(event, 'enam')">Status dan Detail Order</button>
      <button class="tablinks" onclick="openCity(event, 'tujuh')">Konfigurasi Webhook</button>
      <button class="tablinks" onclick="openCity(event, 'delapan')">Informasi Magento API</button>
      <button class="tablinks" onclick="openCity(event, 'sembilan')">Informasi Shopify API</button>
      <button class="tablinks" onclick="openCity(event, 'sepuluh')">Informasi WooCommerce API</button>
    </div>
    
    <div id="satu" class="tabcontent">
        <br>
        <h3>Tentang Produk API Shipper</h3>
        <p><b>Arti API Call</b></p>
        <p style="font-size: 14px">API call adalah suatu metode panggilan ke server lain untuk mendapatkan permintaan yang dibutuhkan.</p>
        <p style="font-size: 14px"><i>Contoh: Merchant melakukan panggilan ke server Shipper untuk mendapatkan informasi terkait ongkos kirim.</i></p>
        <br>
        <p><b>Limit API Call yang Didapatkan</b></p>
        <p style="font-size: 14px">Limit API call yang Anda dapatkan tergantung dari status akun. </p>
        <p style="font-size: 14px">Untuk akun Free, setiap bulan limit API call adalah sebesar 20,000. Jika Anda terdaftar sebagai Premium, limit API call yang diberikan adalah sebesar 1,000,000.</p>
        <br>
        <p><b>Arti Sandbox dan Production, dan Cara Mengaksesnya</b></p>
        <p style="font-size: 14px">Sandbox adalah tempat testing environment dimana developer bisa membuat API call tanpa membuat pesanan asli. Di sisi lain, production environment adalah tempat dimana produk API siap dipakai dan digunakan oleh client untuk membuat pesanan asli. </p>
        <p style="font-size: 14px">Untuk menggunakan fitur API kami, Anda harus memiliki API key. Hubungi tim kami untuk mendapatkan API key.</p>
        <br>
        <p><b>Cara Mengetahui Area Layanan Shipper </b></p>
        <p style="font-size: 14px">Hubungi tim kami untuk mendapatkan informasi area yang telah dilayani oleh Shipper. </p>
        <br>
        <p><b>Durasi Proses Integrasi Dengan Shipper API </b></p>
        <p style="font-size: 14px">Proses integrasi dengan API Shipper dapat diselesaikan dengan waktu rata-rata 2 minggu. </p>
        <br>
        <p><b>Menggunakan Shipper Untuk Cek Ongkir dan Tracking</b></p>
        <p style="font-size: 14px">Untuk saat ini, API Shipper belum dapat digunakan untuk melihat ongkir atau melacak pesanan.</p>
        <br>
        <p><b>Cara Menjadi Merchant Shipper</b></p>
        <p style="font-size: 14px">Untuk menjadi merchant Shipper, Anda harus mengisi formulir NDA dan menandatangani persetujuan kontrak.</p>
        <p style="font-size: 14px">Silahkan hubungi tim kami untuk penjelasan lebih lanjut. </p>
        <br>
        <p><b>Metode Pembayaran Ongkos Kirim di Shipper Jika Menggunakan fitur API</b></p>
        <p style="font-size: 14px">Metode pembayaran ongkos kirim di Shipper adalah Postpay. Merchant yang menggunakan fitur API Shipper akan ditagih pada setiap akhir bulan. </p>
    </div>

    <div id="dua" class="tabcontent">
        <br>
        <h3>Troubleshooting API</h3>
        <p><b>Mendapatkan Layanan Instant dan Same Day Service dengan Shipper API</b></p>
        <p style="font-size: 14px">Agar dapat menampilkan layanan instant dan same day service, Anda harus memasukan koordinat asal dan tujuan barang tersebut. </p>
        <p style="font-size: 14px">Jika sudah memasukan koordinat namun belum berhasil mendapatkan layanan instant dan same day service: </p>
        <ul style="font-size: 14px">
            <li>Jarak antara asal dan tujuan melebihi batasan yang ditentukan.</li>
            <li>Asal dan tujuan tersebut belum dilayani oleh Shipper API.</li>
        </ul>
        <br>
        <p><b>Memperbaiki Status 400 atau 404 Pada Saat Melakukan Panggilan API </b></p>
        <p style="font-size: 14px">Cek kembali data yang diberikan pada saat memanggil API Shipper. </p>
        <p style="font-size: 14px">Pastikan bahwa semua data yang dimasukan benar, lengkap dan sesuai dengan yang diminta oleh server kami. </p>
        <p style="font-size: 14px">Untuk mengetahui lebih lanjut terkait input parameter pemanggilan API, klik disini. </p>
        <br>
        <p><b>Shipper API Tidak Dapat Menampilkan Ongkos Kirim</b></p>
        <p style="font-size: 14px">Jika response yang dikembalikan dari API kita adalah “Origin not found, please try another origin”, layanan rute tersebut belum tersedia dalam jangkauan kami. </p>
        <p style="font-size: 14px">Mohon tinggalkan pesan agar kami dapat menambah layanan pada area tersebut. </p>
    </div>

    <div id="tiga" class="tabcontent">
        <br>
        <h3>Ketentuan Asuransi Barang</h3>
        <p><b>Arti dari Parameter <i>useInsurance</b></i></p>
        <p style="font-size:14px">Jika <b>useInsurance</b> diterapkan menjadi 1, barang tersebut akan tercover oleh asuransi dan akan ada biaya asuransi yang akan ditambahkan oleh 3PL partner kita.</p>
        <p style="font-size:14px">Namun, <b>useInsurance</b> akan secara otomatis menjadi 1 jika harga barang yang dimasukan pada parameter melebihi limit yang telah ditetapkan oleh 3PL. Jika demikian, <b><i>compulsory_insurance</i></b> parameter akan secara otomatis menjadi 1. Untuk mengetahui lebih lanjut tentang limit yang diterapkan oleh 3PL partner kami, klik disini. </p>
        <br>
        <p><b>Apakah Saya Harus Memakai Asuransi? </b></p>
        <p style="font-size:14px">Jika total harga barang dalam satu pesanan melebihi batas nilai barang yang ditentukan oleh 3PL partner kami, Anda diwajibkan untuk memakai insurance.</p>
        <p style="font-size:14px">Jika nilai barang dalam satu pesanan tersebut masih dibawah batas yang ditentukan oleh 3PL partner tersebut, Anda tidak perlu untuk memakai insurance. </p>
        <p style="font-size:14px">Namun kami anjurkan untuk Anda memakai insurance pada setiap pesanan agar dapat klaim ganti rugi jika terjadi kerusakan/ kehilangan barang pada saat pengiriman. </p>
        <p style="font-size:14px">Untuk mengetahui lebih lanjut tentang limit yang diterapkan oleh 3PL partner kami, klik disini. </p>
        <br>
        <p><b>Perhitungan Harga Asuransi </b></p>
        <p style="font-size:14px">Harga asuransi dihitung dari nilai barang tersebut. Jika harga nilai barang yang dimasukan pada saat pembuatan order berbeda dengan aslinya, kami akan menilai barang tersebut dari apa yang tertulis di sistem kami bukan dari harga barang yang sebenarnya. </p>
        <ul style="font-size:14px"><b>PENTING:</b>
            <li>Saat membuat pesanan, pastikan Anda mengisi nilai barang sesuai dengan harga yang sebenarnya. </li>
            <li>Wajib gunakan asuransi apabila paket yang Anda kirim adalah barang mudah rusak/pecah (fragile) dan barang penting.</li>
        </ul>
        <br>
        <p><b>Ketentuan Atas Kehilangan atau Kerusakan Barang pada Pengiriman</b></p>
        <p style="font-size:14px">Mohon hubungi tim kami jika terjadi kehilangan/ kerusakan barang. Kami akan membantu proses klaim asuransi kepada pihak partner logistik kami dari awal proses klaim sampai selesai.</p>
        <p style="font-size:14px">Apabila terjadi kehilangan/kerusakan barang, maka peraturan umum yang berlaku adalah: </p>
        <ol style="font-size:14px">
            <li>Jika menggunakan asuransi, maka kompensasi atas kerusakan dan kehilangan barang akan diganti seharga nilai barang yang disebutkan saat pembuatan order. </li>
            <li>Jika tidak menggunakan asuransi, maka ganti rugi sebesar 10 kali dari ongkos kirim atau harga paket. Diambil dari harga yang terkecil. </li>
        </ol>
        <p style="font-size:14px">Contoh: Apabila tanpa asuransi, jika ongkos kirim Rp10.000 dan harga barang Rp200.000, maka biaya penggantiannya adalah Rp100.000. Hal ini dikarenakan 10 kali ongkos kirim, yaitu Rp10.000 x 10 = Rp100.000,00, nilainya lebih kecil dari harga barang.</p>
    </div>

    <div id="empat" class="tabcontent">
        <br>
        <h3>Pembuatan Order</h3>
        <p><b>Cara Menghitung Volume dan Berat Beberapa Barang Dalam Satu Pesanan</b></p>
        <p style="font-size:14px">Harga ongkos kirim barang yang dimunculkan dari API Shipper akan dihitung sesuai dengan total akhir berat barang yang ditulis pada parameter weight atau dimensi volumetrik (diambil yang lebih berat).</p>
        <p style="font-size:14px">Cara menghitung nilai akhir berat dan volume dapat dilakukan dengan mengakumulasikan nilai dari beberapa barang tersebut. Contoh: </p>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Berat (kg)</th>
                    <th>Volume (cm)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Barang A</th>
                    <th>1</th>
                    <th>10 x 10 x 10</th>
                </tr>
                <tr>
                    <th>Barang B</th>
                    <th>2</th>
                    <th>10 x 5 x 10</th>
                </tr>
                <tr>
                    <th>Box Packing</th>
                    <th>0.2</th>
                    <th>30 x 20 x 20</th>
                </tr>
            </tbody>
        </table>
        <p style="font-size:14px">Yang perlu dimasukkan dalam berat adalah total keseluruhan berat yaitu <b>3.2 kg</b> dan volume yang dimasukan adalah <b>30 x 20 x 30</b>, dengan asumsi barang A dan B telah dimasukan kedalam box tersebut.  </p>
        <br>
        <p><b>Gagal Menerima Response dari API Call Pada Saat Create Order</b></p>
        <p style="font-size:14px">Pembuatan pesanan dapat gagal menerima response dari user jika input parameter tidak sesuai dengan yang diminta atau permintaan tersebut belum tersedia pada layanan Shipper. </p>
        <ul style="font-size:14px"><b>Periksa kembali hal-hal ini pada saat GET Rates : </b>
            <li>Pastikan bahwa order parameter = 1. </li>
            <li>Area yang dicari belum tersedia pada layanan Shipper. </li>
            <li>Berat barang melebihi batas maksimum.</li>
            <li>Dimensi barang melebihi batas maksimum</li>
        </ul>
        <p style="font-size:14px"><b>Periksa kembali hal-hal ini pada saat POST Create Order :</b></p>
        <ul style="font-size:14px">
            <li>Pastikan bahwa areaID yang ditulis sudah tersedia dalam layanan Shipper. Untuk memastikan bahwa area tersebut sudah dilayani oleh Shipper, periksa kembali areaID yang didapat dari Get Location.</li>
        </ul>
        <br>
        <p><b>Perbedaan Harga Jika Pesanan Dibuat Hari Ini dan Dikirim Esok Hari </b></p>
        <p style="font-size:14px">Jika pesanan sudah dibuat pada hari ini, maka harga ongkos kirim tersebut tidak akan berubah walaupun akan dikirim pada esok hari. </p>
        <br>
        <p><b>Menggunakan Kode Pos Untuk Create Order </b></p>
        <p style="font-size:14px">Tidak bisa. Untuk membuat pesanan Anda harus menggunakan areaID sebagai titik penjemputan dan tujuan yang telah ditetapkan oleh Shipper. </p>
        <p style="font-size:14px">Berbeda dengan layanan instant dan same day service, Anda harus menggunakan koordinat untuk membuat pesanan.  </p>
        <br>
        <p><b>Apakah rate_id Kurir Logistik Dapat Berubah Sewaktu-waktu? </b></p>
        <p style="font-size:14px">Tidak, rate_id pada kurir logistik akan selalu sama dan tidak berubah. </p>
        <br>
        <p><b>Cara Menampilkan Nama dan Nomor Telepon Pengirim Pada Label </b></p>
        <p style="font-size:14px"> Nama dan nomor telepon pengirim pada label dihasilkan dari parameter <i>consignerPhoneNumber</i> dan <i>consignerName.</i></p>
        <p style="font-size:14px"> Untuk mengubah dan menampilkan informasi pengirim, tuliskan nama dan nomor telepon pada parameter tersebut. Jika dikosongkan, nama dan nomor telepon pengirim akan mengikuti nama dan nomor telepon yang didaftarkan pada saat pembuatan API key.</p>
        <p style="font-size:14px"><b> Perbedaan Ongkos Kirim Pada Saat Create Order dan Mendapatkan Rate</b></p>
        <p style="font-size:14px">Untuk memastikan bahwa harga ongkos kirim sesuai, pastikan bahwa:</p>
        <ul style="font-size:14px">
            <li><i>area_ID</i> origin dan destination sudah sesuai pada saat GET rates dan POST create order. </li>
            <li><i>rate_Id</i> sudah sesuai dengan id kurir 3PL tersebut. </li>
        </ul>
        <p style="font-size:14px"> Jika hal-hal tersebut sudah diterapkan namun masih terkendala, mohon hubungi kami segera.  </p>
        <br>
        <p><b>Berat dan Dimensi Barang yang Tertulis Pada Sistem Tidak Sesuai Dengan Berat Aktual</b></p>
        <p style="font-size:14px">Jika berat atau dimensi barang aktual melebihi berat yang ditulis pada sistem, biaya pengiriman akan kami tagih sesuai dengan berat asli yang kami terima. </p>
        <p style="font-size:14px">Agar tidak terjadi selisih harga antara berat sesungguhnya dan yang tertera pada sistem, mohon pastikan untuk memasukkan berat dan dimensi barang yang benar.  </p>
        <br>
        <p><b>Cara Mendapatkan dan Mengaktifkan OrderID</b></p>
        <p style="font-size:14px">OrderID adalah id yang digunakan Shipper untuk melacak dan mendapatkan informasi terkait pesanan tersebut. </p>
        <p style="font-size:14px">Untuk mendapatkan OrderID, Anda harus terlebih dahulu membuat pesanan. </p>
        <p style="font-size:14px">Setelah pembuatan pesanan, Anda bisa dapatkan OrderID dengan menggunakan GET TrackingID.</p>
        <p style="font-size:14px">Untuk mengaktivasi OrderID tersebut, Anda bisa lakukan dari PUT Activate Order atau POST Request PickUp</p>
        <br>
        <p><b>Perbedaan Antara Order Activation dan Pick Up Request</b></p>
        <p style="font-size:14px">Melakukan Order Activation ataupun request pick up akan memanggil driver untuk menjemput barang. 
        Jika melakukan Order Activation, Anda tidak perlu lagi untuk membuat request pickup, dan sebaliknya. </p>
        <p style="font-size:14px">Namun, ada perbedaan dari 2 metode tersebut, yang dapat dirangkum sebagai berikut :</p>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:30%"></th>
                    <th style="width:30%">Order Activation</th>
                    <th style="width:30%">Request PickUp</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Apakah saya perlu memilih agent? </th>
                    <th>Tidak perlu</th>
                    <th>Tidak perlu</th>
                </tr>
                <tr>
                    <th>Dapat menentukan tanggal pick up?</th>
                    <th>Tidak</th>
                    <th>Ya</th>
                </tr>
                <tr>
                    <th>Dapat mengaktivasi pesanan?</th>
                    <th>Hanya dapat mengaktivasi 1 pesanan di setiap panggilan API.</th>
                    <th>Dapat mengaktivasi multiple orderID dalam satu panggilan API.</th>
                </tr>
                <tr>
                    <th>Untuk layanan instant dan same day?</th>
                    <th>Perlu aktivasi, tidak bisa request pickup. </th>
                    <th>Tidak bisa request pickup, harus mengaktivasi pesanan.</th>
                </tr>
                <tr>
                    <th>Waktu penjemputan barang? </th>
                    <th>Tergantung dari waktu aktivasi pesanan tersebut. </th>
                    <th>Tergantung dari waktu request pickup tersebut. </th>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="lima" class="tabcontent">
        <br>
        <h3>Penjemputan Paket</h3>
        <p><b>Penjemputan Barang Lebih Dari Satu Tempat </b></p>
        <p style="font-size:14px">Bisa. Agent Shipper akan mengambil barang berdasarkan origin AreaID dan detail alamat yang diberikan pada saat pembuatan pesanan.  </p>
        <br>
        <p><b>Cara Mengubah Waktu Penjemputan</b></p>
        <p style="font-size:14px">Untuk mengubah waktu penjemputan, mohon hubungi agen Shipper yang akan mengambil barang tersebut.</p>
        <br>
        <p><b>Siapa yang akan Menjemput Barang Saya? </b></p>
        <p style="font-size:14px">Untuk layanan instant dan same day service, driver partner logistik tersebut yang akan melakukan penjemputan dan mengirimnya ke tujuan. </p>
        <p style="font-size:14px">Untuk layanan regular dan express service, agent Shipper yang akan melakukan penjemputan. </p>
        <p style="font-size:14px">Untuk layanan J&T hubless, kurir J&T yang akan melakukan penjemputan barang. </p>
        <br>
        <p><b>Mengapa Barang Saya Belum Dijemput oleh Shipper? </b></p>
        <p style="font-size:14px">Cek perihal berikut ini untuk memastikan bahwa pesanan siap untuk dijemput: </p>
        <ul style="font-size:14px">
            <li>Pastikan bahwa informasi yang ditulis pada order detail benar dan lengkap. </li>
            <li>Pastikan bahwa Anda telah membuat aktivasi order atau request pick up. </li>
            <li>Shipper agent masih dalam proses menerima request penjemputan barang. </li>
            <li>Request pickup dilakukan diatas jam yang telah ditentukan sebagai cut-off time. Permintaan diatas waktu cut-off akan diproses pada hari berikutnya. </li>
        </ul>
        <br>
        <p><b>Ketentuan Cut-Off Time Request Pickup</b></p>
        <p style="font-size:14px">Untuk layanan Instant dan Same Day (Go-Send dan Grabexpress), klik link disini untuk info lebih lanjut.</p>
        <p style="font-size:14px">Untuk layanan lainnya, batas waktu permintaan penjemputan barang adalah sebelum jam 4 sore. Diatas jam 4 sore, barang akan dijemput pada hari berikutnya. </p>
        <br>
        <p><b>Mengapa Barang Saya Belum Diambil Pada Jam yang Telah Saya Tentukan?</b></p>
        <p style="font-size:14px">Agen Shipper memiliki slot waktu antara jam 15:00 – 19:00 untuk melakukan penjemputan barang. </p>
        <p style="font-size:14px">Waktu penjemputan barang tergantung dari volume dan rute permintaan pickup ke agen itu pada hari tersebut. Namun, kami akan mengusahakan bahwa barang akan dijemput pada slot yang telah ditentukan. </p>
        <p style="font-size:14px">Jika barang belum dijemput pada jam yang telah ditentukan, mohon hubungi kami segera. </p>
    </div>

    <div id="enam" class="tabcontent">
        <br>
        <h3>Status dan Detail Order</h3>
        <p><b>Daftar Order Status Internal Shipper </b></p>
        <p style="font-size:14px">Klik disini untuk mendapatkan list status dari internal Shipper.</p>
        <br>
        <p><b>Mendapatkan AWB (Airway Bill Number) </b></p>
        <p style="font-size:14px">Airway bill number, atau yang sering dikenal sebagai istilah nomor resi, akan dimunculkan ketika status barang sudah diterima oleh agen Shipper. Pada saat barang sudah berhasil diterima oleh agen Shipper, awb number akan dimunculkan pada dashboard Shipper. </p>
        <br>
        <p><b>Cara Mengetahui Jika Pesanan Sudah Aktif</b></p>
        <p style="font-size:14px">Untuk memastikan bahwa pesanan tersebut sudah teraktivasi, Anda bisa cek dari field isActive = 1 dengan memanggil get order detail pesanan tersebut.</p>
        <p style="font-size:14px">Jika isActive = 0, pesanan tersebut belum aktif, dan belum ada agen yang akan menjemput barang tersebut. </p>
        <br>
        <p><b>Perbedaan dari LongID, TrackingID dan Airway Bill Number</b></p>
        <table style="font-size:14px" class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:20%"></th>
                    <th style="width:20%">LongID</th>
                    <th style="width:20%">TrackingID</th>
                    <th style="width:20%">Airway Bill Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Kapan terbuat? </th>
                    <th>Pada saat membuat pesanan</th>
                    <th>Pada saat membuat pesanan</th>
                    <th>Pada saat barang telah sukses di cek in oleh agen Shipper</th>
                </tr>
                <tr>
                    <th>Digunakan untuk melacak?</th>
                    <th>Bisa untuk melacak via API Shipper</th>
                    <th>Bisa untuk melacak via API Shipper</th>
                    <th>Bisa untuk melacak via website kurir 3pl tersebut</th>
                </tr>
                <tr>
                    <th>Berapa digit? </th>
                    <th>24</th>
                    <th>7 – 13</th>
                    <th>Tergantung dari 3PL</th>
                </tr>
                <tr>
                    <th>Ditampilkan pada label?</th>
                    <th>Tidak</th>
                    <th>Ya</th>
                    <th>Ya</th>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="tujuh" class="tabcontent">
        <br>
        <h3>Konfigurasi Webhook</h3>
        <p><b>Webhook Gagal Terkirim</b></p>
        <p style="font-size:14px">Jika panggilan pertama gagal, Shipper akan mencoba mengirim ulang sekali lagi.</p>
        <br>
        <p><b>Mendapatkan Status Order Jika Webhook Gagal Terkirim </b></p>
        <p style="font-size:14px">Jika tidak ada callback yang diterima dari webhook engine kami, mohon hubungi kami segera agar dapat diinvestigasi</p>
        <p style="font-size:14px">Anda juga bisa mendapatkan order detail dan lacak status terakhir pesanan tersebut dengan menggunakan endpoint. </p>
        <br>
        <p><b>Cara Menambahkan Webhook Callback Shipper</b></p>
        <p style="font-size:14px">Untuk menambahkan callback status update, mohon sediakan satu url endpoint yang dapat menerima callback dari Shipper webhook engine. </p>
        <br>
        <p><b>Cara Identifikasi dan Autentikasi Webhook Shipper </b></p>
        <p style="font-size:14px">Pada payload, kami menyediakan kunci untuk menandakan bahwa payload tersebut berasal dari kami.  Klik disini untuk mengetahui lebih lanjut terkait autentikasi webhook Shipper. </p>
        <br>
    </div>

    <div id="delapan" class="tabcontent">
        <br>
        <h3>Apa yang harus saya persiapkan sebelum menggunakan service Magento?</h3>
        <p style="font-size:14px">Anda hanya perlu menyiapkan website toko online Anda dan akun Shipper.</p>
    </div>

    <div id="sembilan" class="tabcontent">
        <br>
        <h3>Apa yang perlu saya siapkan untuk instalasi Shopify x Shipper?</h3>
        <br>
        <ul style="font-size:14px">
            <li>Akun Shipper</li>
            <li>Akun Shopify yang telah mengunduh Shipper App</li>
        </ul>
    </div>

    <div id="sepuluh" class="tabcontent">
        <br>
        <h3>Apa yang harus saya persiapkan sebelum menggunakan plugin Plug&Ship? </h3>
        <p style="font-size:14px">Anda harus sudah memiliki toko online dengan WordPress dan WooCommerce. Diharapkan Anda sudah mempunya paling tidak sedikit pengalaman dengan WordPress dan WooCommerce supaya bisa dapat menggunakan plugin ini.</p>
    </div>

</section>

<!--Code-->
<section>
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
</section>

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