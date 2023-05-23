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

  function getnamaPenerima(){
    var name = document.getElementById('namaPenerima');
    var nama = name.value;
    document.getElementById("identPenerima").innerHTML = nama.toLowerCase();
    name.value = nama.toLowerCase();
    if( document.getElementById("identPenerima").textContent!=""){
      document.getElementById("spasi").innerHTML = "/";
    }else{
      document.getElementById("spasi").innerHTML = "";
    }
  }

  function getnoHpPenerima(){
    var noHp = document.getElementById('noHpPenerima').value;
    
    document.getElementById("identNoPenerima").innerHTML = noHp;
    if( document.getElementById("identNoPenerima").textContent!=""){
      document.getElementById("spasi").innerHTML = "/";
    }else{
      document.getElementById("spasi").innerHTML = "";
    }
  }

  function getAlamat(){
    var alamat = document.getElementById('alamatPenerima').value;
    
    document.getElementById("identNoPenerima").innerHTML = alamat;
    if( document.getElementById("identNoPenerima").textContent!=""){
      document.getElementById("spasi").innerHTML = "/";
    }else{
      document.getElementById("spasi").innerHTML = "";
    }
  }

  function alamatAsal(){
    const name = document.querySelector('#Al_Asal').value;
    if(name==""){
      document.querySelector('#alamatP0').innerHTML = "";
    }else{
      document.querySelector('#alamatP0').innerHTML = name+",";
    }
  }

  function alamatPenerimaP(){
    const name = document.querySelector('#Al_Penerima').value;
    if(name==""){
      document.querySelector('#alamatP0P').innerHTML = "";
    }else{
      document.querySelector('#alamatP0P').innerHTML = name+",";
    }
  }

  function kodeposAsal(){
    const name = document.querySelector('#KPos_Asal').value;
    if(name==""){
      document.querySelector('#kodeposP0').innerHTML = "";
    }else{
      document.querySelector('#kodeposP0').innerHTML = name;
    }
  }

  function kodeposPenerima(){
    const name = document.querySelector('#KPos_Penerima').value;
    if(name==""){
      document.querySelector('#kodeposP0P').innerHTML = "";
    }else{
      document.querySelector('#kodeposP0P').innerHTML = name;
    }
  }

  function jenisBarang(){
    
    const name = document.querySelector('#jenisP');
    const nama = name.options[name.selectedIndex].text;
        if(name==""){
      document.querySelector('#jenis_paket').innerHTML = "";
      document.querySelector('#modalJenis_paket').innerHTML = "";
    }else{
      document.querySelector('#jenis_paket').innerHTML = "Jenis : "+nama;
      document.querySelector('#modalJenis_paket').innerHTML = "Jenis : "+nama;
      
    }
  }

  function beratBarang(){
    const berat = document.querySelector('#beratP').value,
    name = berat.replace(/^0+/, '');
    document.getElementById('beratP').value=name;
    if(name==""){
      document.querySelector('#berat_paket').innerHTML = "";
      document.querySelector('#modalBerat_paket').innerHTML = "";
      $('.cardOngkir').removeClass('d-block');
      $('.cardOngkir').addClass('d-none');
      document.querySelector('#pilihKurir').value = "";
    }else{
      document.querySelector('#berat_paket').innerHTML = " Berat : "+name+" (Gram)";
      document.querySelector('#modalBerat_paket').innerHTML = " Berat : "+name+" (Gram)";
      $('.cardOngkir').removeClass('d-block');
      $('.cardOngkir').addClass('d-none');
      document.querySelector('#pilihKurir').value = "";
    }
  }

  function panjangBarang(){
    const panjang = document.querySelector('#panjangP').value,
    name = panjang.replace(/^0+/, '');
    document.getElementById('panjangP').value=name;
    if(name==""){
      document.querySelector('#panjang_paket').innerHTML = "";
      document.querySelector('#modalPanjang_paket').innerHTML = "";
      
      document.querySelector('#Volume').innerHTML = "";
      document.querySelector('#modalVolume').innerHTML = "";
      
      document.querySelector('#ket').innerHTML = "";
      document.querySelector('#modalKet').innerHTML = "";
      
      document.querySelector('#lebar_barang').innerHTML = "";
      document.querySelector('#modalLebar_barang').innerHTML = "";

      document.getElementById('lebarP').value = "";
      document.getElementById('lebarP').setAttribute('readonly', true);
      document.getElementById('lebarP').style.backgroundColor = "#D3D3D3";
      
      document.querySelector('#tinggi_Barang').innerHTML = "";
      document.querySelector('#modalTinggi_Barang').innerHTML = "";

      document.querySelector('#Xlebar').innerHTML = "";
      document.querySelector('#modalXlebar').innerHTML = "";
      
      document.querySelector('#Xtinggi').innerHTML = "";
      document.querySelector('#modalXtinggi').innerHTML = "";

      document.getElementById('tinggiP').value = "";
      document.getElementById('tinggiP').setAttribute('readonly', true);
      document.getElementById('tinggiP').style.backgroundColor = "#D3D3D3";
    }else{
      document.querySelector('#Volume').innerHTML = "Volume";
      document.querySelector('#modalVolume').innerHTML = "Volume";
      
      document.querySelector('#panjang_paket').innerHTML = " : "+name+"cm";
      document.querySelector('#modalPanjang_paket').innerHTML = " : "+name+"cm";
      
      document.querySelector('#ket').innerHTML = "(P x L x T) ";
      document.querySelector('#modalKet').innerHTML = "(P x L x T) ";
      
      document.getElementById('lebarP').removeAttribute('readonly');
      document.getElementById('lebarP').style.removeProperty("background-color");
      
    }
  }

  function lebarBarang(){
    const lebar = document.querySelector('#lebarP').value,
    name = lebar.replace(/^0+/, '');
    document.getElementById('lebarP').value=name;
    if(name==""){
      document.querySelector('#lebar_barang').innerHTML = "";
      document.querySelector('#modalLebar_barang').innerHTML = "";

      document.querySelector('#Xlebar').innerHTML = "";
      document.querySelector('#modalXlebar').innerHTML = "";

      document.querySelector('#Xtinggi').innerHTML = "";
      document.querySelector('#modalXtinggi').innerHTML = "";

      document.getElementById('tinggiP').value = "";
      document.querySelector('#tinggi_Barang').innerHTML = "";
      document.querySelector('#modalTinggi_Barang').innerHTML = "";

      document.getElementById('tinggiP').setAttribute('readonly', true);
      document.getElementById('tinggiP').style.backgroundColor = "#D3D3D3";
    }else{
      document.querySelector('#Xlebar').innerHTML = "x";
      document.querySelector('#modalXlebar').innerHTML = "x";
      
      document.querySelector('#lebar_barang').innerHTML = name+"cm";
      document.querySelector('#modalLebar_barang').innerHTML = name+"cm";
      
      document.getElementById('tinggiP').removeAttribute('readonly');
      document.getElementById('tinggiP').style.removeProperty("background-color");
    }
  }

  function tinggiBarang(){
    const tinggi = document.querySelector('#tinggiP').value,
    name = tinggi.replace(/^0+/, '');
    document.getElementById('tinggiP').value=name;
    if(name==""){
      document.querySelector('#tinggi_Barang').innerHTML = "";
      document.querySelector('#modalTinggi_Barang').innerHTML = "";
      document.querySelector('#Xtinggi').innerHTML = "";
      document.querySelector('#modalXtinggi').innerHTML = "";
    }else{
      document.querySelector('#Xtinggi').innerHTML = "x";
      document.querySelector('#modalXtinggi').innerHTML = "x";
      
      document.querySelector('#tinggi_Barang').innerHTML = name+"cm";
      document.querySelector('#modalTinggi_Barang').innerHTML = name+"cm";
      
    }
  }

 
  function externalId(){
    const name = document.querySelector('#externalIdBarang').value;
    if(name==""){
      document.querySelector('#external_id').innerHTML = "";
      document.querySelector('#modalExternal_id').innerHTML = "";
    }else{
      document.querySelector('#external_id').innerHTML = "External ID : "+name;
      document.querySelector('#modalExternal_id').innerHTML ="External ID : "+name;
    }
  }

  var rupiah = document.getElementById("nilaibarang");
rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "Rp. ");
  if (rupiah.value!=""){
  document.querySelector('#nilai_barang').innerHTML = "Nilai Barang : "+rupiah.value;
  document.querySelector('#modalNilai_barang').innerHTML = "Nilai Barang : "+rupiah.value;
  }else{
    document.querySelector('#nilai_barang').innerHTML = "";
    document.querySelector('#modalNilai_barang').innerHTML = "";
    
  }
});

/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
  nol = number_string.replace(/^0+/, ''),
    split = nol.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
}

function GetUserSelectCourir(noSelect){
  document.getElementById('cekPesanan').removeAttribute("hidden");

  var getText = document.getElementById(noSelect).innerHTML;
  var value = document.getElementById("pilihKurir");
  
  getText = getText.replace("<strong>","");
  getText = getText.replace("</strong>","");
  getText = getText.replace(")","");
  getText = getText.replace(" -&gt; ","/");
  getText = getText.replace(" : ","/");
  getText = getText.replace(" (","/");
  
  value.value = getText;
}

function SubmiteFrom(){
  if (confirm("Apa anda yakin ingin membuat pesanan ?") == true) {
  document.getElementById("formBuatPesanan").submit();
  }
}


function cekData(){
  var namaPengirim = document.getElementById('namaPengirim').value;
  var noHpPengirim = document.getElementById('noHpPengirim').value;
  var alamatPengirim = document.getElementById("Al_Asal").value;
  var kotaPengirim = document.getElementById("K_Asal").value;
  var provinsiPengirim = document.getElementById("pilihaProvinsiAsal").value;
  var kodePosPengirim = document.getElementById("KPos_Asal").value;
  document.getElementById("modalPengirim_nama").innerHTML = namaPengirim+"/"+noHpPengirim;
  document.getElementById("modalPengirim_alamat").innerHTML = alamatPengirim+", " ;
  document.getElementById("modalPengirim_provinsi").innerHTML = provinsiPengirim+", ";
  document.getElementById("modalPengirim_kabupatenKota").innerHTML = kotaPengirim+", ";
  document.getElementById("modalPengirim_kodepos").innerHTML = kodePosPengirim;
  
  var namaPenerima = document.getElementById("namaPenerima").value;
  var noHpPenerima = document.getElementById("noHpPenerima").value;
  var alamatPenerima = document.getElementById("Al_Penerima").value;
  var provinsiPenerima = document.getElementById("pilihaProvinsiPenerima").value;
  var kotaPenerima = document.getElementById("K_Penerima").value;
  var kodePosPenerima = document.getElementById("KPos_Penerima").value;
  var pembatas ="/"
  if(namaPenerima=="" && noHpPenerima==""){
    pembatas = ""
  }
  document.getElementById("modalPenerima_nama").innerHTML = namaPenerima+pembatas+noHpPenerima;
  document.getElementById("modalPenerima_alamat").innerHTML = alamatPenerima+", " ;
  document.getElementById("modalPenerima_provinsi").innerHTML = provinsiPenerima+", ";
  document.getElementById("modalPenerima_kabupatenKota").innerHTML = kotaPenerima+", ";
  document.getElementById("modalPenerima_kodepos").innerHTML = kodePosPenerima; 

  var value = document.getElementById("pilihKurir").value;
if(value!=""){
  var value = document.getElementById("pilihKurir").value;
  var dataSplit = value.split("/")
  document.getElementById("modalAgen").innerHTML = "Agen : "+dataSplit [0];
  document.getElementById("modalLayanan").innerHTML = "Jenis Layanan : "+dataSplit [1];
  document.getElementById("modalOngkir").innerHTML = "Ongkir : "+dataSplit[2];
  document.getElementById("modalEstimasi").innerHTML = "Estimasi Pengiriman : "+dataSplit[3] ;
}else{
  document.getElementById("modalAgen").innerHTML = "";
  document.getElementById("modalLayanan").innerHTML = "";
  document.getElementById("modalOngkir").innerHTML = "";
  document.getElementById("modalEstimasi").innerHTML = "";
}
if(document.getElementById("pilihKurir").value==""){
  document.getElementById('buatPesanan').setAttribute('disabled', true);
}else{
  document.getElementById('buatPesanan').removeAttribute('disabled');
}

  $("#modalPesanan").modal('show');
 
}  
