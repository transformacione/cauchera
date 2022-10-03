@extends ('layouts.users')

@section ('content')

        <div class="row justify-content-center mb-2 mt-5">
          

          <img src="{{asset('img/pedidos.png')}}" alt="" style="width: 50px;margin-top: 50px;">
          <h2 class="ml-2" style="margin-top: 50px;">
            Pedidos
          </h2>    
        </div>


  
@foreach($orden_compras as $a)
<div class="row text-center">

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->id}}</h6>
  </div>

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">NOMBRE</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->nombre}}</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->status}}</h6>
  </div>
        @if(Auth::user()->rol == 'Gerente')
  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2"  href="{{URL::action('OrdenCompraController@edit',$a->id)}}" role="button"><h6>Editar</h6></a>
    <a class="btn btn-danger mt-2"  href="{{URL::action('OrdenCompraController@show',$a->id)}}" role="button"><h6>Ver</h6></a>
  </div>
          @else
  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2"  href="{{URL::action('OrdenCompraController@show',$a->id)}}" role="button"><h6>Ver</h6></a>
  </div>
          @endif
  </div>


  <hr style="border:10px; background: #FFF;">

    @endforeach  

     <div class="row justify-content-center">
    {{ $orden_compras->render()}}  
  </div>


<div class="row mb-5" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection