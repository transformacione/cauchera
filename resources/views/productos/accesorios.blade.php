@extends ('layouts.users')

@section ('content')


@push('css')
@include('css.input_select_center_bg')
@include('css.input_number_control')
@endpush

<div class="col-12 text-center mt-5">
  <h3 class="font-weight-bold">Accesorios y Autopartes</h3>
</div> 

{!! Form::open(array('url'=>'buscar_accesorios', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

{{Form::token()}}

<div class="row mb-5"  style="background-color: #968F8F; margin-top: 10px">
	<div class="col-lg-3 col-md-3 col-sm-12 mt-1">
		
    <div class="input-group mt-2 mb-3">
      <input type="text" name="buscar" class="form-control @error('buscar') is-invalid @enderror" id="buscar" placeholder="Nombre del Producto" value="{{$obtener}}" />
      @error('buscar')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>

    <div class="row" style="text-align: center; margin-top: 10px;">

     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <div class="form-group">
       <button class="btn btn-danger" type="submit"><h6>Buscar</h6></button>

     </div>

   </div>
   {{Form::close()}}
 </div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12">
  <div class="row mt-2">
    <input type="hidden" id="cantidad_producto"  value="{{count($productos)}}">
    <?php $cont = 0; ?>
    @foreach($productos as $p)
    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="card mb-2" style="width: 100%;">
        <img src="{{asset('img/'.$p->imagen_1)}}" class="card-img-top" alt="..." width="250" height="150" data-toggle="modal" data-target="#modal_accesorios_{{$cont}}">
        <div class="card-body">
          <h5 class="card-title">{{$p->nombre}}</h5>
        
        <ul class="list-group">
                 
          <li class="list-group-item" style="border-bottom: none;">Precio $: {{formato_numero($p->precio_dolar)}}</li>
          
          <li class="list-group-item">Inventario Disponible: {{$p->inventario}}</li>        
        </ul>

        {!! Form::open(array('url'=>'agregar_carrito_accesorios', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_'.$cont, 'files'=>'true')) !!}

        {{Form::token()}} 

        <!--  codigo para controlar la cantidad de productos -->

        <div class="input-group justify-content-center mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="incrementar_{{$cont}}" data="{{$cont}}">                  
              <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_{{$cont}}"></i>                
            </span>
          </div>
          <input type="number" class="text-center" name="cantidad" id="cantidad_{{$cont}}"  value="0" style="width: 40px;" data="{{$cont}}">
          <input type="hidden" id="producto_id_{{$cont}}" name="producto_id"  value="{{$p->id}}">
          <input type="hidden" id="inventario_{{$cont}}" name="inventario"  value="{{$p->inventario}}">
          <input type="hidden" id="precio_dolar{{$cont}}" name="precio_dolar"  value="{{$p->precio_dolar}}">

          <div class="input-group-append">
            <span class="input-group-text" id="disminuir_{{$cont}}" data="{{$cont}}">                   
              <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="card-body" style="text-align: center;">
        <button type="button" class="btn btn-danger" id="add_carrito_{{$cont}}" data-container="body" data-toggle="popover" data-placement="bottom" data-content="agrega un producto." data="{{$cont}}">
        Agregar al carrito
        <span class="badge badge-light">{{$cantidad_carrito}}</span>
          <span class="sr-only">unread messages</span>
      </button>
      </div>



      {{Form::close()}}          
       
      </div>
    </div>
    <?php  $cont = $cont + 1;  ?>
    @endforeach

  </div>

   <div class="row justify-content-center mb-5">
  
    {{ $productos->withQueryString()->links() }}
  </div>
         <?php  $acce =0?>   
    @foreach($productos as $p)

      

@include('productos.modal_accesorios')

     
         <?php  $acce = $acce + 1;  ?>
    @endforeach

</div>
</div>


@push('scripts')
@include('js.incrementar_cantidad')
@include('js.incrementar_cantidad_modal')
@include('js.add_carrito_caucho')
@endpush






@endsection