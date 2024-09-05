<div>
    <div class="input-group mb-3 col-xl-6">
        <div class="input-group-prepend">
            <button type="button" class="btn btn-info">Tipo</button>
        </div>
        <input type="text" class="form-control">
    </div>
</div>


<table class="table-fixed table-striped w-full">
    <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Dirección</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Cuil</th>
            <th class="px-4 py-2 hidden md:table-cell md:visible">Teléfono</th>
            <th class="px-4 py-2">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @if ($clientes)
            @foreach ($clientes as $cliente)
                <tr>
                    <td class="border px-4 py-2 text-left">{{ $cliente->name }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->direccion }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->cuil }}</td>
                    <td class="border px-4 py-2 text-left hidden md:table-cell md:visible">{{ $cliente->telefono }}</td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center">
                            @if(session('Clientes.Editar'))
                                <div class="sm:flex justify-center">
                                    <!-- Editar  -->
                                    <x-editar id="{{ $cliente->id }}"></x-editar>
                                </div>
                            @endif
                            @if(session('Clientes.Eliminar'))
                                <div class="sm:flex justify-center">
                                    <!-- Eliminar -->
                                    <x-eliminar id="{{ $cliente->id }}"></x-eliminar>
                                </div>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table> 