<?php 

use App\Producto;

function buscar_nombre_producto($id){

	$producto = Producto::findOrFail($id);

	return $producto->nombre;

}