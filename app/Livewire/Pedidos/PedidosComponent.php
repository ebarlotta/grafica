<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;

class PedidosComponent extends Component
{
    public $principal=true, $soycliente, $primeravez;
    public function render()
    {
        return view('livewire.pedidos.pedidos-component')->extends('adminlte::page');
    }

    public function MostrarSoyCliente() { $this->soycliente = true; }
    public function OcultarSoyCliente() { $this->soycliente = false; }

    public function MostrarPrimeraVez() { $this->primeravez = true; }
    public function OcultarPrimeraVez() { $this->primeravez = false; }

    public function MostrarPrincipal() { $this->principal = true; }
    public function OcultarPrincipal() { $this->principal = false; }
}
