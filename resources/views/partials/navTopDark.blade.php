<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top " >
        <div class="container">
            <a class="navbar-brand" href="/home"><i><b>SHIPPER</b></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                <a onmouseover="this.style.background='gray'" onmouseout="this.style.background=''" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Layanan Kami</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/home">Pengiriman</a></li>
                    <li><a class="dropdown-item" href="/warehouse">Manajemen Gudang</a></li>
                    <li><a class="dropdown-item" href="/integrasi-api">Integrasi API</a></li>
                </ul>
                </li>

                <li class="nav-item">
                <a onmouseover="this.style.background='gray'" onmouseout="this.style.background=''" class="nav-link" href="/mitra">Jadilah Mitra</a>
                </li>

                <li class="nav-item dropdown">
                <a onmouseover="this.style.background='gray'" onmouseout="this.style.background=''" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tentang Kami</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/contact">Kontak Kami</a></li>
                    <li><a class="dropdown-item" href="https://blog.shipper.id/">Blog</a></li>
                    <li><a class="dropdown-item" href="/faq">Pusat Bantuan</a></li>
                </ul>
                </li>

                <li class="nav-item dropdown">
                <a onmouseover="this.style.background='gray'" onmouseout="this.style.background=''" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Tautan Cepat</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/tarif-pengiriman">Tarif Pengiriman</a></li>
                    <li><a class="dropdown-item" href="/lacak-paket">Lacak Paket</a></li>
                </ul>
                </li>

                
            </ul>

            <ul class="nav navbar-nav ">
                
                <li>
                @if(session()->has('loginID'))
                <div class ="d-flex">
                    <a href="/dashboard"><button onclick ="" type="button" class="btn btn-danger">Beranda</button></a>
                </div> 
                @elseif(session()->has('loginAdmin'))
                <div class ="d-flex">
                    <a href="/dashboard-admin"><button onclick ="" type="button" class="btn btn-danger">Beranda</button></a>
                </div>
                @else
                <div class ="d-flex">
                    <a href="/login"><button onclick ="" type="button" class="btn btn-danger">Masuk</button></a>
                </div> 
                @endif     
                </li>      
            </ul>
            </div>
        </div>
        </nav>