@extends('layout')
@section('container')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container py-5  ">

        <div class="text-center title">
          <hr>
            <h1>Fresh Selections</h1>
            <hr>

    </div>
  </div>
  <div class="container ">

  <div class="row ">


    <div class="owl-carousel mt-4 " id="owl-example">
@foreach($kategori as $k)

      <div class="item card border-0  ">
          <img src="{{ asset('storage/kategori/'.$k->foto) }}" class="rounded-image"  alt="...">
          <h3 class="text-dark mt-2" >{{ $k->nama_kategori }}</h3>
      </div>
    
     @endforeach
     
  </div>
</div>
          
            
  </div>





  </div>


  <div class="container py-5">

    <div class="text-center title">
      <hr>
        <h1>Tops Product</h1>
        <hr>

</div>
</div>

<div class="container-sm mb-5">
  <div class="row">
    @foreach($produk as $p)
    <div class="col-lg-4 mb-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/produk/'.$p->foto) }}" class="img-fluid rounded-start" alt="..."style="height: 100px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $p->nama_produk }}</h5>
              <h6>{{ "Rp " . number_format($p->harga, 2, ",", ".") }}</h6>


            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    
  </div>
</div>

@endsection
