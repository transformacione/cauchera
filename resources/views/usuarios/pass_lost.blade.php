@extends ('layouts.users')

@section ('content')






{!! Form::open(array('url'=>'pass_lost_email', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}

     <div class="row mb-5" style="margin-top: 200px;">

  <div class="col-lg-5 col-md-5 col-sm-12"></div>

  <img src="{{asset('img/person.png')}}" class="text-center" style="width: 5%;">

  <h3 class="text-center mt-3">Recuperar contraseña</h3>

  <div class="col-lg-7 col-md-7 col-sm-12"></div>

</div>

      


        <div class="row justify-content-center" style="background-color: #968F8F">
          <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

              <div class="input-group mb-3 mt-5 justify-content-center">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Email:</span>
                </div>
                <input type="email" name="email" placeholder="por favor, coloque un email" style="width: 70%;">
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
                
                
                  
            
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12"></div>  
    </div>

    

    <div class="row" style="background-color: #968F8F">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-5" style="text-align: center;">

            
              <button class="btn btn-danger" type="submit"><h5>Enviar</h5></button>
            
    {{Form::close()}}

                    <a class="btn btn-danger" href="{{url('login')}}" role="button"><h5>Regresar</h5></a>

                
            </div> 

    </div>
 @push('scripts')

@endsection