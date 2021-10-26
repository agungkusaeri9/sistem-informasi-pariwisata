@extends('auth.layouts.app')
@section('title')
    Register
@endsection
@section('content')
<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5 col-md-5 mx-auto">
      <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row mx-auto">
              <div class="col-lg-12">
                  <div class="p-5">
                      <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                      </div>
                      <form class="user" action="{{ route('register') }}" method="post">
                        @csrf
                          <div class="form-group">
                              <input type="text" class="form-control @error('name') is-invalid @enderror form-control-user" id="name"
                                  placeholder="Full Name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control @error('username') is-invalid @enderror form-control-user" id="username"
                                placeholder="Username" name="username" value="{{ old('username') }}">
                              @error('username')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                        </div>
                          <div class="form-group">
                              <input type="email" class="form-control @error('email') is-invalid @enderror form-control-user" id="exampleInputEmail"
                                  placeholder="Email Address" name="email" value="{{ old('email') }}">
                              @error('email')
                              <div class="invalid-feedback">
                                {{ $message }}
                              </div>
                              @enderror
                          </div>
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                  <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user"
                                      id="exampleInputPassword" placeholder="Password" name="password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                              </div>
                              <div class="col-sm-6">
                                  <input type="password" class="form-control form-control-user"
                                      id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                      {{ $message }}
                                    </div>
                                    @enderror
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-user btn-block">
                              Register Account
                          </button>
                          <hr>
                      </form>
                      <hr>
                      <div class="text-center">
                          <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
@endsection
