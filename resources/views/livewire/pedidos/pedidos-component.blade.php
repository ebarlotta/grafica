<div>
    @if (session()->has('message'))
        <div class="rounded-md bg-gren-300 px-6 py-1 mx-2 mt-3" role="alert" style="background-color: lightgreen;">
            {{ session('message') }}
        </div>
    @endif

<table class="table table-flex table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>lugardeentrega</th>
            <th>Propietario</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido) 
            <tr 
            @if($pedido->estado->name=='Recibido') style="background-color: coral;" @endif
            @if($pedido->estado->name=='En proceso') style="background-color: yellow;" @endif
            @if($pedido->estado->name=='Impreso') style="background-color: green;" @endif
            @if($pedido->estado->name=='Para Enviar') style="background-color: lightsalmon;" @endif
            @if($pedido->estado->name=='Entregado') style="background-color: lightgreen;" @endif

            >
                <td>{{ date_format($pedido->created_at,'d-m-Y')  }}</td>
                <td>{{ $pedido->lugardeentrega }}</td>
                <td>{{ $pedido->nombre }}</td>
                <td>{{ $pedido->estado->name }}</td>
                <td>
                    <div class="flex justify-center">
                        <a href="{{ 'storage/' . substr($pedido->archivo,7) }}" target="_blank">
                            {{-- <a href="{{ asset('storage/app/'.$pedido->archivo) }}"> --}}
                        <!-- Desde 640 en adelante -->
                        <button class="hidden lg:flex bg-blue-300 hover:bg-blue-400 text-black-900 font-bold py-2 px-4 mr-2 rounded">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg> --}}
                            Descargar
                        </button>
                        <button class="hidden lg:flex bg-blue-300 hover:bg-blue-400 text-black-900 font-bold py-2 px-4 mr-2 rounded">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg> --}}
                            Datos útiles de impresión
                        </button>
                        <!-- Menos 640 en adelante -->
                        <button class="lg:hidden bg-blue-300 hover:bg-blue-400 text-black-900 font-bold py-1 px-1 mt-1 rounded">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg> --}}
                        </button>
                        </a>
                        <div>
                            <button class="btn btn-info" wire:click="CargarEstado({{ $pedido->id }})">Cambiar Estado</button>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>
    Estado: {{ $estados_id }}
</div>
    @if($CambioEstado==true)      
        
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ $pedido_name }} </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" wire:click="OcultarCambioEstado()"></button>
            </div>
            <div class="modal-body">
              <p>
                <select wire:model="estados_id" >
                    @foreach($estados as $estado)
                        <option {{ $estado->id }}>{{$estado->name}}</option>
                    @endforeach
                </select>
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="OcultarCambioEstado()">Cerrar</button>
              <button type="button" class="btn btn-primary" wire:click="CambiarEstado()">Cambiar</button>
            </div>
          </div>
        </div>
      </div>
      
    @endif
    
    </div>
