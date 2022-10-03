<?php 

use App\User;

function buscar_usuario($id){

	$usuario = User::findOrFail($id);

	return $usuario->name;

}