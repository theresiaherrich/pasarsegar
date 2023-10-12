@extends('layout')
@section('container')

<div class="container py-5 mt-5">
<div class="row">
    <div class="col-lg-4">
        <img src="{{ asset('storage/produk/'.$produk->foto) }}" class="img-fluid rounded-4" width="400">
    </div>
    <div class="col-lg-5 p-4">
        <h4 class=" mb-4 fs-1 ">{{ $produk->nama_produk }}</h4>
        <h5 class="fs-2 text-danger">{{ "Rp " . number_format($produk->harga, 2, ",", ".") }} <span class="fs-5 text-dark">/ {{$produk->satuan}}</span></h5>
        <div class="mt-4">
        <input type="number" class="form-control rounded-0" id="jumlah" value="1" min="1">
        <input type="hidden" id="harga" value="{{ $produk->harga }}">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card p-3">
            <h1 class="text-center">chekout</h1>
            <hr>
          
            <div class="row py-3">
                <div class="col-md-6">
                <h4>Subtotal</h4>
                </div>
                <div class="col-md-6 text-end">
                <h4 id="subtotal">{{ "Rp " . number_format($produk->harga, 2, ",", ".") }}</h4>
                </div>
            </div>
                <a href="{{ route('add.cart', $produk->id)}}" class="btn btn-success mb-3 btn-lg" style="width:100%;">
                    <i class="bi bi-cart-plus"></i> Add to cart
                </a>
            <button class="btn btn-outline-success btn-lg ">Beli</button>
        </div>
    </div>
</div>
</div>

@endsection
