<?php

namespace App\Livewire\Pedidos;

use Livewire\Component;

class PedidosComponent extends Component
{
    public function render()
    {
        return view('livewire.pedidos.pedidos-component')->extends('adminlte::page');
    }
}
