<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre_institucion',
        'fecha_creacion',
        'descuento_porcentaje',
    ];

}
