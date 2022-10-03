@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')
  
<div class="row justify-content-center mt-5">

 

  <img src="{{asset('img/person.png')}}" class="text-center" style="width: 80px;">

  <h3 class="text-center mt-3">Mi Cuenta</h3>



</div>


<hr style="background-color: #968F8F; padding: 3px;">

{!! Form::model($usuarios,['method'=>'PATCH','route'=>['actualizar_pass',$usuarios->id],'files'=>'true']) !!}

     {{Form::token()}}

       <input type="hidden" value="{{$usuarios->id}}" name="id">


        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">

                <div class="input-group mb-3">

                   <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Nueva contraseña">
                   @error('password')
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

    

            @if($usuarios->rol != 'Cliente')

           
                    <a class="btn btn-danger" href="{{url('usuarios')}}" role="button"><h5>Regresar</h5></a>

           
            @else
      
       
                    <a class="btn btn-danger" href="{{url('home')}}" role="button"><h5>Regresar</h5></a>

          

            @endif
        </div> 
 @push('scripts')
 

 @endpush
@endsection