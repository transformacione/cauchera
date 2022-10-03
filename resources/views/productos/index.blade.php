@extends ('layouts.users')

@section ('content')



        <div class="row justify-content-center mt-5 mb-2">
          

          <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;margin-top: 50px;margin-bottom:20px;">
          <h2 class="ml-2" style="margin-top: 50px;margin-bottom:20px;">
            Cauchos y Accesorios
          </h2> 
            <span style="float: right;margin-top: 50px;margin-bottom:20px;"><a href="{{url('productos/create')}}" class="btn btn-danger ml-5"><h6>Crear Producto</h6></a></span>


        </div>


  
@foreach($productos as $a)
<div class="row text-center">

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">CATEGORÍA</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->categoria}}</h6>
  </div> 

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">PRODUCTO</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->nombre}}</h6>
  </div>  

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <h6 class="text-center" style="color: #FFFFFF;">INVENTARIO DISPONIBLE</h6>
    <h6 class="text-center" style="color: #FFFFFF;">{{$a->inventario}}</h6>
  </div> 

  <div class="col-lg-3 col-md-3 col-sm-12" style="background-color: #968F8F">
    <a class="btn btn-danger mt-2 mb-2"  href="{{URL::action('ProductoController@edit',$a->id)}}" role="button"><h6>Ver / Modificar</h6></a>
    <a href="" data-target="#modal-delete-{{$a->id}}" data-toggle="modal" data-backdrop="false">
        <button class="btn btn-danger" role="button"><h6>Eliminar</h6></button>
      </a>
  </div>
  </div>


  <hr style="border:10px; background: #FFF;">
 @include('productos.modal')
    @endforeach  

     <div class="row justify-content-center">
    {{ $productos->render()}}  
  </div>

<div class="row" style="text-align: center;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5"> 

            <div class="form-group mb" style="margin-bottom: 50px;">

                <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6> Regresar</h6></a>

            </div>

        </div>
</div>

</div>



 @push('scripts')
 
 @endpush
@endsection