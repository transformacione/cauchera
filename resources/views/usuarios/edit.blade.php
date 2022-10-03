@extends ('layouts.users')

@section ('content')

    <div class="row justify-content-center mt-5">
      <h2 style="text-align: center;">
            Mi Cuenta
          </h2> 
    </div>



{!! Form::model($usuarios,['method'=>'PATCH','route'=>['usuarios.update',$usuarios->id],'files'=>'true']) !!}

     {{Form::token()}}
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="text-align: center;">
            <img src="{{asset('img/person.png')}}" height="100px" width="100px;">
                <h4  style="color: #FFFFFF;">Tus Datos:</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        @if(Auth::user()->rol == 'Gerente') 
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{$usuarios->name}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Correo:</h6>                
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Cedula-RIF" value="{{$usuarios->email}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
        @if($usuarios->rol != 'Cliente')
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Rol:</h6>                
                <div class="input-group mb-3">
                    <select name="rol" class="form-control">
                        <option value="{{$usuarios->rol}}">{{$usuarios->rol}}</option>
                        @if($usuarios->rol != 'Gerente')
                        <option value="Gerente">Gerente</option>
                        @endif
                        @if($usuarios->rol != 'Cliente')
                        <option value="Cliente">Cliente</option>
                        @endif
                    </select>
                    @error('rol')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
        @endif

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Cédula:</h6>                
                <div class="input-group mb-3">
                    <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" id="cedula_rif" placeholder="Cedula-RIF" value="{{$usuarios->cedula_rif}}">
                    @error('cedula_rif')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

         <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Teléfono:</h6>                
                <div class="input-group mb-3">
                    <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Cedula-RIF" value="{{$usuarios->telefono}}">
                    @error('telefono')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Dirección:</h6>                
                <div class="input-group mb-3">
                   <textarea name="direccion" rows="3" style="width: 100%">{{$usuarios->direccion}}</textarea>
                    @error('direccion')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row text-center" style="background-color: #968F8F;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{URL::action('UsuarioController@cambio_pass',$usuarios->id)}}" role="button"><h6>Cambiar Contraseña</h6></a>

                </div>

            </div>
        </div>
    @else

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{Auth::user()->name}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Correo:</h6>                
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Cedula-RIF" value="{{Auth::user()->email}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row text-center" style="background-color: #968F8F;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group">

                    <a class="btn btn-danger" href="{{URL::action('UsuarioController@cambio_pass',$usuarios->id)}}" role="button"><h6>Cambiar Contraseña</h6></a>

                </div>

            </div>
        </div>


       

          @endif
        <div class="row justify-content-center mt-3 mb-5">



                        

                         
                <button class="btn btn-danger mr-5" type="submit" style="float: right;"><h5>Guardar</h5></button>

                       


         {{Form::close()}}

    

            @if($usuarios->rol != 'Cliente')

           
                    <a class="btn btn-danger" href="{{url('usuarios')}}" role="button"><h5>Regresar</h5></a>

           
            @else
      
       
                    <a class="btn btn-danger" href="{{url('home')}}" role="button"><h5>Regresar</h5></a>

          

            @endif
        </div> 
@push('scripts')



@endpush


@endsection
