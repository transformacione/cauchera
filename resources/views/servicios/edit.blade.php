@extends ('layouts.users')

@section ('content')

@include ('css.input_select_center_bg')

<div class="row justify-content-center mt-5 mb-2">
  <img src="{{asset('img/servicios.png')}}" alt="" style="width: 50px;">
  <h2 class="ml-2">
    Servicios
</h2>    
</div>

{!! Form::model($servicios, ['method'=>'PATCH','route'=>['servicios.update',$servicios->id],'files'=>'true']) !!}

{{Form::token()}}        
  
<div class="container-fluid" style="background-color: #968F8F">
    
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">

        <div class="input-group mt-3">
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre del Producto" value="{{$servicios->nombre}}">
            @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>

  <div class="row mt-3 text-center">
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">

        <div class="form-group row">

            <textarea class=" @error('descripcion') is-invalid @enderror" type="text" name="descripcion" id="descripcion" placeholder="Descripción" style="width: 100%;">{{$servicios->descripcion}}</textarea>

            @error('descripcion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>

<div class="row justify-content-center">
    
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <h4 class="text-white">Imagen (ancho 500px, altura 170px)</h4>

        <div class="input-group mb-3 justify-content-center">
              <img src="{{asset('img/'.$servicios->imagen)}}" alt="" width="150" height="150">
              <input type="file" name="imagen" class="form-control ml-2 @error('imagen') is-invalid @enderror" id="imagen" placeholder="" value="{{$servicios->imagen}}" style="background-color: #FFF; color: #968F8F;">
              @error('imagen')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>

<div class="row justify-content-center">
  
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
    <div class="col-lg-4 col-md-4 col-sm-12">
          <h4 class="text-white">Icono (170px)</h4>

        <div class="input-group mb-3 justify-content-center">
              <img src="{{asset('img/'.$servicios->icono)}}" alt="" width="150" height="150">
              <input type="file" name="icono" class="form-control ml-2 mb-5 @error('icono') is-invalid @enderror" id="icono" placeholder="" value="{{$servicios->icono}}" style="background-color: #FFF; color: #968F8F;">
              @error('icono')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12"></div>
</div>
   

</div>    


</div>

    <div class="row mt-2 mb-5">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="form-group text-center">

                <button class="btn btn-danger" type="submit"><h6>Guardar</h6></button>

                <a class="btn btn-danger" href="{{url('servicios')}}" role="button"><h6>Regresar</h6></a>
            </div>

        </div>

        {{ Form::close() }}

    </div>



 @push('scripts')
 
 @endpush
@endsection