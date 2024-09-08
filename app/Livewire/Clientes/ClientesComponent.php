<?php

namespace App\Livewire\Clientes;

use Livewire\Component;
use App\Models\Cliente;
use Livewire\WithPagination;

class ClientesComponent extends Component
{
    // public $clientes_list;
    public $cliente_id, $nombre, $email, $telefono, $direccion, $geoposicion, $organizacion;
    
    use WithPagination;

    public function render()    
    {
        $clientes_list = Cliente::ORDERBy('nombre')->paginate(5);
        // $this->clientes_list = Cliente::ORDERBy('nombre')->paginate(15);
        return view('livewire.clientes.clientes-component',['clientes_list'=>$clientes_list,])->extends('adminlte::page');
    }

    public function ShowNew() { $this->reset('nombre', 'email', 'telefono', 'direccion', 'geoposicion', 'organizacion'); }
    public function ShowUpdate($id) { 
        if($id==0) return 0;
        $cliente = Cliente::find($id);
        $this->nombre = $cliente->nombre;
        $this->email = $cliente->email;
        $this->telefono = $cliente->telefono;
        $this->direccion = $cliente->direccion;
        $this->geoposicion = $cliente->geoposicion;
        $this->organizacion = $cliente->organizacion;   
        $this->cliente_id = $id; 
    }

    public function HideUpdate() { $this->cliente_id = null; }
    public function ShowDelete($id) { $cliente = Cliente::find($id); $this->nombre = $cliente->nombre; $this->cliente_id = $id; }
    public function HideDelete() { $this->cliente_id = null; }

    public function store()
    {
        $this->validate([
            'nombre' => 'required|max:255',
            'email' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'geoposicion' => 'required',
            'organizacion' => 'required',
        ]);
        Cliente::updateOrCreate(['id' => $this->cliente_id], [
            'nombre' => $this->nombre,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'direccion' => $this->direccion,
            'geoposicion' => $this->geoposicion,
            'organizacion' => $this->organizacion,
        ]);
        $this->cliente_id = null;
        session()->flash('mensaje', 'Se guardó el Cliente.');
    }

    public function destroy($id)
    {
        Cliente::find($id)->delete();
        session()->flash('message', 'Cliente Eliminado.');
    }
}
