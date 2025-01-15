<?php

namespace App\Livewire\Precios;

use App\Livewire\Pepeles\PepelesComponent;
use App\Models\lado;
use App\Models\papel;
use App\Models\sistema_impresion;
use Livewire\Component;

class PreciosComponent extends Component
{
    public $sistemas, $lados, $gramajes;

    public function render()
    {
        $this->sistemas = sistema_impresion::where('activo',true)->get();
        $this->lados = lado::where('activo',true)->get();
        $this->gramajes = papel::where('activo',true)->get();
        return view('livewire.precios.precios-component')->extends('adminlte::page');
    }
}
