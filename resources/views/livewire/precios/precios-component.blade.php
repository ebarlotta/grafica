<div>
    <h1>Administrar Precios</h1>

    <div>
        @if (session()->has('message'))
            <div class="rounded-md bg-gren-300 px-6 py-1 mx-2 mt-3" role="alert" style="background-color: lightgreen;">
                {{ session('message') }}
            </div>
        @endif
    
        <div class="d-flex flex-wrap">
            <div class="col-12" style="display: grid;">
                <label for="">Sistema de Impresión</label>

                <table class="table table-bordered">
                    <tr>
                        <th class="bg-grey">Sistema</th>
                        <th class="bg-grey">Factor</th>
                        <th class="bg-grey">Opciones</th>
                    </tr>
                    @foreach ($sistemas as $sistema)
                        <tr>
                            <td>{{ $sistema->sistema }}</td>
                            <td>{{ $sistema->factor }}</td>
                            <td>Opciones</td>
                        </tr>    
                        {{-- <option value="{{ $sistema->factor }}">{{ $sistema->sistema }}</option> --}}
                    @endforeach
                </table>

                {{-- <select wire:model="sistema_id">
                    <option value="">-- Seleccione un sistema</option>
                    @foreach ($sistemas as $sistema)
                        <option value="{{ $sistema->factor }}">{{ $sistema->sistema }}</option>
                    @endforeach
                </select> --}}
            </div>
            <div class="col-12" style="display: grid;">
                <label for="">Lados</label>
                
                <table class="table table-bordered">
                    <tr>
                        <td class="bg-grey">Lados</td>
                        <td class="bg-grey">Factor</td>
                        <td class="bg-grey">Opciones</td>
                    </tr>
                    @foreach ($lados as $lado)
                        <tr>
                            <td>{{ $lado->lados }}</td>
                            <td>{{ $lado->factor }}</td>
                            <td>Opciones</td>
                        </tr>    
                        {{-- <option value="{{ $sistema->factor }}">{{ $sistema->sistema }}</option> --}}
                    @endforeach
                </table>
                {{-- <select wire:model="lado_id">
                    <option value="">-- Seleccione un lado</option>
                    @foreach ($lados as $lado)
                        <option value="{{ $lado->factor }}">{{ $lado->lados }}</option>
                    @endforeach
                </select> --}}
            </div>
    
            <div class="col-12" style="display: grid;">
                <label for="">Tipo y gramaje de papeles</label>

                <table class="table table-bordered">
                    <tr>
                        <td class="bg-grey">Tamano de Papel</td>
                        <td class="bg-grey">Gramaje</td>
                        <td class="bg-grey">Precio</td>
                        <td class="bg-grey">Opciones</td>
                    </tr>
                    @foreach ($gramajes as $gramaje)
                        <tr>
                            <td>{{ $gramaje->tamano_papel }}</td>
                            <td>{{ $gramaje->gramaje }}</td>
                            <td>{{ $gramaje->precio }}</td>
                            <td>Opciones</td>
                        </tr>    
                        {{-- <option value="{{ $sistema->factor }}">{{ $sistema->sistema }}</option> --}}
                    @endforeach
                </table>
                
                {{-- <select wire:model="lado_id">
                    <option value="">-- Seleccione un gramaje</option>
                    @foreach ($gramajes as $gramaje)
                        <option value="{{ $gramaje->factor }}">{{ $gramaje->gramaje }} - {{ $gramaje->tamano_papel }}</option>
                    @endforeach
                </select> --}}
            </div>
    
        </div>
    </div>
    
    {{-- <form method="post">
        <input type="text" name="tipo_documento" placeholder="Tipo de Documento" required>
        <input type="number" step="0.01" name="precio_base" placeholder="Precio Base" required>
        <button type="submit" name="crear_precio">Crear</button>
    </form>
    <table border="1">
        <tr>
            <th>Tipo de Documento</th>
            <th>Precio Base</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <form method="post">
                <td><input type="text" name="tipo_documento" value=""></td>
                <td><input type="number" step="0.01" name="precio_base" value=""></td>
                <td>
                    <button type="submit" name="actualizar_precio">Actualizar</button>
                    <button type="submit" name="eliminar_precio">Eliminar</button>
                    <input type="hidden" name="id" value="">
                </td>
            </form>
        </tr>
    </table> --}}
</div>
