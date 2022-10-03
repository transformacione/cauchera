@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

<div class="row justify-content-center mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top: 50px;">
         <h2 class="font-weight-bold">
            Carrito de Compras
        </h2>    
    </div>
</div>

<div class="row ml-2">
      <img src="{{asset('img/10.png')}}" alt="" style="width: 50px;">
        <h2 class="ml-2">
            Recibo de Pago
        </h2>    
</div>

        {!! Form::open(array('url'=>'crear_cliente', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

        <div class="row" style="background-color: #968F8F">
            <div class="col-12 text-center">
              <h4 style="color: #FFFFFF">Primera Vez que Compro</h4>
          </div> 
      </div>

      <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nombre y Apellido" required />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>  
    </div>

    <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="input-group mb-3">
                <input type="text" name="cedula_rif" class="form-control @error('cedula_rif') is-invalid @enderror" id="cedula_rif" placeholder="Cédula - RIF" required />
                @error('cedula_rif')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror  
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

    <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="form-group row" style="margin-left: 5px;">

                <textarea class="form-control  @error('direccion') is-invalid @enderror" type="text" name="direccion" rows="4" id="direccion" placeholder="Dirección" style="width: 95%;" required></textarea>

                @error('direccion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror  
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

    <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="input-group mb-3">
                <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Teléfono"  required/>
                @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror 
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

    <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email"  required/>
                @error('email')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>

    <div class="row" style="background-color: #968F8F">
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required placeholder="Contraseña" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>
    </div>


                

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 mt-3 mb-5" style="text-align: center;">
           <button class="btn btn-danger" type="submit" style="width: 30%;"><h6>Confirmar</h6></button>    
       </div> 
   </div>

        {{Form::close()}}

@push('scripts')



@endpush


@endsection
