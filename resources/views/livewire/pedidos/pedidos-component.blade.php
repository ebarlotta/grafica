<div>    
    @if (session()->has('message'))
        <div class="rounded-md bg-gren-300 px-6 py-1 mx-2 mt-3" role="alert" style="background-color: lightgreen;">
            {{ session('message') }}
        </div>
    @endif

    <table class="" style="width: 100%">
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
                            <a href="{{ 'storage/' . substr($pedido->archivo,7) }}" target="_blank"><button class="hidden lg:flex bg-blue-300 hover:bg-blue-400 text-black-900 font-bold py-2 px-4 mr-2 rounded">Descargar</button></a>
                            <button class="hidden lg:flex bg-blue-300 hover:bg-blue-400 text-black-900 font-bold py-2 px-4 mr-2 rounded" wire:click="CargarDatos({{ $pedido->id }})">Datos útiles de impresión</button>
                            <button type="button" class="btn btn-primary" wire:click="CargarEstado({{ $pedido->id }})">Cambiar Estado</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Nuevo
        </x-slot>
        <x-slot name="content">
            <select class="form-control" wire:model="estados_id" >
                @foreach($estados as $estado)
                    <option {{ $estado->id }}>{{$estado->name}}</option>
                @endforeach
            </select>
        </x-slot>
        <x-slot name="footer">
            <x-button class="btn btn-success" wire:click="CambiarEstado()">Cambiar</x-button>
            <x-button  class="btn btn-info" wire:click="OcultarCambioEstado()">Cerrar</x-button>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model="datos">
        <x-slot name="title">
            Datos del Trabajo
        </x-slot>
        <x-slot name="content">
            <x-label value="nombre">{{ $nombre }}"></x-label>
            <x-label value="telefono: {{ $telefono }}"></x-label>
            <x-label value="direccion: {{ $direccion }}"></x-label>
            <x-label value="dni: {{ $dni }}"></x-label>
            <x-label value="cuit: {{ $cuit }}"></x-label>
            <x-label value="institucion: {{ $institucion }}"></x-label>
            <x-label value="email: {{ $email }}"></x-label>
            <x-label value="cantidadhojas: {{ $cantidadhojas }}"></x-label>
            <x-label value="tipodeimpresion: {{ $tipodeimpresion }}"></x-label>
            <x-label value="tamanopapel: {{ $tamanopapel }}"></x-label>
            <x-label value="tipodepapel: {{ $tipodepapel }}"></x-label>
            <x-label value="frentedorso: {{ $frentedorso }}"></x-label>
            <x-label value="cantidadejemplares: {{ $cantidadejemplares }}"></x-label>
            <x-label value="retiraenlocal: {{ $retiraenlocal }}"></x-label>
            <x-label value="lugardeentrega: {{ $lugardeentrega }}"></x-label>
            <x-label value="geoposicion: {{ $geoposicion }}"></x-label>
            <x-label value="costoaprox: {{ $costoaprox }}"></x-label>
        </x-slot>
        <x-slot name="footer">
            <x-button  class="btn btn-info" wire:click="OcultarDatos()">Cerrar</x-button>
        </x-slot>
    </x-dialog-modal>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <p>
                <select class="form-control" wire:model="estados_id" >
                    @foreach($estados as $estado)
                        <option {{ $estado->id }}>{{$estado->name}}</option>
                    @endforeach
                </select>
            </p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" wire:click="CambiarEstado()">Save changes</button>
            <input type="button" class="btn btn-info" value="Grabar" wire:click="CambiarEstado()">
            </div>
        </div>
        </div>
    </div> --}}
    
</div>
