<?php

namespace App\Livewire\Pedidos;

use App\Models\Estado;
use App\Models\Pedido;

use Livewire\Component;
class PedidosComponent extends Component
{
    public $pedidos, $CambioEstado, $estado_id, $estados_id, $estados, $pedido_id, $pedido_name;

    public $nombre, $telefono, $direccion, $dni, $cuit, $institucion, $email, $cantidadhojas, $tipodeimpresion, $tamanopapel, $tipodepapel, $frentedorso, $cantidadejemplares, $retiraenlocal, $lugardeentrega, $geoposicion, $costoaprox;

    public $open=false, $datos=false;

    // public $principal=true, $soycliente, $primeravez;

    public function render()
    {
        $this->estados = Estado::all();
        $this->pedidos = Pedido::orderby('created_at','DESC')->get();
        return view('livewire.pedidos.pedidos-component')->extends('layouts.app');
        // return view('livewire.pedidos.pedidos-component')->extends('adminlte::page');
    }

public function CargarEstado($id) {
    $this->open = true;
    $pedido = Pedido::find($id);
    // $pedido = Pedido::find($this->pedido_id);
    $this->pedido_id = $id;
    // dd($pedido);
    $this->pedido_name = $pedido->nombre;
    // $pedido = Pedido::find($id);
    // $pedido->pedido_id = $pedido->estado_id;
    // $this->MostrarCambioEstado();
}

public function CargarDatos($id) {
    $this->datos = true;
    $pedido = Pedido::find($id);
    $this->nombre = $pedido->nombre;
    $this->telefono = $pedido->telefono;
    $this->direccion = $pedido->direccion;
    $this->dni = $pedido->dni;
    $this->cuit = $pedido->cuit;
    $this->institucion = $pedido->institucion;
    $this->email = $pedido->email;
    $this->cantidadhojas = $pedido->cantidadhojas;
    $this->tipodeimpresion = $pedido->tipodeimpresion;
    $this->tamanopapel = $pedido->tamanopapel;
    $this->tipodepapel = $pedido->tipodepapel;
    $this->frentedorso = $pedido->frentedorso;
    $this->cantidadejemplares = $pedido->cantidadejemplares;
    $this->retiraenlocal = $pedido->retiraenlocal;
    $this->lugardeentrega = $pedido->lugardeentrega;
    $this->geoposicion = $pedido->geoposicion;
    $this->costoaprox = $pedido->costoaprox;

}

public function CambiarEstado() {
    $estado = Estado::where('name','=',$this->estados_id)->get();
// dd($estado);
    $pedido = Pedido::find($this->pedido_id);
    $pedido->estado_id = $estado[0]->id;
    $pedido->save();
    $this->OcultarCambioEstado();

    $this->open=false;
}

public function MostrarCambioEstado() { $this->CambioEstado = true; }
public function OcultarCambioEstado() { $this->open=false; $this->CambioEstado = false;  }
public function OcultarDatos() { $this->datos=false; }

    // public function MostrarSoyCliente() { $this->soycliente = true; }
    // public function OcultarSoyCliente() { $this->soycliente = false; }

    // public function MostrarPrimeraVez() { $this->primeravez = true; }
    // public function OcultarPrimeraVez() { $this->primeravez = false; }

    // public function MostrarPrincipal() { $this->principal = true; }
    // public function OcultarPrincipal() { $this->principal = false; }



}
