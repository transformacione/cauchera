<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Hash;
use App\Mail\OlvidarPasswordMail;
use Illuminate\Support\Str;
use App\General;

class UsuarioController extends Controller
{
    public function index(){

        if(Auth::user()->rol == 'Gerente'){

        $usuarios = User::orderBy('id','asc')->paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('usuarios.index', compact('usuarios','cantidad_carrito','inicio'));

        }else{
            return Redirect::to('home');
        }

        
    }
    
    public function edit($id)

    { 
        if((Auth::user()->id) == $id or (Auth::user()->rol)== 'Gerente'){
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

         $usuarios = User::findOrFail($id);	
    	   		

         return view('usuarios.edit',compact('usuarios','cantidad_carrito','inicio'));

         }else{
            return Redirect::to('home');

        }

   }
	public function update(UsuarioRequest $request, $id)

    { 

				if(Auth::user()->rol != 'Cliente'){

                $users=User::findOrFail($id);

                $input = $request->all();

                $users->fill($input)->save();               

                          

                $users->save();                    

            }else{
                

                $users=User::findOrFail($id);

                    $input = $request->all();

                    $users->fill($input)->save();

                    $users->rol = 'Cliente';

                                      

                    $users->save(); 

            }     


                    


        if (Auth::user()->rol != 'Cliente') {

            return Redirect::to('usuarios');
                      
        }else{

            return Redirect::to('home');

        }       
 
        

       
    }

     public function create()

    {        
        if(Auth::user()->rol == 'Gerente'){
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('usuarios.create', compact('cantidad_carrito','inicio'));

        }else{
            return Redirect::to('home');
        }
    }

    public function store(UsuarioRequest $request)

    {   

                    $users=new User($request->all());
                    $users->password = Hash::make($request->get('password'));                             

                     $users->save();             

                    return Redirect::to('usuarios');                
        
    }

    public function destroy($id)

    {  
         if(Auth::user()->rol == 'Gerente'){
            
       $usuarios=User::findOrFail($id);

       $usuarios->delete();

         return Redirect::to('usuarios');

        }else{
            return Redirect::to('home');
        }

    }

  public function nuevo(Request $request)
    {
          
        $nuevo = $request->get('nuevo');

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('usuarios.usuario_nuevo', compact('nuevo','cantidad_carrito','inicio'));

    }
 
    public function cambio_pass($id)
    {  


        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        if((Auth::user()->id) == $id or (Auth::user()->rol)== 'Gerente'){

        $usuarios=User::findOrFail($id);
        $inicio = General::findOrFail(1);
        return view('usuarios.cambio_pass', compact('usuarios','inicio', 'cantidad_carrito'));

        }else{
            return Redirect::to('home');
        }
    }    

    public function actualizar_pass(Request $request)
    {

        $usuarios=User::findOrFail($request->get('id'));

        $usuarios->password = Hash::make($request->get('password'));
        
        $usuarios->save();

        return Redirect::to('usuarios/'.$usuarios->id.'/edit');

    }

    public function pass_lost()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('usuarios.pass_lost', compact('cantidad_carrito','inicio'));

    }

    public function pass_lost_email(Request $request)
    {

        $email = $request->get('email');
        $password = Str::random(8);


         $usuarios=User::where('email','=',$email)->get();

         if (count($usuarios) > 0) {

            $user=User::findOrFail($usuarios[0]->id);

            $user->password = Hash::make($password);

            $user->save();

            $details = [

                'password' => $password,                  

            ];

            \Mail::to($email)->send(new OlvidarPasswordMail($details)); 

            $cantidad_carrito = 0;
            foreach(Cart::content() as $c){
            $cantidad_carrito += $c->qty;
            }             
            $existe = 'Si';
            $inicio = General::findOrFail(1);
            return view('auth.login', compact('cantidad_carrito','inicio','existe'));
            
        }else{
            $cantidad_carrito = 0;
            foreach(Cart::content() as $c){
            $cantidad_carrito += $c->qty;
            }             
            $existe = 'No';
            $inicio = General::findOrFail(1);
            return view('auth.login', compact('cantidad_carrito','inicio','existe'));
        } 

    }


    public function pass_lost_clientes()
    {

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('usuarios.pass_lost_clientes', compact('cantidad_carrito','inicio'));

    }

    public function pass_lost_email_clientes(Request $request)
    {

        $email = $request->get('email');
        $password = Str::random(8);


         $usuarios=User::where('email','=',$email)->get();

         if (count($usuarios) > 0) {

            $user=User::findOrFail($usuarios[0]->id);

            $user->password = Hash::make($password);

            $user->save();

            $details = [

                'password' => $password,                  

            ];

            \Mail::to($email)->send(new OlvidarPasswordMail($details)); 

            $cantidad_carrito = 0;
            foreach(Cart::content() as $c){
            $cantidad_carrito += $c->qty;
            }             
            $existe = 'Si';
            $inicio = General::findOrFail(1);
            $status=' ';
            return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','existe','status'));
            
        }else{
            $cantidad_carrito = 0;
            foreach(Cart::content() as $c){
            $cantidad_carrito += $c->qty;
            }             
            $existe = 'No';
            $inicio = General::findOrFail(1);
            $status=' ';
            return view('orden_compras.ya_he_comprado', compact('cantidad_carrito','inicio','existe','status'));
        } 

    }
      
}