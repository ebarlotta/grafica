<?php

namespace App\Livewire\Clientes;

use Livewire\Component;

class ClientesComponent extends Component
{
    public function render()
    {
        return view('livewire.clientes.clientes-component')->extends('adminlte::page');
    }
}
