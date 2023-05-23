<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda Admin</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/adminDashbord.css" rel="stylesheet">
  </head>

  <body>
  <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
    @include('partials.adminHamburgerMenu')

        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
            <h1 class="mt-2"><b>Beranda</b> <p class="h6 text-secondary mt-2">ADMIN</p> </h1>
            <div class="dropdown">
                <p>Hello,
                <button onclick="myFunction()" class="dropbtn"> {{$admin->name}}</button>
                </p>
                <div id="myDropdown" class="dropdown-content">
                <a href="/logoutAdmin">Logout</a>
                </div>
            </div>
          </div>
        </div>
    </div>
  <!--Judul-->
<main class="ms-sm-auto mt-2">
<div class="row">
  <div class="tab d-flex justify-content-center">
    <button class="tablinks" onclick="openTab(event, 'Order1')" id="defaultOpen"><span class="bgClr" >Akun Pengguna</span></button>
    <button class="tablinks" onclick="openTab(event, 'Order2')" ><span class="bgClr">Data Pesanan</span></button>
    <button class="tablinks" onclick="openTab(event, 'Order3')" ><span class="bgClr">Data Penjemputan</span></button>
  </div>
</div>
 <div id="Order1" class="tabcontent"><br>
  <div class="container">
  @if(count($dataUser)!=0)
      <table id="datatablePengguna" class="table table-borderless table-striped border">
        <thead>
          <tr style="vertical-align: middle;">
            <th >ID User</th>
            <th >Email</th>
            <th >No Hp</th>
            <th >Nama</th>
            <th >Perusahaan</th>
            <th >Tanggal Aktivasi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($dataUser as $dataPengguna)
          <tr class="bd" style="vertical-align: middle;">
            <td>{{$dataPengguna['id']}}</td>
            <td>{{$dataPengguna['email']}}</td>
            <td>{{$dataPengguna['handphone']}}</td>
            <td>{{$dataPengguna['name']}}</td>
            <td>{{$dataPengguna['perusahaan']}}</td>
            <td>{{$dataPengguna['verified_email_at']}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      @else
      <p style="text-align: center;">Tidak ada data Pengguna</p>
      @endif
  </div>
 </div>
 <div id="Order2" class="tabcontent"><br>
 <div class="container">
  @if(count($dataPesanan)!=0)
      <table style="vertical-align: middle;" id="datatablePengiriman" class="table table-borderless table-striped border">
        <thead>
          <tr style="vertical-align: middle;">
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
        @foreach($dataPesanan as $dataPengiriman)
          <tr class="bd" style="vertical-align: middle;">
            
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
        </tbody>
      </table>
      
      @else
      <p style="text-align: center;">Tidak ada data pengiriman</p>
      @endif
  </div>
 </div>
 <div id="Order3" class="tabcontent"><br>
 <div class="container">
 @if(count($dataPenjemputan)!=0)
      <table style="vertical-align: middle;" id="datatablePenjemputan" class="table table-borderless table-striped border">
        <thead>
          <tr style="vertical-align: middle;">
            <th >ID Penjemputan</th>
            <th >ID Pesanan</th>
            <th >Waktu Pengajuan Penjemputan</th>
            <th >Nama Kurir Penjemput</th>
            <th >Sudah Diterima Kurir</th>
            <th >Waktu Diterima Kurir</th>
            <th >Sudah Diterima Warehouse</th>
            <th >Waktu Diterima Warehouse</th>
          </tr>
        </thead>
        <tbody>
        @foreach($dataPenjemputan as $dataPenjemputanPesanan)
          <tr class="bd" style="vertical-align: middle;">
            <td >{{$dataPenjemputanPesanan['id']}}</td>
            <td >{{$dataPenjemputanPesanan['id_pesanan']}}</td>
            <td >
              {{$dataPenjemputanPesanan['waktu_penjemputan']}}<br>
              {{$dataPenjemputanPesanan['tanggal_penjemputan']}}
            </td>
            <td >{{$dataPenjemputanPesanan['agen_penjemputan']}}</td>
            <td >
              @if($dataPenjemputanPesanan['sudah_diterima_agen']==0)Belum
              @elseif($dataPenjemputanPesanan['sudah_diterima_agen']==1)Sudah
              @endif
            </td>
            <td >
              @if($dataPenjemputanPesanan['sudah_diterima_agen']==0)
              -
              @elseif($dataPenjemputanPesanan['sudah_diterima_agen']==1)
              {{$dataPenjemputanPesanan['waktu_diterima_agen']}}<br>
              {{$dataPenjemputanPesanan['tanggal_diterima_agen']}}
              @endif
            </td>
            <td >
              @if($dataPenjemputanPesanan['sudah_diterima_warehouse']==0)Belum
              @elseif($dataPenjemputanPesanan['sudah_diterima_warehouse']==1)Sudah
              @endif
            </td>
            <td >
              @if($dataPenjemputanPesanan['sudah_diterima_warehouse']==0)
              -
              @elseif($dataPenjemputanPesanan['sudah_diterima_warehouse']==1)
              {{$dataPenjemputanPesanan['waktu_diterima_warehouse']}}<br>
              {{$dataPenjemputanPesanan['tanggal_diterima_warehouse']}}
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
      @else
      <p style="text-align: center;">Tidak ada data Penjemputan</p>
      @endif
 </div>
</div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
      

  <script>
  $(document).ready(function () {
    $('#datatablePengiriman').DataTable({
      lengthChange: true,
      info: true,
      paging: true,
      filter:true,
      pageLength : 5,
      lengthMenu: [[5, 10, 15, 20,-1], [5, 10, 15, 20,'all']],
      order: [[0, 'desc']]
    });
  });
  $(document).ready(function () {
    $('#datatablePengguna').DataTable({
      lengthChange: true,
      info: true,
      paging: true,
      filter:true,
      pageLength : 10,
      lengthMenu: [[10, 20, 30, -1], [10, 20, 30, 'all']] 
    });
  });

  $(document).ready(function () {
    $('#datatablePenjemputan').DataTable({
      lengthChange: true,
      info: true,
      paging: true,
      filter:true,
      pageLength : 5,
      lengthMenu: [[5, 10, 15, 20,-1], [5, 10, 15, 20,'all']]
    });
  });
     function openTab(evt, tabName) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(tabName).style.display = "block";
                  evt.currentTarget.className += " active";
                }
                
                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>
  </script>
  </body>
</html>
