<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use App\Producto;
use App\General;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$productos = Producto::orderBy('categoria', 'desc')->paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);

        return view('productos.index', compact('productos','cantidad_carrito','inicio'));

    
    }

    public function edit($id)

    {   

         $productos=Producto::findOrFail($id);

         $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);
     
         return view('productos.edit', compact('productos','cantidad_carrito','inicio'));

        }

  public function update(ProductoRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $productos=Producto::findOrFail($id);

        			$input = $request->all();

        			$productos->fill($input)->save();


                    $user = Auth::user()->name;
                    $productos->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $productos->fecha_edicion=$date->toDateTimeString();               

                    if ($request->hasFile('imagen_1')){
                    $file=$request->file('imagen_1');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_1=$name;

                    } 
                    if ($request->hasFile('imagen_2')){
                    $file=$request->file('imagen_2');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_2=$name;

                    }                                         
                    if ($request->hasFile('imagen_3')){
                    $file=$request->file('imagen_3');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_3=$name;

                    }                    

                    $productos->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('productos');


    }    

     public function create()
    {           

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);

        return view('productos.tipo', compact('cantidad_carrito','inicio'));

        }


     public function store(ProductoRequest $request)
    {



                    $productos=new Producto($request->all());

                     $user = Auth::user()->name;
                     $productos->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $productos->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $productos->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $productos->fecha_edicion=$date->toDateTimeString();        

                    if ($request->hasFile('imagen_1')){
                    $file=$request->file('imagen_1');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_1=$name;

                    } 
                    if ($request->hasFile('imagen_2')){
                    $file=$request->file('imagen_2');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_2=$name;

                    }                                         
                    if ($request->hasFile('imagen_3')){
                    $file=$request->file('imagen_3');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $productos->imagen_3=$name;

                    } 
                     $productos->save();




        return Redirect::to('productos');
    }

    public function destroy($id)

    {  

       $productos=Producto::findOrFail($id);

       $productos->delete();

         return Redirect::to('productos');

    }

public function show($id){

        $productos = Producto::findOrFail($id);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);


          return view('productos.show', compact('productos','cantidad_carrito','inicio'));
            
        }

  public function tipo($tipos)
    {
        $tipo=$tipos;
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);


        return view('productos.create', compact('tipo','cantidad_carrito','inicio'));
    }    

 
}
