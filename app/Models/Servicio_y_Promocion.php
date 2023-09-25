<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio_y_Promocion extends Model
{
    use HasFactory;
    protected $table = 'servicios_y_promociones';

    protected $fillable = [
        'id_servicio',
        'id_promocion',
        'active',
        'already_modify'
    ];
    
}
