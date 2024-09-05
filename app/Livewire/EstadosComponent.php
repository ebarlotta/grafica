<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Estado;

class EstadosComponent extends Component
{
    public $estado_lista;
    public $name, $active;

    public function render()
    {
        $this->estado_lista = Estado::all();
        // $this->estado_lista = Estado::all();
        // @extends('adminlte::page')
        return view('livewire.estados')->extends('adminlte::page');
    }

    public function Guardar() {
        $this->validate([
            'name' => 'required',
            'active' => 'required|integer',
        ]);
    }
}
