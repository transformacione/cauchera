<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InicioRequest;
use App\Http\Requests\CrearUsuarioRequest;
use App\General;
use App\User;
use App\Servicio;
use DB;
use App\Producto;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cart;



class InicioController extends Controller
{

    public function index()
    {
    	$inicio = General::findOrFail(1);
        $productos = Producto::where('destacado', '=', 'Si')->orderBy('id','asc')->get();
        $producto_ultimo = Producto::where('destacado', '=', 'Si')->orderBy('id','desc')->first(); 
        $servicios = Servicio::orderBy('id','desc')->get(); 
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        return view('welcome', compact('inicio','cantidad_carrito', 'servicios','productos','producto_ultimo'));
    }

    public function cauchos()
    {  
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);
        $productos = Producto::where('categoria', '=', 'cauchos')->orderBy('id','desc')->paginate(9);   

        $producto_marca = collect(Producto::orderBy('marca','asc')->pluck('marca'));
        $marca = $producto_marca->unique();
        $marca->values()->all();

        $producto_ancho = collect(Producto::orderBy('ancho','asc')->pluck('ancho'));
        $ancho = $producto_ancho->unique();
        $ancho->values()->all();

        $producto_diametro = collect(Producto::orderBy('diametro','asc')->pluck('diametro'));
        $diametro = $producto_diametro->unique();
        $diametro->values()->all();

        $producto_perfil = collect(Producto::orderBy('perfil','asc')->pluck('perfil'));
        $perfil = $producto_perfil->unique();
        $perfil->values()->all();


        $obtener_marca = 'No';
        $obtener_ancho = 'No';
        $obtener_perfil = 'No';
        $obtener_diametro = 'No';



        return view('productos.cauchos', compact('productos','cantidad_carrito','inicio','marca','diametro','ancho','perfil','obtener_marca','obtener_ancho','obtener_perfil','obtener_diametro'));
    }  

	public function accesorios()

    {      
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $productos = Producto::where('categoria', '=', 'accesorios')->orderBy('id','desc')->paginate(9); 

        $obtener = '';
        return view('productos.accesorios', compact('productos','cantidad_carrito','inicio','obtener'));
    } 

    public function servicios_ver(){

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $servicios = Servicio::orderBy('id', 'asc')->get();
        return view('servicios.show', compact('servicios','cantidad_carrito','inicio'));
            
    }

  public function pregunta()
    { 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('orden_compras.pregunta_compra', compact('cantidad_carrito','inicio'));
    }  

  public function ya_he_comprado()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        if(Auth::check()){

             return view('orden_compras.create',compact('cantidad_carrito','inicio'));

        }else{
        
        $existe= ' ';
        $status= ' ';

        return view('orden_compras.ya_he_comprado',compact('cantidad_carrito','inicio','existe','status'));

        }
    }

public function primera_vez()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

         if(Auth::check()){

             return view('orden_compras.create',compact('cantidad_carrito','inicio'));

        }else{

        return view('orden_compras.primera_vez', compact('cantidad_carrito','inicio'));

        }
    }

     public function login_cliente(Request $request){

        $email = $request->get('email'); 
        $user = User::where('email','=',$email)->get();      
        $password = $request->get('password'); 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }  
        $inicio = General::findOrFail(1);

        if((count($user) > 0)){     

           if (Hash::check($password, $user[0]->password)) { 

                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {       
                    
                return view('orden_compras.create', compact('cantidad_carrito','user','inicio'));  
                }       
            }else{
                $existe = ' ';
                $status = 'negado_password';   
                return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','status','existe'));
            }
        }else{
            $existe = ' ';
            $status = 'negado_email';   
            return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','status','existe'));

        }

    }

    public function crear_cliente(CrearUsuarioRequest $request){

         $users=new User($request->all());
         $users->password = Hash::make($request->get('password'));    
         $users->rol = 'Cliente';                          

        $users->save(); 

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }  
        $inicio = General::findOrFail(1); 

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {       
            
        return view('orden_compras.create', compact('cantidad_carrito','inicio'));  
        }else{
          return view('orden_compras.primera_vez', compact('cantidad_carrito','inicio'));  
        }          

            

    }

    public function buscar_cauchos(Request $request){

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $marca = $request->get('marca');
        $ancho = $request->get('ancho');
        $diametro = $request->get('diametro');
        $perfil = $request->get('perfil');

        if($marca == 'Elije una opción' or $marca == 'No'){
            $marca = '';
        }

        if($ancho == 'Elije una opción' or $ancho == 'No'){
            $ancho = '';
        }

        if($diametro == 'Elije una opción' or $diametro == 'No'){
            $diametro = '';
        }

        if($perfil == 'Elije una opción' or $perfil == 'No'){
            $perfil = '';
        }

        $productos = Producto::where('marca','LIKE',"%$marca%")
                            ->where('ancho','LIKE',"%$ancho%")
                            ->where('diametro','LIKE',"%$diametro%")
                            ->where('perfil','LIKE',"%$perfil%")
                            ->paginate(9);


        
        $producto_marca = collect(Producto::orderBy('marca','asc')->pluck('marca'));
        $marca = $producto_marca->unique();
        $marca->values()->all();

        $producto_ancho = collect(Producto::orderBy('ancho','asc')->pluck('ancho'));
        $ancho = $producto_ancho->unique();
        $ancho->values()->all();

        $producto_diametro = collect(Producto::orderBy('diametro','asc')->pluck('diametro'));
        $diametro = $producto_diametro->unique();
        $diametro->values()->all();

        $producto_perfil = collect(Producto::orderBy('perfil','asc')->pluck('perfil'));
        $perfil = $producto_perfil->unique();
        $perfil->values()->all();

        $obtener_marca = $request->get('marca');
        $obtener_ancho = $request->get('ancho');
        $obtener_perfil = $request->get('perfil');
        $obtener_diametro = $request->get('diametro');
        

        return view('productos.cauchos', compact('productos','cantidad_carrito','inicio','marca','ancho','diametro','perfil','obtener_marca','obtener_ancho','obtener_perfil','obtener_diametro'));

    }

    public function buscar_accesorios(Request $request){

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        $obtener=trim($request->get('buscar'));      

        $contenido = preg_split('/\s+/', $obtener, -1, PREG_SPLIT_NO_EMPTY); 

        $productos = Producto::where('categoria','LIKE','accesorios')->where(function ($q) use ($contenido) {
             foreach ($contenido as $value) {
           
               $q->orWhere('nombre', 'like', "%{$value}%");
               $q->orWhere('precio_dolar', 'like', "%{$value}%");
               $q->orWhere('descripcion', 'like', "%{$value}%");

             }
        })->paginate(9);

        return view('productos.accesorios', compact('productos','cantidad_carrito','inicio','obtener'));
    }

}


