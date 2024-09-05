<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable=[
        'cliente',
        'nombre',
        'email',
        'telefono',
        'direccion',
        'geoposicion',
        'tipo_documento',
        'cantidad_hojas',
        'frente_dorso',
        'cantidad_ejemplares',
        'archivo',
    ];
}
