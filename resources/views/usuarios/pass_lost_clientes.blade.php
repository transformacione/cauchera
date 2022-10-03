@extends ('layouts.users')

@section ('content')



{!! Form::open(array('url'=>'pass_lost_email_clientes', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}

     <div class="container-fluid">

       <div class="row justify-content-center mb-5" style="margin-top: 200px;">

        

        <img src="{{asset('img/person.png')}}" class="text-center" style="width: 80px;">

        <h3 class="text-center mt-3">Recuperar contraseña</h3>



      </div>



      


      <div class="row justify-content-center" style="background-color: #968F8F">
        
       

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

      

      <div class="row justify-content-center" style="background-color: #968F8F">
       

        
        <button class="btn btn-danger mr-5" type="submit"><h5>Enviar</h5></button>
        
        {{Form::close()}}

        <a class="btn btn-danger" href="{{url('ya_he_comprado')}}" role="button"><h5>Regresar</h5></a>

        
        

      </div>

    </div>
 @push('scripts')

@endsection