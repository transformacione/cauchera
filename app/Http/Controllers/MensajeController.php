<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MensajeRequest;
use App\Mensaje;
use Cart;
use DB;
use App\General;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MensajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
        if(Auth::user()->rol == 'Gerente'){

            $mensajes = Mensaje::orderBy('status','asc')->paginate(20);

        }else{

            $mensajes = Mensaje::where('de','=',Auth::id())->orWhere('para','=',Auth::id())->orderBy('status','asc')->paginate(20);

        }

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);
    	


        return view('mensajes.index', compact('mensajes','cantidad_carrito','inicio'));
    }

    public function edit($id)

    {   
        $mensajes=Mensaje::findOrFail($id);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);

        if(Auth::id() == $mensajes->de or Auth::id() == $mensajes->de or Auth::user()->rol == 'Gerente'){

            return view('mensajes.edit', compact('mensajes','cantidad_carrito','inicio'));

        }else{

          return Redirect::to('home');

        }
     
         

        }

  public function update(MensajeRequest $request, $id)
    {
           

                    $mensajes=Mensaje::findOrFail($id);

        			     $mensajes->status = 'Leído';

                    $user = Auth::user()->name;
                    $mensajes->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $mensajes->fecha_edicion=$date->toDateTimeString();               

                   

                    $mensajes->save(); 


        return Redirect::to('mensajes');


    }    

     public function create()
    {          

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        } 
        $inicio = General::findOrFail(1);

        return view('mensajes.create', compact('cantidad_carrito','inicio'));

    }


     public function store(MensajeRequest $request)
    {

     

                    $mensajes=new Mensaje($request->all());

                    if(Auth::user()->rol == 'Gerente'){
                       $mensajes->de = 1; 
                    }else{
                       $mensajes->de = Auth::id();  
                       $mensajes->para = 1; 
                    }

                     $user = Auth::user()->name;
                     $mensajes->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $mensajes->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $mensajes->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $mensajes->fecha_edicion=$date->toDateTimeString();        

                     $mensajes->save();



        return Redirect::to('mensajes');
    }

    public function destroy($id)

    {  

       $mensajes=Mensaje::findOrFail($id);

       if(Auth::user()->rol == 'Gerente'){

            $mensajes->delete();

         return Redirect::to('mensajes');

        }else{

          return Redirect::to('home');

        }
     

       

    }

public function show($id){

        $mensajes=Mensaje::findOrFail($id);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        if(Auth::id() == $mensajes->de or Auth::id() == $mensajes->de or Auth::user()->rol == 'Gerente'){

            return view('mensajes.show', compact('mensajes','cantidad_carrito','inicio'));

        }else{

          return Redirect::to('home');

        }
            
    }

    public function status($id){

        $mensajes=Mensaje::findOrFail($id);

       

        if(Auth::user()->rol == 'Gerente'){

            $mensajes->status = 'Leído';

            $user = Auth::user()->name;
            $mensajes->usuario_editor=$user;
            $date = Carbon::now('America/Caracas');
            $mensajes->fecha_edicion=$date->toDateTimeString();               



            $mensajes->save(); 
            return Redirect::to('mensajes');

        }else{

          return Redirect::to('home');

      }
            
    }
}
