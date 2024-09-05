<?php

use App\Livewire\Clientes\ClientesComponent;
use App\Livewire\Convenios\ConveniosComponent;
use App\Livewire\Estados\EstadosComponent;
use App\Livewire\Pedidos\PedidosComponent;
use App\Livewire\Precios\PreciosComponent;
use App\Livewire\Tiposdocumentos\TiposdocumentosComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/estados', EstadosComponent::class)->name('estados');
Route::get('/convenios', ConveniosComponent::class)->name('convenios');
Route::get('/pedidos', PedidosComponent::class)->name('pedidos');
Route::get('/clientes', ClientesComponent::class)->name('clientes');
Route::get('/precios', PreciosComponent::class)->name('precios');
Route::get('/tiposdocumentos', TiposdocumentosComponent::class)->name('tiposdocumentos');
