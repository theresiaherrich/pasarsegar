@extends('layout')
@section('container')


<div class="container-fluid  py-5">
    <div class="row">
        <div class="col-lg-3">
            <h1 class="text-center mb-4">Kategori</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h4 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Buah
                    </button>
                  </h4>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <li>
                                <p><a href="http://">kangkung</a></p>
                            </li>

                        </ul>

                    </div>
                  </div>
                </div>

              </div>
        </div>
        <div class="col-lg-9">
            <div class="row">

      <div class="col-lg-3 mb-3 ">
        <div class="card border-0 rounded-4 shadow" style="width: 100%;">
            <img src="img/bg.jpg" class="card-img-top rounded-4 rounded-bottom-0"style="border-radius:" alt="...">
            <div class="card-body">
              <h5 class="card-title">KANGKUNG</h5>
            <p>Rp. 100.000 / kg</p>
            <a href="#" class="btn btn-success btn-card rounded-pill mb-3 mt-3" > <i class="bi bi-cart-plus"></i> Add to cart</a>
            </div>
          </div>
        </div>

      <div class="col-lg-3 mb-3 ">
        <div class="card border-0 rounded-4 shadow" style="width: 100%;">
          <img src="img/bg.jpg" class="card-img-top rounded-4 rounded-bottom-0"style="border-radius:" alt="...">
            <div class="card-body">
              <h5 class="card-title">KANGKUNG</h5>
            <p>Rp. 100.000 / kg</p>
            <a href="#" class="btn btn-success btn-card rounded-pill mb-3 mt-3" > <i class="bi bi-cart-plus"></i> Add to cart</a>
            </div>
          </div>
        </div>

      <div class="col-lg-3 mb-3 ">
        <div class="card border-0 rounded-4 shadow" style="width: 100%;">
          <img src="img/bg.jpg" class="card-img-top rounded-4 rounded-bottom-0"style="border-radius:" alt="...">
            <div class="card-body">
              <h5 class="card-title">KANGKUNG</h5>
            <p>Rp. 100.000 / kg</p>
            <a href="#" class="btn btn-success btn-card rounded-pill mb-3 mt-3" ><i class="bi bi-cart-plus"></i> Add to cart</a>
            </div>
          </div>
        </div>

      <div class="col-lg-3 mb-3 ">
        <div class="card border-0 rounded-4 shadow" style="width: 100%;">
          <img src="img/bg.jpg" class="card-img-top rounded-4 rounded-bottom-0"style="border-radius:" alt="...">
            <div class="card-body">
              <h5 class="card-title">KANGKUNG</h5>
            <p>Rp. 100.000 / kg</p>
              <a href="#" class="btn btn-success btn-card rounded-pill mb-3 mt-3" ><i class="bi bi-cart-plus"></i> Add to Cart</a>
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
