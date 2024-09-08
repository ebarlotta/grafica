<div>
<div class="d-flex">
    <h1>Clientes</h1>
    {{-- @if(session('Clientes.Editar')) --}}
    <div class="sm:flex justify-center">
        <!-- Editar  -->
        <input class="form-control rounded-md btn btn-info" type="button" wire:click="ShowUpdate(0)" data-toggle="modal" data-target="#ModalNewUpdate" value="Agregar">
        {{-- <x-editar id="{{ $cliente->id }}"></x-editar> --}}
    </div>
    {{ $clientes_list->links() }}
    {{-- @endif --}}

    {{-- <div class="input-group mb-3 col-xl-6">
        <div class="input-group-prepend">
            <button type="button" class="btn btn-info">Tipo</button>
        </div>
        <input type="text" class="form-control">
    </div> --}}
</div>


<table class="table-fixed table-striped w-full">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">E-Mail</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Teléfono</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Dirección</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Geoposición</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Organización</th>
            <th class="px-4 py-2">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($clientes_list)
            @foreach ($clientes_list as $cliente)
                <tr>
                    <td class="border px-4 py-2 text-left">{{ $cliente->nombre }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->email }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->telefono }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->direccion }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->geoposicion }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->organizacion }}</td>
                    <td class="border px-4 py-2">
                        <div class="d-flex justify-center">
                            {{-- @if(session('Clientes.Eliminar')) --}}
                            <div class="sm:flex justify-center">
                                <!-- Eliminar -->
                                <input class="form-control rounded-md btn btn-warning" type="button" wire:click="ShowUpdate({{ $cliente->id }})" value="Modificar" data-toggle="modal" data-target="#ModalNewUpdate">
                                {{-- <x-eliminar id="{{ $cliente->id }}"></x-eliminar> --}}
                            </div>
                            <div class="sm:flex justify-center">
                                    <!-- Eliminar -->
                                    <input class="form-control rounded-md btn btn-danger" type="button" wire:click="ShowDelete({{ $cliente->id}})" value="Eliminar" data-toggle="modal" data-target="#ModalDelete">
                                    {{-- <x-eliminar id="{{ $cliente->id }}"></x-eliminar> --}}
                                </div>
                            {{-- @endif --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


<!-- Modal NuevoActualizar Cliente -->
<!-- ====================== -->
<div wire:ignore.self class="modal fade" id="ModalNewUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content" style="width: inherit">
            <div class="modal-header">
                <h5 class="modal-title">Nuevo / Actualizar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="px-3 py-3">
                <div>
                    <div class="col-12 d-flex">
                        <label for="">Nombre</label>
                        <input wire:model="nombre" type="text" class="form-control rounded-md" placeholder="nombre" >
                        @error('nombre') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12 d-flex">
                        <label for="">email</label>
                        <input wire:model="email" type="text" class="form-control rounded-md" placeholder="email" >
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12 d-flex">
                        <label for="">telefono</label>
                        <input wire:model="telefono" type="text" class="form-control rounded-md" placeholder="telefono" >
                        @error('telefono') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12 d-flex">
                        <label for="">direccion</label>
                        <input wire:model="direccion" type="text" class="form-control rounded-md" placeholder="direccion" >
                        @error('direccion') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12 d-flex">
                        <label for="">geoposicion</label>
                        <input wire:model="geoposicion" type="text" class="form-control rounded-md" placeholder="geoposicion" >
                        @error('geoposicion') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12 d-flex">
                        <label for="">organizacion</label>
                        <input wire:model="organizacion" type="text" class="form-control rounded-md" placeholder="organizacion" >
                        @error('organizacion') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="pt-3">
                    <button type="button" class="btn btn-info" wire:click="store()">
                        <i class="fa-solid fa-pen-to-square"></i>Guardar
                    </button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-pen-to-square"></i>Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Eliminar Cliente -->
<!-- ====================== -->
<div wire:ignore.self class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content" style="width: inherit">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="px-3 py-3">
                <div>
                    <div>Está seguro de que quiere eliminar al cliente <b>{{ $nombre }}</b>?</div>
                </div>
                <div class="pt-3">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click="destroy({{ $cliente_id }})">
                        <i class="fa-solid fa-pen-to-square"></i>Eliminar
                    </button>
                    <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-pen-to-square"></i>Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>