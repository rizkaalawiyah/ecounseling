@extends('layouts.master')

@section('content')
<div class="jumbotron2">
<div class="container pt-5 mt-5">
    <div class="row justify-content-center pt-5 mt-5">
        <div class="col-md-8">
            <div class="card mb-5">
                    <div class="card-header mt-5">
                       <h4 class="text-center">Registrasi akun E-Counseling</h4>
                   </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf


                            <label for="name" class="col-md-4 col-form-label">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif


                            <label for="email" class="col-md-4 col-form-label ">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                            <label for="password-confirm" class="col-md col-form-label">{{ __('Konfirmasi Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        <div class="form-group mt-3 mb-3">
                            <label class="col-md control-label">Registrasi Sebagai</label>
                            <div class="col-md-6">
                                <select class="form-control" name="admin">
                                    <option>-- Registrasi Sebagai --</option>
                                    <option value="1">Psikolog</option>
                                    <option value="0">Pasien</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4 mt-4">
                            <div class="col-md">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                </a>
                            </div>
                        </div>
                                    <h6 class="text-center">Sudah Registrasi?</h6>
                                    <a href="{{ url('login') }}"><h6 class="text-center">Login Disini!</h6></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
