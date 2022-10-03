@extends('layouts.users')

@section('content')

<div class="row mt-5">
    
    <div class="col-12 text-center">
      <h2>Mi Cuenta</h2>
  </div>

</div>

<div class="row">

        @if(Auth::user()->rol == 'Gerente')  
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
      <div class="col-lg-6 col-md-6 col-sm-12 mt-3">

        <div class="row justify-content-center">
            <img src="{{asset('img/usuarios.png')}}" alt="" style="width: 50px;">
            <a href="{{url('usuarios')}}" class=" ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Usuarios</h5></a>             
        </div>
        
        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/pedidos.png')}}" alt="" style="width: 50px;">
            <a href="{{url('orden_compras')}}" class=" ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Pedidos</h5></a>             
        </div>

        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/cauchos.png')}}" alt="" style="width: 50px;">
            <a href="{{url('productos')}}" class=" ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Cauchos y Accesorios</h5></a>             
        </div>        

        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/servicios.png')}}" alt="" style="width: 50px;">
            <a href="{{url('servicios')}}" class="ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Servicio</h5></a>             
        </div>

        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/mensajes.png')}}" alt="" style="width: 50px;">
            <a href="{{url('mensajes')}}" class="ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Mensajes</h5></a>             
        </div>

        <div class="row justify-content-center mt-4 mb-5">
            <img src="{{asset('img/casa.png')}}" alt="" style="width: 50px;">
            <a href="{{URL::action('GeneralController@edit',1)}}" class="ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Configuración</h5></a>             
        </div>             
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
          @else
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
      <div class="col-lg-6 col-md-6 col-sm-12 mt-3">

        <div class="row justify-content-center">
            <img src="{{asset('img/usuarios.png')}}" alt="" style="width: 50px;">
            <a href="{{URL::action('UsuarioController@edit',Auth::user()->id)}}" class=" ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Editar Perfil</h5></a>             
        </div>
        
        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/pedidos.png')}}" alt="" style="width: 50px;">
            <a href="{{url('orden_compras')}}" class=" ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Pedidos</h5></a>             
        </div>


        <div class="row justify-content-center mt-4">
            <img src="{{asset('img/mensajes.png')}}" alt="" style="width: 50px;">
            <a href="{{url('mensajes')}}" class="ml-2 btn btn-danger btn-block" style="width: 80%;"><h5>Mensajes</h5></a>             
        </div>
             
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12"></div>
        @endif
</div>


@endsection
