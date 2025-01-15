<div>
    @if (session()->has('message'))
        <div class="rounded-md bg-gren-300 px-6 py-1 mx-2 mt-3" role="alert" style="background-color: lightgreen;">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex">
        <div class="col-6 grid">
            <label for="">Sistema de Impresión</label><br>

            <select wire:model="sistema_id">
                <option value="">-- Seleccione un sistema</option>
                @foreach ($sistemas as $sistema)
                    <option value="{{ $sistema->factor }}">{{ $sistema->sistema }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6">
            <label for="">Lados</label>
            <select wire:model="lado_id">
                <option value="">-- Seleccione un lado</option>
                @foreach ($lados as $lado)
                    <option value="{{ $lado->factor }}">{{ $lado->lados }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-6">
            <label for="">Tipo y gramaje de papeles</label>
            <select wire:model="lado_id">
                <option value="">-- Seleccione un gramaje</option>
                @foreach ($gramajes as $gramaje)
                    <option value="{{ $gramaje->factor }}">{{ $gramaje->gramaje }} - {{ $gramaje->tamano_papel }}</option>
                @endforeach
            </select>
        </div>

    </div>
</div>
