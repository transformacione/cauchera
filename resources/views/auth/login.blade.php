@extends('layouts.users')

@section('content')

@include('css.input_select_center_bg')
<div class="container mt-5">
    <div style="text-align: center;"> <h2><strong>{{ __('Mi Cuenta') }}</strong></h2></div>
    <div class="row justify-content-center" style="background: #968F8F;">
        <div class="col-md-8">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="form-group row mb-0">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                <button type="submit" class="btn btn-danger">
                                    <h5>{{ __('Iniciar sección') }}</h5>
                                </button>
                            </div>
                        </div>

                </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        @if($existe == 'No')
        <h3>No existe el email suministrado</h3>
        @endif
        @if($existe == 'Si')
        <h3>Hemos enviado un email con su nueva contraseña</h3>
        @endif
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                @if (Route::has('password.request'))
                    <a class="btn btn-danger" href="{{ route('pass_lost') }}">
                        {{ __('Olvidastes tu contraseña?') }}
                    </a>
                @endif
        </div>
    </div>
                    </form>

</div>
@endsection
