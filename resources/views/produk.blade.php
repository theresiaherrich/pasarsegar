@extends('layout')
@section('container')


<div class="container-fluid  py-5">
    <div class="row">
        <div class="col-lg-3 mt-4 " style="padding-left: 50px;">
            <h1 class="text-center bg-success p-2 rounded-2 text-light">Kategori</h1>
            <div class="accordion" id="accordionExample" >
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-lg-9">
         
            <div class="row mt-3 px-5">
                
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
