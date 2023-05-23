<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buat Pesanan Domestik</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/buatpesandom.css" rel="stylesheet">

<style>
  .labl {
    display : block;
    }
    .labl > input{ /* HIDE RADIO */
        visibility: hidden; /* Makes input not-clickable */
        position: absolute; /* Remove input from document flow */
    }
    .labl > input + div{ /* DIV STYLES */
        cursor:pointer;
        border:2px solid transparent;
    }
    .labl > input:checked + div{ /* (RADIO CHECKED) DIV STYLES */
        background-color: #dc3545 !important;
        font-weight: bold;
        color:white !important;
        border: 1px solid #ff6600;
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
            <h1 class="mt-2"><b>Buat Pesanan Baru</b> <p class="h6 text-secondary mt-2">Mohon isi alamat secara detail agar kurir kami dapat menjemput pada alamat yang benar.</p> </h1>
        </div>
        </div>

      </div>

<!--Dibawah garis (MAIN)-->
      <main class="ms-sm-auto mt-2">
        <div class="row">
          <div class="col " style="min-width:400px;margin-bottom: 25px;" >
          <div class="card card-body overflow-auto ">
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
                <button class="bg-danger" onclick="openTab(event, 'order1')" id="defaultOpen">
                  Ubah
                </button>
              </div><br>

              <div class="card card-body">
                <div class="penerima">
                  <h5><b>Data Penerima</b></h5>
                  <table>
                  <tr><td><p id="identPenerima">@if(!$alamatPenerima->isEmpty()){{$alamatPenerima[0]->nama_penerima}} @endif</p></td>
                  <td><p id="spasi">@if(!$alamatPenerima->isEmpty())/@endif</p></td>
                  <td><p id="identNoPenerima">@if(!$alamatPenerima->isEmpty()) {{$alamatPenerima[0]->nohp_penerima}}@endif</p></td></tr>
                  </table>
                  <table>
                  <tr><td><p id="alamatP0P">@if(!$alamatPenerima->isEmpty()){{$alamatPenerima[0]->alamat_lengkap}} @endif</p></td>
                  <td><p id="provinsiP0P"> @if(!$alamatPenerima->isEmpty()),{{$alamatPenerima[0]->province_name}} @endif</p></td>
                  <td><p id="kotaP0P">@if(!$alamatPenerima->isEmpty()),{{$alamatPenerima[0]->city_name}}@endif</p></td>
                  <td><p id="kodeposP0P">@if(!$alamatPenerima->isEmpty()),{{$alamatPenerima[0]->kodepos}}@endif</p></td></tr>
                  </table>
                </div>
                <button class="bg-danger" onclick="openTab(event, 'order2')" id="defaultOpen">
                  Ubah
                </button>
              </div><br>

              <div class="card card-body ">
                <div class="kurirDanBarang">
                  <h5><b>Data Paket</b></h5>
                  <p style="margin-bottom:2px;" id="jenis_paket"></p>
                  <p style="margin-bottom:2px;" id="berat_paket"></p>
                  <table >
                  <tr><td><p style="margin-bottom:2px;" id="Volume"></p></td>
                  <td class="text-muted align-items-center" ><p style="margin-bottom:2px;" id="ket"></p></td>
                  <td><p style="margin-bottom:2px;" id="panjang_paket"></p></td>
                  <td class="text-muted align-items-center"><p style="margin-bottom:2px;" id="Xlebar"></p></td>
                  <td><p style="margin-bottom:2px;" id="lebar_barang"></p></td>
                  <td class="text-muted align-items-center" ><p style="margin-bottom:2px;" id="Xtinggi"></p></td>
                  <td><p style="margin-bottom:2px;" id="tinggi_Barang"></p></td></tr>
                  </table>
                  <p style="margin-bottom:2px;" id="nilai_barang"></p>
                  <p id="external_id"></p>

                </div>
                <button class="bg-danger" onclick="openTab(event, 'order3')" id="defaultOpen">
                  Ubah
                </button>
              </div><br>

              <div class="card card-body lightGray">
                <div class="informasi">
                  <p><b>Informasi</b></p>
                  <p><b class="text-danger">**</b>Alamat pengirim dan alamat penerima yang akan digunakan dalam membuat pesanan adalah alamat yang anda gunakan pada halaman ini.</p>
                  <p><b class="text-danger">**</b>Mengubah alamat penerima dan alamat pengirim dibagian buat pesanan tidak akan menyebabkan perubahan pada data aslinya.</p>
                  <p class="text-end text-secondary" ><b>Team Magang</b></p>
                </div>
              </div>
            </div>
          </div>

            <div class="col" style="min-width:400px;margin-bottom: 25px;">
              
              <div class="card card-body text-center ">
                <div id="order1" class="tabcontent">
                  <div class="card card-body text-center">
                    <h4 class="detailpaket">Data Pengirim</h4><br>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="tabel">
                          Nama Pengirim
                          <form id="formBuatPesanan" method="post" action="{{route('buatPesananDomestik')}}">
                          @csrf
                          <input autocomplete="off" class="form-control" type="text" id="namaPengirim" placeholder="Nama Pengirim" name="namaPengirim" value="{{ $data->name }}" readonly> 
                        </div>
                      </div><br>
                      <div class="col-sm-6">
                        <div class="tabel">
                          No Handphone
                          <input autocomplete="off" class="form-control" type="text" id="noHpPengirim" placeholder="Masukkan Nomor HP" name="noHpPengirim" value="{{ $data->handphone }}" readonly>
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
                        <input autocomplete="off" name="alamatLengkapPengirim"class="form-control" onkeyup="alamatAsal()" type="text" id="Al_Asal" placeholder="Masukkan Alamat" value="{{ $dataAlamat[0]->alamat_lengkap }}">
                    </div><br>
                    <div class="provinsi">
                      Pilih Provinsi
                        <input id="pilihaProvinsiAsal" autocomplete="off" placeholder="Masukkan Provinsi"  list="provinceList" class="form-control" onChange="getIdProvince()" value="{{ $dataAlamat[0]->province_name }}"  required>
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
                      
                        <input autocomplete="off" name="notePengirim" class="form-control" type="text" id="C_Asal" placeholder="Catatat spt: Lantai gedung/Nomor Rumah" value="{{ $dataAlamat[0]->note }}">
                      
                    </div>

                    <div class="cariKurir">
                      
                        <button type="button" class="button buttonsimpan" onclick="openTab(event, 'order2')">Lanjutkan</button> 
                      
                    </div>
                  </div>
                </div>
                <div id="order2" class="tabcontent">
                  <div class="card card-body text-center">
                  <h4 class="detailpaket">Data Penerima</h4><br>
                    <div class="pilalamat">
                      Pilih Alamat
                        
                          @if($alamatPenerima->isEmpty())
                          <select id="pilihaAlamatPenerima" style="color:#6C757D!important;" onChange="pilihAlamatPenerima()" class="form-control" disabled>
                            <option value="">*Anda belum pernah menambah alamat penerima</option>
                          @else
                          <select id="pilihaAlamatPenerima" onChange="pilihAlamatPenerima()" class="form-control" >
                            @foreach($alamatPenerima as $alamatPkr)
                            <option value="{{$alamatPkr->id}}">{{$alamatPkr->nama_alamat}}</option>
                            @endforeach
                            <option value="buatBaru" style="font-weight: bold;">Buat alamat penerima baru</option>
                          @endif
                          <input type="hidden" name="nameSelected2" id="nameSelected2" @if($alamatPenerima->isEmpty()) value="buatBaru" @endif>
                        </select>
                      
                    </div><br>

                    <div class="row">
                      <div class="col-sm-6">
                        <div class="tabel">
                          Nama Penerima
                          
                            <input autocomplete="off" name="namaPenerima" class="form-control" type="text" id="namaPenerima"  onkeyup="getnamaPenerima()" placeholder="Masukkan Nama Penerima" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->nama_penerima}}" @endif  >
                          
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="tabel">
                          Nomor HP
                          
                            <input autocomplete="off" name="noHpPenerima" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="noHpPenerima" onkeyup="getnoHpPenerima()" placeholder="Masukkan Nomor HP" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->nohp_penerima}}" @endif >
                          
                        </div>
                      </div>
                    </div><br>

                    
                    <div class="tabel">
                      Alamat Lengkap
                        <input autocomplete="off" name="alamatPenerima" onkeyup="alamatPenerimaP()" class="form-control" type="text" id="Al_Penerima" placeholder="Masukkan Alamat" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->alamat_lengkap}}" @endif >
                      
                    </div><br>
                    <div class="provinsi">
                      Pilih Provinsi
                        <input id="pilihaProvinsiPenerima" autocomplete="off" placeholder="Masukkan Provinsi" list="provinceList" class="form-control" onChange="getIdProvinceP()" @if(!$alamatPenerima->isEmpty()) value="{{ $alamatPenerima[0]->province_name }}" @endif required>
                        <datalist id="provinceListP" >
                        @foreach ($province as $provinsi => $value)
                          <option data-value="{{$value}}"  value="{{ $provinsi }}">
                        @endforeach
                        </datalist>
                        <input type="hidden" name="idProvinsiP" id="hidenProvinceIdP" @if(!$alamatPenerima->isEmpty()) value="{{ $alamatPenerima[0]->province_id }}" @endif >
                    </div><br>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="tabel">
                        Kabupaten/Kota
                          
                            <input name="kotaPenerima" autocomplete="off"  onChange="getIdCityP()" class="form-control" list="cityListP" type="text" id="K_Penerima" placeholder="Masukkan Kabupaten/Kota" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->city_name}}" @else readonly @endif  />
                            <datalist id="cityListP" >
                           @if($alamatPenerima->isEmpty())
                              @foreach ($cities as $city)
                                  <option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">
                              @endforeach
                           @else
                            @foreach ($cities as $city)
                                @if($city->province_id ==  $alamatPenerima[0]->province_id )
                                  <option data-value="{{$city->city_id}}"  value="{{ $city->city_name }}">
                                @endif
                              @endforeach
                           @endif
                            </datalist>
                            <input type="hidden" name="idCityP" id="hidenCityIdP" @if(!$alamatPenerima->isEmpty()) value="{{ $alamatPenerima[0]->city_id }}" @endif >
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="tabel">
                          Kode Pos
                          
                            <input name="kodePosPenerima" onkeyup="kodeposPenerima()" autocomplete="off"  class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' type="text" id="KPos_Penerima" placeholder="Masukkan Kode Pos" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->kodepos}}"@else readonly @endif />
                          
                        </div>
                      </div>
                    </div><br>

                    <div class="tabel">
                      Catatan Tambahan
                      
                        <input autocomplete="off" name="notePenerima" class="form-control" type="text" id="C_Penerima" placeholder="Catatat spt: Lantai gedung/Nomor Rumah" @if(!$alamatPenerima->isEmpty()) value="{{$alamatPenerima[0]->note}}" @endif />
                      
                    </div>

                    <div class="cariKurir ">
                      
                        <button type="button" class="button buttonsimpan" onclick="openTab(event, 'order3')">Lanjutkan</button> 
                        
                    </div>
                  </div>
                </div>
                <div id="order3" class="tabcontent">
                  <div class="card card-body" style="margin-bottom: 25px;">
                    <h4 class="detailpaket">Detail Paket</h4><br>
                    <div id="dataDetailPaket">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="jenispaket">
                            Pilih Jenis Paket
                            <select id="jenisP" name="jenisPaket" onchange="jenisBarang()" class="form-control"  required>
                                <option class="secondary" value="" disabled selected hidden>Jenis Paket</option>
                                @foreach($packagetype as $tipePaket)
                                <option value="{{$tipePaket->id_type}}">{{$tipePaket->name_type}}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="beratpaket">
                            Berat Paket
                              <input autocomplete="off" id="beratP" name="beratPaket" onkeyup="beratBarang()" class="form-control" type="text"  placeholder="Masukkan berat paket (Gram)" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
                          </div>
                        </div>
                      </div><br>
                      <div class="volumepaket">
                        Volume Barang
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="panjang marginBot">
                              <input autocomplete="off" id="panjangP" name="panjang" onkeyup="panjangBarang()" class="form-control" type="text"  placeholder="Panjang(cm)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="lebar marginBot">
                              <input autocomplete="off" id="lebarP" name="lebar"class="form-control" onkeyup="lebarBarang()" type="text"  placeholder="Lebar(cm)" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="tinggi marginBot">
                              <input autocomplete="off" name="tinggi" class="form-control " type="text" onkeyup="tinggiBarang()" id="tinggiP" placeholder="Tinggi(cm)" onkeypress='return event.charCode >= 48 && event.charCode <= 57' readonly>
                            </div>
                          </div>
                        </div><br>
                        <div class="row">
                          <div class="col-sm-6">
                              <div class="nilaibarang">
                                Nilai Barang
                                <input autocomplete="off" name="nilaiBarang" class="form-control"  type="text" id="nilaibarang" placeholder="Masukkan Nilai Barang" onkeypress='return event.charCode >= 48 && event.charCode <= 57' >
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="eksternalid">
                                External ID
                                <input autocomplete="off" name="externalIdP" class="form-control" onkeyup="externalId()" type="text" id="externalIdBarang" placeholder="Masukkan External ID" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                              </div>
                            </div>
                          </div><br>
                          <div class="card bg-light" style="padding-top: 10px" style="width: 100%">
                            <ul>
                              <h6>Barang - Barang Yang Dilarang</h6>
                              <li><p>Jenis paket yang Anda pilih memiliki kemungkinan ditolak oleh kurir dan dapat dikembalikan.</p></li>
                              <li><p>Untuk informasi lengkap, silakan cek disini</p></li>
                            </ul>
                          </div>
                          <div class="cariKurir">
                          <input type="hidden" id="pilihKurir" name="pilihKurir" value="">
                              </form>
                              <button class="button buttonsimpan cek-ongkir" >Simpan dan Cari Kurir Logistik</button> 
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card card-body">
                    <div>
                      <h4 class="detailpaket">Pilih Kurir</h4><br>
                      <div id="dataPilihKurir" class="row" >
                        <div class="col-sm">
                          <div class="d-none cardOngkir">
                            <div id="ongkirKurir" class="d-grid gap-3" style="min-width:auto;">
                                
                            </div>
                          </div>
                        </div>

                        <div id="cekPesanan" class="cariKurir" hidden>
                          <button class="button" type="button" class="btn btn-danger" onclick="cekData()" >
                            Cek Pesanan Anda
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- The Modal -->
                <div class="modal" id="modalPesanan">
                  <div class="modal-dialog modal-auto">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header text-center">
                        <h4 class="modal-title w-100"><b>Order Summary</b></h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                          
                      <!-- Modal body -->
                      <div class="modal-body d-flex justify-content-start">
                        <div class="row">
                          <div class="col pengirim">
                            <h5><b>Data Pengirim</b></h5>
                          </div>
                          <div class="col-auto">
                            <button class="bg-danger" onclick="openTab(event, 'order1')" id="defaultOpen" data-bs-dismiss="modal">
                              Ubah
                            </button>
                          </div>
                          <div class="row">
                            <div class="col pengirim">
                              <p id="modalPengirim_nama"></p>
                              <table>
                                <tr><td><p id="modalPengirim_alamat"></p></td>
                                <td><p id="modalPengirim_provinsi"></p></td>
                                <td><p id="modalPengirim_kabupatenKota"></p></td>
                                <td><p id="modalPengirim_kodepos"></p></td></tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal-body d-flex justify-content-start">
                        <div class="row">
                          <div class="col penerima">
                            <h5><b>Data Penerima</b></h5>
                          </div>
                          <div class="col-auto">
                            <button class="bg-danger" onclick="openTab(event, 'order2')" id="defaultOpen" data-bs-dismiss="modal">
                              Ubah
                            </button>
                          </div>
                          <div class="row">
                            <div class="col penerima">
                              <table>
                                <tr><td><p id="modalPenerima_nama"></p></td>
                              </table>
                              <table>
                                <tr>
                                  <td><p id="modalPenerima_alamat"></p></td>
                                  <td><p id="modalPenerima_provinsi"></p></td>
                                  <td><p id="modalPenerima_kabupatenKota"></p></td>
                                  <td><p id="modalPenerima_kodepos"></p></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body d-flex justify-content-start border-top">
                        <div class="row">
                          <div class="col pengirim">
                            <h5><b>Detail Paket</b></h5>
                            <p style="margin-bottom:2px;" id="modalJenis_paket"></p>
                            <p style="margin-bottom:2px;" id="modalBerat_paket"></p>
                            <table >
                              <tr>
                                <td><p style="margin-bottom:2px;" id="modalVolume"></p></td>
                                <td class="text-muted align-items-center" ><p style="margin-bottom:2px;" id="modalKet"></p></td>
                                <td><p style="margin-bottom:2px;" id="modalPanjang_paket"></p></td>
                                <td class="text-muted align-items-center"><p style="margin-bottom:2px;" id="modalXlebar"></p></td>
                                <td><p style="margin-bottom:2px;" id="modalLebar_barang"></p></td>
                                <td class="text-muted align-items-center" ><p style="margin-bottom:2px;" id="modalXtinggi"></p></td>
                                <td><p style="margin-bottom:2px;" id="modalTinggi_Barang"></p></td>
                              </tr>
                            </table>
                            <p style="margin-bottom:2px;" id="modalNilai_barang"></p>
                            <p id="modalExternal_id"></p>
                          </div>
                          <div class="col-auto">
                            <button class="bg-danger" onclick="openTab(event, 'order3')" id="defaultOpen" data-bs-dismiss="modal">
                              Ubah
                            </button>
                          </div>
                          <div class="row">
                            <div class="col">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-body d-flex justify-content-start">
                        <div class="row">
                          <div class="col pengirim">
                            <h5><b>Detail Logistik</b></h5>
                            <p style="margin-bottom:2px;" id="modalAgen"></p>
                            <p style="margin-bottom:2px;" id="modalLayanan"></p>
                            <p style="margin-bottom:2px;" id="modalOngkir"></p>
                            <p style="margin-bottom:2px;" id="modalEstimasi"></p>
                          </div>
                        <div class="col-auto">
                          <button class="bg-danger" onclick="openTab(event, 'order3')" id="defaultOpen" data-bs-dismiss="modal">
                            Ubah
                          </button>
                        </div>
                        <div class="row">
                          <div class="col">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-body d-flex justify-content-center">
                      <button class="btn btn-danger" id="buatPesanan" onclick="SubmiteFrom()" type="button" disabled>
                        Buat Pesanan
                      </button>
                    </div>           
                  </div>
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
    
    document.getElementById('hidenCityId').value = "" ;
    document.getElementById('hidenProvinceId').value = "" ;
  }
  document.getElementById('cityList').innerHTML = options;
 
  $('.cardOngkir').removeClass('d-block');
  $('.cardOngkir').addClass('d-none');
  document.querySelector('#pilihKurir').value = "";
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
    document.getElementById('hidenCityId').value = "" ;
  }else{
    document.getElementById('kotaP0').innerHTML = name+"," ;
  }
  if(con){
      document.querySelector('#KPos_Asal').setAttribute('readonly', true);
      document.querySelector('#KPos_Asal').value="";
      document.querySelector('#KPos_Asal').style.backgroundColor = "#D3D3D3";
    }
    $('.cardOngkir').removeClass('d-block');
    $('.cardOngkir').addClass('d-none');
    document.querySelector('#pilihKurir').value = "";
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
    document.getElementById('hidenCityIdP').value = "" ;
    document.getElementById('hidenProvinceIdP').value = "" ;
  }else{
    document.getElementById('provinsiP0P').innerHTML = name+"," ;
  }
  $('.cardOngkir').removeClass('d-block');
      $('.cardOngkir').addClass('d-none');
      document.querySelector('#pilihKurir').value = "";
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
    document.getElementById('hidenCityIdP').value = "" ;
    
  }else{
    document.getElementById('kotaP0P').innerHTML = name+"," ;
  }
  if(con){
      document.querySelector('#KPos_Penerima').setAttribute('readonly', true);
      document.querySelector('#KPos_Penerima').value="";
      document.querySelector('#KPos_Penerima').style.backgroundColor = "#D3D3D3";
    }
      $('.cardOngkir').removeClass('d-block');
      $('.cardOngkir').addClass('d-none');
      document.querySelector('#pilihKurir').value = "";
  }

  function pilihAlamatPengirim(){
    var select = document.getElementById('pilihaAlamatAsal');
		var option = select.options[select.selectedIndex];  
    $('.cardOngkir').removeClass('d-block');
    $('.cardOngkir').addClass('d-none');
    document.querySelector('#pilihKurir').value = "";
    @foreach($dataAlamat as $alamatUsr)   
    if(option.value=="{{$alamatUsr->id}}"){
        document.getElementById("Al_Asal").value = "{{$alamatUsr->alamat_lengkap }}";
        document.getElementById("pilihaProvinsiAsal").value = "{{ $alamatUsr->province_name }}";
        document.getElementById("hidenProvinceId").value ="{{ $alamatUsr->province_id }}";
        document.getElementById("K_Asal").value = "{{ $alamatUsr->city_name }}";
        document.getElementById("hidenCityId").value = "{{ $alamatUsr->city_id }}";
        document.getElementById("KPos_Asal").value = "{{ $alamatUsr->kodepos }}";
        document.getElementById("C_Asal").value ="{{ $alamatUsr->note }}";

        document.getElementById("alamatP0").innerHTML = "{{$alamatUsr->alamat_lengkap }},";
        document.getElementById("provinsiP0").innerHTML =" {{ $alamatUsr->province_name }},";
        document.getElementById("kotaP0").innerHTML = " {{ $alamatUsr->city_name }},";
        document.getElementById("kodeposP0").innerHTML = " {{ $alamatUsr->kodepos }}";
        
        document.querySelector('#K_Asal').removeAttribute('readonly');
        document.querySelector('#K_Asal').style.removeProperty("background-color");
        document.querySelector('#KPos_Asal').removeAttribute('readonly');
        document.querySelector('#KPos_Asal').style.removeProperty("background-color");
        
        
     }
     @endforeach
  }

  function pilihAlamatPenerima(){
    var selectP = document.getElementById('pilihaAlamatPenerima');
		var optionP = selectP.options[selectP.selectedIndex];
    $('.cardOngkir').removeClass('d-block');
    $('.cardOngkir').addClass('d-none');  
    document.querySelector('#pilihKurir').value = "";
    @foreach($alamatPenerima as $alamatPnr)   
    if(optionP.value=="{{$alamatPnr->id}}"){
        document.getElementById("pilihaAlamatPenerima").style.fontWeight = "normal";
        document.getElementById("namaPenerima").value = "{{$alamatPnr->nama_penerima }}";
        document.getElementById("noHpPenerima").value = "{{ $alamatPnr->nohp_penerima }}";
        document.getElementById("Al_Penerima").value = "{{$alamatPnr->alamat_lengkap }}";
        document.getElementById("pilihaProvinsiPenerima").value = "{{ $alamatPnr->province_name }}";
        document.getElementById("hidenProvinceIdP").value ="{{ $alamatPnr->province_id }}";
        document.getElementById("K_Penerima").value = "{{ $alamatPnr->city_name }}";
        document.getElementById("hidenCityIdP").value = "{{ $alamatPnr->city_id }}";
        document.getElementById("KPos_Penerima").value = "{{ $alamatPnr->kodepos }}";
        document.getElementById("C_Penerima").value ="{{ $alamatPnr->note }}";
        
        
        document.getElementById("identPenerima").innerHTML ="{{$alamatPnr->nama_penerima }}";
        document.getElementById("spasi").innerHTML ="/";
        document.getElementById("identNoPenerima").innerHTML ="{{ $alamatPnr->nohp_penerima }}";
        document.getElementById("alamatP0P").innerHTML="{{$alamatPnr->alamat_lengkap }},";
        document.getElementById("provinsiP0P").innerHTML="{{ $alamatPnr->province_name }},";
        document.getElementById("kotaP0P").innerHTML ="{{ $alamatPnr->city_name }},";
        document.getElementById("kodeposP0P").innerHTML ="{{ $alamatPnr->kodepos }}";
        document.getElementById("nameSelected2").value="";
        
      }
     @endforeach
     if(optionP.value=="buatBaru"){
        document.getElementById("pilihaAlamatPenerima").style.fontWeight = "bold";
        document.getElementById("namaPenerima").value = "";
        document.getElementById("noHpPenerima").value = "";
        document.getElementById("Al_Penerima").value = "";
        document.getElementById("pilihaProvinsiPenerima").value = "";
        document.getElementById("hidenProvinceIdP").value ="";
        document.getElementById("K_Penerima").value = "";
        document.getElementById("hidenCityIdP").value = "";
        document.getElementById("KPos_Penerima").value = "";
        document.getElementById("C_Penerima").value ="";
        
        
        document.getElementById("identPenerima").innerHTML ="";
        document.getElementById("spasi").innerHTML ="";
        document.getElementById("identNoPenerima").innerHTML ="";
        document.getElementById("alamatP0P").innerHTML="";
        document.getElementById("provinsiP0P").innerHTML=""
        document.getElementById("kotaP0P").innerHTML ="";
        document.getElementById("kodeposP0P").innerHTML ="";
        document.getElementById("nameSelected2").value="buatBaru";
     }
  }


  $(document).ready(function(){
        //ajax check ongkir
        let isProcessing = false;
        $('.cek-ongkir').click(function (e) {
            e.preventDefault();

            let token            = $("meta[name='csrf-token']").attr("content");
            let alamat_Asal      = $('#Al_Asal').val();
            let KPos_Asal        = $('#KPos_Asal').val();
            let city_origin      = $('#hidenCityId').val();
            let province_origin = $('#hidenProvinceId').val();

            let nama_Penerima    = $('#namaPenerima').val();
            let noHp_Penerima    = $('#noHpPenerima').val()
            let alamat_Penerima  = $('#Al_Penerima').val();
            let city_destination = $('#hidenCityIdP').val();
            let KPos_Penerima    = $('#KPos_Penerima').val();
            let province_destination = $('#hidenProvinceIdP').val();
            
            let jenis_Paket      = $('#jenisP').val();
            let panjang_Paket    = $('#panjangP').val()
            let lebar_Paket      = $('#lebarP').val();
            let tinggi_Paket     = $('#tinggiP').val();
            let weight           = $('#beratP').val();
            if( alamat_Asal==""){
              alert("Alamat pengirim tidak boleh kosong");
            }else if(province_origin==""){
              alert("Provinsi pengirim tidak boleh kosong");
            }else if(city_origin==""){
              alert("Kota pengirim tidak boleh kosong");
            }else if( KPos_Asal==""){
              alert("Kode POS pengirim tidak boleh kosong");
            }else if(nama_Penerima == ""){
              alert("Nama penerima tidak boleh kosong");
            }else if(noHp_Penerima == ""){
              alert("Nomor Hp penerima tidak boleh kosong");
            }else if( alamat_Penerima==""){
              alert("Alamat penerima tidak boleh kosong");
            }else if(province_destination==""){
              alert("Provinsi penerima tidak boleh kosong");
            }else if(city_destination==""){
              alert("Kabupaten/Kota penerima tidak boleh kosong");
            }else if(KPos_Penerima==""){
              alert("Kode POS penerima tidak boleh kosong");
            }else if(jenis_Paket == null){
              alert("Silahkan pilih jenis paket terlebih haulu");
            }else if( weight==""){
              alert("Berat Paket tidak boleh kosong");
            }else if( panjang_Paket == ""){
              alert("Panjang Paket tidak boleh kosong");
            }else if( lebar_Paket==""){
              alert("Lebar Paket tidak boleh kosong");
            }else if(  tinggi_Paket==""){
              alert("Tinggi Paket tidak boleh kosong");
            }else{
              if(isProcessing){
                return;
            }

            isProcessing = true;

            $('#ongkirKurir').empty();

              $.ajax({
                url: "{{route('cekKurir')}}",
                data: {
                    _token:              token,
                    city_origin:         city_origin,
                    city_destination:    city_destination,
                    weight:              weight,
                },
                dataType: "JSON",
                type: "POST",
                success: function (response) {
                    isProcessing = false;
                    if (response) {
                        $('.cardOngkir').addClass('d-block');
                        $('.cardOngkir').removeClass('d-none');
                        var nomorButton = 0;
                        $.each(response[0][0]['costs'], function (key, value) {
                          $('#ongkirKurir').append('<label class="labl border"><input type="radio" name="radioname" /> <div id="'+nomorButton+'" onclick="GetUserSelectCourir(this.id)" class=" bg-light " style="padding:20px;" >'+response[0][0].code.toUpperCase()+' : <strong>'+value.service+'</strong> -> Rp. '+value.cost[0].value+' ('+value.cost[0].etd.replace(" HARI","")+' Hari)</div></label>')
                          nomorButton++;
                        });
                        $.each(response[1][0]['costs'], function (key, value) {
                          $('#ongkirKurir').append('<label class="labl border"><input type="radio" name="radioname" /> <div id="'+nomorButton+'" onclick="GetUserSelectCourir(this.id)" class=" bg-light" style="padding:20px;" >'+response[1][0].code.toUpperCase()+' : <strong>'+value.service+'</strong> -> Rp. '+value.cost[0].value+' ('+value.cost[0].etd.replace(" HARI","")+' Hari)</div></label>')
                          nomorButton++;
                        });
                        $.each(response[2][0]['costs'], function (key, value) {
                          $('#ongkirKurir').append('<label class="labl border"><input type="radio" name="radioname" /><div id="'+nomorButton+'" onclick="GetUserSelectCourir(this.id)" class=" bg-light" style="padding:20px;" >'+response[2][0].code.toUpperCase()+' : <strong>'+value.service+'</strong> -> Rp. '+value.cost[0].value+' ('+value.cost[0].etd.replace(" HARI","")+' Hari)</div></label>')
                          nomorButton++;
                        });
                        }
                      }
                    });
                  }
            
        });

    });

    function selectKurir(idBtnSelectKurir){
      var idBtnSelectKurir;
    }

</script>
</body>
</html>
