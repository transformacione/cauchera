@extends ('layouts.users')

@section ('content')


<div class="container mb-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center">
                    {{ __('Editar Inicio') }} 
                </div>

                <div class="card-body">
                    {!! Form::model($inicio, ['method'=>'PATCH','route'=>['inicio.update',$inicio->id],'files'=>'true']) !!}

                    {{Form::token()}}

                    <input type="hidden" name="id" value="{{$inicio->id}}">

                    <div class="form-group row">

                        <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                        <div class="col-md-6">

                            <input type="text" name="imagen" value="{{$inicio->imagen}}" class="form-control @error('imagen') is-invalid @enderror" id="imagen" placeholder="" />
                            @error('imagen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row">



                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" style="float: right;">Guardar</button>

                            </div>

                        </div>

                    </div>    


                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>


 @push('scripts')
 

 @endpush


@endsection
