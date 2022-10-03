<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Producto;
use App\Servicio;
use Cart;

class WecolmeController extends Controller
{
        public function index()
    {
    	$general = General::paginate(5);
    	$productos = Producto::paginate(5);
    	$servicios = Servicio::paginate(5);

    	$cantidad_carrito = 0;
        foreach(Cart::content() as $c){
        $cantidad_carrito += $c->qty;
        }
        $inicio = General::findOrFail(1);

        return view('welcome', compact('general', 'productos', 'servicios','cantidad_carrito','inicio' ));
    }
}
