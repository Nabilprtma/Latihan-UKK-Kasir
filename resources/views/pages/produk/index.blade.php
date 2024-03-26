@extends('layout.dashboard')
@section('title', 'Produk')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Produk List</h1>
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
                                <a href="{{ route('produk.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> New
                                    Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($produk as $pr)
                                <tr>
                                    <td><img src="assets/image/{{$pr->foto}}" alt="" srcset="" width="100px"></td>
                                    <td>{{ $pr->nama_produk }}</td>
                                    <td>Rp. {{ number_format($pr->harga, 0, ',', '.') }}</td>
                                    <td>{{ $pr->stok }}</td>

                                    
                                    <td>
                                        <form method="post" action="{{ route('produk.delete', $pr->id) }}">
                                            <a href="{{ route('produk.edit', $pr->id) }}" class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-primary" onclick="tampilkanFormEdit()">Edit Stok</button>
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                           
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

@endsection
