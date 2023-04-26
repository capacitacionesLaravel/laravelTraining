<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    
    protected $fillable = [ 
        'identificacion',
        'usuario',
        'descripcion',
        'precio',
        'fecha_entrega',
        'tienda'
    ];
    
}
