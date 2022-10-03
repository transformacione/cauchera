<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\GeneralRequest;
use App\General;
use DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Cart;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    

    public function edit($id)

    {   
        $cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);
     
         return view('general.edit', compact('inicio','cantidad_carrito'));

        }

  public function update(GeneralRequest $request, $id)
    {


                    $general=General::findOrFail($id);

        			$input = $request->all();

        			$general->fill($input)->save();


                    $user = Auth::user()->name;
                    $general->usuario_editor=$user;
                    $date = Carbon::now('America/Caracas');
                    $general->fecha_edicion=$date->toDateTimeString();               

                    if ($request->hasFile('logo')){
                    $file=$request->file('logo');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $general->logo=$name;

                    }  
                    if ($request->hasFile('banner')){
                    $file=$request->file('banner');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $general->banner=$name;

                    }  

                    if ($request->hasFile('icono_carrito')){
                    $file=$request->file('icono_carrito');
                    $cadena=time().$file->getClientOriginalName();
                    $name =str_replace(' ', '', $cadena);
                    $file->move(base_path().'/../img/', $name);
                    $general->icono_carrito=$name;

                    }                    

                    $general->save(); 



        return Redirect::to('home');


    }    

 
}
