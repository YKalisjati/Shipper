<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/dashboard.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
  <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
    @include('partials.userHamburgerMenu')

        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ">
            <h1 class="mt-2"><b>Beranda</b> <p class="h6 text-secondary mt-2">Highlight data dari akun Anda</p> </h1>
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
        </div>
    </div>
  <!--Judul-->
    <main class="ms-sm-auto mt-2">
      

<!--Dibawah garis (MAIN)-->
    <div class="row">
      <!--<div class="alert alert-warning alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <div class="row row-cols-2">
          <div class="col-sm-1">
            <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-warning.svg">
          </div>
          <div class="col-sm-6">
            <strong><b>Nomor HP Anda Belum Diverifikasi</b></strong> 
            <br>Silakan verifikasi nomor HP Anda di <a href="">sini</a>
          </div>
        </div>
      </div>-->

      <div class="col-sm-8">
        <div class="card card-body">
          <div class="row">
            <div class="col">
          <h3><b>Buat Pesanan Kamu</b></h3>
            </div>
            <div class="col-sm-3 text-right">

          <!-- Button -->
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
              Buat Pesanan
            </button>
          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
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
          <p>Website ini dibuat dan dikembangkan oleh Team Magang Sadhar selama <b>3 bulan</b></p>
          <p>Terima kasih</p>
        </div>
        <div class="card card-body mt-3 bg-danger">
          <h4><b class="text-white">Statistik Pesanan</b></h4>
          <p class="text-white"><b>*</b>Data pesanan anda per <b>bulan</b> dalam waktu <b>1 tahun</b></p>
          <hr style="color:white;">
          <div class="pt-2 pb-5 m-1 bg-white">
            <div class="chartContainer" style="height: 300px; width: 100%;">
            </div>
          </div>
        </div>
      </div>
        <div class="col-sm-4">
          <div class="card card-body">
            <div class="row">
              <div class="col-auto gambarProfil">
                  @if($gambar)
                    <img class="rounded-circle"  style="height:55px;width:55px;" src="{{asset('storage/images/' . $gambar->name)}}">
                  @else
                  <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/icon-user-default.svg" style="width:50px;height:50px;"> 
                  @endif
              </div>
              <div class="col">
                <h4 class="mt-2">{{ $data->name }}</h4>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-5">
                <label class="h6 text-secondary">Nomor hp</label>
              </div>
              <div class="col-sm-7">
                <label class="h6 text-secondary">Email</label>
              </div>
              <div class="col-sm-5">
                <span class="h6 text-secondary"><b>{{ $data->handphone }}</b></span>
              </div>
              <div class="col-sm-7">
                <span class="h6 text-secondary"><b>{{ $data->email }}</b></span>
              </div>
            </div>
            <div class="align-items-center text-center"><br>
            <a href="/setting-dashboard" style="text-decoration: none"><button onclick ="" type="button" class="form-control">Edit Profile</button></a>
            </div>
          </div>
          <br>
          <!-- Top content -->
          <div class="top-content">
            <!-- Carousel -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://media.shipper.id/602202/merchant/Banners_217f0a60-5495-4fb8-8b11-3454012f5661.png" class="d-block w-100" alt="slide1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.shipper.id/111202/merchant/Banners_a127b9d6-9160-4d24-9cb1-d15aa4db8228.jpeg" class="d-block w-100" alt="slide2">

                    </div>
                    <div class="carousel-item">
                        <img src="https://media.shipper.id/602202/merchant/Banners_217f0a60-5495-4fb8-8b11-3454012f5661.png" class="d-block w-100" alt="slide3">
                    </div>
                </div>
            </div>
            
            <!-- End carousel -->
          </div>
        </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
  <script type="text/javascript">

  var dataArray = [null,null,null,null,null,null,null,null,null,null,null,null];
  var now = new Date();
  var year = now.getFullYear();
  var month = now.getMonth();
  
    @foreach($pesanan as $pesananChart)
    var data1 = "{{$pesananChart->bulan}}";
    var data2 = "{{$pesananChart->total_pesanan}}";
    
    dataArray[parseInt (data1)-1] = parseInt(data2);

    @endforeach
    console.log(dataArray);

    for(var loop = 0;loop<=parseInt(month);loop++){
      if(dataArray[loop]==null){
        dataArray[loop] = 0;
        console.log(loop);
      }
    }
    console.log(dataArray);
$(function() {
	$(".chartContainer").CanvasJSChart({
    backgroundColor: "white",
    animationEnabled: true,
		title: {
			text: "Jumlah Pesanan Tahun "+year,
      fontColor: "#dc3545",
      padding: 5,
      backgroundColor: "white",
		},
		axisY: {
			title: "Jumlah Pesanan",
      titleFontColor: "#dc3545",
			includeZero: false,
      interval: 1,
      labelFontColor: "#dc3545",
      lineThickness: 3,
      lineColor: "#dc3545",
      gridColor: "#dc3545"
		},
		axisX: {
			interval: 1,
      labelFontColor: "#dc3545",
      lineThickness: 3,
      lineColor: "#dc3545",
      
		},
		data: [
		{
			type: "area", //try changing to column, area
      fillOpacity: .2,
			toolTipContent: "{label}: {y} Pesanan",
      color: "#dc3545",
      lineColor: "#dc3545",
			dataPoints: [
				{ label: "Jan",  y: dataArray[0], markerColor:"#dc3545" },
				{ label: "Feb",  y: dataArray[1], markerColor:"#dc3545" },
				{ label: "March",y: dataArray[2], markerColor:"#dc3545" },
				{ label: "April",y: dataArray[3], markerColor:"#dc3545" },
				{ label: "May",  y: dataArray[4], markerColor:"#dc3545" },
				{ label: "June", y: dataArray[5], markerColor:"#dc3545" },
				{ label: "July", y: dataArray[6], markerColor:"#dc3545" },
				{ label: "Aug",  y: dataArray[7], markerColor:"#dc3545" },
				{ label: "Sep",  y: dataArray[8], markerColor:"#dc3545" },
				{ label: "Oct",  y: dataArray[9], markerColor:"#dc3545" },
				{ label: "Nov",  y: dataArray[10], markerColor:"#dc3545" },
				{ label: "Dec",  y: dataArray[11], markerColor:"#dc3545" }
			]
		}
		]
	});
});
</script>
  </body>
</html>
