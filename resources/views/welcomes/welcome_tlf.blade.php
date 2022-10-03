<div class="d-md-none">
  
<div class="container-fluid fixed-top" style="z-index: 10; background-color: #FFF">

<div class="row"> 

  <div style="width: 40%;"> 
   
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('img/'.$inicio->logo)}}" style="max-width: 120px;margin-top:20px;">
      </a> 

  </div>



  <div class="" style="width: 30%;background: white;"> 
   
      <h6 class="text-contactanos mt-2">  Contáctanos:</h6>
      <h6 class="text-contactanos">{{$inicio->contactanos}}</h6>
                   

  </div>         

  <div  style="width: 30%;background: white;text-align: right;"> 

      <a class="navbar-brand" href="{{url('carrito')}}">
        <img src="{{asset('img/'.$inicio->icono_carrito)}}" style="max-width: 100px; max-height: 70px;">
          <span class="badge badge-light">{{$cantidad_carrito}}</span>
          <span class="sr-only">unread messages</span>
      </a> 

  </div>

</div>

<div class="row">

<nav class="navbar navbar-expand-lg navbar-light" style="background:  #f9f800; width: 100%;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>  &nbsp; MENÚ
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}"><h5 style="color: #000">INICIO</h5><span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('cauchos')}}"><h5 style="color: #000">CAUCHOS</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('accesorios')}}"><h5 style="color: #000">ACCESORIOS Y AUTOPARTES</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('servicios_ver')}}"><h5 style="color: #000">SERVICIOS</h5></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('login')}}"><h5 style="color: #000">MI CUENTA</h5></a>
      </li>  

      <li class="nav-item">
        <a class="nav-link" href="{{url('carrito')}}"><h5 style="color: #000">IR AL CARRITO</h5>

        </a>
      </li>

      @if(Auth::check())
 
       <li class="nav-item">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><h5 style="color:#000; margin-top: 5px;">{{ __('SALIR') }}</h5>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      </li>

      @endif

    </ul>
  </div>
  
</nav>
</div>
</div>

<div class="container-fluid baner_tel" style="margin-top:100px;">
  

  
</div>  

<div class="container-fluid mt-5 mb-5">




    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item text-center active" data-interval="100">

        <?php
        $conteer='solo';
        ?>

        <img src="{{asset('img/'.$producto_ultimo->imagen_1)}}" class="d-block" alt="" width="500" height="300" data-toggle="modal" data-target="#modal_accesorios_solo">

          <div class="card-body">
          <h5 class="card-title">{{$producto_ultimo->nombre}}</h5>
        
        <ul class="list-group">
                 
          <li class="list-group-item" style="border-bottom: none;border-style:none;">Precio $: {{formato_numero($producto_ultimo->precio_dolar)}}</li>
          
          <li class="list-group-item" style="border-style:none;">Inventario Disponible: {{$producto_ultimo->inventario}}</li>        
        </ul>

        {!! Form::open(array('url'=>'agregar_carrito_cauchos', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_'.$conteer, 'files'=>'true')) !!}

        {{Form::token()}} 

        <!--  codigo para controlar la cantidad de productos -->

        <div class="input-group justify-content-center mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="incrementar_{{$conteer}}" data="{{$conteer}}">                  
              <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_{{$conteer}}"></i>                
            </span>
          </div>
          <input type="number" class="text-center" name="cantidad" id="cantidad_{{$conteer}}"  value="0" style="width: 60px;" data="{{$conteer}}">
          <input type="hidden" id="producto_id_{{$conteer}}" name="producto_id"  value="{{$producto_ultimo->id}}">
          <input type="hidden" id="inventario_{{$conteer}}" name="inventario"  value="{{$producto_ultimo->inventario}}">
          <input type="hidden" id="precio_dolar{{$conteer}}" name="precio_dolar"  value="{{$producto_ultimo->precio_dolar}}">

          <div class="input-group-append">
            <span class="input-group-text" id="disminuir_{{$conteer}}" data="{{$conteer}}">                   
              <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
            </span>
          </div>
        </div>

      </div>

      <div class="card-body" style="text-align: center;">
        <button type="button" class="btn btn-danger" id="add_carrito_{{$conteer}}" data-container="body" data-toggle="popover" data-placement="bottom" data-content="agrega un producto." data="{{$conteer}}">
        Agregar al carrito
        <span class="badge badge-light">{{$cantidad_carrito}}</span>
          <span class="sr-only">unread messages</span>
      </button>
      </div>



      {{Form::close()}} 
       
      </div> 

             <?php $conte = 0; ?>
      @foreach($productos as $p)
      <div class="carousel-item text-center">

       
        <img src="{{asset('img/'.$p->imagen_1)}}" class="d-block" alt="" width="500" height="300" data-toggle="modal" data-target="#modal_accesorios_tlf_{{$conte}}">


          <div class="card-body">
          <h5 class="card-title">{{$p->nombre}}</h5>
        
        <ul class="list-group">
                 
          <li class="list-group-item" style="border-bottom: none;border-style:none;">Precio $: {{formato_numero($p->precio_dolar)}}</li>
          
          <li class="list-group-item" style="border-style:none;">Inventario Disponible: {{$p->inventario}}</li>        
        </ul>

        {!! Form::open(array('url'=>'agregar_carrito_cauchos', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_tlf_'.$conte, 'files'=>'true')) !!}

        {{Form::token()}} 

        <!--  codigo para controlar la cantidad de productos -->

        <div class="input-group justify-content-center mb-2">
          <div class="input-group-prepend">
            <span class="input-group-text" id="incrementar_tlf_{{$conte}}" data="{{$conte}}">                  
              <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_tlf_{{$conte}}"></i>                
            </span>
          </div>
          <input type="number" class="text-center" name="cantidad" id="cantidad_tlf_{{$conte}}"  value="0" style="width: 60px;" data="{{$conte}}">
          <input type="hidden" id="producto_id_tlf_{{$conte}}" name="producto_id"  value="{{$p->id}}">
          <input type="hidden" id="inventario_tlf_{{$conte}}" name="inventario"  value="{{$p->inventario}}">
          <input type="hidden" id="precio_dolar_tlf_{{$conte}}" name="precio_dolar"  value="{{$p->precio_dolar}}">

          <div class="input-group-append">
            <span class="input-group-text" id="disminuir_tlf_{{$conte}}" data="{{$conte}}">                   
              <i class="fas fa-minus text-danger" style="color: #4169E1;"></i>
            </span>
          </div>
        </div>

      </div>

      <div class="card-body" style="text-align: center;">
        <button type="button" class="btn btn-danger" id="add_carrito_tlf_{{$conte}}" data-container="body" data-toggle="popover" data-placement="bottom" data-content="agrega un producto." data="{{$conte}}">
        Agregar al carrito 
        <span class="badge badge-light">{{$cantidad_carrito}}</span>
          <span class="sr-only">unread messages</span>
      </button>
      </div>



      {{Form::close()}} 
      </div>   


          <?php  $conte = $conte + 1;  ?>
      @endforeach

    
 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black;"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black;"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


      
    




      
   
                
       


 




   <?php  $acce =0?>   
    @foreach($productos as $p)

      

@include('productos.modal_accesorios_tablet')


         <?php  $acce = $acce + 1;  ?>
    @endforeach



      
  
  
</div>

<div class="container-fluid" style="background-color: #968F8F; margin-bottom: 50px;">
  <div class="row">
    @foreach($servicios as $s)
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card" style="width: 100%; height: 100%; background-color: #968F8F;">
        <div class="text-center">
        <img src="{{asset('img/'.$s->icono)}}" alt="" style="width: 30%; height: 170px;">
        </div>
        <div class="card-body text-center">
          <h5 class="card-title text-white"> <strong>{{$s->nombre}}</strong></h5>
          <p class="card-text justify-content-center text-white">{{$s->descripcion}}</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>

<div class="container-fluid">
  <div class="row justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31386.374127109633!2d-66.89525862376036!3d10.47725532192602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d10.4625685!2d-66.8677563!4m5!1s0x8c2a5909c93b2389%3A0xc3fac215877f0e55!2sCauchera%20Juan%20Cauchos%202018%20c.a%2C%20Avenida%20La%20Rambla%2C%20Caracas%201041%2C%20Distrito%20Capital!3m2!1d10.4819383!2d-66.90130599999999!5e0!3m2!1ses-419!2sve!4v1600222902268!5m2!1ses-419!2sve" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>

   <div class="container-fluid fixed-bottom" style="background: #FFF;z-index: 1;">

  
  <div class="row justify-content-center">

    <span>
      <h6 class="mt-3 tdr" style="font-size: 15px;">Todos los derechos reservados</h6>    
    </span>

        <h6 class="mt-3 ml-5">Síguenos:</h6>  
    <span class="ml-1 mt-1 mb-1">

      @if($inicio->pregunta_twitter == 'SI')

      <a target="_blank" href="{{$inicio->twitter}}"><img src="{{asset('img/twitter.png')}}"  height="40"alt=""></a>

      @endif

      @if($inicio->pregunta_facebook == 'SI')

      <a target="_blank" href="{{$inicio->facebook}}"><img src="{{asset('img/facebook.png')}}"  height="40"alt=""></a> 

      @endif


      @if($inicio->pregunta_instagram == 'SI')

      <a target="_blank" href="{{$inicio->instagram}}"><img src="{{asset('img/instagram.png')}}" height="40" alt=""></a> 

      @endif

      @if($inicio->pregunta_tiktok == 'SI')

      <a target="_blank" href="{{$inicio->tiktok}}"><img src="{{asset('img/tik-tok.png')}}"  height="40"alt=""></a> 

      @endif

      @if($inicio->pregunta_whatsapp == 'SI')

       <a target="_blank" href="{{$inicio->whatsapp}}"><img src="{{asset('img/whatsapp.png')}}"  height="40"alt=""></a>

      @endif

      
    </span>


  </div>


</div>
</div>
