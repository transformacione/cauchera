<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
       	'categoria' => $faker->randomElement($array = array ('Cauchos', 'Accesorios')),
        'nombre' => $faker->name,
    	'descripcion' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    	'precio_dolar' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100000, $max = 5000000),
    	'inventario' =>  $faker->numberBetween($min = 1, $max = 100),
        'marca' =>  $faker->randomElement($array = array ('Firestone', 'Dunlop', 'GoodYear', 'Khumo')),
        'ancho' =>  $faker->randomElement($array = array ('60', '70', '80')),
        'diametro' =>  $faker->randomElement($array = array ('13', '14', '15')),
        'perfil' =>  $faker->randomElement($array = array ('Bajo', 'Medio', 'Alto')),
        'imagen_1' => 'caucho_1.jpg',
        'imagen_2' => 'cauchos.png',
        'imagen_3' => 'casa.png',
        'destacado' => 'Si',


        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now') 
    ];
});
