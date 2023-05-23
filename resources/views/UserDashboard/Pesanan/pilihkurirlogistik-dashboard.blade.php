<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shipper Project</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="/css/dashboard.css" rel="stylesheet">
<link href="/css/buatpesandom.css" rel="stylesheet">

<script src="js/dashboard.js"></script>
  </head>
  
  <body>
    <div class="container-fluid min-vh-0 py-2">
    <div class="row border-bottom">
    
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
          <div class="col mb-4">
          <div class="card card-body overflow-auto">
              <div class="card card-body">
                <div class="pengirim">
                  <h5><b>Data Pengirim</b></h5>
                </div>
                <button class="bg-danger" onclick="openTab(event, 'order1')" id="defaultOpen">
                  Ubah
                </button>
              </div><br>

              <div class="card card-body">
                <div class="penerima">
                  <h5><b>Data Penerima</b></h5>
                  </div>
                <button class="bg-danger" onclick="openTab(event, 'order2')" id="defaultOpen">
                  Ubah
                </button>
              </div><br>

              <div class="card card-body ">
                <div class="kurirDanBarang">
                  <h5><b>Pilih Kurir</b></h5>
                  <p></p>
                </div>
                <button class="bg-danger" onclick="openTab(event, 'order3')" id="defaultOpen">
                  Ubah
                </button>
              </div>

            </div>
          </div>

            <div class="col-sm-7">
              
              <div class="card card-body bg-light">
                <h5><b>Detail Paket</b></h5>
                <p></p>
              </div><br>

              <div class="card card-body bg-light">
                <h5><b>Pilih Kurir Logistik</b></h5>
                <div class="card card-body text-primary" style="background-color: lightblue">
                  <h6><b>Info Penting</b></h6>
                  Estimasi waktu pengiriman di bawah terhitung setelah paket dijemput oleh kurir.
                </div>
              </div>
              
              <button type="button" class="button buttonsimpan mt-4" disabled>Cek Pesanan Anda</button> 
            </div>

          </div>
        </div>
      </body>
      </html>
