<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help | Create Order</title>

<link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/help-order.css" rel="stylesheet">

  </head>
  <body>

<!--Bar Navigasi-->
<div class="container-fluid min-vh-0 py-2">
  <div class="row">
      <div class="col">
          <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg> MENU 
          </button>
          
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-keyboard="false" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
              <div class="offcanvas-header border-bottom">
                  <h2 class="offcanvas-title mx-auto" id="offcanvasExampleLabel"><i><b>SHIPPER</b></i></h2>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                  <div id="sidebar">

                    <a href="/dashboard" class="nav-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-door mb-2" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                      </svg>
                      <span class="ms-1 my-auto" style="font-size:18px">Beranda</span>
                    </a>

                    <div class="nav flex-column">
                      <a href="#menu1" class="nav-link collapsed" data-bs-toggle="collapse" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-seam mb-2" viewBox="0 0 16 16">
                          <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                        </svg>
                        <span class="ms-1 my-auto" style="font-size:18px">Pesanan</span>
                      </a>
                      <div class="collapse ps-2" id="menu1" data-bs-parent="#sidebar">
                        <a href="/pesanan-dashboard" class="nav-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cash-coin mb-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                          </svg>
                          <span class="ms-1 my-auto" style="font-size:18px">Pesanan Reguler</span>
                        </a>
                        <a href="/cashless-dashboard" class="nav-link">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-wallet2 mb-2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                          </svg>
                          <span class="ms-1 my-auto" style="font-size:18px">Cashless Marketplace</span>
                        </a>
                      </div>

                    <a href="/ajukan-penjemputan-dashboard" class="nav-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar2-check mb-2" viewBox="0 0 16 16">
                        <path d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                        <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                      </svg>
                      <span class="ms-1 my-auto" style="font-size:18px">Ajukan Penjemputan</span>
                    </a>

                    <a href="/laporan-dashboard" class="nav-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-paper mb-2" viewBox="0 0 16 16">
                        <path d="M4 0a2 2 0 0 0-2 2v1.133l-.941.502A2 2 0 0 0 0 5.4V14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5.4a2 2 0 0 0-1.059-1.765L14 3.133V2a2 2 0 0 0-2-2H4Zm10 4.267.47.25A1 1 0 0 1 15 5.4v.817l-1 .6v-2.55Zm-1 3.15-3.75 2.25L8 8.917l-1.25.75L3 7.417V2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v5.417Zm-11-.6-1-.6V5.4a1 1 0 0 1 .53-.882L2 4.267v2.55Zm13 .566v5.734l-4.778-2.867L15 7.383Zm-.035 6.88A1 1 0 0 1 14 15H2a1 1 0 0 1-.965-.738L8 10.083l6.965 4.18ZM1 13.116V7.383l4.778 2.867L1 13.117Z"/>
                      </svg>
                      <span class="ms-1 my-auto" style="font-size:18px">Laporan</span>
                    </a>

                    <a href="/setting-dashboard" class="nav-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-gear mb-2" viewBox="0 0 16 16">
                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg>
                      <span class="ms-1 my-auto" style="font-size:18px">Pengaturan</span>
                    </a>

                    <a href="/help-dashboard" class="nav-link">
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-lg mb-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14Z"/>
                      </svg>
                      <span class="ms-1 my-auto" style="font-size:18px">Pusat Bantuan</span>
                    </a>
                          
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!--Judul-->
    <main class="ms-sm-auto"><br>
      <div class="row">
      <div class="col-auto mt-3">
      <a href="/help-dashboard">
      <button type="button" class="btn btn-circle btn-sm">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
      </button>
      </a></div>
      <div class="col">
      <h2><b>Cara Buat Order Baru</b></h2>
      <p class="text-secondary">Apa yang bisa kami bantu?</p>
      </div></div>

      <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'Order1')" id="defaultOpen">Order Domestik</button>
        <button class="tablinks" onclick="openTab(event, 'Order2')">Order Cashless</button>
      </div>
      
      <div id="Order1" class="tabcontent"><br>
        <p><span class="circle">1</span>Pergi ke “Pesanan”, kemudian pilih “Pesanan Reguler”.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-1.png" class="gambar">
        <p><span class="circle">2</span>Klik tombol “Buat Pesanan +” di pojok kanan atas.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-2.png" class="gambar">
        <p><span class="circle">3</span>Pilih jenis pesanan yang Anda inginkan.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-3.png" class="gambar">
        <p><span class="circle">4</span>Isi data pengirim.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-4.png" class="gambar">
        <p><span class="circle">5</span>Isi data penerima.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-5.png" class="gambar">
        <p><span class="circle">6</span>Isi detail paket. Jika Anda menggunakan Bulk Upload, silakan pilih “Upload File”untuk meng-upload file Excel.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-6a.png" class="gambar">
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-6b.png" class="gambar">
        <p><span class="circle">7</span>Pilih kurir pengiriman. Setelah itu, klik “Buat Pesanan”.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-7a.png" class="gambar">
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-7b.png" class="gambar">
      </div>
      
      <div id="Order2" class="tabcontent"><br>
        <p><span class="circle">1</span>Pergi ke “Pesanan”, kemudian pilih “Cashless Marketplace”.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-1.png" class="gambar"> 
        <p><span class="circle">2</span>Klik tombol “Buat Pesanan +” di pojok kanan atas.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-2.png" class="gambar">
        <p><span class="circle">3</span>Pilih jenis pesanan yang Anda inginkan.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-3.png" class="gambar">
        <p><span class="circle">4</span>Isi data pengirim.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-4.png" class="gambar">
        <p><span class="circle">5</span>Isi data Air Way Bill.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-5.png" class="gambar">
        <p><span class="circle">6</span>Jika Anda menggunakan Bulk Upload, silakan pilih “Upload File”untuk meng-upload file Excel.</p>
        <img src="https://assets-cdn.shipper.id/bos-web/v1.18.1-alpha2/assets/images/image-help-create-order-cashless-6.png" class="gambar">
      </div>

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
</div>
  </body>
</html>
