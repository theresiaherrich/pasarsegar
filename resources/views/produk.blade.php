@extends('layout')
@section('container')


<div class="container-fluid  py-5">
    <div class="row">
        <div class="col-lg-3 mt-4 " style="padding-left: 50px;">
            <h1 class="text-center bg-success p-2 rounded-2 text-light">Kategori</h1>
           
            <div class="list-group">
              @foreach($kategori as $k)
  <a href="" class="list-group-item list-group-item-action" aria-current="true">
    {{$k->nama_kategori}}
</a>
    @endforeach
  

</div>
</div>
          
        <div class="col-lg-9">
         
            <div class="row mt-3 px-5">
                
            @foreach($produk as $p )

      <div class="col-lg-3 mb-3 ">
      <a href="/detail/{{ $p->id }}">
        <div class="card border-0 rounded-3 shadow" style="width: 100%;">
            <img src="{{ asset('storage/produk/'.$p->foto) }}" class="card-img-top rounded-3 rounded-bottom-0"style="height:180px" alt="...">
            <div class="card-body">
              <h5 class="card-title" >{{$p->nama_produk}}</h5>
            <p>{{ "Rp " . number_format($p->harga, 2, ",", ".") }} / {{$p->satuan}}</p>
            
            </div>
          </div>
          </a>   
        </div>
          
     
    @endforeach
        
     
        </div>
       
            
         
            
            </div>
        </div>
    </div>
</div>

@endsection
