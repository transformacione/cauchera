@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

        <div class="row justify-content-center mt-5 mb-2">
          

          <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;">
          <h2 class="ml-2">
            Cauchos y Accesorios
          </h2>    
        </div>

<div class="container-fluid" style="background-color: #968F8F">

{!! Form::model($productos, ['method'=>'PATCH','route'=>['productos.update',$productos->id],'files'=>'true']) !!}

{{Form::token()}} 

        @if(($productos->categoria) == 'Accesorios')

        <div class="col-12 text-center">
          <h4 style="color: #FFF;">Accesorio o Repuestos</h4>
        </div> 

   

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <input type="text" required name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$productos->nombre}}" />
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
                    <option value="{{$productos->destacado}}">{{$productos->destacado}}</option>
                    @if($productos->destacado != 'No')
                    <option value="No">No</option>
                    @endif
                    @if($productos->destacado != 'Si')
                    <option value="Si">Si</option>
                    @endif
                   
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
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Descripción:</h6>
                    <div class="form-group row">

                        <textarea class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción">{{$productos->descripcion}}</textarea>

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
                <h6 style="color: #FFF;">Precio $:</h6>
                <div class="input-group mb-3">
                    <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" value="{{$productos->precio_dolar}}">
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
                <h6 style="color: #FFF;">Cantidad Disponible:</h6>            
                <div class="input-group mb-3">
                    <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" value="{{$productos->inventario}}">
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
                <h6 style="color: #FFF;">Imagen 1:</h6>            
                <div class="input-group mb-3">
                <img src="{{asset('img/'.$productos->imagen_1)}}" alt="" width="150" height="150">
                    <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1" value="{{$productos->imagen_1}}">
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
                <h6 style="color: #FFF;">Imagen 2:</h6>            
                <div class="input-group mb-3">
                <img src="{{asset('img/'.$productos->imagen_2)}}" alt="" width="150" height="150">
                    <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2" value="{{$productos->imagen_2}}">
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
                <h6 style="color: #FFF;">Imagen 2:</h6>            
                <div class="input-group mb-3">
                <img src="{{asset('img/'.$productos->imagen_3)}}" alt="" width="150" height="150">
                    <input type="file" name="imagen_3" class="form-control @error('imagen_3') is-invalid @enderror" id="imagen_3" placeholder="Cargar Imagen 3" value="{{$productos->imagen_3}}">
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
            <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                <h6 style="color: #FFF;">Categoría:</h6>
                <select class="form-control @error('categoria') is-invalid @enderror" name="categoria" id="categoria">
                      <option value="{{$productos->categoria}}">{{$productos->categoria}}</option>
                      @if(($productos->categoria) != 'Cauchos')
                      <option value="Cauchos">Cauchos</option>
                      @endif
                      @if(($productos->categoria) != 'Por Preparar')
                      <option value="accesorios">Accesorios</option>
                      @endif                  
                  </select>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

@elseif (($productos->categoria) == 'Cauchos') 

<div class="col-12 text-center">
  <h4 style="color: #FFF">Cauchos</h4>
</div> 

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 style="color: #FFF;">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$productos->nombre}}">
                    @error('nombre')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
        </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                    <h6 style="color: #FFF;">Categoría:</h6>
                    <select class="form-control @error('categoria') is-invalid @enderror" name="categoria" id="categoria">
                          <option value="{{$productos->categoria}}">{{$productos->categoria}}</option>
                          @if(($productos->categoria) != 'Cauchos')
                          <option value="Cauchos">Cauchos</option>
                          @endif
                          @if(($productos->categoria) != 'Por Preparar')
                          <option value="accesorios">Accesorios</option>
                          @endif                  
                      </select>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12"></div>                                
        </div>

        <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="destacado">Destacado</label>
                    </div>
                    <select class="custom-select" id="destacado" name="destacado">
                        <option value="{{$productos->destacado}}">{{$productos->destacado}}</option>
                        @if(($productos->destacado) != 'No')
                        <option value="No">No</option>
                        @endif
                        @if(($productos->destacado) != 'Si')
                        <option value="Si">Si</option>
                       @endif
                    </select>
                    @error('destacado')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>




            <div class="col-lg-2 col-md-2 col-sm-12"></div>
        </div>

        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <h6 style="color: #FFF;">Descripción:</h6>
                    <div class="form-group row">
                        <textarea class="form-control @error('descripcion') is-invalid @enderror" type="text" name="descripcion" rows="4" id="descripcion" placeholder="Descripción" style="width: 95%;">{{$productos->descripcion}}</textarea>

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
                    <h6 style="color: #FFF;">Precio $:</h6>
                    <div class="input-group mb-3">
                        <input min="0" step=".01" type="number" name="precio_dolar" class="form-control @error('precio_dolar') is-invalid @enderror" id="precio_dolar" placeholder="Precio $ x Unidad" value="{{$productos->precio_dolar}}">
                        @error('precio_dolar')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6 style="color: #FFF;">Marca:</h6>                
                    <div class="input-group mb-3">

                        <input type="text" name="marca" class="form-control @error('marca') is-invalid @enderror" id="marca" placeholder="Marca" value="{{$productos->marca}}">
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
                    <h6 style="color: #FFF;">Ancho:</h6>
                    <div class="input-group mb-3">

                        <input type="text" name="ancho" class="form-control @error('ancho') is-invalid @enderror" id="ancho" placeholder="Ancho" value="{{$productos->ancho}}">
                        @error('ancho')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6 style="color: #FFF;">Cantidad Disponible:</h6>     
                    <div class="input-group mb-3">
                        <input type="text" name="inventario" class="form-control @error('inventario') is-invalid @enderror" id="inventario" placeholder="Cantidad Disponible" value="{{$productos->inventario}}">
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
                    <h6 style="color: #FFF;">Diámetro:</h6>
                        <div class="input-group mb-3">
                            <input type="text" name="diametro" class="form-control @error('diametro') is-invalid @enderror" id="diametro" placeholder="Diámetro del Rin" value="{{$productos->diametro}}">
                            @error('diametro')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                </div>

                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6 style="color: #FFF;">Perfil:</h6>
                        <div class="input-group mb-3">

                        <input type="text" name="perfil" class="form-control @error('perfil') is-invalid @enderror" id="perfil" placeholder="Perfil" value="{{$productos->perfil}}">
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
                     <h6 style="color: #FFF;">Imagen 1:</h6>
                     <div class="input-group mb-3">
                     <img src="{{asset('img/'.$productos->imagen_1)}}" alt="" width="150" height="150">
                     <input type="file" name="imagen_1" class="form-control @error('imagen_1') is-invalid @enderror" id="imagen_1" placeholder="Cargar Imagen 1" value="{{$productos->imagen_1}}">
                     @error('imagen_1')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                 </div>
             </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF;">Imagen 2:</h6>
                    <div class="input-group mb-3">
                        <img src="{{asset('img/'.$productos->imagen_2)}}" alt="" width="150" height="150">
                        <input type="file" name="imagen_2" class="form-control @error('imagen_2') is-invalid @enderror" id="imagen_2" placeholder="Cargar Imagen 2" value="{{$productos->imagen_2}}">
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
                    <h6 style="color: #FFF;">Imagen 3:</h6>
                        <div class="input-group mb-3">
                        <img src="{{asset('img/'.$productos->imagen_3)}}" alt="" width="150" height="150">
                        <input type="file" name="imagen_3" class="form-control @error('imagen_3') is-invalid @enderror" id="imagen_3" placeholder="Cargar Imagen 3" value="{{$productos->imagen_3}}">
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

                    <div class="row mb-5">



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                            <div class="form-group mb">
                                <button class="btn btn-danger" type="submit"><h5>Guardar</h5></button>
                                <a class="btn btn-danger" href="{{url('productos')}}" role="button"><h5>Regresar</h5></a>

                            </div>

                        </div>



         {{Form::close()}}


        </div> 
@push('scripts')



@endpush


@endsection
