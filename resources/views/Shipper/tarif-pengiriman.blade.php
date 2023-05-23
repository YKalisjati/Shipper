<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Pengiriman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <link href="{{asset('css/checkbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/imageListBox.css')}}" rel="stylesheet">
    <link href="{{asset('css/default.css')}}" rel="stylesheet">
    <script src="{{asset('js/default.js')}}"></script>
    <link href="{{asset('css/min-widthBody.css')}}" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <link href="{{asset('css/table.css')}}" rel="stylesheet">
    <style>
        #moreafter {display: none;}
    </style>


</head>
<body>
<header>
@include('partials.navTopDark')
</header>


<main>
    <section >
        <div class="bg-dark" style="height:450px;">
        <div class="container text-white size" >
            <div >
            <br>
                <div class="bg-dark space"><h2 class="text_" style="margin-top:80px;">Layanan Gudang Terbaik untuk Sekala Bisnis</h2></div>
            </div>
            <div class="card ">
                <div class="card-body">
                <form action="{{route('tarifpengiriman.post')}}" method="post" >
                    @csrf
                   <div class="row">
                        <div class="col-sm">
                            <label class="text-black">Asal Pengiriman</label>
                            <input required="required" class="form-control kota-asal" list="datalistOptions" placeholder="Masukkan Nama Kota" name="city_origin">
                            <datalist id="datalistOptions" >
                                @foreach ($cities as $city => $value)
                                <option value="{{ $city }}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="col-sm">
                            <label class="text-black">Tujuan Pengiriman</label>
                            <input required="required" class="form-control kota-tujuan" list="datalistOptions1"  placeholder="Masukkan Nama Kota" name="city_destination">
                                <datalist id="datalistOptions1" >
                                    @foreach ($cities as $city => $value)
                                    <option  value="{{ $city }}">
                                    @endforeach
                                </datalist>
                        </div>
                        <div class="col-sm">
                            <label class="text-black">Berat (Gram)</label>
                            <input required="required" type="number" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="1000" name="weight">
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
        </div>
    </section>


    </section>
    <section >
        <div class="container layout">
        @if (($costs))
        <div class="row mt-3 ">
            <div class="col-md-12">
                <div id="cardOngkir" class="card ongkir">
                    <div class="card-body">

                        <!--Awal Table-->
                        <table id="datatable" class="table table-borderless table-striped">
                            <thead>
                                <tr>
                                    <th >Agen</th>
                                    <th >Jenis Layanan</th>
                                    <th >Estimasi Waktu</th>
                                    <th >Biaya (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($costs as $result)
                                @foreach ($result->costs as $serv)
                                    @foreach ( $serv->cost as $etm)
                                        <tr class="bd">
                                        <td>{{strtoupper($result->name)}}</td>
                                        <td>{{$serv->service}}</td>
                                        <td>{{str_replace("hari","",strtolower($etm->etd))}} Hari</td>
                                        <td>{{$etm->value}}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach

                            </tbody>
                        </table>
                        <!--Akhir Table-->

                    </div>
                </div>
            </div>
        </div>
        @else
        <div>
            <div  class="space"><img class="center" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-check-rates.svg" alt=""></div>
                <div class="text_">
                    <h3><b>Belum Ada Data yang Dapat Ditampilkan</b></h3>
                    <p class="space text-secondary">Silakan masukkan berat paket serta asal & tujuan pengiriman untuk tahu tarif pengiriman</p>
                </div>
            </div>
        @endif

        </div>
    </section>


    <section>
        <div class="container layout text_">
            <div>
                <h5>Cek Ongkir</h5>
                <div class="space text-secondary">
                    <p >Shipper merupakan sebuah platform yang memudahkan para penjual dan pebisnis online untuk melakukan cek tarif ongkir. Anda bisa cek ongkir JNE Cek ongkir JNE, cek tarif JNE, cek Tarif JNT, serta ekspedisi lainnya menggunakan Shipper dalam melakukan cek tarif pengiriman dengan mudah, cepat, akurat, di mana saja, dan kapan saja. Shipper mendukung pengecekan cek ongkos kirim termurah dari berbagai macam ekspedisi yang ada di Indonesia</p>
                </div>
            </div>
            <div>
                <h5>Apa Itu Cek Ongkir?</h5>
                <div class="space text-secondary">
                    <p >Cek ongkir merupakan fasilitas yang mana Anda bisa melakukan cek harga ongkos kirim dari berbagai macam jasa ekspedisi yang ada di Indonesia melalui Shipper, seperti JNE, SiCepat, J&T, Anteraja, Tiki, Wahana, Lion Parcel, POS, dan lainnya. Selain akurat, dengan mengecek ongkir melalui Shipper akan memudahkan Anda menemukan jasa ekspedisi terbaik sesuai kebutuhan.</p>
                </div>
            </div>
            <div>
                <h5>Apakah Data Tarif Cek Ongkir Akurat?</h5>
                <div class="space text-secondary">
                    <p >Semua data ongkos kirim ekspedisi melalui Shipper akan langsung ditampilkan pada halaman shipping. Perlu diketahui juga bahwa setiap ongkos kirim dari berbagai macam jasa ekspedisi yang bekerja sama dengan Shipper akan memiliki tarif yang berbeda-beda, sehingga Anda bisa memilih sesuai kebutuhan Anda. Tak hanya itu saja, Anda juga bisa memilih sendiri ekspedisi yang sesuai dengan kebutuhan Anda. Shipper memudahkan Anda dalam melakukan cek tarif ongkir serta pengiriman, karena langsung dijemput oleh Kurir Shipper tanpa minimum order.</p>
                </div>
            </div>
            <div id="moreafter">
                <div>
                    <h5>Bagaimana Cara Menghitung Cek Ongkir di Shipper?</h5>
                    <div class="space text-secondary">
                    <p >Anda bisa mengecek tarif ongkos kirim paket berdasarkan berat serta volumenya, yang mana kemudian akan dikalkulasikan berdasarkan tarif dari jasa ekspedisi yang Anda pilih. Anda bisa bebas memilih mulai dari yang paling murah dan cepat sampai.</p>
                    <p >Untuk contoh lainnya demi memudahkan Anda, ada beberapa hal yang perlu diperhatikan pada saat ingin mengecek ongkos kirim. Misalnya, Anda ingin mengirim 2 sepatu dengan harga Rp1.000.000 untuk dikirim dari Jakarta ke Bekasi dengan menggunakan jasa ekspedisi yang berada di Shipper. Caranya, hitung berat asli dari 2 sepatu yang kurang lebih 2kg sampai 2,5kg.</p>
                    <p >Misalnya Anda menggunakan jasa ekspedisi Regular dengan harga Rp10.000 cara menghitungnya adalah hitung ukuran sepatu kemudian konversikan ke dalam satuan berat dari jasa ekspedisi yang Anda pilih. Misal untuk 2 sepatu Rp10.000 x 2kg menjadi Rp20.000 untuk mengirim biasanya akan memakan waktu 1-2 hari kerja.</p>
                    </div>
                </div>
                <div>
                    <h5>Kenapa Cek Ongkir di Shipper?</h5>
                    <div class="space text-secondary">
                        <p >Kelebihan cek tarif ongkir di Shipper tentu saja Anda bisa melihat berbagai macam tarif ongkos kirim dari semua ekspedisi yang bekerja sama dengan Shipper. Selain itu, cek ongkir di Shipper juga mudah dilakukan dan bisa Anda akses di mana saja dan kapan saja. Cukup mengisi kolom tujuan pengiriman barang nantinya akan muncul tarif ongkos kirim terbaik sesuai kebutuhan Anda.</p>
                        <p >Hasil pencarian cek tarif ongkir melalui Shipper sangat akurat dan lengkap, serta Anda bisa memilih sendiri jasa ekspedisi yang dibutuhkan dan bisa membandingkan tarif ongkos kirim dengan ekspedisi lainnya.</p>
                        <p >Anda bisa mengakses cek tarif & ongkos kirim semua jasa ekspedisi dengan mengisi kolom asal dan tujuan pengiriman barang secara mudah. Dengan Shipper, Anda juga bisa mendapatkan harga ongkos kirim terbaik dari berbagai jasa ekspedisi di Indonesia seperti JNE, SiCepat, J&T, Anteraja, Tiki, Wahana, Lion Parcel, POS, dan lainnya sesuai kebutuhan Anda.</p>
                        <p >Anda tidak perlu lagi pusing memikirkan harga sewa gudang dan biaya sewa gudang karena di Shipper sistem pembayaran adalah sewa gudang bulanan dan sesuai dengan pemakaian. Tak perlu khawatir dengan ukuran bisnis Anda, karena kami menyediakan sewa gudang besar sampai sewa gudang kecil.</p>
                        <p >Untuk cek ongkir jasa ekspedisi di Indonesia secara real-time dan akurat, Anda bisa menggunakan situs resmi Shipper dengan mengisi kota asal, kota tujuan serta melengkapi berat paket yang akan di kirimkan.</p>
                    </div>
                </div>
            </div>
            <h5><a style = "color:#EF4941;" onclick="clickMore()" id="more">Selengkapnya</a></h5>
        </div>
    </section>
</main>

<footer class="py-4" style="background-color:black;" >
@include('partials.navBot')
</footer>
<!-- bootstrap5 dataTables js cdn -->
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#datatable').DataTable({
            lengthChange: false,
            info: false,
            paging: false,
            filter:false,

        });
      });
    </script>
</body>
</html>
