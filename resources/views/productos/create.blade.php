@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

<div class="row justify-content-center mt-5 mb-2">
      <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;margin-top: 50px;margin-bottom:20px;">
        <h2 class="ml-2" style="margin-top: 50px;margin-bottom:20px;">
            Cauchos y Accesorios
        </h2> 
</div>

<div class="container-fluid" style="background-color: #968F8F">

{!! Form::open(array('url'=>'productos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}

     <div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">

            <div class="input-group mb-3">
                <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria" placeholder="{{$tipo}}" value="{{$tipo}}" readonly>
                @error('categoria')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>


        @if(($tipo) == 'Accesorios')

        <div class="col-12 text-center">
          <h4 style="color:#FFF;">Accesorio o Repuestos</h4>
        </div> 

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input  required type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
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

                    <div class="form-group row">

                        <textarea class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" required></textarea>

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

                    <input min="0" required step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" />
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
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" required />
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
                    <label for="">Imagen 1 (Ancho 500px, altura 300 px)</label>
                    <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" required placeholder="Cargar Imagen 1">
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
                    <label for="">Imagen 2 (Ancho 500px, altura 300 px)</label>
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
                    <label for="">Imagen 3 (Ancho 500px, altura 300 px)</label>
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

@elseif ($tipo == 'Cauchos') 

<div class="col-12 text-center">
  <h4 style="color:#FFF">Cauchos</h4>
</div> 

         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input type="text" required name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" />
                 @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="destacado">Destacado</label>
                </div>
                <select class="custom-select" id="destacado" name="destacado">

                    <option value="No">No</option>
                    <option value="Si">Si</option>
                   
                </select>
                @error('destacado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



        </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">

                        <textarea required class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;"></textarea>

                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                    <input min="0" required step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" />
                 @error('precio_dolar')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

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
                <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>

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

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" required />
                 @error('inventario')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">

                    <input type="text" name="diametro" class="form-control @error('diametro') is-invalid @enderror" id="diametro" placeholder="Diámetro del Rin">
                        @error('diametro')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>

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
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <label for="">Imagen 1 (Ancho 500px, altura 300 px)</label>
                    <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" required id="imagen_1" placeholder="Cargar Imagen 1">
                        @error('imagen_1')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <label for="">Imagen 2 (Ancho 500px, altura 300 px)</label>
                    <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2">
                        @error('imagen_2')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>                  
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="input-group mb-3">
                    <label for="">Imagen 3 (Ancho 500px, altura 300 px)</label>
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
@endif

</div>
<br>

                    <div class="row" style="margin-bottom: 40px;">



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
