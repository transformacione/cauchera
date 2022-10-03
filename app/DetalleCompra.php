<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table='detalle_compras'; 

    protected $primaryKey='id'; 

    public $timestamps=false; 
    
    protected $guarded =[  ];
}
