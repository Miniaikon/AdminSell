<?php

namespace Productos;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = "note";
    protected $fillable = [
        'nota',
    ];
}
