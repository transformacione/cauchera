@extends ('layouts.users')

@section ('content')


  <div class="row justify-content-center mt-5">
    <img src="{{asset('img/mensajes.png')}}" alt="" style="width: 50px;margin-top: 50px;">
    <h2 class="ml-2" style="margin-top: 50px;">
      Mensajes
    </h2>    
  </div>

      {!! Form::model($mensajes, ['method'=>'PATCH','route'=>['mensajes.update',$mensajes->id],'files'=>'true']) !!}

        {{Form::token()}}

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

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

            <div class="form-group">

                <button class="btn btn-danger" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{url('mensajes')}}" role="button">Regresar</a>

            </div>

        </div>

        {{ Form::close() }}


    </div>





</div>

@push('scripts')

@endpush


@endsection
