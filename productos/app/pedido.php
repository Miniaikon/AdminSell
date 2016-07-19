<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
	protected $table = "pedido";
    protected $fillable = [
        'nombre_producto', 'cantidad', 'costo_unitario', 'costo_total', 'precio_ventas', 'ganancias',
    ];
}
