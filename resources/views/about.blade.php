@extends('layout')
@section('container')

<div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
        @forelse ($bot as $row)
      <div class="col-lg-6">
        <h1 class="display-4">{{ $row->nama }}</h1>
        <p class="lead text-muted mb-0">{{ $row->deskripsi }}</p>
      </div>
      <div class="col-lg-6 d-none d-lg-block about"><img src="img/buah.png" alt="" class="img-fluid"></div>
    @endforeach
    </div>
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-12">
        <h2 class="display-4 font-weight-light text-center">Our team</h2>
      </div>
    </div>

    <div class="row text-center">
        @forelse ($mem as $row)
      <!-- Team item-->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4">
            @if ($row->foto != null)
            <img src="{{ asset('storage/member/'.$row->foto) }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            @endif
          <h5 class="mb-0">{{ $row->nama }}</h5><span class="small text-uppercase text-muted">{{ $row->role }}</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="{{ $row->telp }}" class="social-link"><i class="bi bi-telephone"></i> </a></li>
            <li class="list-inline-item"><a href="{{ $row->twitter }}" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="{{ $row->insta }}" class="social-link"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
      @endforeach
    </div>
  </div>
</div>


<footer class="bg-light pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights reserved.</p>
  </div>
</footer>
<style>
.social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}

.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
</style>
@endsection
