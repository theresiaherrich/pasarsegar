@extends('layout')
@section('container')

<div class="container px-5 mt-5">
<div class="text-center title">

            <h1>Contact Us</h1>


    </div>
  <div class="row ">

      <div class="col-lg-6 card border-0 shadow mt-5 mb-md-0 p-3">



            <div class="row">
              <div class="col-lg-12">
                <form action="{{ route('datacontact.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($us as $user)
                    <input type="hidden" name="nama" value="{{  Auth::user()->name }}" class="form-control" id="nama" placeholder="Nama Kamu " >
                    <input type="hidden" name="email" value="{{  Auth::user()->email }}" class="form-control" id="email" placeholder="email Kamu " >
                    @endforeach
                  <textarea class="form-control text-black" rows="8" name="pesan" id="pesan" placeholder="Pesan Kamu"></textarea>
                </div>
                <div class="col-lg-12 d-flex align-items-center mt-2">
                    <button type="submit" class="btn btn-success"><span> Submit</span></button>
                </div>
            </form>
              <div class="col-lg-12 mt-5">
                <div class="row">
                    @forelse ($bot as $row)
                  <div class="col-lg-6">
<h5><i class="bi bi-telephone"></i>{{ $row->telp }}</h5>
                  </div>
                  <div class="col-lg-6">
<h5><i class="bi bi-instagram"></i> {{ $row->insta }}</h5>
                  </div>
                  <div class="col-lg-6">
<h5><i class="bi bi-envelope"></i> {{ $row->email }}</h5>
                  </div>
                  <div class="col-lg-6">
<h5><i class="bi bi-facebook"></i></i> {{ $row->facebook }}</h5>
                  </div>
                  @endforeach
                </div>
              </div>

            </div>


      </div>

    <div class="col-lg-6 right-image p-r-0 mt-5">
    <iframe src="{{ $row->alamat }}" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>


@endsection
