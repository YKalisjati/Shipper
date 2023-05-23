<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/min-widthBody.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{asset('css/itemList.css')}}" type="text/css">
    <link href="css/kontak.css" rel="stylesheet">


</head>
<body style="background-color:lightgray;">
<header>
@include('partials.navTopDark')
</header>


<main style="background-color:white;">
<section  style="background-color:white;">
    <div  class = "col-sm-12" style="height:400px;"><br><br>
        <div class="gambar brightness">
                <img style="height:350px;width:100%"src="https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/banner-contact.jpg" alt="Image 1" class="d-block" >
        </div>
        <div class="text_centerImg25">
            <p style="font-size: 50px"><b>Kontak Kami</b></p>
            <p style="font-size: 24px">Hubungi Kami untuk segala pertanyaan Anda</p>
        </div>
    </div>
</section>
    <h2 class = "text-center mb-1 mt-4">Sampaikan pesan/pertanyaan Anda</h2>
    <p class = "text-center">Kami selalu siap memberikan jawaban & bantuan</p>
    @if(Session::has('success'))
    <div class="alert alert-success">
    {{ Session::get('success') }}
    </div>
    @endif
    <form method="post" action="contact">
        @csrf
    <div class="container px-4 py-5" id="featured-2">
        <div class="row row-cols-2">
            <div class="form-outline feature col">
                <label class="mt-4">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama lengkap anda" name="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label class="mt-4">Nomor Ponsel Anda</label>
                <input type="number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Contoh : 08xxxx" name="phone_number">
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label class="mt-4">Email Anda</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Contoh : abc@xxx.com" name="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label class="mt-4">Pesan/Pertanyaan</label>
                <textarea class="form-control textarea @error('message') is-invalid @enderror" style="height: 100px" placeholder="Contoh : Apakah saya ganteng?" name="message"></textarea>
                @error('message')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror

                <!-- Submit button -->
                <div class="row justify-content-center">
                <button style="width:auto"; type="submit" class="btn btn-danger btn-lg btn-block mt-4 mb-5">Kirim</button>
                </div>
            </div>
        </form>
            <div class="text-center">
                <p class=mt-0><b>KANTOR KAMI :</b></p>
                <div class="text-secondary">
                <p><b>Shipper Project 0.1</b></p>
                <p style="font-size: 14px">Dibawah langit dan Diatas tanah</p>
                <p style="font-size: 14px">Jl. Akhir Pekan, Kiri dan kanan, Bima Sakti</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-4" style="background-color:black;" >
    @include('partials.navBot')
</footer>

</body>
</html>