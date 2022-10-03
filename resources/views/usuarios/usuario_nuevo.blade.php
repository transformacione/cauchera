@extends ('layouts.users')

@section ('content')

        <div class="jumbotron jumbotron-fluid" style="margin-top: -30px;">
            <div class="container" style="text-align: center;">
                <h2>{{ __('Mi cuenta') }}</h2>
            </div>
        </div>

<div class="container-fluid" style="background-color: #968F8F;">

{!! Form::open(array('url'=>'cargar_productos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center;">
            <img src="{{asset('img/person.png')}}" height="100px" width="100px;">
                <h4  style="color: #FFFFFF;">Tus Datos</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre" />
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" id="cedula_rif" placeholder="Cedula-RIF" />
                    @error('cedula_rif')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="Dirección" />
                    @error('direccion')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Teléfono" />
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="contrasena" class="form-control @error('contrasena') is-invalid @enderror" id="contrasena" placeholder="Contraseña" />
                    @error('contrasena')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
        </div> 

                    <div class="row mt-3">



                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                            <div class="form-group">
                                <button class="btn btn-danger" type="submit" style="float: right;"><h5>Guardar</h5></button>

                            </div>

                        </div>



         {{Form::close()}}


      
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{url('productos/create')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>
        </div> 
@push('scripts')



@endpush


@endsection
