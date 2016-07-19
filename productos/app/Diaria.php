<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class Diaria extends Model
{
	protected $table = "diaria";
    protected $fillable = [
        'ganancia', 'id_pedido'
    ];
}
