<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bulk Upload Domestik</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/bulk-domestik.css" rel="stylesheet">
    <script src="js/dashboard.js"></script>
    <style>
      input[type="file"]::file-selector-button {
        background-color: white !important;
        color:#dc3545 !important;
        font-weight: bold !important;
      }
      input[type="file"]::file-selector-button:hover {
        background-color: white !important;
        color:#dc3545 !important;
        font-weight: bold !important;
      }
    </style>
  </head>
  
  <body>
    <div class="container-fluid min-vh-0 py-2">
      <div class="row border-bottom">
        @include('partials.userHamburgerMenu')
    
        <div class="col-auto kembali">
            <a class="iconKembali zoom mt-3">
                <img src="https://assets-cdn.shipper.id/bos-web/v1.22.0-alpha5/assets/images/icon-arrow-alt.svg" data-bs-toggle="modal" data-bs-target="#myModal">
            </a>
          <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header text-center border-0">
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
          
                <!-- Modal body -->
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col text-center">
                          <div class="">
                            <img src="https://assets-cdn.shipper.id/bos-web/v1.22.0-alpha5/assets/images/vector-order-empty.svg">
                            <h3>Yakin ingin keluar?</h3>
                            <p>Data pesanan Anda akan terhapus dan belum tercatat di sistem. Yakin tetap ingin keluar?</p>
                          </div>
                          <div class="row back">
                            <div class="col-sm-5">
                              <button type="button" class="btn btn-dangerKeluar" name="bSubmit" onclick="goBack()"  id="simpan">Ya, Tetap Keluar</buton>
                            </div>
                            <div class="col-sm-5">
                              <input class="btn batal-btn" type="button" data-bs-dismiss="modal" value="Batal Keluar">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        <!-- <button onclick="goBack()">Go Back</button> -->
        <script>
          function goBack() {
            window.history.back();
          }
        </script>
        </div>

        <div class="col">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
              <h1 class="mt-2"><b>Bulk Upload</b> <p class="h6 text-secondary mt-2">Unggahan Pesanan Masal</p> </h1>
          </div>
        </div>

      </div>

<!--Dibawah garis (MAIN)-->
    <main class="ms-sm-auto mt-2">
      <div class="row">
        <div class="col" style="min-width:400px;margin-bottom: 25px;">
          <div class="card card-body overflow-auto">
            <div class="card card-body">
              <div class="pengirim">
                <h5><b>Data Pengirim</b></h5>
                <p>{{ $data->name }} / {{ $data->handphone }}</p>
                <table>
                <tr><td><p id="alamatP0">{{$dataAlamat[0]->alamat_lengkap}}, </p></td>
                <td><p id="provinsiP0"> {{$dataAlamat[0]->province_name}}, </p></td>
                <td><p id="kotaP0"> {{$dataAlamat[0]->city_name}},</p></td>
                <td><p id="kodeposP0"> {{$dataAlamat[0]->kodepos}}</p></td></tr>
                </table>
              </div>
              <button class=" bg-danger" onclick="openTab(event, 'order1')" id="defaultOpen">
                Ubah
              </button>
            </div><br>
            
            <div class="card card-body text-center">
              <div class="pengirim">
                <h5><b>Upload File</b></h5>
                <p>Mohon upload file pesananan anda menggunakan template .xlsx yang sudah disediakan</p>
              </div>
              <button class=" bg-danger" onclick="openTab(event, 'order2')" id="defaultOpen">
                Pilih
              </button>
            </div><br>

            <div class="card card-body lightGray">
              <div class="informasi">
                <p><b>Informasi</b></p>
                <p><b class="text-danger">**</b>Alamat pengirim yang akan digunakan dalam membuat pesanan adalah alamat yang anda gunakan pada halaman ini.</p>
                <p><b class="text-danger">**</b>Mengubah alamat pengirim dibagian buat pesanan tidak akan menyebabkan perubahan pada data aslinya.</p>
                <p class="text-end text-secondary" ><b>Team Magang</b></p>
              </div>
            </div>
          
          </div>
        </div>
        
        <div class="col" style="min-width:400px;margin-bottom: 25px;">
          <div class="card card-body text-center">
            <div id="order1" class="tabcontent">
              <div class="card card-body text-center">
                <h4 class="detailpaket">Data Pengirim</h4><br>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="tabel">
                      Nama Pengirim
                      <form id="PostDataBulk" action="{{ route('excel.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <input class="form-control" type="text" id="berat" placeholder="Nama Pengirim" name="" value="{{ $data->name }}" disabled readonly> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="tabel">
                      No Handphone
                      <input class="form-control" type="text" id="berat" placeholder="Masukkan Nomor HP" value="{{ $data->handphone }}" disabled readonly>
                    </div>
                  </div>
                </div><br>

                <div class="pilalamat">
                  Pilih Alamat
                  <select id="pilihaAlamatAsal" class="form-control" onChange="pilihAlamatPengirim()" required>
                    @foreach($dataAlamat as $calData)
                    <option value="{{$calData->id}}">{{$calData->nama_alamat}}</option>
                    @endforeach
                  </select>
                </div><br>

                <div class="tabel">
                  Alamat Lengkap
                  <input name="alamatLengkapPengirim"class="form-control" onkeyup="alamatAsal()" type="text" id="Al_Asal" placeholder="Masukkan Alamat" value="{{ $dataAlamat[0]->alamat_lengkap }}">
                </div><br>

                <div class="tabel">
                  Pilih Provinsi
                  <input id="pilihaProvinsiAsal" autocomplete="off"  list="provinceList" class="form-control" onChange="getIdProvince()" value="{{ $dataAlamat[0]->province_name }}"  required>
                    <datalist id="provinceList" >
                    @foreach ($province as $provinsi => $value)
                      <option data-value="{{$value}}"  value="{{ $provinsi }}">
                    @endforeach
                    </datalist>
                    <input type="hidden" name="idProvinsi" id="hidenProvinceId" value="{{ $dataAlamat[0]->province_id }}">
                </div><br>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="tabel">
                      Kabupaten/Kota
                      <input name="kotaPengirim" onChange="getIdCity()" autocomplete="off"  list="cityList" class="form-control" type="text" id="K_Asal" placeholder="Masukkan Kabupaten/Kota" value="{{ $dataAlamat[0]->city_name }}" >
                        <datalist id="cityList" >
                        @foreach ($cities as $city)
                          @if($city->province_id ==  $dataAlamat[0]->province_id )
                            <option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">
                          @endif
                        @endforeach
                        </datalist>
                        <input type="hidden" name="idCity" id="hidenCityId" value="{{ $dataAlamat[0]->city_id }}">
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="tabel">
                      Kode Pos
                      <input onkeyup="kodeposAsal()" name="kodePosPengirim"class="form-control" autocomplete="off"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="KPos_Asal"  placeholder="Masukkan Kode Pos" value="{{ $dataAlamat[0]->kodepos }}" >
                    </div>
                  </div>
                </div><br>

                <div class="tabel">
                  Catatan Tambahan
                  <input name="notePengirim" class="form-control" type="text" id="C_Asal" placeholder="Catatat spt: Lantai gedung/Nomor Rumah" value="{{ $dataAlamat[0]->note }}">
                </div>

                <div class="cariKurir">
                  <button type="button" class="button buttonsimpan" onclick="openTab(event, 'order2')">Lanjutkan</button> 
                </div>
              </div>
            </div>
            
            <div id="order2" class="tabcontent"><br>
              <div class="card card-body" style="border-radius:8px">
                <p class="title-alamat">Excel Template</p>
                <p class="text-alamat">Download dulu template .xlsx untuk Anda isi dengan data Pesanan. Lalu upload template yang sudah terisi.</p>
                <div class="align-items-center text-center"><br>
                  <a href="{{route('downloadTemplateDomestik')}}" style="text-decoration: none;"><button onclick ="" type="button" class="form-control">Download Template</button></a>
                </div>
              </div><br>
              
              <div class="card card-body align-items-center" style="border-radius:8px">
                <p class="title-alamat">Upload Excel</p>
                <div class="card card-body ketiga">
                  <div class="row pilihFile">
                    <input class="form-control mb-3 text-danger border border-danger color-danger" style="height:auto !important;" type="file" name="excel" id="excel" accept=".xlsx" required="required" >
                    <button type="button" class="btn btn-danger" id="submitedData" data-bs-toggle="modal" onclick="validate();" data-bs-target="#staticBackdrop">
                      Pilih File
                    </button>
                  </div>
                </div>
                </form>
                  <div class="text-secondary">
                    <p>*Pengisian Kurir diisi beserta layanannya<br>
                    **Pengisian Ongkir sesuai dengan tujuan<br>
                    ***Lakukan pengecekan ongkir dan kurir serta layanan pada halaman <a href="/tarif-pengiriman" target="_blank">tarif pengiriman</a></p>
                  </div>
              </div>
            
            </div>
          </div>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/buatPesanListener.js"></script>

          <script>
          if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
          }

          function validate() {
            const excel = document.querySelector('#excel');
            console.log(excel.files[0]);
            if(excel.files[0]!=null ){
              if(excel.files[0].type.toLowerCase() == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
                document.getElementById('PostDataBulk').submit();
              }else{
                alert("Kami hanya dapat menerima file yang bertipe .xlsx");
                excel.value='';
              }
            }else{
                alert("Upload file .xlsx telebih dahulu");
                excel.value='';
            }
          }

            function getIdProvince(){
              
              const name = document.querySelector('#pilihaProvinsiAsal').value;
              const id = document.querySelector('#hidenProvinceId');
              const list = document.querySelector('#provinceList');
              
              var valueOption = 0; 
              var cond = 0; 
              
              for (i = 0; i < list.options.length; i++) {
                if (list.options[i].value.toLowerCase()==name.toLowerCase()){
                    valueOption = list.options[i].getAttribute('data-value');
                    id.value = valueOption;
                }
              }
            
              var options;
              @foreach ($cities as $city)         
                if({{$city->province_id}} == valueOption){
                  options += '<option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">';
                  cond = true;
                }
              @endforeach
            
              if(cond){
                document.querySelector('#K_Asal').value="";
                document.querySelector('#K_Asal').removeAttribute('readonly');
                document.querySelector('#K_Asal').style.removeProperty("background-color");
                document.querySelector('#KPos_Asal').setAttribute('readonly', true);
                document.querySelector('#KPos_Asal').value="";
                document.querySelector('#KPos_Asal').style.backgroundColor = "#D3D3D3";
                document.getElementById('provinsiP0').innerHTML = name+"," ;
              }else{
                document.querySelector('#K_Asal').setAttribute('readonly', true);
                document.querySelector('#K_Asal').value="";
                document.querySelector('#K_Asal').style.backgroundColor = "#D3D3D3";
                document.querySelector('#KPos_Asal').setAttribute('readonly', true);
                document.querySelector('#KPos_Asal').value="";
                document.querySelector('#KPos_Asal').style.backgroundColor = "#D3D3D3";
                document.getElementById('provinsiP0').innerHTML = "";
                document.getElementById('kotaP0').innerHTML = "" ;
                document.getElementById('kodeposP0').innerHTML = "" ;
              }
              document.getElementById('cityList').innerHTML = options;
            
              
              }
            
            function getIdCity(){
              const name = document.querySelector('#K_Asal').value;
              const id = document.querySelector('#hidenCityId');
              const list = document.querySelector('#cityList');
              var con = true;
              for (i = 0; i < list.options.length; i++) {
                if (list.options[i].value.toLowerCase()==name.toLowerCase()){
                  id.value = list.options[i].getAttribute('data-value');
                  document.querySelector('#KPos_Asal').removeAttribute('readonly');
                  document.querySelector('#KPos_Asal').style.removeProperty("background-color");
                  con=false;
                  
                }
              }
              if(name==""){
                document.getElementById('kotaP0').innerHTML = "" ;
                document.getElementById('kodeposP0').innerHTML = "" ;
              }else{
                document.getElementById('kotaP0').innerHTML = name+"," ;
              }
              if(con){
                  document.querySelector('#KPos_Asal').setAttribute('readonly', true);
                  document.querySelector('#KPos_Asal').value="";
                  document.querySelector('#KPos_Asal').style.backgroundColor = "#D3D3D3";
                }
              }
            
            function getIdProvinceP(){
              const name = document.querySelector('#pilihaProvinsiPenerima').value;
              const id = document.querySelector('#hidenProvinceIdP');
              const list = document.querySelector('#provinceListP');
              var valueOption = 0; 
              var cond = 0; 
              
              for (i = 0; i < list.options.length; i++) {
                if (list.options[i].value.toLowerCase()==name.toLowerCase()){
                    valueOption = list.options[i].getAttribute('data-value');
                    id.value = valueOption;
                }
              }
              var options;
              @foreach ($cities as $city)         
                if({{$city->province_id}} == valueOption){
                  options += '<option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">';
                  cond = true;
                }
              @endforeach
              if(cond){
                document.querySelector('#K_Penerima').value="";
                document.querySelector('#K_Penerima').removeAttribute('readonly');
                document.querySelector('#K_Penerima').style.removeProperty("background-color");
                document.querySelector('#KPos_Penerima').setAttribute('readonly', true);
                document.querySelector('#KPos_Penerima').value="";
                document.querySelector('#KPos_Penerima').style.backgroundColor = "#D3D3D3";
              }else{
                document.querySelector('#K_Penerima').setAttribute('readonly', true);
                document.querySelector('#K_Penerima').value="";
                document.querySelector('#K_Penerima').style.backgroundColor = "#D3D3D3";
                document.querySelector('#KPos_Penerima').setAttribute('readonly', true);
                document.querySelector('#KPos_Penerima').value="";
                document.querySelector('#KPos_Penerima').style.backgroundColor = "#D3D3D3";
              }
              document.getElementById('cityListP').innerHTML = options;
              if(cond==""){
                document.getElementById('provinsiP0P').innerHTML = "";
                document.getElementById('kotaP0P').innerHTML = "" ;
                document.getElementById('kodeposP0P').innerHTML = "" ;
              }else{
                document.getElementById('provinsiP0P').innerHTML = name+"," ;
              }
              }
            
              function getIdCityP(){
              const name = document.querySelector('#K_Penerima').value;
              const id = document.querySelector('#hidenCityIdP');
              const list = document.querySelector('#cityListP');
              var con = true;
              for (i = 0; i < list.options.length; i++) {
                if (list.options[i].value.toLowerCase()==name.toLowerCase()){
                  id.value = list.options[i].getAttribute('data-value');
                  document.querySelector('#KPos_Penerima').removeAttribute('readonly');
                  document.querySelector('#KPos_Penerima').style.removeProperty("background-color");
                  con=false;
                }
              }
              if(name==""){
                document.getElementById('kotaP0P').innerHTML = "" ;
                document.getElementById('kodeposP0P').innerHTML = "" ;
              }else{
                document.getElementById('kotaP0P').innerHTML = name+"," ;
              }
              if(con){
                  document.querySelector('#KPos_Penerima').setAttribute('readonly', true);
                  document.querySelector('#KPos_Penerima').value="";
                  document.querySelector('#KPos_Penerima').style.backgroundColor = "#D3D3D3";
                }
              }
            
              function pilihAlamatPengirim(){
                var select = document.getElementById('pilihaAlamatAsal');
                var option = select.options[select.selectedIndex];  
                @foreach($dataAlamat as $alamatUsr)   
                if(option.value=="{{$alamatUsr->id}}"){
                    document.getElementById("Al_Asal").value = "{{$alamatUsr->alamat_lengkap }}";
                    document.getElementById("K_Asal").value = "{{ $alamatUsr->city_name }}";
            
                    document.getElementById("pilihaProvinsiAsal").value = "{{ $alamatUsr->province_name }}";
                    document.getElementById("hidenProvinceId").value ="{{ $alamatUsr->province_id }}";
                    document.getElementById("K_Asal").value = "{{ $alamatUsr->city_name }}";
                    document.getElementById("hidenCityId").value = "{{ $alamatUsr->city_id }}";
                    document.getElementById("KPos_Asal").value = "{{ $alamatUsr->kodepos }}";
                    
                    document.getElementById("alamatP0").innerHTML = "{{$alamatUsr->alamat_lengkap }},";
                    document.getElementById("provinsiP0").innerHTML =" {{ $alamatUsr->province_name }},";
                    document.getElementById("kotaP0").innerHTML = " {{ $alamatUsr->city_name }},";
                    document.getElementById("kodeposP0").innerHTML = " {{ $alamatUsr->kodepos }}";
                    
                    document.querySelector('#K_Asal').removeAttribute('readonly');
                    document.querySelector('#K_Asal').style.removeProperty("background-color");
                    document.querySelector('#KPos_Asal').removeAttribute('readonly');
                    document.querySelector('#KPos_Asal').style.removeProperty("background-color")
                    document.getElementById("C_Asal").value ="{{ $alamatUsr->note }}";
                    
                }
                @endforeach
              }
            </script>

            <script>
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

      </div>

    </main>
  </body>
</html>
