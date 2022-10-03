@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')


        <div class="row justify-content-center mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top: 50px;">
                
          <h2 class="font-weight-bold">
            Mi Cuenta
          </h2>    
            </div>
        </div>   



        {!! Form::open(array('url'=>'login_cliente', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mt-5 mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" />
                 @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row justify-content-center">
            @if($status == 'negado_password')
            <h5>Se equivoco de contraseña</h5>
            @endif
            @if($status == 'negado_email')
            <h5>Se equivoco de email</h5>
            @endif
        </div>



        <div class="row" style="background-color: #968F8F;">
                    <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-5">
                    <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" />
                 @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>


      

<div class="row" style="background-color: #968F8F;">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">

        <div class="form-group" style="text-align: center;">

            <button class="btn btn-danger" type="submit"><h6>Iniciar sesión</h6></button>

        </div>

    </div>

    {{ Form::close() }}

</div>  

  <div class="row justify-content-center mb-5" style="background-color: #968F8F;">
        @if($existe == 'No')
        <h3>No existe el email suministrado</h3>
        @endif
        @if($existe == 'Si')
        <h3>Hemos enviado un email con su nueva contraseña</h3>
        @endif
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                @if (Route::has('password.request'))
                    <a class="btn btn-danger" href="{{ route('pass_lost_clientes') }}">
                        {{ __('Olvidastes tu contraseña?') }}
                    </a>
                @endif
        </div>
    </div>                

@push('scripts')



@endpush


@endsection
