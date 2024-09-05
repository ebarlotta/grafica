<div>
    <div class="container">
        <h1 class="text-center">Subida de Archivos</h1>


        <table class="table table-striped">
            <tr><td>Nombre</td><td>Activo</td></tr>
            @if($estado_lista) 
                @foreach ($estado_lista as $estado)
                    <tr><td>{{ $estado->name}}</td><td>{{ $estado->active}}</td></tr>
                @endforeach
            @else
                No hay estados configurados
            @endif
        </table>
        <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" wire:model="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Activo</label>
                <input type="checkbox" wire:model="active">
            </div>
            <button type="submit" class="btn btn-primary" wire:click="Guardar();">Agregar Estado</button>
        </form>
    </div>
</div>
