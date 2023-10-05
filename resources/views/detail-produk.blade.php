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
       <input type="number" class="form-control rounded-0" name="" id="" value="20">
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
                <h4>Rp. 10.000</h4>
                </div>
            </div>
         
            <button class="btn btn-success mb-3 btn-lg "> <i class="bi bi-cart-plus"></i> Add to cart</a></button>
            <button class="btn btn-outline-success btn-lg ">Beli</button>
        </div>
    </div>

@endsection
