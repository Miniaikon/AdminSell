<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class deuda extends Model
{
	protected $table = "cobrar";
    protected $fillable = [
        'nombre_deuda', 'monto_deuda', 'abono_deuda', 'pago',
    ];
}
