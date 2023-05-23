<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan</title>

<link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/laporan.css" rel="stylesheet">
<script src="js/dashboard.js"></script>

  </head>
  
  <body>
    <div class="container-fluid min-vh-0 py-2">
      <div class="row border-bottom">
        @include('partials.userHamburgerMenu')
    
        <div class="col">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="mt-2"><b>Laporan</b> <p class="h6 text-secondary mt-2">Untuk melihat laporan silahkan isi periode tanggal terlebih dahulu</p> </h1>
            
            <div class="dropdown">
              <p>Hello,
              <button onclick="myFunction()" class="dropbtn"> {{ $data->name }}</button>
                @if($gambar)
                <img class="rounded-circle " style="height:35px;width:35px;" src="{{asset('storage/images/' . $gambar->name)}}">
                @else
                <img  src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-user-default.svg">
                @endif
            </p>
              <div id="myDropdown" class="dropdown-content">
                <a href="logout">Logout</a>
              </div>
            </div>

        </div>
        </div>

      </div>

<!--Dibawah garis (MAIN)-->
      <main class="ms-sm-auto mt-2">
            <div class="card card-body text-center">
               
              <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-4">
                        <label>Mulai tanggal :</label>
                        <div class="row">
                            <input class="form-control" type="date" id="fromdate" onChange="dateCheck()" name="fromdate" required>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <p></p>
                        <div class="row">
                            <h1 class="strip">-</h1>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label>Sampai tanggal :</label>
                        <div class="row">
                            <input class="form-control" type="date" id="todate" name="todate" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <p></p>
                        <div class="row">
                          <input class="btn btn-danger"  type="submit" value="Lihat Laporan">
                        </div>
                    </div>
                    <p class="notelap">*Maksimal 30 hari dari tanggal mulai</p>
                </div>
                </form>
            </div></br>
            <br>

            <div class="card card-body ">
              @if(count($dataLaporan)!=0)
                <div>
                <table id="datatable" class="table border-dark">
                  <thead class="table-danger">
                    <tr style="vertical-align: middle;">
                      <th><b>Tanggal Pemesanan</b></th>
                      <th><b>ID Pengiriman</b></th>
                      <th><b>External ID</b></th>
                      <th><b>Nama Pengirim</b></th>
                      <th><b>Nama Perusahaan</b></th>
                      <th><b>Asal Pengiriman</b></th>
                      <th><b>Nama Penerima</b></th>
                      <th><b>No. Handphone</b></th>
                      <th><b>Tujuan Pengiriman</b></th>
                      <th><b>Jenis Paket</b></th>
                      <th><b>Ongkir</b></th>
                      <th><b>Status</b></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($dataLaporan as $pengiriman_barang)
                    <tr class="bd">
                      <td>{{ $pengiriman_barang->created_at }}</td>
                      <td>{{ $pengiriman_barang->id }}</td>
                      <td class="text-center">@if($pengiriman_barang->ex_id!=null){{ $pengiriman_barang->ex_id }}@else - @endif</td>
                      <td>{{ $pengiriman_barang->name }}</td>
                      <td>{{ $pengiriman_barang->perusahaan }}</td>
                      <td>{{ $pengiriman_barang->alamatLengkap_pengirim }},<br>
                        {{ $pengiriman_barang->kota_pengirim }},<br>
                        {{ $pengiriman_barang->provinsi_pengirim }},<br>
                        {{ $pengiriman_barang->kodePos_pengirim }}.
                      </td>
                      <td>{{ $pengiriman_barang->nama_penerima }}</td>
                      <td>{{ $pengiriman_barang->no_penerima }}</td>
                      <td>{{ $pengiriman_barang->alamatLengkap_penerima }},<br>
                        {{ $pengiriman_barang->kota_penerima }},<br>
                        {{ $pengiriman_barang->provinsi_penerima }},<br>
                        {{ $pengiriman_barang->kodePos_penerima }}.
                      </td>
                      <td>{{ $pengiriman_barang->name_type }}</td>
                      <td>{{ $pengiriman_barang->ongkir }}</td>
                      <td>{{ $pengiriman_barang->nama_status }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
                @else
                <div class="tmpl-laporan">
                    <div class="gmbr-laporan" style="width: 100%;">
                      <a href="/faq-umum"><img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-order-empty.svg" alt="Image1" class="icon mx-auto"></a>
                      <h6 class="notelap-1">Belum ada laporan yang dapat ditampilkan</h6>
                      <p class="notelap-2">Untuk melihat laporan silahkan pilih periode tanggal terlebih dahulu</p>
                    </div>
                </div>
                @endif
            </div></br>
        </div>
    </div>
</div>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script> 
    $(document).ready(function () {
        $('#datatable').DataTable({
            lengthChange: false,
            info: false,
            paging: true,
            filter:false,
            ordering: false,
            pageLength : 5,
            lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
        });
      });

      function dateCheck(){
        var dStart = document.getElementById('fromdate').value;
        var dEnd = document.getElementById('todate')
        dEnd.min = dStart;
        dEnd.value = dStart;
      }


      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
      </script>
</body>
</html>
