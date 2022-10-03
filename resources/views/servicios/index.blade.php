@extends ('layouts.users')

@section ('content')



        <div class="row justify-content-center mt-5 mb-2">
          

          <img src="{{asset('img/servicios.png')}}" alt="" style="width: 50px;margin-top: 50px;margin-bottom: 20px;">
          <h2 class="ml-2" style="margin-top: 50px;margin-bottom: 20px;">
            Servicios
          </h2>    
        </div>


  
@foreach($servicios as $a)
<div class="row text-center">

  <div class="col-lg-6 col-md-6 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">NOMBRE DEL SERVICIO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->nombre}}</h6>
  </div>  



  <div class="col-lg-6 col-md-6 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2 mb-2"  href="{{URL::action('ServicioController@edit',$a->id)}}" role="button"><h6>Ver / Modificar</h6></a>
  </div>
  </div>


  <hr style="border:10px; background: #FFF;">

    @endforeach  

     <div class="row justify-content-center">
    {{ $servicios->render()}}  
  </div>

<div class="row" style="text-align: center; margin-bottom: 90px;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6> Regresar</h6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection