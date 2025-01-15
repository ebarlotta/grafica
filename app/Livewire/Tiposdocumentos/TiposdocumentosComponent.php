<?php

namespace App\Livewire\Tiposdocumentos;

use App\Models\Tipodocumento;
use Livewire\Component;

class TiposdocumentosComponent extends Component
{
    public $tipos;

    public function render()
    {
        $this->tipos = Tipodocumento::all(); // where('activo','=',true)->get();
        return view('livewire.tiposdocumentos.tiposdocumentos-component')->extends('adminlte::page');
    }
}
