@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="img/1234.png"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13">Username</label>
            <input type="text" name="username" id="form1Example13" class="form-control form-control-lg @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus/>
            @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23">Password</label>
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password" autofocus/>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" value="" id="form1Example3" {{ old('remember') ? 'checked' : '' }} />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-success btn-lg btn-block">Sign in</button>

          <div class="mt-5 text-center">
            <p class="mb-0">Belum punya akun ? <a href="{{ route('register') }}"
                    class="fw-semibold text-primary text-decoration-underline">
                    Signup</a> </p>
        </div>

          {{-- <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-success btn-lg btn-block" style="background-color: #228B22" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
          <a class="btn btn-success btn-lg btn-block" style="background-color: #228B22" href="#!"
            role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a> --}}

        </form>
      </div>
    </div>
  </div>
</section>
@endsection
