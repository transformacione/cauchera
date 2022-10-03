@extends ('layouts.users')

@section ('content')

<div class="container-fluid mt-5 mb-5">

 <div class="jumbotron jumbotron-fluid" style="background-color: #FFFFFF; margin-top: -150px">
  <div class="container" style="text-align: center;">
    <h2>{{ __('Carrito de Compras') }}</h2>
  </div>
</div>

<div class="row">
  Carrito <img src="..." class="card-img-top" alt="...">
</div>
<div class="row"  style="background-color: #968F8F">
  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <img src="..." class="card-img-top" alt="...">
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <h6>Nombre del Producto</h6>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <button style="background-color: #d9534f; width: 40px;"><h5 style="color: #FFFFFF">-</h5></button> X 
    <button style="background-color: #d9534f; width: 40px;" ><h5 style="color: #FFFFFF">+</h5></button>
  </div>

  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <h6>Precio $</h6>
    <h6>#####</h6>
  </div>
  
  <div>
    
          <a href="" data-target="#modal-delete-{{}}" data-toggle="modal" data-backdrop="false">
          <button class="btn bg-danger mr-5" data-toggle="tooltip" data-placement="top" title="Eliminar Producto">
            <i class="fas fa-trash text-white"></i>
          </button>
        </a>
  </div>


 

</div>
<div class="row" style="text-align: center; margin-top: 10px;">
  
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="form-group">
            <button class="btn btn-danger" type="submit" style="text-align: center;"><h6>Guardar</h6></button>

          </div>

        </div>
</div>

</div>

 @push('scripts')
 
 @endpush
@endsection