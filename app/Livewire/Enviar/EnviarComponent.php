<?php

namespace App\Livewire\Enviar;

use App\Models\Pedido;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\sistema_impresion;
use App\Models\lado;
use App\Models\papel;

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

    public $open=false;

    public $sistemas, $lados, $gramajes;

    public function render()
    {

        $this->sistemas = sistema_impresion::where('activo',true)->get();
        $this->lados = lado::where('activo',true)->get();
        $this->gramajes = papel::where('activo',true)->get();

        return view('livewire.enviar.enviar-component')->with('cantidadhojas')->extends('layouts.app');
        // return view('livewire.enviar.enviar-component');
        // return view('livewire.enviar.enviar-component')->extends('adminlte::page');
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
            'estado_id' => 1,
            'archivo' => $this->photo->store('public/photos'),
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
            'costoaprox' =>26225,
        ]);
        if(count($pedidos)) $this->open = true;
        session()->flash('message', 'Pedido Enviado!!!');
        
        $this->reset('archivo','photo','cantidadhojas','tipodocumento','tamanopapel','tipodepapel','tipodeimpresion','frentedorso','cantidadejemplares','retiraenlocal','geoposicion','observaciones','costoaprox');
    }
}
