@extends('layouts.master')

@section('content')
<div class="jumbotron2">
<div class="container mt-5 pt-5">
    <div class="row justify-content-center pt-5">
            <div class="btn-group" role="group" aria-label="Basic example" style="margin: auto; color: grey;">
              <button type="button" class="btn btn-outline-secondary" href="{{ url('login') }}"><h6 class="text-center">Pasien</h6></button>
              <button type="button" class="btn btn-outline-secondary" href="{{ url('login') }}"><h6 class="text-center">Psikolog</h6></button>
            </div>
        <div class="login col-md-8">
            <div class="card">
                    <div class="card-header mt-5">
                       <h4 class="text-center">Masuk ke akun E-Counseling mu!</h4>
                   </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf



                                <label for="email" class="col-sm-4 col-form-label">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif



                            <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-check">

                                     <br>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat Saya') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 mb-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                                    <h6 class="text-center">Belum Registrasi?</h6>
                                    <a href="{{ url('register') }}"><h6 class="text-center">Registrasi Disini!</h6></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
