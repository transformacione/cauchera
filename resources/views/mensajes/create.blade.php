@extends ('layouts.users')

@section ('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
  
            <div class="jumbotron jumbotron-fluid" style="width: 50%;">
              
                    <h2 class="text-center">{{ __('Mensajes') }}</h2>

             
            </div>
  
    </div>

       {!! Form::open(array('url'=>'mensajes', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
     {{Form::token()}}

     <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

               <select name="para" style="width: 50%" class="form-control @error('asunto') is-invalid @enderror">
                @foreach($usuarios as $u)
                <option value="{{$u->id}}">{{$u->name}}-{{$u->email}}</option>
                @endforeach
                   
               </select>

                @error('para')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
     <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

                <input class="@error('asunto') is-invalid @enderror" type="text" name="asunto" rows="4" id="asunto" class="centerta" placeholder="Asunto" style="width: 50%;" >

                @error('asunto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="form-group row justify-content-center">

                <textarea class="@error('mensaje') is-invalid @enderror" type="text" name="mensaje" rows="4" id="mensaje" class="centerta" placeholder="Mensaje" style="width: 50%;"></textarea>

                @error('mensaje')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div> 



    <div class="row">

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <button class="btn btn-danger" type="submit" style="float: right;">Guardar</button>

            </div>

        </div>

        {{ Form::close() }}

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

            <div class="form-group">

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button">Regresar</a>

            </div>

        </div>
    </div>





</div>

@push('scripts')

@endpush


@endsection
