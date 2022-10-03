<div class="d-md-none">
  
<div class="container-fluid fixed-top" style="z-index: 10; background-color: #FFF;">

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
    <span class="navbar-toggler-icon"></span> &nbsp; MENÚ
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

<div class="container-fluid" style="margin-top:150px;">
  
 @yield('content')
  
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
