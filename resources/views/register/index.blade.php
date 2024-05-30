@extends('layout.main')

@section('container')
<div class="container py-5 h-100">
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card bg-dark text-white" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">
          <div class="mb-md-5 mt-md-4 pb-5">
            <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
            <form action="/register" method="post">
              @csrf
              <div data-mdb-input-init class="form-white mb-4">
                <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" required/>
                <label class="form-label text-start" for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div data-mdb-input-init class="form-white mb-4">
                <input type="text" id="username" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" value="{{ old('username') }}" required/>
                <label class="form-label text-start" for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div data-mdb-input-init class="form-white mb-4">
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required/>
                <label class="form-label text-start" for="typeEmailX">Email</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div data-mdb-input-init class="form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required />
                <label class="form-label" for="typePasswordX">Password</label>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
            </form> <!-- Form ends here -->
            <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
            <div class="d-flex justify-content-center text-center mt-4 pt-1">
              <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
              <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
            </div>
          </div>
          <!-- Closing div -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
