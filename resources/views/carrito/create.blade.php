@extends ('layouts.users')

@section ('content')


<div class="container mt-5 mb-5">
            <div class="jumbotron jumbotron-fluid">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Cauchos y Accesorios') }}</h2>

            </div>
        </div>

        {!! Form::open(array('url'=>'productos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

<div class="col-12 text-center">
  <h4>Accesorio o Repuestos</h4>
</div> 

         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
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

                    <div class="form-group row" style="margin-left: 5px;">

                        <textarea class="@error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;"></textarea>

                            @error('descripcion')
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

                    <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" />
                 @error('precio_dolar')
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
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" />
                 @error('inventario')
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

                            <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1">
                            @error('imagen_1')
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

                            <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2">
                            @error('imagen_2')
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

                            <input type="file" name="imagen_3" class="form-control @error('imagen_3') is-invalid @enderror" id="imagen_3" placeholder="Cargar Imagen 3">
                            @error('imagen_3')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
<div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

<div class="col-12 text-center">
  <h4>Cauchos</h4>
</div> 

         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
                 @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                    <div class="form-group row" style="margin-left: 5px;">

                        <textarea class="@error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;"></textarea>

                            @error('descripcion')
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

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                    <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" />
                 @error('precio_dolar')
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
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" />
                 @error('inventario')
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

                            <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1">
                            @error('imagen_1')
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

                            <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2">
                            @error('imagen_2')
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

                            <input type="file" name="imagen_3" class="form-control @error('imagen_3') is-invalid @enderror" id="imagen_3" placeholder="Cargar Imagen 3">
                            @error('imagen_3')
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

                            <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" id="marca" placeholder="Marca">
                            @error('marca')
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

                            <input type="text" name="ancho" class="form-control @error('ancho') is-invalid @enderror" id="ancho" placeholder="Ancho">
                            @error('ancho')
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

                            <input type="text" name="diametro" class="form-control @error('diametro') is-invalid @enderror" id="diametro" placeholder="Diámetro">
                            @error('diametro')
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

                            <input type="text" name="perfil" class="form-control @error('perfil') is-invalid @enderror" id="perfil" placeholder="Perfil">
                            @error('perfil')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
            </div>
<div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>                    
@push('scripts')



@endpush


@endsection
