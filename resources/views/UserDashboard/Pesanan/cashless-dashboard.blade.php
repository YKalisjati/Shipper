<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cashless Dashboard</title>

<link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/pesanan.css" rel="stylesheet">
<script src="js/dashboard.js"></script>

  </head>

  <body>
  <div class="container-fluid min-vh-0 py-2">
    <div>
    <div class="row">
      @include('partials.userHamburgerMenu')

      <div class="col">
        <div class="d-flex justify-content-between align-items-center">
          <h1 class="mt-2"><b>Cashless Marketplace</b> <p class="h6 text-secondary mt-2"> Pesanan Ditemukan</p> </h1>
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
            <p class="h6 mt-2">Untuk mendownload laporan pesanan silahkan menuju ke halaman laporan atau klik <a href="#">disini</a></p>
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
                          <a href="/buatpesancashless-dashboard">
                          <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-order-cashless.svg">
                        </a><div class="tulisan"><label>Pesanan Cashless</label></div>
                        </div>
                        <div class="col text-center zoom">
                          <a href="/bulk-upload-cashless-dashboard">
                          <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/vector-order-cashless-bulk.svg">
                        </a><div class="tulisan"><label>Bulk Upload Cashless</label></div>
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
            <input type="date" id="dateStart" name="start" >
            <span class="text-danger">@error('start'){{$message}}@enderror</span>
            &nbsp;-&nbsp;
            <input type="date" id="dateEnd" name="end"  >
            <input style="margin-left:10px;" type="button" onClick="checkDate()" class="btn btn-danger" value="Cari">
            <a style="margin-left:10px;" href="/pesanan-dashboard"><input type="button" class="btn btn-danger" value="Refresh"></a>
          </form>
          </div>
        </div>
      </div>
    </div>
    <br><hr>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script type="text/javascript"></script>
</body>
</html>
