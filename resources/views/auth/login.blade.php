@extends('auth.layouts.app')
@section('title','Login')
@section('content')
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

      <div class="col-md-5">

          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                      <div class="col-lg-12">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                              </div>
                              <form class="user" action="{{ route('login') }}" method="post">
                                @csrf
                                  <div class="form-group">
                                      <input type="text" class="form-control @error('username') is-invalid @enderror form-control-user"
                                          id="username" aria-describedby="emailHelp"
                                          placeholder="Username" value="{{ old('username') }}" name="username">
                                          @error('username')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user"
                                          id="password" placeholder="Password" name="password">
                                          @error('password')
                                          <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                  </div>
                                  <div class="form-group">
                                      <div class="custom-control custom-checkbox small">
                                          <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                          <label class="custom-control-label" for="customCheck">Remember
                                              Me</label>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-primary btn-user btn-block">
                                      Login
                                  </button>
                                  <hr>
                              </form>
                              <hr>
                              <div class="text-center">
                                  <a class="small" href="{{ route('register') }}">Create an Account!</a>
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
@section('content1')
<div class="login-box">
    <div class="login-logo">
      <a href="#">Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form action="{{ route('login') }}" method="post">
            @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}"> 
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <!-- /.social-auth-links -->
  
        <p class="mb-0">
          <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
</div>
@endsection