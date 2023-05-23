<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terima Pesanan</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
    <link href="/css/ajukan-penjemputan.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    

</head>
  <body>
    <!--Modal Jemput-->
  <div id="modalJemput" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div id="headerModalJemput" class="modal-header bg-danger">
                <h5 id="judul-modalJemput" class="judul-modal text-white">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="bodyModalJemput" class="modal-body ">
                <p id="messageJemput"></p>
                <div id="showDatasId"></div>
                <form action="{{route('terimaPesanan')}}" method="post" id="postJemputPesanan">
                @csrf
                  <textarea hidden name="listIdDiJemput" id="dataIdJemput" ></textarea>
                </form>
                
            </div>
            <div id="footerModalJemput" class="modal-footer">
                <button id="buttonModalJemput" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="button" onclick="jemputPesanan()" class="btn btn-danger">Ya</button>
            </div>
            </div>
        </div>
    </div>
    <!--Modal Notifikasi-->
    <div id="modalNotifikasi" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div id="headerModal" class="modal-header bg-danger">
                <h5 id="judul-modal" class="judul-modal text-white">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="bodyModal" class="modal-body ">
                <p id="message"></p>
            </div>
            <div id="footerModal" class="modal-footer">
                <button id="buttonModal" type="button" class="btn text-dark" data-bs-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>
    <!--Bar Navigasi-->
    
  <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
    @include('partials.adminHamburgerMenu')
        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="mt-2"><b>Terima Pesanan</b><p class="h6 text-secondary mt-2"> {{ count($dataPenjemputan) }} Pesanan Belum Diterima</p> </h1>
            <div class="dropdown">
              <p>Hello,
              <button onclick="myFunction()" class="dropbtn"> {{$admin->name}} </button>
              </p>
              <div id="myDropdown" class="dropdown-content">
              <a href="/logoutAdmin">Logout</a>
              </div>
          </div>
          </div>
        </div>
      </div>

<!--MAIN-->
    <main class="ms-sm-auto mt-5">
    @if(count($dataPenjemputan)!=0)
      <div id="dataPenjemputan" class="tabcontent" >
        <div class="container">
        <h4 class="text-white bg-danger p-2">Silahkan pilih pesanan yang telah diterima</h4>
          
          <table style="vertical-align: middle;" id="datatable" class="table table-borderless table-striped">
            <thead>
              <tr>
                <th style="width:60px;"><input style="margin-left:45%; margin-right:auto;" type="checkbox" name="select_all" id="select_all" /></th>
                <th >Tanggal Penjemputan</th>
                <th >Waktu Penjemputan</th>
                <th >Id Pesanan</th>
                <th >Alamat Penjemputan</th>
                <th >Jenis Paket</th>
                <th >Berat Paket</th>
                <th >Ongkir (Rp.)</th>
                <th >Catatan </th>
              </tr>
            </thead>
            <tbody>
            @foreach($dataPenjemputan as $dataPenjemputanPesanan)
              <tr class="bd">
                <td><input style="margin-left:45%; margin-right:auto;" type="checkbox" id="{{$dataPenjemputanPesanan['id_pengiriman']}}" onclick="checkBoxListener()"  name="selected" value="{{$dataPenjemputanPesanan['tanggalPenjemputan']}}" ></td>
                <td>{{$dataPenjemputanPesanan['tanggalPenjemputan']}}</td>
                <td>{{$dataPenjemputanPesanan['waktuPenjemputan']}}</td>
                <td>{{$dataPenjemputanPesanan['id_pengiriman']}}</td>
                <td>
                  {{$dataPenjemputanPesanan['alamatLengkap_pengirim']}},<br>
                  {{$dataPenjemputanPesanan['kota_pengirim']}},<br>
                  {{$dataPenjemputanPesanan['provinsi_pengirim']}},<br>
                  {{$dataPenjemputanPesanan['kode_pos']}}.<br>
                </td>
                
                <td>{{$dataPenjemputanPesanan['name_type']}}</td>
                <td>{{$dataPenjemputanPesanan['berat_paket']}}</td>
                <td>{{str_replace("Rp. ","",$dataPenjemputanPesanan['ongkir'])}}</td>
                @if($dataPenjemputanPesanan['catatanPenjemputan']==null)
                <td>-</td>
                @else
                <td>{{$dataPenjemputanPesanan['catatanPenjemputan']}}</td>
                @endif
                
              </tr>
              @endforeach
            </tbody>
          </table>
          
               
        </div>
        <div class="container d-flex flex-row-reverse">
          <div class="mt-3">
            <button type="button" class="btn tabBtn btn-danger" onclick="jemputButtonListener()";>Terima Paket</button>
          </div>
        </div>
      </div>
      @else
        <p style="text-align: center;">Tidak ada pesanan yang dapat diterima</p>
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

    function jemputPesanan(){
      var allChecked = document.querySelectorAll('input[name=selected]:checked');
      if(allChecked.length!=0){
          document.getElementById("postJemputPesanan").submit();
      }else{
        $("#modalNotifikasi").modal('show');
        $("#judul-modal").text("Warning!") ;
        $("#message").text("Silahkan memilih data yang telah diterima terlebih dahulu.") ;
        $("#modalJemput").modal('hide');
      }
    }

    function jemputButtonListener(){
        $("#modalJemput").modal('show');
        var msg = $("#messageJemput").text("Apakah anda yakin ingin telah menerima pesanan berikut ini") ;
        
        $("#judul-modalJemput").text("Jemput Pesanan") ;
      }

    function checkBoxListener(){
      var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        var date = yyyy+"-"+mm+"-"+dd;

      var arrayId = [];
      var arrayId = [];
      var arrayBerat = [];
      var allChecked = document.querySelectorAll('input[name=selected]:checked');
      var dataId = document.getElementById("dataIdJemput");
      dataId.value="";
      $('#isiForm').empty();
      $('#showDatasId').empty();
      for (var i = 0; i < allChecked.length; i++) {
            arrayId.push(allChecked[i].id);
            dataId.value+=allChecked[i].id+ "\n";
            $('#showDatasId').append('<p>ID : '+allChecked[i].id+'</p>');
      }
      var checkBox = document.getElementById("select_all");
      if (arrayId.length < {{count($dataPenjemputan)}}){
        checkBox.checked = false;
      }else{
        checkBox.checked = true;
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