@extends('form.master')

@section('content')
  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h3 text-gray-900 mb-4">SMIT Cellebration</h1>
                  <h3 class="h5 text-gray-900 mb-4">Welcome Back!</h3>
                </div>
                <form class="user" method="post" action="{{ route('login') }}">

                  <!-- flash message -->
                  @include('layouts.partials._alerts')
                  <!-- end flash message -->

                  @csrf

                    <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                        <input type="email" class="form-control form-control-user" aria-describedby="Email Column" name="email" placeholder="Enter Email Address..." required>

                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error':'' }}">
                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">

                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                  <button type="submit" name="submit" value="submit" class="btn btn-success btn-user btn-block">
                    Masuk
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <span class="small">Copyright &copy; 2019 Komunitas SMIT</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection

