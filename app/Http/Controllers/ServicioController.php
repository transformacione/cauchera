<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServicioRequest;
use App\Servicio;
use App\General;
use Cart;
use DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function index()
    {
    	$servicios = Servicio::paginate(20);

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('servicios.index', compact('servicios','cantidad_carrito','inicio'));
    }

    public function edit($id)

    {   

         $servicios=Servicio::findOrFail($id);

         $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);
     
         return view('servicios.edit', compact('servicios','cantidad_carrito','inicio'));

        }

  public function update(ServicioRequest $request, $id)
    {
            try {
                 DB::beginTransaction();

                    $servicios=Servicio::findOrFail($id);

        			$input = $request->all();

        			$servicios->fill($input)->save();


                    $user = Auth::user()->name;
                    $servicios->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $servicios->fecha_edicion=$date->toDateTimeString();               

                    if ($request->hasFile('imagen')){
                    $file=$request->file('imagen');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $servicios->imagen=$name;

                    } 

                    if ($request->hasFile('icono')){
                    $file=$request->file('icono');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $servicios->icono=$name;

                    } 
                    

                    $servicios->save(); 


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            } 

        return Redirect::to('servicios');


    }    

     public function create()
    {           

        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }

        $inicio = General::findOrFail(1);

        return view('servicios.create','cantidad_carrito','inicio');

        }


     public function store(ServicioRequest $request)
    {

        try {
                 DB::beginTransaction();

                    $servicios=new Servicio($request->all());

                     $user = Auth::user()->name;
                     $servicios->usuario_creador=$user;
                     $date = Carbon::now('America/Caracas');
                     $servicios->fecha_creacion=$date->toDateTimeString();    

                     $user = Auth::user()->name;
                     $servicios->usuario_editor=$user;
                     $date = Carbon::now('America/Caracas');
                     $servicios->fecha_edicion=$date->toDateTimeString();        

                    if ($request->hasFile('imagen')){
                    $file=$request->file('imagen');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $servicios->imagen_1=$name;

                    } 


                     $servicios->save();


                 DB::commit();

            }catch (\Exception $e) {

                 \DB::rollBack();

                 return Redirect::back();
 
            }

        return Redirect::to('servicios');
    }

    public function destroy($id)

    {  

       $servicios=Servicio::findOrFail($id);

       $servicios->delete();

         return Redirect::to('servicios');

    }


}
