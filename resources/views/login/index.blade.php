@extends('layout.main')

@section('container')
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
            <p class="text-white-50 mb-5">Please enter your Email and password!</p>
            <form action="/login" method="POST"> 
              @csrf 

              <div data-mdb-input-init class="form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"value="{{ old('email') }}" autofocus required/>
                <label class="form-label text-start" for="typeEmailX">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div data-mdb-input-init class="form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" required/>
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </form> <!-- Form ends here -->
            <div class="d-flex justify-content-center text-center mt-4 pt-1">
              <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
            </div>
            <div class="mt-3">
              <p class="mb-0 text-center">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
