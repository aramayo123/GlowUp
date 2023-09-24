<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    use HasFactory;
    protected $table = 'promociones';

    
    protected $fillable = [
        'nombre_promocion',
        'id_servicio',
        'precio_promocion',
        'precio_oferta_promocion',
    ];
}
