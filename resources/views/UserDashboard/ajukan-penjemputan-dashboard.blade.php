<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajukan Penjemputan</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
    <link href="/css/ajukan-penjemputan.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    

</head>
  <body onload="setMinOnDateType()">
    <!--Bar Navigasi-->
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
    
  <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
      @include('partials.userHamburgerMenu')

        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="mt-2"><b>Ajukan Penjemputan</b><p class="h6 text-secondary mt-2"> {{ count($dataPesanan) }} Pesanan Butuh Tindakan</p> </h1>
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

<!--MAIN-->
    <main class="ms-sm-auto mt-5">
    @if(count($dataPesanan)!=0)
      <div id="dataPesanan" class="tabcontent" >
        <div class="container">
        
          
          <table style="vertical-align: middle;" id="datatable" class="table table-borderless table-striped">
            <thead>
              <tr>
                <th style="width:60px;"><input style="margin-left:45%; margin-right:auto;" type="checkbox" name="select_all" id="select_all" /></th>
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
            @foreach($dataPesanan as $dataPengirimanPesanan)
              <tr class="bd">
                <td><input style="margin-left:45%; margin-right:auto;" type="checkbox" id="{{$dataPengirimanPesanan['id']}}"  onclick="checkBoxListener()" name="selected" value="{{$dataPengirimanPesanan['berat']}}" ></td>
                <td>{{$dataPengirimanPesanan['created_at']}}</td>
                <td>{{$dataPengirimanPesanan['id']}}</td>
                <td>
                  {{$dataPengirimanPesanan['alamatLengkap_pengirim']}},<br>
                  {{$dataPengirimanPesanan['kota_pengirim']}},<br>
                  {{$dataPengirimanPesanan['provinsi_pengirim']}}.<br>
                </td>
                <td>
                  {{$dataPengirimanPesanan['alamatLengkap_penerima']}},<br>
                  {{$dataPengirimanPesanan['kota_penerima']}},<br>
                  {{$dataPengirimanPesanan['provinsi_penerima']}}.<br>
                </td>
                <td>{{$dataPengirimanPesanan['agen']}}&nbsp;({{$dataPengirimanPesanan['jenis_layanan']}})</td>
                <td>{{$dataPengirimanPesanan['name_type']}}</td>
                <td>{{str_replace("Rp. ","",$dataPengirimanPesanan['biaya'])}}</td>
                <td>{{$dataPengirimanPesanan['status']}}</td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
          
               
        </div>
        <div class="container d-flex flex-row-reverse">
          <div class="mt-3">
            <button type="button" class="btn tabBtn btn-danger" onclick="openContent(event, 'dataPenjemputan')" >Ajukan Penjemputan</button>
          </div>
        </div>
      </div>
      <div id="dataPenjemputan" class="container tabcontent">
        <div class="mb-4">
          <form id="postPenjemputan" method="POST" action="{{route('postAjukanPenjemputan')}}">
          @csrf
          <div class="row">
            <div id="formDataPenjemputan_item1 " class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="waktuJemput">Tanggal Penjemputan</label><br>
                <input value="{{old('hariPenjemputan')}}" id="waktuJemput" name="hariPenjemputan" min="2022-09-16" class="width_for_form height_form1" type="date"><br>
                <span class="text-danger">@error('hariPenjemputan'){{$message}}@enderror</span>
              </div>
            </div>
            <div id="formDataPenjemputan_item2" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="jamPenjemputan">Waktu Penjemputan</label><br>
                <select id="jamPenjemputan" name="waktuPenjemputan" class="width_for_form height_form1">
                  <option class="secondary" value="" disabled selected hidden>Pilih waktu penjemputan</option>
                  <option value="08:00-10:00" >08:00-11:00</option>
                  <option value="15:00-17:00" >12:00-17:00</option>
                </select><br>
                <span class="text-danger">@error('waktuPenjemputan'){{$message}}@enderror</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div id="formDataPenjemputan_item3" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="jumlahPaket">Jumlah Paket</label><br>
                <input value="{{old('jumlahPaket')}}" id="jumlahPaket" name="jumlahPaket" placeholder="Masukkan jumlah barang" class="width_for_form height_form1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text"  style="background-color:#D3D3D3;" readonly>
                <br>
                <span class="text-danger">@error('jumlahPaket'){{$message}}@enderror</span>
              </div>
            </div>
            <div id="formDataPenjemputan_item4" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="beratTotal">Berat Total (Gram)</label><br>
                <input value="{{old('beratTotal')}}" id="beratTotal" name="beratTotal" placeholder="Masukkan berat total" class="width_for_form height_form1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" style="background-color:#D3D3D3;" readonly >
                <br>
                <span class="text-danger">@error('beratTotal'){{$message}}@enderror</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div id="formDataPenjemputan_item5" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="idPesanan">ID Pesanan</label><br>
                <textarea   id="idPesanan" name="idPesanan" placeholder="Masukkan id pesanan" class="width_for_form height_form2" style="background-color:#D3D3D3;" readonly >{{old('idPesanan')}}</textarea>  
                <br>
                <span class="text-danger">@error('idPesanan'){{$message}}@enderror</span>
              </div>
            </div>
            <div id="formDataPenjemputan_item6" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <label for="catatanPenjemputan">Catatan untuk Agen</label><br>
                <textarea  id="catatanPenjemputan" name="catatan"  placeholder="Masukkan catatan jika diperlukan" class="width_for_form height_form2">{{old('catatan')}}</textarea>
              </div>
            </div>
          </div>
          </form>
          <div class="row">
            <div id="formDataPenjemputan_item5" class="col-lg-6 d-flex justify-content-center mb-3">
            </div>
            <div id="formDataPenjemputan_item6" class="col-lg-6 d-flex justify-content-center mb-3">
              <div>
                <button type="button" class="btn tabBtn btn-secondary" onclick="openContent(event, 'dataPesanan')" id="defaultOpen">Cek data pesanan</button>
                <button type="button" class="btn tabBtn btn-danger" onclick="submiteAjukanPenjemputan()">Ajukan Sekarang Juga</button>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card">
            <div class="card-body lightGray">
              <h5>Informasi</h5>
              <p class="mb-1">1. Jumlah Paket akan menyesuaikan jumlah pesanan yang anda centang pada bagian data pesanan.</p>
              <p class="mb-1">2. Id Pesanan akan terisi menyesuaikan data Id pesanan yang anda centang pada bagian data pesanan.</p>
              <p class="mb-1">3. Berat Total akan terisi menyesuaikan data pesanan yang anda centang pada bagian data pesanan.</p>
              <p class="mb-1">3. Berat Total adalah hasil dari kalkulasi berat pada data pesanan yang pernah anda buat.</p>
              <p class="text-end text-secondary" ><b>Team Magang</b></p>
            </div>
          </div>
        </div>
      </div>
      @else
        <p style="text-align: center;">Tidak ada pesanan yang dapat di ajukan untuk penjemputan</p>
      @endif
    </main>   
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="js/dashboard.js"></script>
  <script>
    function openContent(evt, contentName) {
      var i, tabcontent, tabBtn;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tabBtn = document.getElementsByClassName("tabBtn");
      for (i = 0; i < tabBtn.length; i++) {
        tabBtn[i].className = tabBtn[i].className.replace(" active", "");
      }
      document.getElementById(contentName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

    function setMinOnDateType(){
        notifikasi();
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        var date = yyyy+"-"+mm+"-"+dd;
        var inputForm = document.getElementById("waktuJemput");
        if(inputForm.value==""){
          inputForm.value = date;
        }
        inputForm.min = date;
        checkedOld();
    }

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
        @endif
      }

    function checkedOld(){
      var test = document.getElementById("idPesanan");
        const arrayId = (test.value).split("\n")
        for (let i = 0; i < arrayId.length; i++) {
          document.getElementById(arrayId[i]).checked = true;
        }
        var checkBox = document.getElementById("select_all");
        if (arrayId.length < {{count($dataPesanan)}}){
          checkBox.checked = false;
        }else{
          checkBox.checked = true;
        }
    }

    function checkBoxListener(){
      var arrayId = [];
      var arrayBerat = [];
      var allChecked = document.querySelectorAll('input[name=selected]:checked');
      var dataId = document.getElementById("idPesanan");
      var dataBerat= document.getElementById("beratTotal");
      var jumlahPaket= document.getElementById("jumlahPaket");
      dataId.value="";
      dataBerat.value="";
      var countBerat = 0;
      for (var i = 0; i < allChecked.length; i++) {
        arrayId.push(allChecked[i].id);
        dataId.value+=allChecked[i].id+ "\n";
        countBerat +=parseFloat(allChecked[i].value);
      }
      jumlahPaket.value=arrayId.length;
      dataBerat.value=countBerat;

      var checkBox = document.getElementById("select_all");
      if (arrayId.length < {{count($dataPesanan)}}){
        checkBox.checked = false;
      }else{
        checkBox.checked = true;
      }
    }
    
    function submiteAjukanPenjemputan(){
      if (confirm("Apa anda yakin ingin mengajukan penjemputan ?") == true) {
          document.getElementById("postPenjemputan").submit();
        }
      
    }

    $('#select_all').click(function(event) {   
      if(this.checked) {
          // Iterate each checkbox
          $(':checkbox').each(function() {
              this.checked = true;     
              checkBoxListener();                   
          });
      } else {
          $(':checkbox').each(function() {
              this.checked = false;     
              checkBoxListener();                  
          });
      }
    }); 

    $(document).ready(function () {
      $('#datatable').DataTable({
        lengthChange: false,
        info: false,
        paging: false,
        filter:false,
        ordering: false,
      });
    });
  </script>
</body>
</html>