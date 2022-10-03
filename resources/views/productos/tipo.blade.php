@extends ('layouts.users')

@section ('content')


        <div class="row justify-content-center mt-5 mb-2">      
          <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;">
          <h2 class="ml-2">
            Cauchos y Accesorios
          </h2> 
        </div>

        <div class="row justify-content-center" style="background-color: #968F8F"> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-5 mb-5">
                <div class="form-group">
                    <a href="{{URL::action('ProductoController@tipo','Cauchos')}}" class="ml-2 btn btn-danger" style="width: 100%;"><h5>Cauchos</h5></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div> 
        </div>

        <div class="row justify-content-center" style="background-color: #968F8F"> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="form-group">
                    <a href="{{URL::action('ProductoController@tipo','Accesorios')}}" class="ml-2 btn btn-danger" style="width: 100%;"><h5>Accesorios y Autopartes</h5></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
        </div>

       
  

        <div class="row mt-5">
      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="form-group" style="text-align: center;">

                    <a class="btn btn-danger" href="{{url('productos')}}" role="button"><h5>Regresar</h5></a>

                </div>

            </div>
        </div>                


@push('scripts')



@endpush


@endsection
