@extends ('layouts.users')

@section ('content')

<div class="container-fluid mt-5 mb-5">

	<div class="row justify-content-center mb-2">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">

			<h2 class="font-weight-bold">
				Mi Cuenta
			</h2>    
		</div>
	</div>

	<div class="row justify-content-center">
		<img src="{{asset('img/pedidos.png')}}" alt="" style="width: 50px;">
		<h2 class="ml-2">
			Tus Pedidos
		</h2>    
	</div>
  


<div class="row text-center" style="background-color: #d9534f">

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nº PEDIDO</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->id}} </h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">FECHA</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->fecha_creacion}} </h6>
  </div>  

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">ESTATUS</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$orden_compras->status}} </h6>
  </div>

</div>


@foreach($detalle_compras as $b)

<div class="row" style="background-color: #968F8F">
	
  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Nombre del Producto</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{buscar_nombre_producto($b->producto_id)}} </h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Cantidad</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{$b->cantidad}} </h6>
  </div>  

  <div class="col-lg-4 col-md-4 col-sm-12">
    <h6 class="text-center" style="color: #FFFFFF;">Precio $:</h6>
    <h6 class="text-center" style="color: #FFFFFF;"> {{formato_numero($b->precio_total_dolares)}} </h6>
  </div>

</div>
<hr style="background-color: #FFF;">
    @endforeach  

<div class="row" style="background-color: #968F8F;"><br></div>	


<div class="row"style="background-color: #968F8F;">

        <div class="col-lg-4 col-md-4 col-sm-12 mt-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-12 mt-12">

          <h6  style="color: #FFFFFF;">Nombre: 
            <span>{{$orden_compras->nombre}}</span>
          </h6>

          <h6  style="color: #FFFFFF;">CI: 
            <span >{{$orden_compras->ci}}</span>
          </h6>

          <h6  style="color: #FFFFFF;">Forma de Pago:
            <span >{{$orden_compras->forma_pago}} </span>
          </h6>

         
          <h6  style="color: #FFFFFF;">Teléfono: 
            <span >{{$orden_compras->tlf}} </span>
          </h6>
          <p  style="color: #FFFFFF;">Dirección: 
            <span style="text-align: justify;">{{$orden_compras->direccion}}</span>
          </p>

        </div>
      

        <div class="col-lg-4 col-md-4 col-sm-12 mt-12 text-center">
          <h4 style="color: #FFFFFF;">TOTAL $:</h4>         
          <h4 style="color: #FFFFFF;"> {{formato_numero($orden_compras->total)}} </h4>             
        </div>



</div>

<div class="row"><br></div>




<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('orden_compras')}}" role="button"><H6>Regresar</H6></a>

            </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection