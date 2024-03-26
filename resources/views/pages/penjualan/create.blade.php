@extends('layout.dashboard')
@section('title', 'Create User')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <section>
                        <div class="text-center container">
                            <div class="row" id="product-list">
                                
                            @foreach ($penjualan as $pl)
                            
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light">
                            <img src="assets/image/{{$pr->foto}}" alt="" srcset="" width="100px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $pl->nama_produk }}</h5>
                                <p>{{$pl->stok}}</p>
                                <h6 class="mb-3">{{$pl->harga}}</h6>
                                <p id="price_3" hidden="">7000</p>
                                <center>
                                    <table>
                                        <tbody><tr>
                                            <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="minus_3"><b>-</b></td>
                                            <td style="padding: 0px 10px 0px 10px;" class="num" id="quantity_3">0</td>
                                            <td style="padding: 0px 10px 0px 10px; cursor: pointer;" id="plus_3"><b>+</b></td>
                                        </tr>
                                    </tbody></table>
                                </center>
                                <br>
                                <p>Sub Total <b><span id="total_3">Rp. 0</span></b></p>
                            </div>
                        </div>
                    </div>
                
             @endforeach
                
                   
                
                    
                
                   
                </div>
                        </div>
                    </section>
                    
                </div>
                <div class="row fixed-bottom d-flex justify-content-end align-content-center" style="margin-left: 18%; width: 83%; height: 70px; border-top: 3px solid #EEE4B1; background-color: white;">
                    <div class="col text-center" style="margin-right: 50px;">
                        <form action="http://45.64.100.26:88/ukk-kasir/public/sale/create/post" method="post">
                            <input type="hidden" name="_token" value="CPZTKWf2MOGpIrm1yULbs22TAIIJCYCfXgOTAPaU" autocomplete="off">                            
                            <div id="shop"></div>
                            <button class="btn btn-primary" fdprocessedid="fb3qsi">Selanjutnya</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
