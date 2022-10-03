<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\OrdenCompra;

$factory->define(OrdenCompra::class, function (Faker $faker) {
	
    return [
        
    	'total' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 3000000, $max = 3000000000),
        'forma_pago' => $faker->randomElement($array = array ('A Convenir', 'Paypal', 'Efectivo')),
        'nombre' => $faker->name,
        'ci' => $faker->name,
        'tlf' => $faker->name,
        'llave' => $faker->name,
        'direccion' => $faker->name,
        'status' => $faker->randomElement($array = array ('Solicitado', 'Entregado', 'Anulado')),  
        'usuario_id' => 1, 

   

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
