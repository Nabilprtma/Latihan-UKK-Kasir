@extends('layout.dashboard')
@section('title', 'Create Produk')
@section('content')
<section class="section">
        <div class="section-header">
            <h1>New Account</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <form action="{{ route("produk.store") }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="card-header">
                        <h4>Input Account</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Nama Produk</label>
                                <input type="text" name="nama_produk" placeholder="Nama Produk" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the name
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Harga</label>
                                <input type="number" name="harga" placeholder="Harga" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the username
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Stok</label>
                                <input type="number" name="stok" placeholder="Stok" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the password
                                </div>
                               
                        
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control" required>
                                <div class="invalid-feedback">
                                    please fill in the password
                                </div>
                        <button class="btn btn-success">Create</button>
                        <a href="{{ route("user") }}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>

@endsection
