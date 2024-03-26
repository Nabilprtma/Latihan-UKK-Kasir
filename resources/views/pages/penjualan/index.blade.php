@extends('layout.dashboard')
@section('title', 'Penjualan')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Penjualan List</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users Table</h4>
                    <div class="card-header-form">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a href="{{route ('penjualan.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> New
                                    Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>No</th>
                                <th>Nama Pelanggan</th>
                                <th>Tanggal Penjualan</th>
                                <th>Total Harga</th>
                                <th>Dibuat Oleh</th>
                                <th>Action</th>
                            </tr>
                            
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    
                                    <td>
                                        <form method="post" action="">
                                            <a href="" class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-primary" onclick="tampilkanFormEdit()">Edit Stok</button>
                                           
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                           
                                        </form>
                                    </td>
                                </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection
