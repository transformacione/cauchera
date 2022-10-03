@extends ('layouts.users')

@section ('content')


  <div class="row justify-content-center mt-5">
    <img src="{{asset('img/mensajes.png')}}" alt="" style="width: 50px;">
    <h2 class="ml-2">
      Mensajes
    </h2>    
  </div>

<div class="container mt-5 mb-5">
     

     <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

               <h4>{{$mensajes->asunto}}</h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

                <p style="text-align: justify;">{{$mensajes->mensaje}}</p>
            </div>
        </div>
    </div> 



    <div class="row justify-content-center mb-5">

        

  


                <a class="btn btn-danger" href="{{url('mensajes')}}" role="button"><h6>Regresar</h6></a>

           
    </div>





</div>

@push('scripts')

@endpush


@endsection
