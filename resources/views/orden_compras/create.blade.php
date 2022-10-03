@extends ('layouts.users')

@section ('content')


<div class="container mt-5">

    <div class="row justify-content-center mb-2" >
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
            <h2 class="font-weight-bold" style="margin-top: 50px;">
                Orden de pedido
            </h2>    
        </div>
    </div>

</div>

        {!! Form::open(array('url'=>'orden_compras', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}

<div class="container-fluid" style="background-color: #968F8F">

    <div class="row justify-content-center">
        <h6 class="mt-3 text-white" style="color: #FFF;">Productos del pedido</h6> 
    </div>

    @foreach(Cart::content() as $c)
    <div class="row mt-5">
        <div class="col-lg-2 col-md-2 col-sm-12"></div>      
        <div class="col-lg-2 col-md-2 col-sm-12 text-center"> 
           <img src="{{asset('img/'.$c->options->img)}}" class="card-img-top mr-4" alt="..." style="width: 150px;">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">        
           <h6 class="text-center" style="color: #FFF;">{{$c->name}}</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
           <h6 class="text-center" style="color: #FFF;">cantidad:<span class="ml-3">{{$c->qty}}</span></h6>  
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
           <h6 style="color: #FFFFFF">Precio $: {{formato_Numero($c->price * $c->qty)}}</h6>
          
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12"></div>   
    </div>
    @endforeach

    <div class="row mt-3 justify-content-center">
        <h6 class="mt-3" style="color: #FFF;">Datos del pedido</h6> 
    </div>
    <div class="row mt-3 justify-content-center">

    <div class="col-lg-6 col-md-6 col-sm-12"> 
        <div class="input-group input-group-sm">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
          </div>
          <input type="text" class="form-control" name="nombre" value="{{Auth::user()->name}}">
        </div>

        <div class="input-group input-group-sm">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Cédula o rif</span>
          </div>
          <input type="text" class="form-control" name="ci" value="{{Auth::user()->cedula_rif}}">
        </div>

        <div class="input-group input-group-sm">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Teléfono</span>
          </div>
          <input type="text" class="form-control" name="tlf" value="{{Auth::user()->telefono}}">
        </div>
        

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">Dirección</span>
          </div>
          <textarea class="form-control" name="direccion" aria-label="With textarea">{{Auth::user()->direccion}}</textarea>  
        </div>

         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Forma de pago</label>
          </div>
          <select class="custom-select" name="forma_pago" id="inputGroupSelect01">
            <option value="Zelle">Zelle</option>
            <option value="Paypal">Paypal</option>
            <option value="A convenir">A convenir</option>
          </select>
        </div>
       
   </div>

   

        
</div>

<input type="hidden" name="usuario_id" value="{{Auth::user()->id}}">

 <div class="row justify-content-center">
        <h4 class="text-white">Total $: {{Cart::total()}}</h4> 

     
    </div>

    <div class="row justify-content-center">
        <p style="color: #FFF;text-align: justify;">"NOTA: El despacho en la zona de Caracas tiene un costo de 5$, para otras zonas debe consultar el precio" </p>      
    </div>


        <div class="row mt-5 mb-5">
      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group" style="text-align: center;">

                    <button type="submit" class="btn btn-danger"><h6>Finalizar</h6></button>

                </div>

            </div>
        </div>  

</div>              

        {{Form::token()}}
@push('scripts')



@endpush


@endsection
