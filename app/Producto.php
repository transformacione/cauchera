<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];


    public function scopeMarca($query, $marca){
    	if($marca)
    		return $query->where('marca','LIKE',"%$marca%");
    }

    public function scopeAncho($query, $ancho){
    	if($ancho)
    		return $query->where('ancho','LIKE',"%$ancho%");
    }

    public function scopeDiametro($query, $diametro){
    	if($diametro)
    		return $query->where('diametro','LIKE',"%$diametro%");
    }

    public function scopePerfil($query, $perfil){
    	if($perfil)
    		return $query->where('perfil','LIKE',"%$perfil%");
    }
}
