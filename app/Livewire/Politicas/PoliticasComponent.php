<?php

namespace App\Livewire\Politicas;

use Livewire\Component;

class PoliticasComponent extends Component
{
    public function render()
    {
        return view('livewire.politicas.politicas-component')->extends('layouts.app');
    }
}
