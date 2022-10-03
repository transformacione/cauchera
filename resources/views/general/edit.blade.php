@extends ('layouts.users')

@section ('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">

         
                
                <h2>Configuración</h2>


    </div>
        {!! Form::model($inicio, ['method'=>'PATCH','route'=>['general.update',$inicio->id],'files'=>'true']) !!}

        {{Form::token()}}

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="input-group mb-3 justify-content-center">
                    <div class="input-group-prepend">
                        <label for="ver_logo" class="mr-2">{{ __('Logo') }}</label>                    
                    </div>
                    <img src="{{asset('img/'.$inicio->logo)}}" height="100" width="100">
                </div>  
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label for="logo" class="mr-2">{{ __('Cargar logo (200px ancho máximo, altura 70px)') }}</label>                    
                </div>

                


                    <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" id="logo" class="centerip" placeholder="">
                    @error('logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> 

        </div> 

        <div class="row mt-3 justify-content-center">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3 justify-content-center">
                    <div class="input-group-prepend">
                        <label for="ver_banner" class="mr-2">{{ __('Banner(altura 480px, ancho 1280px)') }}</label>
                        
                    </div>
                    <img src="{{asset('img/'.$inicio->banner)}}" height="128" width="128">
                </div>  
            </div>
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3 justify-content-center">
                 <div class="input-group-prepend">
                        <label for="ver_banner" class="mr-2">{{ __('Cargar banner') }}</label>
                        
                    </div>
                


                    <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror" id="banner" class="centerip" placeholder="">
                    @error('banner')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div> 

        </div> 

        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12">   
                <div class="input-group mb-3 justify-content-center">
                  <div class="input-group-prepend">                    
                    <label for="pregunta_twitter" class="mr-2">{{ __('¿Agregar Twitter?') }}</label>
                </div>

                <select class="custom-select @error('pregunta_twitter') is-invalid @enderror" name="pregunta_twitter" id="pregunta_twitter">
                    <option value="{{$inicio->pregunta_twitter}}">{{$inicio->pregunta_twitter}}</option>
                    @if(($inicio->pregunta_twitter) != 'NO')
                    <option value="NO">NO</option>
                    @endif
                    @if(($inicio->pregunta_twitter) != 'SI')
                    <option value="SI">SI</option>
                    @endif

                </select>

                @error('pregunta_twitter')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
            </div>          
        </div>

    <div class="container mt-3" style="display: none;" id="activar_twitter">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="input-group mb-3 justify-content-center">
                    <div class="input-group-prepend">
                        <label for="twitter" class="mr-2">{{ __('twitter') }}</label>
                    </div>
                    <input type="text" name="twitter" class="form-control @error('twitter') is-invalid @enderror" id="twitter" placeholder="" value="{{$inicio->twitter}}" />
                    @error('twitter')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>   

        </div>             
    </div>
    <div class="row mt-5 justify-content-center">
     <div class="col-lg-6 col-md-6 col-sm-12">   
        <div class="input-group mb-3 justify-content-center">
          <div class="input-group-prepend">                    
            <label for="pregunta_instagram" class="mr-2">{{ __('¿Agregar Instagram?') }}</label>
        </div>

        <select class="custom-select @error('pregunta_instagram') is-invalid @enderror" name="pregunta_instagram" id="pregunta_instagram">
            <option value="{{$inicio->pregunta_instagram}}">{{$inicio->pregunta_instagram}}</option>
            @if(($inicio->pregunta_instagram) != 'NO')
            <option value="NO">NO</option>
            @endif
            @if(($inicio->pregunta_instagram) != 'SI')
            <option value="SI">SI</option>
            @endif

        </select>

        @error('pregunta_instagram')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>

<div class="container mt-3" style="display: none;" id="activar_instagram">

    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-group mb-3 justify-content-center">
                <div class="input-group-prepend">
                    <label for="instagram" class="mr-2">{{ __('Instagram') }}</label>
                </div>
                <input type="text" name="instagram" class="form-control @error('instagram') is-invalid @enderror" id="instagram" placeholder="" value="{{$inicio->instagram}}"/>
                @error('instagram')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

    </div>
</div>
<div class="row mt-5 justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12">   
        <div class="input-group mb-3 justify-content-center">
          <div class="input-group-prepend">                    
            <label for="pregunta_facebook" class="mr-2">{{ __('¿Agregar Facebook?') }}</label>
        </div>

        <select class="custom-select @error('pregunta_facebook') is-invalid @enderror" name="pregunta_facebook" id="pregunta_facebook">
            <option value="{{$inicio->pregunta_facebook}}">{{$inicio->pregunta_facebook}}</option>
            @if(($inicio->pregunta_facebook) != 'NO')
            <option value="NO">NO</option>
            @endif
            @if(($inicio->pregunta_facebook) != 'SI')
            <option value="SI">SI</option>
            @endif

        </select>

        @error('pregunta_facebook')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
</div>            

<div class="container mt-3" style="display: none;" id="activar_facebook">

    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-group mb-3 justify-content-center">
                <div class="input-group-prepend">
                    <label for="facebook" class="mr-2">{{ __('Facebook') }}</label>
                </div>
                <input type="text" name="facebook" class="form-control @error('facebook') is-invalid @enderror" id="facebook" placeholder="" value="{{$inicio->facebook}}"/>
                @error('facebook')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row mt-5 justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12">   
        <div class="input-group mb-3 justify-content-center">
          <div class="input-group-prepend">                    
            <label for="pregunta_whatsapp" class="mr-2">{{ __('¿Agregar Whatsapp?') }}</label>
        </div>

        <select class="custom-select @error('pregunta_whatsapp') is-invalid @enderror" name="pregunta_whatsapp" id="pregunta_whatsapp">
            <option value="{{$inicio->pregunta_whatsapp}}">{{$inicio->pregunta_whatsapp}}</option>
            @if(($inicio->pregunta_whatsapp) != 'NO')
            <option value="NO">NO</option>
            @endif
            @if(($inicio->pregunta_whatsapp) != 'SI')
            <option value="SI">SI</option>
            @endif

        </select>

        @error('pregunta_whatsapp')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>
</div>

<div class="container mt-3" style="display: none;" id="activar_whatsapp">

    <div class="row justify-content-center">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="input-group mb-3 justify-content-center">
            <div class="input-group-prepend">
                <label for="whatsapp" class="mr-2">{{ __('Whatsapp') }}</label>
            </div>
            <input type="text" name="whatsapp" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" placeholder="" value="{{$inicio->whatsapp}}"/>
            @error('whatsapp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    </div>

</div>

<div class="row mt-5 justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12">   
        <div class="input-group mb-3 justify-content-center">
          <div class="input-group-prepend">                    
            <label for="pregunta_tiktok" class="mr-2">{{ __('¿Agregar Tiktok?') }}</label>
        </div>

        <select class="custom-select @error('pregunta_tiktok') is-invalid @enderror" name="pregunta_tiktok" id="pregunta_tiktok">
            <option value="{{$inicio->pregunta_tiktok}}">{{$inicio->pregunta_tiktok}}</option>
            @if(($inicio->pregunta_tiktok) != 'NO')
            <option value="NO">NO</option>
            @endif
            @if(($inicio->pregunta_tiktok) != 'SI')
            <option value="SI">SI</option>
            @endif

        </select>

        @error('pregunta_tiktok')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    </div>
</div>

<div class="container mt-3" style="display: none;" id="activar_tiktok">

    <div class="row justify-content-center">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="input-group mb-3 justify-content-center">
            <div class="input-group-prepend">
                <label for="tiktok" class="mr-2">{{ __('Tiktok') }}</label>
            </div>
            <input type="text" name="tiktok" class="form-control @error('tiktok') is-invalid @enderror" id="tiktok" placeholder="" value="{{$inicio->tiktok}}"/>
            @error('tiktok')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    </div>

</div>

<div class="row mt-5 justify-content-center">
    
    <div class="col-lg-6 col-md-6 col-sm-12">   
        <div class="input-group mb-3 justify-content-center">
          <div class="input-group-prepend">                    
            <label for="pregunta_contactanos" class="mr-2">{{ __('¿Agregar Contáctanos?') }}</label>
        </div>

        <select class="custom-select @error('pregunta_contactanos') is-invalid @enderror" name="pregunta_contactanos" id="pregunta_contactanos">
            <option value="{{$inicio->pregunta_contactanos}}">{{$inicio->pregunta_contactanos}}</option>
            @if(($inicio->pregunta_contactanos) != 'NO')
            <option value="NO">NO</option>
            @endif
            @if(($inicio->pregunta_contactanos) != 'SI')
            <option value="SI">SI</option>
            @endif

        </select>

        @error('pregunta_contactanos')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

</div>

<div class="container mt-3" style="display: none;" id="activar_contactanos">

    <div class="row justify-content-center">

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="input-group mb-3 justify-content-center">
                <div class="input-group-prepend">
                    <label for="contactanos" class="mr-2">{{ __('Contáctanos') }}</label>
                </div>
                <input type="text" name="contactanos" class="form-control @error('contactanos') is-invalid @enderror" id="contactanos" placeholder="" value="{{$inicio->contactanos}}" />
                @error('contactanos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div> 

    </div>   

</div>

<div class="row mt-5 justify-content-center">

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="input-group mb-3 justify-content-center">
            <div class="input-group-prepend">
                <label for="icono_carrito" class="mr-2">{{ __('Icono Carrito') }}</label>
                
            </div>
            <img src="{{asset('img/'.$inicio->icono_carrito)}}" height="100" width="100">
        </div>  
    </div>
</div>
<div class="row mt-3 justify-content-center">
    <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="input-group mb-3 justify-content-center">
        <div class="input-group-prepend">
                <label for="icono_carrito" class="mr-2">{{ __('Cargar icono (max-ancho: 100px; max-altura: 70px)') }}</label>
                
            </div>
       


            <input type="file" name="icono_carrito" class="form-control @error('icono_carrito') is-invalid @enderror" id="icono_carrito" class="centerip" placeholder="">
            @error('icono_carrito')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div> 

</div>





<div class="row mt-5 mb-5 justify-content-center">



    <div class="form-group mr-5">

        <button class="btn btn-danger" type="submit" style="float: right;"><h6>Guardar</h6></button>

    </div>



    {{ Form::close() }}



    <div class="form-group">

        <a class="btn btn-danger" href="{{url('home')}}" role="button"><h6>Regresar</h6></a>

    </div>

</div>



</div>


@push('scripts')

@include('js.general')

@endpush


@endsection
