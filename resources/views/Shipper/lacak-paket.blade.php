<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lacak Paket</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="css/checkbox.css" rel="stylesheet">
    <link href="css/imageListBox.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">
    <script src="js/default.js"></script>
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <link rel="stylesheet" href="css/min-widthBody.css">

    <style>
        #moreafter {display: none;}
    </style>
    <script>
        function lacak_paket(){
            var cekTextArea = document.querySelector('#textArea').value;
            if(cekTextArea==null || cekTextArea==""){
                document.querySelector('#buttonCari').setAttribute('hidden', true);
            }else{
                document.querySelector('#buttonCari').removeAttribute('hidden');
            }
        }

        function notifikasi() {
        @if($message!="")
          $("#modalAwal").modal('show');
          document.getElementById('judul-modal').innerHTML = "Pemberitahuan!" ;
          document.getElementById('judul-modal').className += " text-white";
          document.getElementById('headerModal').className += " bg-danger";
          document.getElementById('bodyModal').style.backgroundColor = "#FCD5D2";          
          document.getElementById('footerModal').className += " bg-danger";
          document.getElementById('buttonModal').style.backgroundColor = "#FCD5D2";
          document.getElementById('message').innerHTML = "{{$message}}" ;
        @endif
      }
    </script>

</head>
<body onload="notifikasi()">
<div id="modalAwal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="headerModal" class="modal-header">
                    <h5 id="judul-modal" class="judul-modal">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div id="bodyModal" class="modal-body ">
                    <p id="message"></p>
                </div>
                <div id="footerModal" class="modal-footer">
                    <button id="buttonModal" type="button" class="btn text-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<header>
@include('partials.navTopDark')
</header>
<main>
    <section >
        <div class="bg-dark" style="height:450px;"> 
        <div class="container text-white size" >
            <div >
                <br>
                <div class="space"><h2 class="text_" style="margin-top:80px;">Lacak Paket Anda</h2></div>
            </div>
                <form action="{{route('lacak_paket')}}" method="POST">
                @csrf
                    <div >
                        <div class="d-grid gap-2">
                            <div class="p-2">
                            <textarea id="textArea" class="form-control centerTable" rows="5" onkeyup="lacak_paket()" placeholder="Anda bisa lacak hingga 10 no. resi sekaligus (Pisahkan dengan koma, spasi, atau baris baru)" name="InputIDPaketUser"></textarea>
                            </div>
                            <div class="p-2">
                            <input  type="submit"  class="form-control centerTable " style="width:300px;" id="buttonCari" value="Cari" hidden>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        </div>
    </section>
    @if(count($dataHasil[0])!=0)
    <section>
    <hr>
    <div class="container">
     
      <table id="datatable" class="table table-borderless table-striped">
        <thead>
          <tr>
            <th >Tanggal</th>
            <th >Id Pengiriman</th>
            <th >Asal Pengiriman</th>
            <th >Tujuan Pengiriman</th>
            <th >Kurir </th>
            <th >Jenis Paket</th>
            <th >Ongkir (Rp.)</th>
            <th >Status </th>
          </tr>
        </thead>
        <tbody>
        @foreach($dataHasil as $openData)
        @foreach($openData as $dataPengiriman)
          <tr class="bd">
            
            <td>{{$dataPengiriman['created_at']}}</td>
            <td>{{$dataPengiriman['id']}}</td>
            <td>
              {{$dataPengiriman['alamatLengkap_pengirim']}},<br>
              {{$dataPengiriman['kota_pengirim']}},<br>
              {{$dataPengiriman['provinsi_pengirim']}}.<br>
            </td>
            <td>
              {{$dataPengiriman['alamatLengkap_penerima']}},<br>
              {{$dataPengiriman['kota_penerima']}},<br>
              {{$dataPengiriman['provinsi_penerima']}}.<br>
            </td>
            <td>{{$dataPengiriman['agen']}}&nbsp;({{$dataPengiriman['jenis_layanan']}})</td>
            <td>{{$dataPengiriman['name_type']}}</td>
            <td>{{str_replace("Rp. ","",$dataPengiriman['biaya'])}}</td>
            <td>{{$dataPengiriman['status']}}</td>
            
          </tr>
          @endforeach
          @endforeach
        </tbody>
      </table>
      
      
      
    </div>
    <hr>
    </section>
    @else
    <section>
        <div class="container layout">
               <div>
                    <div  class="space"><img class="center" src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/vector-tracking.svg" alt=""></div>
                    <div class="text_">
                        <h3><b>Belum Ada Data yang Dapat Ditampilkan</b></h3>
                        <p class="space">Silakan masukkan nomor resi / nomor pengiriman untuk lacak paket Anda.</p>
                    </div>
               </div>
        </div>
    </section>
    @endif

    <section>
        <div class="container layout text_">
            <div class="space"><h5>Cek Resi dengan Shipper</h5></div>
            <div>
                <h5>Apa Itu Resi?</h5>
                <div class="space text-secondary">
                    <p>Resi merupakan nomor bukti pengiriman yang berasal dari jasa logistik maupun ekspedisi yang ada di Indonesia. Jika Anda menggunakan jasa Shipper, akan dengan mudah melakukan cek resi melalui www.shipper.id/tracking. Nantinya, para pembeli tidak perlu repot memasukkan nomor resi secara manual. Para pengguna tinggal membawa kode booking yang sudah diterima dari Marketplace yang ada di Indonesia seperti, Tokopedia, Shopee, BliBli, Bukalapak, Lazada, serta Marketplace lainnya yang ada di Indonesia.</p>
                    <P>Sekarang Anda bisa cek resi JNE, cek resi SiCepat, cek resi J&T, cek resi Anteraja, cek resi Tiki, cek resi Wahana, cek resi Lion Parcel, cek resi POS, cek resi Shopee, dan jasa ekspedisi lainnya melalui Shipper hanya dalam 1 klik saja.</P>
                    <P>Shipper memberikan kemudahan untuk melakukan pengiriman serta penerimaan paket barang dan melacak status posisi paket barang kiriman Anda. Anda bisa dengan mudah melakukan cek resi melalui Shipper dan melakukan JNE cek tarif dan dari berbagai macam ekspedisi.</P>
                </div>
            </div>
            <div>
                <h5>Kegunaan Nomor Resi</h5>
                <div class="space text-secondary">
                    <p>Shipper memudahkan Anda dengan adanya nomor resi yang merupakan bukti bahwa para penjual sudah mengirimkan paket Anda melalui Shipper. Tak hanya itu saja, nomor resi juga bisa Anda gunakan untuk melacak keberadaan paket Anda selama proses pengiriman barang dari pihak jasa ekspedisi.</p>
                </div>
            </div>
            <div id="moreafter">
                <div>
                    <h5>Kenapa Pelacakan Nomor Resi Anda Gagal?</h5>
                    <div class="space text-secondary">
                    <p >Biasanya nomor resi tidak bisa di lacak dikarenakan ada kesalahan ketika Anda memasukkan kode nomor resi yang sudah diterbitkan oleh Shipper. Selain itu, bisa juga ada kemungkinan bahwa ekspedisi yang Anda pilih melalui Shipper belum melakukan update informasi, maksimal proses update nomor resi yakni 24 jam. Shipper menyediakan layanan cek resi pengiriman barang dari situs resmi kami dari berbagai macam jasa ekspedisi yang bekerja sama dengan Shipper yang terpercaya dan terbaik di seluruh Indonesia.</p>
                    <p >Anda juga harus tahu, hal lain yang menyebabkan nomor cek resi cargo tidak bisa dilacak karena nomor resi telah kedaluwarsa sehingga hal ini bisa menjadi penyebab kode cek resi kargo tidak terlacak maupun error. Tapi, dengan Shipper Anda tidak akan menghadapi hal demikian, karena Shipper merupakan salah satu aggregator logistik yang sudah terpercaya dan bekerja sama dengan berbagai macam jasa ekspedisi yang ada di Indonesia.</p>
                    <p >Bagaimana Cara Cek Resi di Shipper? Cara mengecek resi dengan mudah dengan Shipper dan kecepatan dalam mengecek status lacak paket J&T, lacak paket Ninja Express, serta lacak paket J&T express pengiriman Anda secara real time dan akurat melalui Shipper. Selain itu, Shipper juga menawarkan tracking JNE dan ekspedisi lainnya agar memudahkan paket dalam mengecek status di setiap resi yang terbit. Anda hanya tinggal memasukkan nomor resi, lalu bisa langsung mengetahui lokasi paket tanpa harus menentukan pilihan jasa ekspedisi yang digunakan.</p>
                    <P >Keunggulan yang ditawarkan Shipper, yakni memudahkan Anda dalam melakukan cek resi dan mengetahui keberadaan posisi paket Anda. Cukup memasukkan nomor resi, nantinya Anda akan langsung mengetahui posisi cek keberadaan paket tanpa harus menentukan pilihan jasa ekspedisi yang digunakan.</P>
                    <P >Selain itu, Anda juga bisa melacak kiriman paket Anda dari Marketplace seperti Tokopedia, Shopee, BliBli, Bukalapak, Lazada, dan lainnya. Shipper memiliki layanan yang akan memudahkan Anda dalam melakukan cek resi serta lacak pengiriman paket yang bisa digunakan untuk lacak lokasi paket pengiriman barang, serta lacak no resi dari semua ekspedisi di Indonesia.</P>
                    <P >Saat ini, Anda bisa melakukan JNE cek resi, cek resi SiCepat, cek resi J&T, cek resi Anteraja, cek resi TIKI, cek resi Wahana, cek resi Lion Parcel, cek resi POS Indonesia, tak hanya itu saja Anda juga bisa melakukan cek tracking paket Anda, seperti cek JNE tracking dan jasa ekspedisi lainnya melalui fitur tracking di Shipper. Memberikan kemudahan bagi Anda dalam melakukan cek nomor resi dan mengetahui status pengiriman cek paket JNE dan ekspedisi lainnya yang Anda pilih.</P>
                    </div>
                </div>
                <div>
                    <h5>Apa Saja Ciri-ciri Nomor Resi Palsu</h5>
                    <div class="space text-secondary">
                    <P >Untuk menghindari hal yang satu ini, tentunya dengan Shipper Anda tidak akan mendapatkan nomor resi palsu karena Shipper sudah terpercaya dan digunakan oleh banyak masyarakat di Indonesia dan memiliki reputasi yang baik. Jika Anda menemukan maupun mendapatkan nomor resi palsu, biasanya ciri-cirinya nomor resi tidak akan sesuai dengan jumlah nomor aslinya dan saat Anda cek akan keluar tulisan “result not found”.</P>
                    </div>
                </div>
                <div>
                    <h5>Bagaimana Cara Mengecek Nomor Resi yang Benar?</h5>
                    <div class="space text-secondary">
                    <P >Untuk bisa mengetahui cara cek nomor cek resi yang benar Anda harus memastikan kembali jumlah nomor resi sudah benar dan bisa langsung mengeceknya di Shipper dan masuk ke halaman tracking. Tentunya, semua data yang disajikan oleh Shipper secara akurat dan cepat, jadi Anda tidak perlu khawatir lagi menggunakan jasa pengiriman melalui Shipper.</P>
                    </div>
                </div>
                <div>
                    <h5>Apa Saja Jasa Ekspedisi yang Ada di Shipper?</h5>
                    <div class="space text-secondary">
                    <P >Shipper bekerja sama dengan berbagai macam jasa ekspedisi yang ada di Indonesia, sehingga Anda dapat melakukan cek resi atau lacak paket dan tracking paket dengan lebih mudah, di antaranya cek resi JNE atau lacak paket JNE, resi JNE, lacak JNE, tracking paket JNE, tracking JNE, JNE cek resi, cek resi JNE Reg, cek resi J&T atau lacak paket J&T , resi J&T, lacak J&T, tracking paket J&T, tracking J&T, J&T cek resi, cek resi SiCepat atau lacak paket SiCepat, resi SiCepat, lacak SiCepat, tracking paket SiCepat, tracking SiCepat, SiCepatcek resi, cek resi RPX atau lacak paket RPX, resi RPX, lacak RPX, tracking paket RPX, tracking RPX, RPX cek resi, cek resi Lion Parcel atau lacak paket Lion Parcel, resi Lion Parcel, lacak Lion Parcel, tracking paket Lion Parcel, tracking Lion Parcel, Lion Parcel cek resi, cek resi TIKI atau lacak paket TIKI, resi TIKI, lacak TIKI, tracking paket TIKI, tracking TIKI, TIKI cek resi, cek resi Ninja Express atau lacak paket Ninja Express, resi Ninja Express, lacak Ninja Express, tracking paket Ninja Express, tracking Ninja Express, Ninja Express cek resi, cek resi POS Indonesia atau lacak paket POS Indonesia, resi POS Indonesia, lacak POS Indonesia, tracking paket POS Indonesia, tracking POS Indonesia, POS Indonesia cek resi, cek resi DPEX atau lacak paket DPEX, resi DPEX, lacak DPEX, tracking paket DPEX, tracking DPEX, DPEX cek resi, cek resi Gosend atau lacak paket Gosend, resi Gosend, lacak Gosend, tracking paket Gosend, tracking Gosend, Gosend cek resi, cek resi Grab Express atau lacak paket Grab Express, resi Grab Express, lacak Grab Express, tracking paket Grab Express, tracking Grab Express, Grab Express cek resi, cek resi Shopee Express atau lacak paket Shopee Express, resi Shopee Express, lacak Shopee Express, tracking paket Shopee Express, tracking Shopee Express, Shopee Express cek resi, cek resi Indah Cargo atau lacak paket Indah Cargo, resi Indah Cargo, lacak Indah Cargo, tracking paket Indah Cargo, tracking Indah Cargo, Indah Cargo cek resi, cek resi AnterAja atau lacak paket AnterAja, resi AnterAja, lacak AnterAja, tracking paket AnterAja, tracking AnterAja, AnterAja cek resi, cek resi Wahana atau lacak paket Wahana, resi Wahana, lacak Wahana, tracking paket Wahana, tracking Wahana, Wahana cek resi.</P>
                    </div>
                </div>
                <div>
                    <h5>Bagaimana Cara Mengetahui Nomor Resi yang Hilang?</h5>
                    <div class="space text-secondary">
                        <P >Anda bisa langsung menghubungi custmer service Shipper secara langsung untuk mengetahui keberadaan paket jika nomor resi Anda hilang dan tidak bisa ditemukan.</P>
                    </div>
                </div>
                <div>
                    <h5>Mengapa Harus Cek Resi di Shipper?</h5>
                    <div class="space text-secondary">
                    <P >Shipper memberikan keunggulan dalam melakukan cek resi secara cepat dan akurat. Anda hanya tinggal input nomor resi pengiriman Anda, nantinya Anda bisa mengetahui keberadaan paket Anda. Selain itu, Anda juga bisa melacak setiap resi yang keluar dari Marketplace seperti okopedia, Shopee, BliBli, Bukalapak, Lazada, dan semua toko online yang ada di Indonesia.</P>
                    <P >Hasil cek resi pengiriman paket yang dijemput langsung sama Kurir Shipper sangat akurat, tepat, serta terupdate. Selain itu, Shipper juga mendukung banyak ekspedisi yang ada di Indonesia untuk memudahkan pengiriman Anda serta mendapatkan nomor resi yang cepat dan tepat.</P>
                    <P >Untuk para pebisnis online, Anda bisa langsung mengecek nomor resi melalui situs resmi Shipper secara mudah dan cepat.</P>
                    </div>
                </div>
            </div>
            <h5><a style = "color:#EF4941;" onclick="clickMore()" id="more">Selengkapnya</a></h5>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</main>

<footer class="py-4" style="background-color:black;" >
@include('partials.navBot')
</footer>

</body>
</html>