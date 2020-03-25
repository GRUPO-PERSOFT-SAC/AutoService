@extends('layouts.app')
@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}">System<b>Service</b>MEC</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Accede para comenzar tu sesión</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

      <div class="form-group has-feedback">
        <input type="email" placeholder="Email" id="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
                <span class="glyphicon glyphicon-envelope form-control-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>


      <div class="form-group has-feedback">
        <input type="password" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <span class="glyphicon glyphicon-lock form-control-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
      </div>

      <div class="row">
        <div class="col-xs-7">
          <div class="checkbox">
            <label>
              <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
            </label>
          </div>
        </div>



        <!-- /.col -->
        <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat">Acceder</button>

        </div>
        <!-- /.col -->
      </div>
    </form>
    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
        Olvidé mi contraseña
        </a>
    @endif
  </div>
  <!-- /.login-box-body -->
</div>

@endsection
