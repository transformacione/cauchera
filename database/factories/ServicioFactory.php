<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Servicio;

$factory->define(Servicio::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    	'descripcion' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    	'imagen' => 'filtro.jpg',
    	'icono' => 'alineacion.png',

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
