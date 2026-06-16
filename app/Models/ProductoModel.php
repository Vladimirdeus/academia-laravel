<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoModel extends Model
{
     use SoftDeletes;

    protected $fillable = [
        'codigo',
        'descripcion',
        'precio',
        'cantidad',
    ];
}
