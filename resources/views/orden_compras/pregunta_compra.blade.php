@extends ('layouts.users')

@section ('content')

@include('css.input_select_center_bg')

<div class="row justify-content-center mt-5">
    <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="margin-top: 50px;">
          <h2 class="font-weight-bold">
            Carrito de Compras
        </h2>    
    </div>
</div>

<div class="row ml-2">
      <img src="{{asset('img/10.png')}}" alt="" style="width: 50px;">
          <h2 class="ml-2">
            Recibo de Pago
        </h2>    
</div>


    

   <div class="row" style="background-color: #968F8F">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-center mt-5">
      <div class="form-group">
        <a href="{{url('primera_vez')}}" class="btn btn-danger" style="width: 60%;"><h6>Primera vez que compro</h6></a>
      </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12"></div>  
</div>

<div class="row"style="background-color: #968F8F">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-5">
      <div class="form-group">
          <a href="{{url('ya_he_comprado')}}" class="btn btn-danger" style="width: 60%;"><h6>Ya he comprado</h6></a>
      </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>


@push('scripts')



@endpush


@endsection
