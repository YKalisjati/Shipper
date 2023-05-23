<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesanan Dashboard</title>

<link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/pesanan.css" rel="stylesheet">
<script>
  function notifikasi() {
        @if(Session::has('success'))
          $("#modalAwal").modal('show');
          document.getElementById('judul-modal').innerHTML = "Pemberitahuan!" ;
          document.getElementById('judul-modal').className += " text-white";
          document.getElementById('headerModal').className += " bg-success";
          document.getElementById('bodyModal').style.backgroundColor = "#CCFFDB";          
          document.getElementById('footerModal').className += " bg-success";
          document.getElementById('buttonModal').style.backgroundColor = "#CCFFDB";
          document.getElementById('message').innerHTML = "{{Session::get('success')}}" ;
        @elseif(Session::has('fail'))
          $("#modalAwal").modal('show');
          document.getElementById('judul-modal').innerHTML = "Pemberitahuan!" ;
          document.getElementById('judul-modal').className += " text-white";
          document.getElementById('headerModal').className += " bg-danger";
          document.getElementById('bodyModal').style.backgroundColor = "#FCD5D2";          
          document.getElementById('footerModal').className += " bg-danger";
          document.getElementById('buttonModal').style.backgroundColor = "#FCD5D2";
          document.getElementById('message').innerHTML = "{{Session::get('fail')}}" ;
        @endif
      }

      function checkDate(){
        var dStart = document.getElementById('dateStart').value;
        var dEnd = document.getElementById('dateEnd').value;
        dStart = new Date(dStart);
        dEnd = new Date(dEnd);
        if(dStart<=dEnd){
          document.getElementById("serchDataWithDate").submit();
        }else{
          alert("Masukkan rentang waktu yang benar!");
        }
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

    <div id="modalEdit" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div id="headerModalEdit" class="modal-header bg-danger">
                <h5 id="judul-modalEdit" class="judul-modal text-white">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="bodyModalEdit" class="modal-body ">
                <p id="messageEdit"></p>
                <form action="{{route('batalkanPesanan')}}" method="post" id="postDataIDPesanan">
                @csrf
                  <input type="hidden" name="idPesananBatal" id="postIdPesanan" value="">
                </form>
                
            </div>
            <div id="footerModalEdit" class="modal-footer">
                <button id="buttonModalEdit" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" onclick="batalkanPOST()" class="btn btn-danger">Ya</button>
            </div>
            </div>
        </div>
    </div>

  <div class="container-fluid min-vh-0 py-2">
    <div>
    <div class="row">
      @include('partials.userHamburgerMenu')

      <div class="col">
        <div class="d-flex justify-content-between align-items-center">
          <h1 class="mt-2"><b>Pesanan</b> <p class="h6 text-secondary mt-2">{{count($dataAlamat)}} Pesanan Ditemukan</p> </h1>
          <div class="dropdown">
              <p>Hello,
              <button onclick="myFunction()" class="dropbtn"> {{ $data->name }}</button>
              @if($gambar)
              <img class="rounded-circle" style="height:35px;width:35px;" src="{{asset('storage/images/' . $gambar->name)}}">
              @else
              <img  src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-user-default.svg">
              @endif
              </p>
              <div id="myDropdown" class="dropdown-content">
                <a href="logout">Logout</a>
              </div>
          </div>
        </div>
        <div class="d-flex bd-highlight mb-2">
          <div class="download justify-content-start me-auto p-2 bd-highlight"> 
            <p class="h6 mt-2">Untuk mendownload laporan pesanan silahkan menuju ke halaman laporan atau klik <a href="/PesananExport">disini</a></p>
          </div>
          
          <div class="d-grid gap-2 p-2 bd-highlight">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
              Buat Pesanan<b>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg mb-1" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
              </svg></b>
            </button>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header text-center border-0">
                  <h4 class="modal-title w-100">Buat Pesanan Baru</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                <p class="text-center">Silahkan pilih jenis pesanan Anda</p>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col text-center zoom">
                          <a href="/buatpesandomestik-dashboard">
                          <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-order-domestic.svg">
                        </a><div class="tulisan"><label>Domestik</label></div>
                        </div>
                        <div class="col text-center zoom">
                          <a href="/bulk-upload-domestik-dashboard">
                          <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-order-cashless-bulk.svg">
                        </a><div class="tulisan"><label>Bulk Upload Domestik</label></div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <hr>
    <div>
      <div class="row">
        <div class="col-sm-auto ">
          <div style="margin-top:50%;">Filter :</div>
        </div>
        <div class="col">
          <div id="dua1">
            <form id="serchDataWithDate" action="{{route('cariDataPesanan.cek')}}" method="post">
            @csrf
              <input type="date" id="dateStart" name="start" @if ($dataRequest) value="{{$dataRequest->start}}"@endif>
              <span class="text-danger">@error('start'){{$message}}@enderror</span>
              &nbsp;-&nbsp;
              <input type="date" id="dateEnd" name="end"  @if ($dataRequest) value="{{$dataRequest->end}}" @endif>
              <input style="margin-left:10px;" type="button" onClick="checkDate()" class="btn btn-danger" value="Cari">
              <a style="margin-left:10px;" href="/pesanan-dashboard"><input type="button" class="btn btn-danger" value="Refresh"></a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="ms-sm-auto">
    <br><hr>

    <div>
      @if(count($dataAlamat)!=0)
      
      <table style="vertical-align: middle;" id="datatable" class="table table-borderless table-striped">
        <thead>
          <tr>
            <th >Tanggal</th>
            <th >Id Pesanan</th>
            <th >Asal Pengiriman</th>
            <th >Tujuan Pengiriman</th>
            <th >Kurir Pengiriman</th>
            <th >Jenis Paket</th>
            <th >Ongkir (Rp.)</th>
            <th >Status </th>
          </tr>
        </thead>
        <tbody>
        @foreach($dataAlamat as $dataPengiriman)
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
            @if(intval(str_replace("STS-","",$dataPengiriman['id_status']))<=intval(002) && intval(str_replace("STS-","",$dataPengiriman['id_status']))>intval(000))
            <td><a class="pointer text-danger" onclick="batalkan(this.id)" name="batalStatus" id="{{$dataPengiriman['id']}}" >{{$dataPengiriman['status']}}</a></td>
            @else
            <td><a class="noUnderline text-dark" id="{{$dataPengiriman['id']}}" >{{$dataPengiriman['status']}}</a></td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
      
      @else
      <p style="text-align: center;">anda belum pernah melakukan pengiriman barang</p>
      @endif
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#datatable').DataTable({
            lengthChange: true,
            info: true,
            paging: true,
            filter:true,
            pageLength : 5,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
            order: [[0, 'desc']]
        });
      });

      function batalkan(id){
        $("#modalEdit").modal('show');
        var msg = $("#messageEdit").text("Apakah anda yakin ingin membatalkan pesanan dengan \n ID : "+id) ;
        msg.html(msg.html().replace(/\n/g,'<br/>'))
        
        $("#judul-modalEdit").text("Batalkan Pesanan") ;
        $("#postIdPesanan").val(id);
      }

      function batalkanPOST(){
        document.getElementById("postDataIDPesanan").submit();
      }
    </script>
</body>
</html>
