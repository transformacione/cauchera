<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table='mensajes'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];
}
