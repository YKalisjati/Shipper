<nav class="navbar navbar-expand-lg bg-white border-bottom" >
            <div class="container" >
                <a class="navbar-brand text-dark" href="/home"><i><b>SHIPPER</b></i> <small><h6>pusat bantuan</small></h6></a>            
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
                </ul>
                </div>
            </div>
        </nav>