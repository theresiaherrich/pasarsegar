@extends('layout')
@section('container')
    
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/bg.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/bg2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/bg3.jpg" class="d-block w-100" alt="...">
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
  

      <div class="col-lg-3 ">
      <div class="card  bg-dark">
        <img src="img/bg1.jpg" class="card-img" alt="...">
        <div class="card-img-overlay text-light">
          <h1 class="card-title">Card title</h1>
         
        </div>
      </div>
      </div>
   
        <div class="col-lg-3 ">
          <div class="card text-bg-dark">
            <img src="img/bg.jpg" class="card-img" alt="..." >
            <div class="card-img-overlay text-light">
              <h1 class="card-title">Card title</h1>
              
            </div>
          </div>
          </div>
          <div class="col-lg-3 ">
            <div class="card text-bg-dark">
              <img src="img/bg3.jpg" class="card-img" alt="...">
              <div class="card-img-overlay text-light">
                <h1 class="card-title">Card title</h1>
                
              </div>
            </div>
            </div>
            <div class="col-lg-3 ">
              <div class="card text-bg-dark">
                <img src="img/bg3.jpg" class="card-img" alt="...">
                <div class="card-img-overlay text-light">
                  <h1 class="card-title">Card title</h1>
                  
                </div>
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
    <div class="col-lg-4 mb-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/bg1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6>Rp. 10.000 </h6>

            
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/bg1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6>Rp. 10.000 </h6>

            
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/bg1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6>Rp. 10.000 </h6>

            
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/bg1.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h5 class="card-title">Product</h5>
              <h6>Rp. 10.000 </h6>

            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection