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
                    @if($obtener_marca == 'No')                    
                    <option selected>Elije una opción</option>
                    @else
                    <option selected>{{$obtener_marca}}</option>   
                    <option value="No">No</option>                   
                    @endif  
                    @foreach($marca as $marca)
                    @if($obtener_marca != $marca)
                    <option value="{{$marca}}">{{$marca}}</option>
                    @endif
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
                    @if($obtener_ancho == 'No')                    
                    <option selected>Elije una opción</option>
                    @else
                    <option selected>{{$obtener_ancho}}</option>  
                    <option value="No">No</option>                    
                    @endif
                    @foreach($ancho as $ancho)
                    @if($obtener_ancho!= $ancho) 
                    <option value="{{$ancho}}">{{$ancho}}</option>
                    @endif
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
                    @if($obtener_diametro == 'No')                    
                    <option selected>Elije una opción</option>
                    @else
                    <option selected>{{$obtener_diametro}}</option> 
                    <option value="No">No</option>                     
                    @endif
                    @foreach($diametro as $diametro)
                    @if($obtener_diametro != $diametro)                    
                    <option value="{{$diametro}}">{{$diametro}}</option>
                    @endif
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
          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <h5 style="color: #968F8F; text-align: center;">Perfil</h5>
          </button>
        </h2>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
         <div class="col-md-12">

          <div class="input-group">
                 
                  <select class="custom-select" id="inputGroupSelect04" name="perfil">
                    @if($obtener_perfil == 'No')                    
                    <option selected>Elije una opción</option>
                    @else
                    <option selected>{{$obtener_perfil}}</option>  
                    <option value="No">No</option>                  
                    @endif
                    @foreach($perfil as $perfil)
                    @if($obtener_perfil != $perfil)                      
                    <option value="{{$perfil}}">{{$perfil}}</option>
                    @endif
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
			<button class="btn btn-danger" type="submit"><h6>Buscar</h6></button>

		</div>

	</div>
  {{Form::close()}}
</div>
</div>

<div class="col-lg-9 col-md-9 col-sm-12 text-center">
  <div class="row mt-2">
    <input type="hidden" id="cantidad_producto"  value="{{count($productos)}}">
    <?php $cont = 0; ?>
    @foreach($productos as $p)
    <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
      <div class="card mb-2" style="width: 100%; height: auto;">
        <img src="{{asset('img/'.$p->imagen_1)}}" class="card-img-top" alt="..." width="250" height="150" data-toggle="modal" data-target="#modal_accesorios_{{$cont}}">
        <div class="card-body">
          <h5 class="card-title">{{$p->nombre}}</h5>
        
        <ul class="list-group">
                 
          <li class="list-group-item" style="border-bottom: none;">Precio $: {{formato_numero($p->precio_dolar)}}</li>
          
          <li class="list-group-item">Inventario Disponible: {{$p->inventario}}</li>        
        </ul>

        {!! Form::open(array('url'=>'agregar_carrito_cauchos', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_'.$cont, 'files'=>'true')) !!}

        {{Form::token()}} 

        <!--  codigo para controlar la cantidad de productos -->

        <div class="input-group justify-content-center mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="incrementar_{{$cont}}" data="{{$cont}}">                  
              <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_{{$cont}}"></i>                
            </span>
          </div>
          <input type="number" class="text-center" name="cantidad" id="cantidad_{{$cont}}"  value="0" style="width: 60px;" data="{{$cont}}">
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


  

</div>

<?php  $acce =0?>   
    @foreach($productos as $p)



  {{Form::token()}} 

@include('productos.modal_cauchos')


         <?php  $acce = $acce + 1;  ?>
    @endforeach




</div>



@push('scripts')
@include('js.incrementar_cantidad')
@include('js.incrementar_cantidad_modal')
@include('js.add_carrito_caucho')


@endpush


@endsection