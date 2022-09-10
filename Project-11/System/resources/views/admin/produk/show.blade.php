@extends('admin.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data Produk
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ url('public', $produk->foto) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h3>{{ $produk->nama }}</h3>
                                        <hr>
                                        <p>
                                            {{ $produk->harga }} |
                                            Kondisi : {{ $produk->kondisi }} |
                                            Berat : {{ $produk->berat }} kg |
                                            Seller : {{ $produk->seller->nama }} |
                                            Tanggal Produk : {{ $produk->created_at->diffforhumans() }} |
                                        </p>
                                        <p>
                                            {!! nl2br($produk->deskripsi) !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
