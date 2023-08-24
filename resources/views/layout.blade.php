<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat:wght@700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/110f61632b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Pasar Segar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto py-2">
            <li class="nav-item px-3">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item px-3">
            <a class="nav-link" href="#"><i class="bi bi-cart-fill"></i></a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
            </li>
            
           
           
          </ul>
         
        </div>
      </div>
    </nav>
@yield('container')
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>