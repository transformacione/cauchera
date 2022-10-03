          
@extends ('layouts.users')

@section ('content')

    <div class="row justify-content-center mt-5">
      <h2 style="text-align: center;">
            Mi Cuenta
          </h2> 
    </div>



 {!! Form::open(array('url'=>'usuarios', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}
        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="text-align: center;">
            <img src="{{asset('img/person.png')}}" height="100px" width="100px;">
                <h4  style="color: #FFFFFF;">Tus Datos:</h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Nombre:</h6>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre" value="">
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
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Correo" value="">
                    @error('email')
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
                <h6 style="color: #FFF">Rol:</h6>                
                <div class="input-group mb-3">
                    <select name="rol" class="form-control">
                        <option value="Gerente">Gerente</option>
                        <option value="Cliente">Cliente</option>
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

        <div class="row" style="background-color: #968F8F;">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Contraseña:</h6>                
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-contpassword @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" value="">
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
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 style="color: #FFF">Cédula:</h6>                
                <div class="input-group mb-3">
                    <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" id="cedula_rif" placeholder="Cedula-RIF" value="">
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
                    <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Teléfono" value="">
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
                   <textarea name="direccion" rows="3" style="width: 100%"></textarea>
                    @error('direccion')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>
       
       

        <div class="row justify-content-center mt-3 mb-5">



                       
                    <button class="btn btn-danger mr-5" type="submit" style="float: right;"><h5>Guardar</h5></button>



         {{Form::close()}}


      

                <a class="btn btn-danger" href="{{url('usuarios')}}" role="button"><h5>Regresar</h5></a>


           
        </div> 
@push('scripts')



@endpush


@endsection
