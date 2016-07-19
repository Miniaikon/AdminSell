<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class saldo extends Model
{
	protected $table = "saldo";
    protected $fillable = [
        'saldo',
    ];
}
