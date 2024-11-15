<?php

namespace App\Livewire\Enviar;

use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnviarComponent extends Component
{
    use WithFileUploads;
    
    public $cliente;
    public $nombre;
    public $telefono;
    public $direccion;
    public $dni;
    public $cuit;
    public $institucion;
    public $email;
    public $archivo;
    public $photo;
    public $cantidadhojas;
    public $tipodocumento;
    public $tamanopapel;
    public $tipodepapel;
    public $tipodeimpresion;
    public $frentedorso;
    public $cantidadejemplares;
    public $retiraenlocal;
    public $geoposicion;
    public $observaciones;
    public $costoaprox;

    public function render()
    {
        return view('livewire.enviar.enviar-component')->extends('adminlte::page');
    }

    public function save() {
        // $this->validate([
        //     'photo' => 'image|max:1024', // 1MB Max
        // ]);
        $pedidos = Pedido::create([
            'cliente_id' => 3, // $this->cliente,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
            'dni' => $this->dni,
            'cuit' => $this->cuit,
            'institucion' => $this->institucion,
            'email' => $this->email,
            'archivo' => $this->photo->store('photos'),
            'cantidadhojas' => $this->cantidadhojas,
            'tipodocumento' => 1, //$this->tipodocumento,
            'tipodeimpresion' => $this->tipodeimpresion,
            'tamanopapel' => $this->tamanopapel,
            'tipodepapel' => $this->tipodepapel,
            'frentedorso' => $this->frentedorso,
            'cantidadejemplares' => $this->cantidadejemplares,
            'retiraenlocal' => 1, // $this->retiraenlocal,
            'geoposicion' => 1, //$this->geoposicion,
            'observaciones' => '', //$this->observaciones,
            'costoaprox' =>2625,
        ]);
        // dd($pedidos);
    }
}
