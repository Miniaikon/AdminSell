<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = "productos";
    protected $fillable = [
        'nombre_producto', 'costo_producto',
    ];
}
