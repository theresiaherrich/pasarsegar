@extends('layouts.app')

@section('content')


<section class="vh-100" >
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-12 col-xl-5 order-2 order-lg-1">
<div class="title">
                <h1 class="text-center h1 ">REGISTER</h1>
</div>
<form method="POST" action="{{ route('register') }}">
    @csrf

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Username</label>
                      <input type="text" name="username" id="form3Example1c" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Name</label>
                      <input type="text" name="name" id="form3Example1c" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" name="password" for="form3Example4cd">Password</label>
                        <input type="password" id="form3Example4c" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password" autofocus/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Confirm password</label>
                      <input type="password" id="form3Example4cd" name="password_confirmation" class="form-control" autofocus/>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-success btn-lg">Register</button>
                  </div>

                  <div class="mt-5 text-center">
                    <p class="mb-0">Sudah punya akun ? <a
                            href="{{ route('login')}}"
                            class="fw-semibold text-primary text-decoration-underline">
                            Login</a> </p>
                </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/vegetable.png"
                  class="img-fluid" alt="Sample image"width="800">


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
