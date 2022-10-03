@extends ('layouts.users')

@section ('content')

<div class="container-fluid mt-5 mb-5 justify-content-center">


    <div class="row justify-content-center">
      <h2 style="text-align: center;margin-top: 50px;">
            Mi Cuenta
          </h2> 
    </div>

<div class="row justify-content-center mt-3 mb-2">
  <img src="{{asset('img/mensajes.png')}}" alt="" style="width: 50px;">
  <h2 class="ml-2">
    Mensajes
</h2>    
</div>

@foreach ($mensajes as $m)
    <div class="row jus mb-3 mt-3" style="background: #968F8F;color: white;">
      <div class="col-lg-2 col-md-2 col-sm-12">
        <h5 class="text-center">De:</h5>
        @if($m->de == 1)
        <h5 class="text-center">Tienda</h5>
        @else
        <h5 class="text-center">{{buscar_usuario($m->de)}}</h5>
        @endif
        
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12">
        <h5 class="text-center">Para:</h5>
        @if($m->para == 1)
        <h5 class="text-center">Tienda</h5>
        @else
        <h5 class="text-center">{{buscar_usuario($m->para)}}</h5>
        @endif
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <h5 class="text-center">Asunto:</h5>
        <h5 class="text-center">{{$m->asunto}}</h5>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12">
        <h5 class="text-center">Status:</h5>
        <h5 class="text-center">{{$m->status}}</h5>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-12 text-center">
        @if(Auth::user()->rol == 'Gerente')
        <a href="{{URL::action('MensajeController@edit',$m->id)}}">
          <button class="btn btn-danger mt-2"><h6>Editar</h6></button>
        </a>
        <a href="{{URL::action('MensajeController@status',$m->id)}}">
          <button class="btn btn-danger mt-2"><h6>Cambiar Estatus</h6></button>
        </a>
        @else
        <a href="{{URL::action('MensajeController@show',$m->id)}}">
          <button class="btn btn-danger mt-2"><h6>Ver Detalle</h6></button>
        </a>
        @endif
      </div>

    </div>

    <hr>

  @endforeach

  <div class="row justify-content-center">
    {{ $mensajes->render()}}  
  </div>


<div class="row justify-content-center mt-3 mb-5" style="text-align: center;">       

  <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>
       
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection