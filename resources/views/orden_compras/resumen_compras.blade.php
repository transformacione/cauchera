@extends ('layouts.users')

@section ('content')


<div class="container mt-5 mb-5">
            <div class="jumbotron jumbotron-fluid" style="margin-top: -70px;">
              <div class="container" style="text-align: center;">
                <h2>{{ __('Carrito de compras') }}</h2>

            </div>
        </div>
<h4>Icono - Recibo de Pago</h4>
<div class="container" style="background-color: #968F8F; padding: 20px;">
        {!! Form::open(array('url'=>'recibo_pago', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}

        {{Form::token()}}


        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF">Sub Total:</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF">Bs. IVA::</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF">Flete:</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

   

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h5 style="color: #FFFFFF">TOTAL:</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
               <button>
                   <h5 style="color: #968F8F">Adjuntar pago</h5>
               </button> 
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 mb-5"></div>
        </div>

        </div> 

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">

        <div class="form-group" style="text-align: center;">

            <button class="btn btn-danger" type="submit">Pagar</button>

        </div>

    </div>

    {{ Form::close() }}
</div>
</div>                  
</div>
@push('scripts')



@endpush


@endsection
