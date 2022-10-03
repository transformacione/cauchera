@extends ('layouts.users')

@section ('content')

@push('css')
@include('css.input_number_control')
@endpush


	     <div class="col-12 text-center mt-5">
          <h3 class="font-weight-bold">Cauchos</h3>
        </div> 


 

{!! Form::open(array('url'=>'buscar_cauchos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

{{Form::token()}}
<div class="row"  style="background-color: #968F8F">
	<div class="col-lg-3 col-md-3 col-sm-12 mt-2">
		
    <div class="accordion" id="accordionExample">
      <div class="card mt-2">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <h5 style="color: #968F8F; text-align: center;">Marca</h5>
            </button>
          </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div class="col-md-12">

            
            

                <div class="input-group">
                 
                  <select class="custom-select" id="inputGroupSelect01" name="marca">
                    <option selected>Elije una opción</option>
                    @foreach($marca as $marca)
                    <option value="{{$marca}}">{{$marca}}</option>
                    @endforeach
                  </select>
                </div>       
                            
               
                
                   
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <h5 style="color: #968F8F; text-align: center;">Ancho</h5>
            </button>
          </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
           <div class="col-md-12">

            <div class="input-group">
                 
                  <select class="custom-select" id="inputGroupSelect02" name="ancho">
                    <option selected>Elije una opción</option>
                    @foreach($ancho as $ancho)
                    <option value="{{$ancho}}">{{$ancho}}</option>
                    @endforeach
                  </select>
                </div>   
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 style="color: #968F8F; text-align: center;">Diámetro del Rin</h5>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
         <div class="col-md-12">

          <div class="input-group">
                 
                  <select class="custom-select" id="inputGroupSelect03" name="diametro">
                    <option selected>Elije una opción</option>
                    @foreach($diametro as $diametro)
                    <option value="{{$diametro}}">{{$diametro}}</option>
                    @endforeach
                  </select>
                </div>   
        </div>
      </div>
    </div>
  </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h5 style="color: #968F8F; text-align: center;">Perfil</h5>
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
         <div class="col-md-12">

          <div class="input-group">
                 
                  <select class="custom-select" id="inputGroupSelect04" name="perfil">
                    <option selected>Elije una opción</option>
                    @foreach($perfil as $perfil)
                    <option value="{{$perfil}}">{{$perfil}}</option>
                    @endforeach
                  </select>
                </div>   
        </div>
      </div>
    </div>
  </div>


</div>



<div class="row mb-5" style="text-align: center; margin-top: 10px;">



	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

		<div class="form-group">
			<button class="btn btn-danger" type="haiden"><h6>Buscar</h6></button>

		</div>

	</div>
  {{Form::close()}}
</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12">
  <div class="row mt-2">
    <input type="hidden" id="cantidad_producto"  value="{{count($productos)}}">
    <?php 
    $cont = 0;
    for ($i=0; $i < count($productos); $i++) {     
        
    ?>
    @foreach($productos as $p)
    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="card mb-2" style="width: 18rem;">
        <img src="{{asset('img/'.$p[$i]->imagen_1)}}" class="card-img-top" alt="..." width="200" height="200">
        <div class="card-body">
          <h5 class="card-title">{{$p[$i]->nombre}}</h5>
        </div>
        <ul class="list-group">
                 
          <li class="list-group-item" style="border-bottom: none;">Precio $: {{formato_numero($p[$i]->precio_dolar)}}</li>
          
          <li class="list-group-item">Inventario Disponible: {{$p[$i]->inventario}}</li>        
        </ul>

        {!! Form::open(array('url'=>'agregar_carrito', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_'.$cont, 'files'=>'true')) !!}

        {{Form::token()}} 

        <!--  codigo para controlar la cantidad de productos -->

        <div class="input-group justify-content-center mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="incrementar_{{$cont}}" data="{{$cont}}">                  
              <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_{{$cont}}"></i>                
            </span>
          </div>
          <input type="number" class="text-center" name="cantidad" id="cantidad_{{$cont}}"  value="0" style="width: 60px;" data="{{$cont}}">
          <input type="hidden" id="producto_id_{{$cont}}" name="producto_id"  value="{{$p[$i]->id}}">
          <input type="hidden" id="inventario_{{$cont}}" name="inventario"  value="{{$p[$i]->inventario}}">
          <input type="hidden" id="precio_dolar{{$cont}}" name="precio_dolar"  value="{{$p[$i]->precio_dolar}}">

          <div class="input-group-append">
            <span class="input-group-text" id="disminuir_{{$cont}}" data="{{$cont}}">                   
              <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
            </span>
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

    <?php
        
     } 

    ?>
  </div>

   

</div>




</div>

@push('scripts')
@include('js.incrementar_cantidad')
@include('js.add_carrito_caucho')
@endpush


@endsection