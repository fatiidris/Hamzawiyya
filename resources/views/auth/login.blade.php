@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Hamzawiyya</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('login') }}" method="post">
                @csrf
        <div class="input-group mb-3">
<input id="email" type="email" class="form-control  @error('email') is-invalid @enderror"  name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
   @error('email')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
    @enderror

 <div class="input-group mb-3">
          <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
    @error('password')
     <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
      </span>
    @enderror
 


 <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3">
              <label for="remember">
              {{ __('Remember Me') }}
              </label>
            </div>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
   @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
    @endif
      </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
