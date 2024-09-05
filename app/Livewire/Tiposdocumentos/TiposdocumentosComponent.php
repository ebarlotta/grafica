<?php

namespace App\Livewire\Tiposdocumentos;

use Livewire\Component;

class TiposdocumentosComponent extends Component
{
    public function render()
    {
        return view('livewire.tiposdocumentos.tiposdocumentos-component')->extends('adminlte::page');
    }
}
