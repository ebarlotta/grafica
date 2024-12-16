<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido as Pedidos;
use App\Models\Estado;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable=[
        'cliente_id',
        'nombre',
        'telefono',
        'direccion',
        'dni',
        'cuit',
        'institucion',
        'email',
        'archivo',
        'cantidadhojas',
        'tipodeimpresion',
        'tipodocumento',
        'estado_id',
        'tamanopapel',
        'tipodepapel',
        'frentedorso',
        'cantidadejemplares',
        'retiraenlocal',
        'lugardeentrega',
        'geoposicion',
        'observaciones',
        'costoaprox',
    ];

    public function estado() {
        return $this->hasOne(Estado::class,'id','estado_id');
    }
}
