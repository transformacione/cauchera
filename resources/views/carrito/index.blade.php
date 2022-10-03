@extends ('layouts.users')

@section ('content')

@push('css')
@include('css.input_number_control')
@endpush


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2 font-weight-bold" style="margin-top: 50px;">
    Carrito de Compras
  </h2>    
</div> 


<div class="row ml-2 justify-content-center">
  <img src="{{asset('img/10.png')}}" alt="" style="width: 50px;">
  <h2 class="ml-2">
    Pedido
  </h2>    
</div>
<input type="hidden" value="{{count(Cart::content())}}" id="cantidad_producto">


<?php
    $cont = 0;
    ?>

@foreach(Cart::content() as $c)
<div class="row text-center"  style="background-color: #968F8F; padding-bottom: 30px;">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <img src="{{asset('img/'.$c->options->img)}}" class="card-img-top" alt="..." height="75" width="150">
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">

    <h6 style="color: #FFFFFF">{{$c->name}}</h6>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5">
    {!! Form::open(array('url'=>'actualizar_carrito', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true', 'id'=>'actualizar_'.$cont)) !!}

          {{Form::token()}} 

            <div class="input-group justify-content-center mb-2"> 
              <div class="input-group-append">
                <span class="input-group-text" id="disminuir_{{$cont}}" data="{{$cont}}">                   
                  <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
                </span>
              </div>

              <input type="number" class="text-center" name="cantidad" id="cantidad_{{$cont}}"  value="{{$c->qty}}" style="width: 60px;" data="{{$cont}}">
              <input type="hidden" id="pc_producto_id" name="producto_id"  value="{{$c->id}}"> 
              <input type="hidden" id="inventario_{{$cont}}" value="{{$c->options->inventario}}"> 

              <div class="input-group-prepend">
                <span class="input-group-text" id="incrementar_{{$cont}}" data="{{$cont}}">                  
                  <i class="fas fa-plus" style="color: #4169E1;"></i>                
                </span>
              </div>

              

              <input type="hidden" name="rowId" value="{{$c->rowId}}">

              <div class="input-group-append">
                <span class="input-group-text">                   
                  <button id="enviar_{{$cont}}" data="{{$cont}}" class="btn btn-outline-danger">Actualizar</button>
                </span>
              </div>

            </div>

        {{Form::close()}}

  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">
    <h6 style="color: #FFFFFF">Precio $</h6>
    <h6 style="color: #FFFFFF">{{formato_Numero($c->price * $c->qty)}}</h6>
  </div>

  
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-5">

    <a href="{{URL::action('CarritoController@remover',$c->rowId)}}" class="ml-2" title="Remover">
          <button class="btn ml-5"><i class="fas fa-trash-alt text-white"></i></button>
    </a>

  </div>
</div>

 <?php
    $cont = $cont + 1;
    ?>

    @endforeach

              <div class="row mt-5 justify-content-center">
                    @if(count(Cart::content()) > 0)
                    <h6 class="text-center">Por favor, pulsa el boton "actualizar", si modificaste la cantidad de productos que deseas, antes de pulsar "Confirmar" <br> (Esto únicamente si deseas ver el total de cada producto) </h6>
                    @else
                    <h6 class="text-center">El carrito esta vacio, por favor agrega productos para continuar.</h6>
                    @endif
                </div>

                    @if(count(Cart::content()) > 0)
<div class="row mb-5 justify-content-center" style="text-align: center; margin-top: 10px;">

                  <a href="{{url('pregunta')}}" class="btn btn-danger" style="width: 30%;"><h6 style="color: #FFFFFF">Confirmar</h6></a>
                    @endif

</div>

@push('scripts')
@include('js.add_carrito')
@include('js.incrementar_cantidad')
@endpush
@endsection