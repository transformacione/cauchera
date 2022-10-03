<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\General;

$factory->define(General::class, function (Faker $faker) {
    return [
        'logo' => 'caucho.png',
        'banner' => '1599282559firestone.png',
        'pregunta_twitter' => 'NO',
    	'pregunta_instagram'=> 'SI',
    	'pregunta_facebook' => 'SI',
    	'pregunta_whatsapp' => 'SI',
        'pregunta_tiktok' => 'SI',
    	'twitter' => $faker->name,
    	'instagram' => 'https://www.instagram.com/juancaucho2018/',
    	'whatsapp' => 'https://api.whatsapp.com/send?phone=584141978215&text=&source=&data=&app_absent=',
    	'facebook' => 'https://www.facebook.com/JUAN-Caucho-2018-CA-110198903916526/',
        'tiktok' => 'https://vm.tiktok.com/ZSPxqKU3/',
    	'pregunta_contactanos' => 'SI',
    	'contactanos' => '(0212-632-8106) / (0414-197-8215) / (0412-900-5163)',
    	'icono_carrito' => 'carro.png',
       

        'usuario_creador' => $faker->name,
    	'usuario_editor' => $faker->name,
    	'fecha_creacion' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'fecha_edicion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
