
        <div class="col-auto">
            <button class="btn btn-danger btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg> 
            </button>
            
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-keyboard="false" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header border-bottom bg-danger text-white">
                    <p class="offcanvas-title mx-auto" id="offcanvasExampleLabel"><i><b class="h2">SHIPPER</b><br><b class="p">Admin</b></i></p>
                    <button type="button" class="btn-close btn-close-white text-reset " data-bs-dismiss="offcanvas" aria-label="Close" ></button>
                </div>
                <div class="offcanvas-body">
                    <div id="sidebar">
                        <div class="nav flex-column">
                            <a href="{{route('adminDashboard')}}" class="nav-link">
                                <svg xmlns=" " width="25" height="25" fill="currentColor" class="bi bi-house-door mb-2" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                </svg>
                                <span class="ms-1 my-auto" style="font-size:18px" >Beranda</span>
                            </a>

                        
                            <a href="#menu1" class="nav-link collapsed" data-bs-toggle="collapse" role="button">
                            <svg xmlns=" " width="25" height="25" fill="currentColor" class="bi bi-box-seam mb-2" viewBox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                            </svg>
                            <span class="ms-1 my-auto" style="font-size:18px">Pesanan User</span>
                            </a>
                            
                            <div class="collapse ps-2" id="menu1" data-bs-parent="#sidebar">
                                <a href="/jemput-pesanan" class="nav-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                    <span class="ms-1 my-auto" style="font-size:18px">Jemput Pesanan</span>
                                </a>
                                <a id="hoverSVG" href="/terima-pesanan" class="nav-link">
                                    <svg  version="1.0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 200.000000 200.000000" preserveAspectRatio="xMidYMid meet">
                                        <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                                        fill="red" >
                                        <path d="M677 1723 c-4 -3 -7 -113 -7 -243 l0 -237 -52 -7 c-108 -15 -166 -54
                                        -240 -164 -68 -100 -122 -154 -238 -232 -93 -64 -117 -94 -85 -106 25 -10 202
                                        114 275 193 34 36 75 88 92 114 52 86 133 139 211 139 14 0 164 -29 333 -65
                                        169 -36 309 -65 311 -65 5 0 29 -55 28 -65 -3 -29 -18 -53 -38 -62 -18 -8 -68
                                        -3 -213 23 -104 19 -201 32 -215 29 -35 -8 -75 -52 -84 -91 -7 -37 12 -90 42
                                        -117 23 -20 404 -97 482 -97 49 0 61 6 336 169 197 117 236 126 270 60 22 -42
                                        18 -66 -17 -103 -32 -32 -505 -358 -571 -393 -50 -26 -126 -20 -462 36 -177
                                        30 -323 50 -341 46 -17 -3 -85 -44 -150 -90 -92 -65 -119 -90 -119 -108 0 -36
                                        25 -25 148 62 92 65 122 81 151 81 19 0 171 -23 337 -50 166 -28 325 -50 353
                                        -50 33 0 69 9 101 24 88 42 588 389 613 426 39 59 26 135 -33 190 -38 36 -114
                                        35 -171 -2 -23 -15 -45 -24 -48 -21 -4 4 -6 177 -6 385 1 208 -2 383 -5 388
                                        -7 11 -977 14 -988 3z m943 -148 l0 -95 -450 0 -450 0 0 95 0 95 450 0 450 0
                                        0 -95z m0 -412 l0 -258 -141 -83 c-77 -46 -153 -88 -169 -94 -28 -9 -146 8
                                        -453 68 -36 7 -60 44 -51 79 12 50 36 51 252 15 l199 -34 34 20 c72 41 87 133
                                        31 195 -29 32 -12 27 -467 126 l-130 28 -3 98 -3 97 451 0 450 0 0 -257z"/>
                                        </g>
                                    </svg>
                                    <span class="ms-1 my-auto" style="font-size:18px">Terima Pesanan</span>
                                </a>
                            </div>
                            <a href="/warehouse-terima-paket" class="nav-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                </svg>
                                <span class="ms-1 my-auto" style="font-size:18px" >Warehouse</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>